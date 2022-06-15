<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller 
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
	
	public function painel()
	{
		//Pagina index
		if(!isset($this->session->active)){
			$dados['active'] = 1;
		}else{
			$dados['active'] = $this->session->active;
		}

		//Pegar nempresa
	    $nempresa = $this->session->nempresa;
		
		//Chamar metodos do painel
		$dados['Pedidos'] = $this->pedidos($nempresa);
		$dados['Pedidos_da_Agenda'] = $this->agenda($nempresa);
		$dados['Pagamentos'] = $this->pagamentos($nempresa);
		$dados['Pacotes'] = $this->meus_pacotes($nempresa);
		$dados['Minhas_Estasticas'] = $this->minhas_estasticas($nempresa);
				
		//Carregar view painel
		$dados['Titulo'] = 'Painel';
		$dados['Page'] = 'Painel'; 
		$this->load->view('Painel', $dados);
	}

	public function pedidos($nempresa)
	{
		//Configurar maximo de tempo entre datas aceito
		define('Tempo', '-3 day');
		
		//Definindo os valores das datas
		$hoje = date('Y-m-d H:i:s');
		$hoje_str = strtotime($hoje);
		$ultima_data_valida = strtotime(Tempo, $hoje_str);
		$ultima_data_valida = date('Y-m-d H:i:s', $ultima_data_valida);
				
		//Buscar pedidos no banco de dados
		$dados['Pedidos'] = $this->Painel_model->buscar_pedidos($nempresa, $hoje, $ultima_data_valida);
		
		return $dados;
				
	}
	
	public function agenda($nempresa)
	{	
		//Carregar model
		$dados['Pedidos_da_Agenda'] = $this->Painel_model->buscar_pedidos_da_agenda($nempresa);
		
		return $dados;
		
	}
	
	public function pagamentos($nempresa)
	{		    
		//Pegar página
		$pagina = $this->session->pp;
		
		//Definir valor no botão mais e menos
		$dados['mais'] = $pagina + 1;
		$dados['menos'] = $pagina - 1;
		
		//Calcular inicio e fim das buscar
		$inicio = ($pagina * 5) - 5;
		$fim = $pagina * 5;
		
		//Buscar historico de pagamentos
		$dados['Pagamentos'] = $this->Painel_model->buscar_historico_de_pagamento($nempresa, $inicio, $fim);
		
		return $dados;
		
	}
	
	public function meus_pacotes($nempresa)
	{	    
        //Pegar numero da página		
		$pagina = $this->session->mp;
		
		//Definir informações
		define('total_de_anuncio', 15);
		define('total_de_links', 5);
		
		//Calcular inicio das buscas
		$inicio = (total_de_anuncio * $pagina) - total_de_anuncio;
		
		//Seleciona pacotes
		$dados['Pacotes'] = $this->Painel_model->buscar_meus_pacotes($nempresa, $inicio, total_de_anuncio);
		
		//Conta todos os resultados
		$Total_de_resultados = $this->Painel_model->contar_meus_pacotes($nempresa);
		
		//Quantidade de paginas 
		$ultima_pagina = ceil($Total_de_resultados / total_de_anuncio);
		$this->session->set_userdata('mpu', $ultima_pagina);
		
		return $dados;
		
	}
	
	public function minhas_estasticas($nempresa)
	{		
		$ano = date('Y');
		
		for($i = 1; $i < 13; $i++){
			$meses[] = $ano.'-'.str_pad($i , 2 , '0' , STR_PAD_LEFT);;
		}

        $dados['Titulo'] = 'Vendas do Ano de '.$ano;
		$dados['Sub_Titulo'] = 'Ano de '.$ano;

		for($i = 0; $i < 12; $i++){
			$dados['numeros'][] = $this->Painel_model->buscar_vendas_do_mes($nempresa, $meses[$i]);
		}

		return $dados;
	}
}

?>