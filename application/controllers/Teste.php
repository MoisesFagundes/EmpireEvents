<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('file');
		$this->load->helper('my_formulas');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('upload');
		$this->load->library('zip');
		$this->load->database();
		$this->load->dbforge();
		$this->load->library('session');
		$this->output->enable_profiler(FALSE);

		$this->load->model('Painel_model');
		
	}
	
	public function minhas_estasticas()
	{				
		$this->db->select_sum('preco');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('nempresa', '1');
		$this->db->where('situacao', 'Pago');
		$this->db->like('data', '2022-03', 'after');
		$faturamento_do_mes = $this->db->get()->row_array();

		settype($faturamento_do_mes['preco'], 'int');

		echo gettype($faturamento_do_mes['preco']);
	}

    public function session()
	{		
	    
	}	

	public function pix()
	{		
		$id = $this->uri->segment(3);
		$valor = $this->uri->segment(4);
		
		$pix = gerar_pix($id, $valor);
		
        echo '<center><img src="'.(new \chillerlan\QRCode\QRCode())->render($pix).'" /></center>';
		
		echo '<center>'.$pix.'</center>';
		
	}
	
	public function ordem()
	{	
        //Criar tabela para ordenar	
	    $colunas = array ( 
			'npacote' => array ( 
					'type' => 'INT', 
					'constraint' => 11, 
					'unsigned' => TRUE, 
			), 
			'nempresa' => array ( 
					'type' => 'VARCHAR', 
					'constraint' => '100', 
					'unique' => FALSE, 
			), 
			'nomepacote'  => array ( 
					'type' => 'VARCHAR',
					'constraint' => '100', 
					'default' => 'Rei da cidade', 
			), 
			'blog_description' => array ( 
					'type' => 'TEXT', 
					'null' => TRUE, 
			), 
        );

        //Inicializando tabela
        $this->dbforge->add_field($colunas);
		$this->dbforge->create_table('pacotes123');
		
	}
	
	public function tipoevento()
	{	
	    $tipoeventos = array("Casamento","Debutante","Festa","Formatura fundamental");
				
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
		
		$array = array (
			'aniversario' => $aniversario,
			'aniversario_infantil_masculino' => $aniversario_infantil_masculino,
			'aniversario_infantil_feminino' => $aniversario_infantil_feminino,
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
		         
		echo var_dump($array);
		
	}
	
	
	public function tempo()
	{
		//Receber dados
		$Data = ('18-04-2019 23:30:00');
		$Data = strtotime($Data);
		$Created = ('17-04-2019 10:00:00');
		$Created = strtotime($Created);

		//Subtrair datas
		$Tempo = $Data - $Created;

		//Calcular tempo em minuto
		IF ($Tempo >= 60 and $Tempo < 3600){
			$Duracao = round($Tempo/60);
		}
		//Calcular tempo em horas
		IF ($Tempo >= 3600 and $Tempo < 86400){
			$Duracao = round($Tempo/3600);
		}
		//Calcular tempo em dias
		IF ($Tempo >= 86400){
			$Duracao = round($Tempo/86400);
		}

		//Definir complemento no singular ou plural

		IF ($Tempo < 90){
			$Complemento = $Duracao." minuto atrás";
		}

		IF ($Tempo >= 90 and $Tempo <= 3600){
			$Complemento = $Duracao." minutos atrás";
		}

		IF ($Tempo > 3600 and $Tempo < 5400){
			$Complemento = $Duracao." hora atrás";
		}

		IF ($Tempo >= 5400 and $Tempo <= 86400){
			$Complemento = $Duracao." horas atrás";
		}

		IF ($Tempo > 86400 and $Tempo < 129600){
			$Complemento = $Duracao." dia atrás";
		}

		IF ($Tempo >= 129600){
			$Complemento = $Duracao." dias atrás";
		}


        echo $Complemento;
		
	}
	
	public function cnpj()
	{		
		$cnpj = "35.884.233/0001-89";
		
		$cnpj = str_replace(array(".", "/", "-"), "", $cnpj );
				
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
		 
		//mostrando o conteúdo...
		echo $empresa['porte'];
		
	}
	
	public function select(){
		$Email = "moises.fagundes98@gmail.com' OR 1=1 ";
		
		//Buscar email
			$this->db->select('email');
			$this->db->from('pedidos');
			$this->db->where('email', $Email);
			$this->db->order_by('npedido', 'DESC');
			$this->db->limit(1);
		    $sql = $this->db->get_compiled_select();
		
		echo $sql;
		
	}
	
	public function protocolo()
	{
		$ano = date('Y');
		$mês = date('m'); 
		$dia = date('d');
		
		$this->db->select('npedido');
		$this->db->from('Pedidos');
		$this->db->order_by('npedido', 'DESC');
		$this->db->limit(1);
		$ultimo_id = $this->db->get()->row_array();
		
		$ultimo_id['npedido'] += 1;
		$ultimo_id['npedido'] = str_pad($ultimo_id['npedido'], 5, '0', STR_PAD_LEFT);
		
		$protocolo = "";
		$protocolo .= $ano;
		$protocolo .= $ultimo_id['npedido'];
		$protocolo .= $mês;
		$protocolo .= $dia;
		
		echo $protocolo;
		
	}
 }