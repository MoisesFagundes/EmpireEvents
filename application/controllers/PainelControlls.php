<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PainelControlls extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('email');
		$this->load->library('email');
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('my_formulas');
		$this->output->enable_profiler(FALSE);
		error_reporting(0);
		
		$this->load->model('Painel_model');
	
	}
	
	public function cadastro()
	{	
        //Pegar cnpj para verificação
		$cnpj = str_replace(array(".", "/", "-"), "", $this->input->post('cnpj'));
		
		//criando o recurso cURL
		$cr = curl_init();
		 
		//definindo a url de busca 
		curl_setopt($cr, CURLOPT_URL, "http://www.receitaws.com.br/v1/cnpj/{$cnpj}");
		 
		//definindo a url de busca 
		curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
		 
		//definindo uma variável para receber o conteúdo da página...
		$retorno = curl_exec($cr);
		 
		//fechando-o para liberação do sistema.
		curl_close($cr); //fechamos o recurso e liberamos o sistema...
		
		//decodificando o json
		$empresa = json_decode($retorno, true);
		
		if($empresa['status'] != 'ERROR'){
            //Verificar ser empresa está ativa
			if($empresa['situacao'] == "ATIVA"){
				//Pegar dados do formulário
				$cidades = $this->input->post('cidades');
				$cidades = implode(',', $cidades);
				$array = array (
					'nomeempresa' => $this->input->post('nomeempresa') ,
					'cnpj' => $this->input->post('cnpj'),
					'natureza_juridica' => $empresa['natureza_juridica'],
					'porte' => $empresa['porte'],
					'estado' => $this->input->post('estado'),
					'cidades' => $cidades,
					'nome_do_socio' => $this->input->post('nomesocio'),
					'cpf' => $this->input->post('cpf'),
					'email' => $this->input->post('email'),
					'senha' => md5($this->input->post('senha')),
					'telefone' => $this->input->post('telefone'),
					'nota' => 3,
					'status' => 'APROVADO',
					'criado' => date('Y-m-d H:i:s')
				);
				
				//Inserir dados no banco de dados
				$this->Painel_model->inserir_empresa($array);
				
				//Criar sessão
				$session = array (
					'nempresa' => $this->db->insert_id(),
					'localdeatuacao' => $this->input->post('cidades'),
					'mp' => 1,
					'pp' => 1
				);
				
				//Executar sessão
				$this->session->set_userdata($session);
				
				//Criar diretorio pacotes
				$_UP['pacotes'] = 'FrondEnd/img/pacotes/'.$this->db->insert_id();
				mkdir($_UP['pacotes'], 0777);

				//Criar diretorio comprovantes
				$_UP['comprovantes'] = 'FrondEnd/img/comprovantes/'.$this->db->insert_id();
				mkdir($_UP['comprovantes'], 0777);
				
				//Redirecionar
				redirect('Painel', 'location');
				
			}else{
				$this->session->set_flashdata("menssagem", "<div class='alert alert-danger' role='alert'><center>Empresa inativa</center></div>");
				redirect('Cadastro', 'refresh');
			}
        }else{
            $this->session->set_flashdata("menssagem", "<div class='alert alert-danger' role='alert'><center>CNPJ inválido</center></div>");
			redirect('Cadastro', 'refresh');
        }			
		
	}
	
	public function checkpoint()
	{
		//Pegar checkpoint
		$checkpoint = $this->input->post('checkpoint');
		
		//Definir session active
		$this->session->set_userdata('active', $checkpoint);

	}
	
	public function resposta()
	{
		//Pegar dados
		$id = $this->uri->segment(3);
		$resposta = $this->uri->segment(4);
		
		//Alterar situação no banco de dados
		$this->Painel_model->adicionar_resposta($id, $resposta);
		
		//Voltar para o painel
		redirect('Painel', 'refresh');
		
	}
	
	public function modal()
	{
		//Pegar id do evento
		$id = $this->input->post('id');
		
		//Selecionar indentificadores
		$indentificadores = $this->Painel_model->buscar_indentificadores($id);
		
		//Buscar itens no banco de dados
		$itens = $this->Painel_model->buscar_itens($indentificadores['npacote']);
		
		//Pegar endereço do local do evento
		$info = $this->Painel_model->buscar_info_cliente($indentificadores['npedido']);
		
		//criar tabela de produtos
		$i = 1;
		$Tabela = "";
		foreach($itens->result_array() as $linha) {
			$Tabela .= '<tr>
							<th scope="row">'.$i++.'</th>
							<td>'.$linha['item'].'</td>
							<td>'.ceil($linha['quantidade']*$info['participantes']).'</td>
							<td>'.$linha['medida'].'</td>
						</tr>';
		}
		
		$Local = $info['local'] == null ? 'Indefinido' : $info['local'];
		
        //Montar modal		
		$modal = 
		    '<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				</button>
				<h2 class="modal-title" id="exampleModalLongTitle">Detalhes do evento</h2>
			</div>
		    <div class="modal-body">
			    <div class="registration-page-area bg-secondary">
				    <div class="registration-details-area inner-page-padding">
						<ul class="list-inline">
							<li><strong>Nome: </strong>'.$info['nome'].'</li>
							<li><strong>Telefone: </strong>'.$info['telefone'].'</li>
						</ul></br></br>
                        <h3><strong>Pacote contratado: #'.$indentificadores['nomepacote'].'</strong></h3>						
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Itens</th>
									<th scope="col">Quantidades</th>
									<th scope="col">Medidas</th>
								</tr>
							</thead>
							<tbody>
								'.$Tabela.'
							</tbody>
						</table></br></br>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<h5><strong>Local: </strong>'.$Local.'</h5>
							</div>
							<div class="col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-12">
								<h5><i class="fa fa-clock-o" aria-hidden="true"></i><strong> Início: </strong>'.substr($info['horainicio'], 0, -3).'<strong> Fim: </strong>'.substr($info['horafim'], 0, -3).'</h5>
							</div>
						</div>
					</div>	
                </div>					
			</div>
            <div class="modal-footer">
				<ul class="list-inline">
					<li><a href="'.base_url('PainelControlls/gerar_comprovante/'.$id).'" target="_blank" ><button type="button" class="btn btn-primary">Emitir comprovante</button></a></li>
				</ul>	
			</div>';
			
			//Imprimir modal
			echo $modal;
	}
	
	public function gerar_comprovante()
	{			
		//Receber id
		$id = $this->uri->segment(3);
		
		//Pesquisa na tabela carrinho
		$dados['Informacao1'] = $this->Painel_model->buscar_informacao1($id);
		
		//Pesquisa na tabela pedidos
		$dados['Informacao2'] = $this->Painel_model->buscar_informacao2($id);

		//Pesquisa na tabela empresas
		$dados['Informacao3'] = $this->Painel_model->buscar_informacao3($id);

		//Criar conteudo
		$HTML = $this->load->view("Meio/Comprovante", $dados, TRUE);

		//Definir nome do arquivo	
		$Nome = "comprovante.pdf";

		//Executar pdf
		$mpdf = new mPDF();
		$mpdf->WriteHTML($HTML);

		//Definir método
		$mpdf->Output($Nome, 'I');

		// I - Abre no navegador
		// F - Salva o arquivo no servido
		// D - Salva o arquivo no computador do usuário
		
	}
	
	public function solicitar_pagamento()
	{
		//Pegar nempresa da session
		$nempresa = $this->session->nempresa;
		
		$valor = limpar_decimais($this->input->post('valor'));
		$valor_real = $valor - ($valor/100)*15;
		
		//Pegar dados dos inputs
		$array = array (
		    'nempresa' => $nempresa,
			'nprotocolo' => $this->input->post('nprotocolo'),
			'nome_do_comprovante' => $_FILES['comprovante']['name'],
			'email' => $this->input->post('email'),
			'data' => $this->input->post('data'),
			'valor' => $valor,
			'comissao' => '15%',
			'valor_real' => $valor_real,
			'situacao' => 'Em espera',
			'criado' => date('Y-m-d H:i:s')	
	    );

        //Enviar dados para o banco de dados   
		$this->Painel_model->solicitar_pagamento($array);
		
		//Pegar nome do arquivo
		$nome_do_arquivo = $this->input->post('nprotocolo');
		
		//Configurar envio de imagens 
		$config['upload_path'] = 'FrondEnd/img/comprovantes/'.$nempresa;
		$config['file_name'] = $nome_do_arquivo;
		$config['allowed_types'] = '*';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';

		//Iniciar configurações
		$this->upload->initialize($config);

		//Enviar imagens para pasta
		if($this->upload->do_upload('comprovante')){
			$this->session->set_flashdata('menssagem', '<p>Pedido enviado com sucesso<p>');
		}else{
			$error = $this->upload->display_errors('<p>', '</p>');
			$this->session->set_flashdata('menssagem', $error);
		}
		
		//Redicionar
		redirect('Painel', 'refresh');
	}
	
	public function passar_pagamentos()
	{
		$pagina = $this->uri->segment(3);
		
		if($pagina >= 1){
		    $this->session->set_userdata('pp', $pagina);
		}else{
			$this->session->set_userdata('pp', 1);
		}
				
		redirect('Painel', 'refresh');
	}
	
	public function passar_meus_pacotes()
	{
		$pagina = $this->uri->segment(3);
				
		if($pagina >= 1){
		    $this->session->set_userdata('mp', $pagina);
		}else{
			$this->session->set_userdata('mp', 1);
		}
		
		redirect('Painel', 'refresh');
	}
	
	public function inserir_pacote()
	{
        //Pegar nempresa
	    $nempresa = $this->session->nempresa;
		
		//Receber dados do formulario
		$imagens = $_FILES['imagem']['name'];
		$tipoevento = $this->input->post('tipoevento');
		$tipoevento = implode(',', $tipoevento);
		$itens = $this->input->post('item');
		$quantidades = $this->input->post('quantidade');
		$medidas = $this->input->post('medida');
		$multiplicavel = $this->input->post('multiplicavel');
		$local_de_atuacao = $this->session->localdeatuacao;
		$capacidade_maxima = $this->input->post('capacidade_maxima') != "" ? $this->input->post('capacidade_maxima') : 5000;
		
		//Inserir dados na tabela pacotes
		$array1 = array (
		    'nempresa' => $nempresa,
			'nomepacote' => $this->input->post('nomepacote'),
			'imagem' => str_replace(" ", "", $imagens[0]),
			'descricao' => $this->input->post('descricao'),
			'tags' => $this->input->post('tags'),
			'tipoevento' => $tipoevento,
			'nivel' => $this->input->post('expectativa_de_gastos'),
			'precopessoa' => limpar_decimais($this->input->post('precopessoa')),
			'precohora' => limpar_decimais($this->input->post('precohora')),
			'precofixo' => limpar_decimais($this->input->post('precofixo')),
			'nota' => 3,
			'endereco' => $this->input->post('endereco'),
			'capacidade_maxima' => $capacidade_maxima,
			'localdeatuacao' => $local_de_atuacao,
			'categoria' => $this->input->post('categoria'),
			'modificado' => date('Y-m-d H:i:s'),
			'criado' => date('Y-m-d H:i:s')
	    );
		
		//Enviar dados para pacotes   
		$this->Painel_model->inserir_pacote($array1);
		
		//Definir npacote
		$npacote = $this->db->insert_id();
		
		//Inserir dados na tabela imagens
		for ($i=0;$i<count($imagens);$i++){
			$array2 = array (
				'npacote' => $npacote,
				'imagem' => $imagens[$i],
				'criado' => date('Y-m-d H:i:s')
			);
			
			//Enviar dados para imagens   
			$this->Painel_model->inserir_imagens_do_pacote($array2);
		}	
		
		//Inserir dados na tabela itens
        for ($i=0;$i<count($itens);$i++){
			$array3 = array (
				'npacote' => $npacote,
		        'item' => $itens[$i],
				'quantidade' => $quantidades[$i],
				'medida' => $medidas[$i],
		        'multiplicavel' => $multiplicavel[$i],
				'criado' => date('Y-m-d H:i:s')
			);
			
			//Enviar dados para itens   
			$this->Painel_model->inserir_itens_do_pacote($array3);
		}
		
		//Criar diretorio de imagens do pacote
		$_UP['pacote'] = 'FrondEnd/img/pacotes/'.$nempresa.'/'.$npacote;
		mkdir($_UP['pacote'], 0777);

		//Configurar envio de imagens 
		$config['upload_path'] = 'FrondEnd/img/pacotes/'.$nempresa.'/'.$npacote;
		$config['allowed_types'] = 'jpg|jpeg|png|svg|avi|wmv|wma|mov|flv|mp4|mkv|mks|rm|rmvb';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';

		//Iniciar configurações
		$this->upload->initialize($config);
	
	    //Pegar todas as imagens
		$files = $_FILES;
        
		//Mover todas as imagens para o diretorio
		for($i=0; $i<count($files['imagem']['name']); $i++)
		{
			$_FILES = array();
			foreach( $files['imagem'] as $k=>$v )
			{
				$_FILES['imagem'][$k] = $v[$i];                
			}

			$this->upload->do_upload('imagem');
		}
		
		//Enviar imagens para pasta
		/*if($this->upload->do_upload('imagem')){
			$this->session->set_flashdata('menssagem', '<p>Pedido enviado com sucesso<p>');
		}else{
			$error = $this->upload->display_errors('<p>', '</p>');
		    $this->session->set_flashdata('menssagem', $error);
		}*/
					
		//Redirecionar para meus produtos
		redirect('Painel', 'refresh');
		
	}
	
	public function editar_pacote()
	{
		//Pegar GET
		$npacote = $this->uri->segment(3);
		
		//Seleciona pacote
		$dados['pacotes'] = $this->Painel_model->buscar_dados_do_pacote($npacote);
		
		$tipoeventos = explode(',', $dados['pacotes']['tipoevento']);
		
		$aniversario = FALSE;
		$aniversario_infantil_masculino = FALSE;
		$aniversario_infantil_feminino = FALSE;
		$casamento = FALSE;
		$cha_de_bebe = FALSE;
		$debutante = FALSE;
		$festa = FALSE;
		$formatura_fundamental = FALSE;
		$formatura_ensino_medio = FALSE;
		$formatura_superior = FALSE;
		$feiras = FALSE;
		$workshops = FALSE;
		
		
		for($i = 0; $i < count($tipoeventos); $i++){
			
			switch($tipoeventos[$i]){
			   case "Aniversário":
				   $aniversario = TRUE;
				   break;
			   case "Aniversário infantil masculino":
				   $aniversario_infantil_masculino = TRUE;
				   break;
			   case "Aniversário infantil feminino":
				   $aniversario_infantil_feminino = TRUE;
				   break;
			   case "Casamento":
				   $casamento = TRUE;
				   break;
				case "Chá de bebê":
				   $cha_de_bebe = TRUE;
				   break;
				case "Debutante":
				   $debutante = TRUE;
				   break;
				case "Festa":
				   $festa = TRUE;
				   break;
				case "Formatura fundamental":
				   $formatura_fundamental = TRUE;
				   break;
				case "Formatura ensino médio":
				   $formatura_ensino_medio = TRUE;
				   break;
				case "Formatura superior":
				   $formatura_superior = TRUE;
				   break;
				case "Feiras":
				   $feiras = TRUE;
				   break;
				case "Workshops":
				   $workshops = TRUE;
				   break;  
			} 
		}
		
		$dados['tipoevento'] = array (
			'aniversario' => $aniversario,
			'aniversario_infantil_masculino' => $aniversario_infantil_masculino,
			'aniversário_infantil_feminino' => $aniversario_infantil_feminino,
			'casamento' => $casamento,
			'cha_de_bebe' => $cha_de_bebe,
			'debutante' => $debutante,
			'festa' => $festa,
			'formatura_fundamental' => $formatura_fundamental,
			'formatura_ensino_medio' => $formatura_ensino_medio,
			'formatura_superior' => $formatura_superior,
			'feiras' => $feiras,
			'workshops' => $workshops
	    );
		
		//Seleciona itens
		$dados['item'] = $this->Painel_model->buscar_itens_do_pacote($npacote);
				
		$this->session->set_userdata('active', 6);
		redirect('Painel', 'refresh');
				
	}
	
	public function atualizar_pacote()
	{		
		//Pegar GET
		$npacote = $this->uri->segment(3);
		
		//Receber dados do formulario
		$tipoevento = $this->input->post('tipoevento');
		$tipoevento = implode(',', $tipoevento);
		$itens = $this->input->post('item');
		$quantidades = $this->input->post('quantidade');
		$medidas = $this->input->post('medida');
		$multiplicavel = $this->input->post('multiplicavel');
		$local_de_atuacao = $this->session->localdeatuacao;
		$capacidade_maxima = $this->input->post('capacidade_maxima') != "" ? $this->input->post('capacidade_maxima') : 5000;
		
		//Inserir dados na tabela pacotes
		$array = array (
			'nomepacote' => $this->input->post('nomepacote'),
			'descricao' => $this->input->post('descricao'),
			'tags' => $this->input->post('tags'),
			'tipoevento' => $tipoevento,
			'nivel' => $this->input->post('expectativa_de_gastos'),
			'precopessoa' => limpar_decimais($this->input->post('precopessoa')),
			'precohora' => limpar_decimais($this->input->post('precohora')),
			'precofixo' => limpar_decimais($this->input->post('precofixo')),
			'endereco' => $this->input->post('endereco'),
			'capacidade_maxima' => $capacidade_maxima,
			'localdeatuacao' => $local_de_atuacao,
			'categoria' => $this->input->post('categoria'),
			'criado' => date('Y-m-d H:i:s')
	    );
				
	    $this->Painel_model->atualizar_pacote($npacote, $array);
		
		//$this->Mercado_model->atualizar_itens_do_pacote($npacote, $itens);
		
		//Redirecionar para meus produtos
		//redirect('Painel', 'refresh');
				
	}
	
	public function apagar_pacote()
	{
		//Pegar GET
		$npacote = $this->uri->segment(3);
		
		//Pegar nempresa
	    $nempresa = $this->session->nempresa;
		
		//Apagar pacote
		$this->Painel_model->deletar_pacote($npacote, $nempresa);
		
		//Deletar diretorio de imagens do pacote
		delTree('FrondEnd/img/pacotes/'.$nempresa.'/'.$npacote);
		
		//Redicionar para meus produtos
		redirect('Painel', 'refresh');
		
	}
	
	
	public function editar_usuario()
	{
		//Pegar nempresa da session
		$nempresa = $this->session->nempresa; 
		
		//Selecionar dados da empresa
		$dados_empresa = $this->Painel_model->buscar_dados_da_empresa($nempresa);
		
		//Buscar dados do formulario
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$telefone = $this->input->post('telefone');
		
		//Pegar dados do inputs
		$array = array(
		    'email' => $email == "" ? $dados_empresa['email'] : $email,
            'senha' => $senha == "" ? $dados_empresa['senha'] : md5($senha),
            'telefone' => $telefone == "" ? $dados_empresa['telefone'] : $telefone 
		);
		
		//Fazer alterações no banco de dados
        $this->Painel_model->editar_dados_da_empresa($nempresa, $array);
		
		//Redicionar para pagina de edição
		redirect('Painel', 'refresh');
		
	}
	
	public function deletar_empresa()
	{
		//Pegar nempresa da session
		$nempresa = $this->session->nempresa; 
		
		//Deletar empresa do banco de dados
		$this->Painel_model->deletar_empresa($id);
		
		//Deletar diretorio de imagens da empresa
		$_UP['empresa'] = 'FrondEnd/img/pacotes/'.$nempresa;
		rmdir($_UP['empresa']);
		
	}
	
}

?>