<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado extends CI_Controller 
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
		
		$this->load->model('Mercado_model');
		
	}
	
	public function briefing()
	{	
		//Arrendondar hora
		$horainicio = arredondar_time($this->input->post('horainicio'));
		$horafim = arredondar_time($this->input->post('horafim'));
		
		//Calcular duracao
		$duracao = duracao($this->input->post('data'), $horainicio, $horafim);
		
		//Pegar dados
		$array = array (
			'nome' => $this->input->post('nome'),
			'tipoevento' => $this->input->post('tipoevento'),
			'participantes' => $this->input->post('participantes'),
			'nivel' => $this->input->post('expectativa_de_gastos'),
			'data' => $this->input->post('data'),
			'horainicio' => $horainicio,
			'horafim' => $horafim,
			'duracao' => $duracao,
			'cidade' => $this->input->post('cidade'),
			'local' => $this->input->post('local') ,
			'email' => $this->input->post('email'),
			'senha' => criptografar_senha($this->input->post('data')),
			'telefone' => $this->input->post('telefone'),
            'criado' => date('Y-m-d H:i:s')			
	    );

    	//Inserir dados no banco de dados
    	$this->Mercado_model->inserir_pedido($array);
        
		//Criar sessão
		$session = array (
			'npedido' => $this->db->insert_id(),
			'participantes' => $this->input->post('participantes'),
			'duracao' => $duracao
		);
		
		//Executar sessão
		$this->session->set_userdata($session);
		
		//Redicionar
		redirect('Mercado/1/locacao-de-espaco/relevancia/', 'location');
		
	}
	
	public function atualizar_briefing()
	{			
		//Arrendondar hora
		$horainicio = arredondar_time($this->input->post('horainicio'));
		$horafim = arredondar_time($this->input->post('horafim'));
		
		//Calcular duracao
		$duracao = duracao($this->input->post('data'), $horainicio, $horafim);
			
		//Pegar dados
		$array = array (
			'nome' => $this->input->post('nome'),
			'tipoevento' => $this->input->post('tipoevento'),
			'participantes' => $this->input->post('participantes'),
			'nivel' => $this->input->post('expectativa_de_gastos'),
			'data' => $this->input->post('data'),
			'horainicio' => $horainicio,
			'horafim' => $horafim,
			'duracao' => $duracao,
			'cidade' => $this->input->post('cidade'),
			'local' => $this->input->post('local') ,
			'email' => $this->input->post('email'),
			'senha' => criptografar_senha($this->input->post('data')),
			'telefone' => $this->input->post('telefone'),
			'criado' => date('Y-m-d H:i:s')
	    );
					
		//Inserir dados no banco de dados
    	$this->Mercado_model->update_briefing($npedido, $array);
        
		//Criar sessão
		$session = array (
			'participantes' => $this->input->post('participantes'),
			'duracao' => $duracao
		);
		
		//Executar sessão
		$this->session->set_userdata($session);
		
		//Pegar url
		$url = $this->input->server('HTTP_REFERER');
		$uri = explode('/', $url);

		//Verificar página de origem
		if($uri[4] == "Mercado"){
			redirect($url, 'location');
		}elseif($uri[4] == "Pagina_de_Anuncio"){
            redirect('Mercado/1/locacao-de-espaco/relevancia/', 'location');
		}else{
			//Nd
		}
		
	}

    public function buscar_palavra_chave()
    {
		$palavra_chave = $this->input->post('palavra-chave');
		$palavra_chave = str_replace(' ', '-', $palavra_chave);
		
		$link = "Mercado";
		
		$link .= "/".$this->uri->segment(3);
	    $link .= "/".$this->uri->segment(4);
		$link .= "/".$this->uri->segment(5);
		$link .= "/".$palavra_chave;
				
		redirect($link, 'refresh');
			
    }		

	public function mercado()
	{
		//Pegar Numero do pedido na sessão
		$npedido = $this->session->npedido;
		
		//Pegar GET
		$dados['pagina'] = $this->uri->segment(2);
	    $dados['categoria'] = $this->uri->segment(3);
		$dados['ordem'] = $this->uri->segment(4);
				
		//Definir tags
		if($this->uri->segment(5) == null){
			$dados['palavra_chave'] = "";
		}else{
			$palavra_chave = $this->uri->segment(5);
			$dados['palavra_chave'] = str_replace('-', ' ', $palavra_chave);
		}
		
		if($this->session->npedido){
			//Seleciona dados do pedido
			$pedido = $this->Mercado_model->buscar_dados_do_pedido($npedido);
			
			//Definir dados para calculo do orçamento
			define('participantes', $this->session->participantes);
			define('duracao', $this->session->duracao);
			
			//Seleciona pacotes		
			$pacote = $this->Mercado_model->buscar_pacotes($pedido['nivel'], $dados['categoria'], $pedido['tipoevento'], $pedido['cidade'], participantes,  $palavra_chave, $minimo, $maximo);
									
		}else{
			//Definir dados para calculo do orçamento
			define('participantes', 50);
			define('duracao', 4);
			
			//Seleciona pacotes		
			$pacote = $this->Mercado_model->buscar_pacotes("", $dados['categoria'], "",  "", participantes, $palavra_chave);				
		
			//Passar alerta para o cliente
			$dados['alert'] = '<div class="alert alert-warning" role="alert"><center>Versão demonstrativa para encontrar pacotes adequados para seu evento clique em <a href="" class="alert-link" data-toggle="modal" data-target="#modal-briefing" >briefing</a>.</center></div>';
			
		}
		
		//Formatar array para array associativo
		foreach($pacote->result_array() as $linha){
			$pacotes['npacote'][] = $linha['npacote'];
			$pacotes['nempresa'][] = $linha['nempresa'];
			$pacotes['nomepacote'][] = $linha['nomepacote'];
			$pacotes['imagem'][] = $linha['imagem'];
			$pacotes['descricao'][] = $linha['descricao'];
			$pacotes['precopessoa'][] = $linha['precopessoa'];
			$pacotes['precohora'][] = $linha['precohora'];
			$pacotes['precofixo'][] = $linha['precofixo'];
			$pacotes['nota_pacote'][] = $linha['nota'];
		}
		
		//Fazer orçamento
		for($i = 0; $i < count($pacotes['npacote']); $i++){
			$pacotes['preco'][$i] = fazer_orcamento(participantes, $pacotes['precopessoa'][$i], duracao, $pacotes['precohora'][$i], $pacotes['precofixo'][$i]);
		}
								
		//Buscar a nota da empresa dos respectivos pacotes
		for($i = 0; $i < count($pacotes['npacote']); $i++){
			$pacotes['nota_empresa'][$i] = $this->Mercado_model->nota_empresas($pacotes['nempresa'][$i]);
		}
								
		//Calcular avaliacao do pacote final
		for($i = 0; $i < count($pacotes['npacote']); $i++){
			$pacotes['avaliacao'][$i] = round(($pacotes['nota_empresa'][$i] + $pacotes['nota_pacote'][$i]) / 2);
		}
								
		//Ordenar por preço e nota
		if($pacote->num_rows() > 1){
			if($dados['ordem'] == 'Menor-para-maior-preco'){
				array_multisort($pacotes['preco'], SORT_ASC, $pacotes['npacote'], $pacotes['nempresa'], $pacotes['nomepacote'], $pacotes['imagem'], $pacotes['descricao'], $pacotes['avaliacao']);			
			}elseif($dados['ordem'] == 'Maior-para-menor-preco'){
				array_multisort($pacotes['preco'], SORT_DESC, $pacotes['npacote'], $pacotes['nempresa'], $pacotes['nomepacote'], $pacotes['imagem'], $pacotes['descricao'], $pacotes['avaliacao']);
			}elseif($dados['ordem'] == 'Maior-para-menor-avaliacao'){
				array_multisort($pacotes['avaliacao'], SORT_DESC, $pacotes['npacote'], $pacotes['nempresa'], $pacotes['nomepacote'], $pacotes['imagem'], $pacotes['descricao'], $pacotes['avaliacao']);
			}elseif($dados['ordem'] == 'Menor-para-maior-avaliacao'){
				array_multisort($pacotes['avaliacao'], SORT_ASC, $pacotes['npacote'], $pacotes['nempresa'], $pacotes['nomepacote'], $pacotes['imagem'], $pacotes['descricao'], $pacotes['avaliacao']);
			}
		}

		//Definir total de anúncios em cada página
		$total_de_anuncios = 10;
		
		//Setar os parâmetros para execução do for
		$dados['fim'] = $dados['pagina'] * $total_de_anuncios;
		$dados['inicio'] = $dados['fim'] - $total_de_anuncios;

        //Ajustar limite do for
		if($dados['fim'] > count($pacotes['npacote'])){
			$dados['fim'] = count($pacotes['npacote']);
		}else{
			$dados['fim'] = $dados['fim'];
		}
		
		//Definir qual é a página anterior
		if($dados['pagina'] == 1){
			$dados['page_anterior'] = 1;
		}else{
			$dados['page_anterior'] = $dados['pagina'] - 1;
		}
		
		//Definir qual é a página posterior
		$dados['page_posterior'] = $dados['pagina'] + 1;
		
		//Definir total de links na páginação
		if($dados['pagina'] > 5){
			$dados['link_inicio'] = $dados['pagina'] - 5;
			$dados['link_final'] = $dados['pagina'] + 5;
		}else{
			$dados['link_inicio'] = 1;
			$dados['link_final'] = 10;
		}
		
		//Envelopar dados para view
		$dados['pacotes'] = $pacotes;
						
		//Chamar view
		$dados['Titulo'] = 'Mercado';
		$dados['Page'] = 'Mercado';
		$this->load->view('Montar', $dados);
				
	}
	
	public function pagina_de_anuncio()
	{
		//Pegar dados por GET
		$dados['npacote'] = $this->uri->segment(2);
				
		if($this->session->npedido){
     		//Seleciona pacote		
			$dados['pacotes'] = $this->Mercado_model->buscar_dados_do_pacote($dados['npacote']);
			
			//Definir dados para calculo do orçamento
			define('participantes', $this->session->participantes);
		    define('duracao', $this->session->duracao);
			
			//Fazer calculo do orçamento
			$dados['preco'] = fazer_orcamento(participantes, $dados['pacotes']['precopessoa'], duracao, $dados['pacotes']['precohora'], $dados['pacotes']['precofixo']);
							
			//Seleciona imagens		
			$dados['imagens'] = $this->Mercado_model->buscar_imagens_do_pacote($dados['npacote']);
			
			//Seleciona itens		
			$dados['itens'] = $this->Mercado_model->buscar_itens_do_pacote($dados['npacote']);
			
			//Seleciona dados da empresa
			$dados['empresa'] = $this->Mercado_model->buscar_dados_da_empresa($dados['npacote']);
			
			//Setar alertar
			$dados['alert'] = ' ';
			
		}else{
			//Seleciona pacote		
			$dados['pacotes'] = $this->Mercado_model->buscar_dados_do_pacote($dados['npacote']);;
			
			//Definir dados para calculo do orçamento
			define('participantes', 50);
			define('duracao', 4);
			
			//Fazer calculo do orçamento
			$dados['preco'] = fazer_orcamento(participantes, $dados['pacotes']['precopessoa'], duracao, $dados['pacotes']['precohora'], $dados['pacotes']['precofixo']);
								
			//Seleciona imagens		
			$dados['imagens'] = $this->Mercado_model->buscar_imagens_do_pacote($dados['npacote']);
			
			//Seleciona itens		
			$dados['itens'] = $this->Mercado_model->buscar_itens_do_pacote($dados['npacote']);
			
			//Seleciona dados da empresa
			$dados['empresa'] = $this->Mercado_model->buscar_dados_da_empresa($dados['npacote']);
			
			//Setar alertar
			$dados['alert'] = 'alert';
			
		}
		
		$ultima_pagina = $this->input->server('HTTP_REFERER');
		
		$this->session->set_userdata('ultima_pagina', $ultima_pagina);
				
		//Chamar view
		$dados['Titulo'] = 'Pagina de anuncio';
		$dados['Page'] = 'Pagina_de_Anuncio';
		$this->load->view('Montar', $dados);
		
	}
	
	public function adicionar_ao_carrinho()
	{
		//Pegar url
		$url = $this->input->server('HTTP_REFERER');
			
		//Dividir url	
		$url = explode('/', $url);
		
        //Pegar npacote		
		$npacote = $url[5];
		
		//Seleciona dados do pacote		
		$Pacotes = $this->Mercado_model->buscar_dados_do_pacote($npacote);
		
		//Definir dados para calculo do orçamento
		define('participantes', $this->session->participantes);
		define('duracao', $this->session->duracao);
		
		//Fazer calculo do orçamento
		$Preco = fazer_orcamento(participantes, $Pacotes['precopessoa'], duracao, $Pacotes['precohora'], $Pacotes['precofixo']);
		
		//Fazer o protocolo
		$nprotocolo .= $this->session->npedido;
		$nprotocolo .= $Pacotes['nempresa'];
        $nprotocolo .= $npacote;	
		
		//Pegar dados para o array
		$array = array (
		    'nprotocolo' => $nprotocolo,
		    'npedido' => $this->session->npedido,
			'nempresa' => $Pacotes['nempresa'],
			'npacote' => $npacote,
			'nomepacote' => $Pacotes['nomepacote'],
			'imagem' => $Pacotes['imagem'],
			'preco' => $Preco,
			'situacao' => '-----',
			'criado_b' => date('Y-m-d H:i:s') 
		);
		
		//Inserir no banco de dados
		$inserido = $this->Mercado_model->adicionar_pacote_ao_carrinho($array);
		
		//Criar menssagem para usuario
		if($inserido){
			$this->session->set_flashdata("menssagem", "<div class='alert alert-success' role='alert'><center>Pacote adicionado com sucesso</center></div>");
		}else{
			$this->session->set_flashdata("menssagem", "<div class='alert alert-danger' role='alert'><center>Não foi possivel está adicionando o pacote</center></div>");
		}
		
		//Redicionar
		redirect('Pagina_de_Anuncio/'.$npacote, 'refresh');
		
	}
	
	public function carrinho()
	{			
	    //Pegar Numero do pedido na sessão
		$npedido = $this->session->npedido;
	
		//Buscar pacotes correspondentes ao npedido
		$dados['Pacotes'] = $this->Mercado_model->buscar_pacotes_do_carrinho($npedido);
			
		if($dados['Pacotes']->num_rows() != 0){	
            //Buscar situação no banco de dados
			$situacao = $this->Mercado_model->buscar_situacoes_dos_pacotes($npedido);
			
			//Formatar array para envio de email
			foreach($situacao->result_array() as $linha){
				$situacoes[] = $linha['situacao'];
			}
			
			$total_de_situacoes = count($situacoes);
			$total_de_cada_situacao = array_count_values($situacoes);			

            //Definir botões
			if($total_de_situacoes == 0){
				$dados['botoes'] = "<button disabled id='' name='cancelar_evento' type='submit' class='btn btn-gray btn-lg'>Cancelar evento</button><button disabled id='' name='adiar_evento' type='submit' class='btn btn-gray btn-lg'>Adiar evento</button><button disabled name='enviar_proposta' type='submit' class='btn btn-gray btn-lg'>Enviar proposta</button>";
			}elseif($total_de_cada_situacao['-----'] >= 1){
				$dados['botoes'] = "<button disabled id='' name='cancelar_evento' type='submit' class='btn btn-gray btn-lg'>Cancelar evento</button><button disabled id='' name='adiar_evento' type='submit' class='btn btn-gray btn-lg'>Adiar evento</button><a href='".base_url('Mercado/notificacao')."'><button name='enviar_proposta' type='submit' class='btn btn-primary btn-lg'>Enviar proposta</button></a>";
			}elseif($total_de_cada_situacao['Aceito'] >= 1){
				$dados['botoes'] = "<button disabled id='' name='cancelar_evento' type='submit' class='btn btn-gray btn-lg'>Cancelar evento</button><button disabled id='' name='adiar_evento' type='submit' class='btn btn-gray btn-lg'>Adiar evento</button><a href='".base_url('Mercado/inserir_venda')."'><button name='ir_para_pagamento' type='submit' class='btn btn-primary btn-lg'>Ir para pagamento</button></a>";
			}elseif($total_de_cada_situacao['Pago'] == $total_de_situacoes){
				$dados['botoes'] = "<button id='cancelar_evento' name='cancelar_evento' type='submit' class='btn btn-danger btn-lg'>Cancelar evento</button><button id='adiar_evento' name='adiar_evento' type='submit' class='btn btn-warning btn-lg'>Adiar evento</button><button disabled name='ir_para_pagamento' type='submit' class='btn btn-gray btn-lg'>Ir para pagamento</button>";
			}elseif($total_de_cada_situacao['Enviado'] +  $total_de_cada_situacao['Pago'] == $total_de_situacoes){
				$dados['botoes'] = "<button disabled id='' name='cancelar_evento' type='submit' class='btn btn-gray btn-lg'>Cancelar evento</button><button disabled id='' name='adiar_evento' type='submit' class='btn btn-gray btn-lg'>Adiar evento</button><button disabled name='enviar_proposta' type='submit' class='btn btn-gray btn-lg'>Enviar proposta</button>";
			}elseif($total_de_cada_situacao['Finalizado'] == $total_de_situacoes){
				$dados['botoes'] = "<button disabled id='' name='cancelar_evento' type='submit' class='btn btn-gray btn-lg'>Cancelar evento</button><button disabled id='' name='adiar_evento' type='submit' class='btn btn-gray btn-lg'>Adiar evento</button><button disabled name='enviar_proposta' type='submit' class='btn btn-gray btn-lg'>Enviar proposta</button>";
			}
			
			//Buscar telefones.
			$dados['Contatos'] = $this->Mercado_model->buscar_telefones_das_empresas($npedido);
			
			//Somar valores dos produtos
			$dados['Total'] = $this->Mercado_model->calcular_valor_a_ser_pago($npedido);
			
	    }else{
			//Valor a ser pago no momento
			$dados['Total'] = 0;
		}
				
		//Chamar view
		$dados['Titulo'] = 'Carrinho';
		$dados['Page'] = 'Carrinho';
		$this->load->view('Montar', $dados);
	}	
	
	public function remover_pacote()
	{
		//Pegar id do pacote
		$id = $this->uri->segment(2);
				
		//Apagar o pacote do carrinho
		$this->Mercado_model->deletar_pacote_do_carrinho($id);
		
		//Reredicionar para o carrinho
		redirect('Carrinho', 'refresh');
	}
	
	public function notificacao()
	{
		//Pegar id
		$npedido = $this->session->npedido;
		
		//Buscar emails dos fornecedores.
		$Contatos = $this->Mercado_model->buscar_emails_das_empresas($npedido);
		
		//Formatar array para envio de email
		foreach($Contatos->result_array() as $linha){
			$Emails[] = $linha['email'];
		}
		
		//Carregar view do email
		$Mensagem = $this->load->view('Template_de_Email/Notificacao_de_Venda', '', TRUE);
				
		//Enviar notificação
		$this->Mercado_model->enviar_notificacao_de_compra($Emails, $Mensagem);
		
		//Executar alteração no banco de dados
		$this->Mercado_model->alterar_situacao_para_enviado($npedido);
		
		//Reredicionar para a página do carrinho
		redirect('Carrinho', 'refresh');

	}

	public function nota_fiscal()
	{
        //Pegar Numero do pedido na sessão
		$npedido = $this->session->npedido;

		//Criar array para ser inserido no banco de dados
		$array = array(
			'npedido' => $npedido,
		    'nome_completo' => $this->input->post('nome_completo'),
		    'cpf' => $this->input->post('cpf'),
            'estado' => $this->input->post('estado'),
            'cidade' => $this->input->post('cidade'),
            'cep' => $this->input->post('cep'),
			'bairro' => $this->input->post('bairro'),
			'rua' => $this->input->post('rua'),
			'numero' => $this->input->post('numero'),
			'complemento' => $this->input->post('complemento'),
			'telefone' => $this->input->post('telefone'),
			'criado' => date('Y-m-d H:i:s')
        );

		//Inserir dados no banco de dados
    	$this->Mercado_model->inserir_nota_fiscal($array);

		//Reredicionar para a página do carrinho
		redirect('Finalizar', 'refresh');

	}
	
	public function inserir_venda()
	{
		//Pegar npedido do cliente
	    $npedido = $this->session->npedido;

        //Definir minha comissão
        define('comissao', '15%');

        //Selecionar nome do cliente
		$Pagador = $this->Mercado_model->buscar_nome_do_pagador($npedido);
		
		//Somar valores dos pacotes
		$dados['valor'] = $this->Mercado_model->calcular_valor_a_ser_pago($npedido);
		
		//Criar array para ser inserido no banco de dados
		$array = array(
		    'npedido' => $npedido,
		    'pagador' => $Pagador['nome'],
            'valor' => 	$dados['valor']['preco'],
            'comissão' => comissao,
            'mês' => date('F'),
			'situacao' => 'Aguardando pagamento',
			'criado' => date('Y-m-d H:i:s')
        );
		
		//Inserir no banco de dados
		$this->Mercado_model->inserir_venda($array);
				
		//Redicionar
		redirect('Finalizar', 'location');
	}
	
	public function finalizar()
	{
		//Pegar npedido do cliente
	    $dados['npedido'] = $this->session->npedido;
		
		//Buscar valor
		$resultado = $this->Mercado_model->buscar_id_e_valor_a_ser_pago($dados['npedido']);
		
		$pix = gerar_pix('HHJ678', '3452.89');
		
		$dados['pix_code'] = $pix;
		
		$dados['qr_code'] = '<center><img src="'.(new \chillerlan\QRCode\QRCode())->render($pix).'" /></center>';
		
		$dados['valor'] = '3452.89';
		
		//Chamar view
		$dados['Titulo'] = 'Pagamento';
		$dados['Page'] = 'Finalizar';
		$this->load->view('Montar', $dados);
		
	}

	public function gerar_boleto()
	{
		$id = $this->uri->segment(3);
		
		$dados['cliente'] = $this->Mercado_model->buscar_dados_do_cliente_nf($id);
		$dados['venda'] = $this->Mercado_model->buscar_id_e_valor_a_ser_pago($id);
		$this->load->view('Meio/Boleto', $dados);
		
	}
	
 }