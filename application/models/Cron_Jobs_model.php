<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_Jobs_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->database();
				
	}

    public function buscar_pacotes()
    {

    $this->db->select('npacote, nempresa, modificado');
    $this->db->from('pacotes');
    $pacotes = $this->db->get()->result_array();

    return $pacotes;

    }

    public function buscar_imagens($npacote)
    {

    $this->db->select('imagem');
    $this->db->from('imagens');
    $this->db->where('npacote', $npacote);
    $imagens = $this->db->get()->result_array();

    return $imagens;

    }

}