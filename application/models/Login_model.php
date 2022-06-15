<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->database();
				
	}
	
	public function buscar_email($Tabela, $Email)
	{
	    $this->db->select('email');
		$this->db->from($Tabela);
		$this->db->where('email', $Email);
		$this->db->limit(1);
		$Email_DB = $this->db->get()->row_array();

        return $Email_DB;
		
	}
	
	public function buscar_dados_do_pedido($Email, $Senha)
	{
		$this->db->select('npedido, participantes, duracao');
		$this->db->from('pedidos');
		$this->db->where('email', $Email);
		$this->db->where('senha', $Senha);
		$this->db->limit(1);
		$Dados_DB = $this->db->get()->row_array();
		
		return $Dados_DB;
		
	}
	
	public function buscar_dados_da_empresa($Email, $Senha)
	{
		$this->db->select('nempresa, cidades');
		$this->db->from('empresas');
		$this->db->where('email', $Email);
		$this->db->where('senha', $Senha);
		$this->db->limit(1);
		$Dados_DB = $this->db->get()->row_array();
		
		return $Dados_DB;
		
	}
	
	public function buscar_ultimo_email($Tabela, $Email)
	{
		$this->db->select('Email');
		$this->db->from($Tabela);
		$this->db->where('Email', $Email);
		$this->db->order_by('criado', 'DESC');
		$this->db->limit(1);
		$Resultado = $this->db->get()->row_array();
		
		return $Resultado;
		
	}
	
	public function editar_senha($Tabela, $Email, $Nova_senha_db)
	{
		$this->db->set('senha', $Nova_senha_db);
		$this->db->where('email', $Email);
		$this->db->update($Tabela);
	}

}
