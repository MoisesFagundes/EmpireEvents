<?php

   function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->database();
				
	}

	function marcar_recusado(){
		
		$ultima_data_valida = date('Y-m-d H:i:s', strtotime('-1 day', strtotime(date('Y-m-d H:i:s'))));

		$this->db->set('situacao', 'Recusado');
		$this->db->where('situacao', '-----');
		$this->db->where('criado_b <=' , $ultima_data_valida);
		$this->db->update('carrinho');

	}
?>