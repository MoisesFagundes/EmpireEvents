<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('email');
		$this->output->enable_profiler(FALSE);
		error_reporting(0);
	}

	public function home()
	{
		$data_atual = date('Y-m-d');
		$data_modificada = strtotime($data_atual);
		$dados['data_minima'] = strtotime('+2 month', $data_modificada);
		$dados['data_maxima'] = strtotime('+1 year', $data_modificada);
		
		$dados['Titulo'] = 'Home';
		$dados['Page'] = 'Home';
		$this->load->view('Montar', $dados);
	}
	
	public function Comprovante()
	{
		$this->load->view('Meio/Comprovante2');
	}
	
	public function faq()
	{
		$dados['active'] = $this->uri->segment(2);
		
		$dados['Titulo'] = 'Faq';
		$dados['Page'] = 'Faq';
		$this->load->view('Montar', $dados);
	}
	
	public function contato()
	{
		$dados['Titulo'] = 'Contato';
		$dados['Page'] = 'Contato';
		$this->load->view('Montar', $dados);
	}
	public function enviar_email()
	{
		//Coletar dados
		$Nome = $this->input->post('nome');
		$Email = $this->input->post('email');
		$Titulo = $this->input->post('titulo');
		$Mensagem = $this->input->post('mensagem');
		
		//Configuração do email
		$config['useragent']        = 'PHPMailer';              // Mail engine switcher: 'CodeIgniter' or 'PHPMailer'
		$config['protocol']         = 'smtp';                   // 'mail', 'sendmail', or 'smtp'
		$config['mailpath']         = '/usr/sbin/sendmail';
		$config['smtp_host']        = 'mail.empireevents.com.br';
		$config['smtp_auth']        = true;                     // Whether to use SMTP authentication, boolean TRUE/FALSE. If this option is omited or if it is NULL, then SMTP authentication is used when both $config['smtp_user'] and $config['smtp_pass'] are non-empty strings.
		$config['smtp_user']        = 'contato@empireevents.com.br';
		$config['smtp_pass']        = 'ph(Av,e,j$]-';
		$config['smtp_port']        = 587;
		$config['smtp_timeout']     = 30;                       // (in seconds)
		$config['smtp_crypto']      = 'tls';                    // '' or 'tls' or 'ssl'
		$config['smtp_debug']       = 0;                        // PHPMailer's SMTP debug info level: 0 = off, 1 = commands, 2 = commands and data, 3 = as 2 plus connection status, 4 = low level data output.
		$config['debug_output']     = '';                       // PHPMailer's SMTP debug output: 'html', 'echo', 'error_log' or user defined function with parameter $str and $level. NULL or '' means 'echo' on CLI, 'html' otherwise.
		$config['smtp_auto_tls']    = true;                     // Whether to enable TLS encryption automatically if a server supports it, even if `smtp_crypto` is not set to 'tls'.
		$config['smtp_conn_options'] = array();                 // SMTP connection options, an array passed to the function stream_context_create() when connecting via SMTP.
		$config['wordwrap']         = true;
		$config['wrapchars']        = 76;
		$config['mailtype']         = 'html';                   // 'text' or 'html'
		$config['charset']          = null;                     // 'UTF-8', 'ISO-8859-15', ...; NULL (preferable) means config_item('charset'), i.e. the character set of the site.
		$config['validate']         = true;
		$config['priority']         = 3;                        // 1, 2, 3, 4, 5; on PHPMailer useragent NULL is a possible option, it means that X-priority header is not set at all, see https://github.com/PHPMailer/PHPMailer/issues/449
		$config['crlf']             = "\n";                     // "\r\n" or "\n" or "\r"
		$config['newline']          = "\n";                     // "\r\n" or "\n" or "\r"
		$config['bcc_batch_mode']   = false;
		$config['bcc_batch_size']   = 200;
		$config['encoding']         = '8bit';                   // The body encoding. For CodeIgniter: '8bit' or '7bit'. For PHPMailer: '8bit', '7bit', 'binary', 'base64', or 'quoted-printable'.
		
		//Inizializar configurações de email
		$this->email->initialize($config);
		
		//Enviar email
		$this->email->from('contato@empireevents.com.br');
		$this->email->to('contato@empireevents.com.br');
		$this->email->subject($Titulo);
		$this->email->message($Mensagem."<br></br><strong>De: </strong>".$Nome."<strong>Email: </strong>".$Email);
		
		//Verificar envio de email
		if($this->email->send()){
			$this->session->set_flashdata("mensagem", "<div class='alert alert-success' role='alert'><center>Email enviado com sucesso</center></div>");
		}else{
			$this->session->set_flashdata("mensagem", "<div class='alert alert-danger' role='alert'><center>Não foi possivel fazer o envio. Tente mais tarde.</center></div>");
		}
		
		//Redirecionar para contato
		$dados['Titulo'] = 'Contato';
		$dados['Page'] = 'Contato';
		$this->load->view('Montar', $dados);
	}
	
	public function mercado()
	{
		$dados['Titulo'] = 'Mercado';
		$dados['Page'] = 'Mercado';
		$this->load->view('Montar', $dados);
	}
	
	public function briefing()
	{
		$data_atual = date('Y-m-d');
		$data_modificada = strtotime($data_atual);
		$dados['data_minima'] = strtotime('+2 month', $data_modificada);
		$dados['data_maxima'] = strtotime('+1 year', $data_modificada);
		
		$dados['Titulo'] = 'Briefing';
		$dados['Page'] = 'Briefing';
		$this->load->view('Montar', $dados);
	}
	
	public function nossa_historia()
	{
		$dados['Titulo'] = 'Nossa Historia';
		$dados['Page'] = 'Nossa_Historia';
		$this->load->view('Montar', $dados);
	}
	
	public function guia_para_empresas()
	{
		$PDF = $this->load->view('Meio/Guia_para_empresas', '', TRUE);
		
		//Definir nome do arquivo	
		$Nome = 'guia_para_empresas.pdf';

		//Executar pdf
		$mpdf = new mPDF();
		$mpdf->WriteHTML($PDF);

		//Definir método
		$mpdf->Output($Nome, 'I');
	}
	
	public function cadastro()
	{
		$dados['Titulo'] = 'Cadastro';
		$dados['Page'] = 'Cadastro';
		$this->load->view('Montar', $dados);
	}
	
	public function termos_e_condicoes()
	{
		$dados['Titulo'] = 'Termos e Condições';
		$dados['Page'] = 'Termos_e_Condicoes';
		$this->load->view('Montar', $dados);
	}
	
	public function politica_de_privacidade()
	{
		$dados['Titulo'] = 'Politica de Privacidade';
		$dados['Page'] = 'Politica_de_Privacidade';
		$this->load->view('Montar', $dados);
	}

	public function login()
	{
		$dados['Titulo'] = 'Login';
		$dados['Page'] = 'Login';
		$this->load->view('Montar', $dados);
	}
	
	public function esqueceu_a_senha()
	{
		$dados['Titulo'] = 'Esqueceu a senha';
		$dados['Page'] = 'Esqueceu_a_Senha';
		$this->load->view('Montar', $dados);
	}
	
	public function altera_senha()
	{
		$dados['Titulo'] = 'Alteração de senha';
		$dados['Page'] = 'Alteracao_de_Senha';
		$this->load->view('Montar', $dados);
	}
	
	public function email_teste()
	{
		$this->load->view('Email_de_teste');
	}

}
