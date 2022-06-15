<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
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
		$this->output->enable_profiler(TRUE);
		error_reporting(0);
		
		$this->load->model('Login_model');
		
	}
	
	public function login()
	{
		//Pegar dados
		$Email = $this->input->post('email');
		$Senha = $this->input->post('senha');
		$Tabela = $this->input->post('usuario');
		
		if($Tabela === 'pedidos'){
			//Arruma a senha
			$Senha = str_replace("/", "", $Senha);
			$Senha = md5($Senha);
			
			//Buscar email
			$Email_DB = $this->Login_model->buscar_email($Tabela, $Email);
			
			if($Email_DB){
				//Buscar dados do usuario
				$Dados_DB = $this->Login_model->buscar_dados_do_pedido($Email, $Senha);
				
				if($Dados_DB){
					//Criar sessão
					$session = array (
						'npedido' => $Dados_DB['npedido'],
						'participantes' => $Dados_DB['participantes'],
						'duracao' => $Dados_DB['duracao']
					);
					
					//Executar sessão
					$this->session->set_userdata($session);
					
					//Redirecionar
					redirect('Mercado/1/locacao-de-espaco/relevancia/', 'location');
								
				}else{
					//Redirecionar e criar menssagem
					$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Senha incorreta</center></div>");
					redirect('Login', 'refresh');
				}	
			}else{
				//Redirecionar e criar menssagem
				$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Usuario não encontrado</center></div>");
				redirect('Login', 'refresh');
			}
		}else{
			//Encriptar senha
			$Senha = md5($Senha);
			
			//Buscar email
			$Email_DB = $this->Login_model->buscar_email($Tabela, $Email);
			
			if($Email_DB){
				//Buscar dados do usuario
				$Dados_DB = $this->Login_model->buscar_dados_da_empresa($Email, $Senha);
				
				if($Dados_DB){
					//Criar sessão
					$session = array (
						'nempresa' => $Dados_DB['nempresa'],
						'localdeatuacao' => $Dados_DB['cidades'],
						'mp' => 1,
						'pp' => 1
					);
					
					//Executar sessão
					$this->session->set_userdata($session);
					
					//Redirecionar
					redirect('Painel', 'location');
					
				}else{
					//Redirecionar e criar menssagem
					$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Senha incorreta</center></div>");
					redirect('Login', 'refresh');
				}	
			}else{
				//Redirecionar e criar menssagem
				$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Usuario não encontrado</center></div>");
				redirect('Login', 'refresh');
			}
			
		}
	}
	
	public function esqueceu_a_senha()
	{
		//Receber dados
		$Email = $this->input->post('email');
		$Tabela = $this->input->post('usuario');
		
		//Verificar email
		$Resultado = $this->Login_model->buscar_ultimo_email($Tabela, $Email);
		
		if($Resultado)
		{
			//Gerar nova senha
		    $Nova_senha = geraSenha(8, true, true, false);
			
			//Criptografa nova senha
			$Nova_senha_db = md5($Nova_senha);
			
			//Envia email de recuperação
			$this->email->from('notificacao@empireevents.com.br');
	    	$this->email->to($Email);
	    	$this->email->subject('Recuperação de senha');
	    	$this->email->message('<strong>Sua nova senha é:</strong> '.$Nova_senha);
			
			//Alterar senha no banco de dados
			if($this->email->send()){
				$this->Login_model->editar_senha($Tabela, $Email, $Nova_senha_db);
				
				//Redirecionar e criar menssagem
				$this->session->set_flashdata("mensagem", "<div class='alert alert-success' role='alert'><center>Uma nova senha foi enviado ao seu email</center></div>");
			    redirect('Esqueceu_a_Senha', 'refresh');
			
			}else{
				//Redirecionar e criar menssagem
				$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Não foi possivel estar recuperando a senha</center></div>");
			    redirect('Esqueceu_a_Senha', 'refresh');
			}

		}else{
			//Redirecionar e criar menssagem
			$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Usuario não encontrado</center></div>");
			redirect('Esqueceu_a_Senha', 'refresh');
		}	
	}
	
	public function logout()
	{
	    //Destruir sessões
		if($this->session->npedido){
			$this->session->sess_destroy($this->session->npedido);
			$this->session->sess_destroy($this->session->participantes);
			$this->session->sess_destroy($this->session->duracao);
		}else{
			$this->session->sess_destroy($this->session->nempresa);
			$this->session->sess_destroy($this->session->categoria);
			$this->session->sess_destroy($this->session->localdeatuacao);
			$this->session->sess_destroy($this->session->mp);
			$this->session->sess_destroy($this->session->pp);
			$this->session->sess_destroy($this->session->mpu);
		}
		
		//Rediricioanar para Home
		redirect('Home', 'location');
	}	
	
 }