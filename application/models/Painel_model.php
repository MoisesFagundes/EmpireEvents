<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_model extends CI_Model 
{	
	function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->database();
		
	}
	
	public function inserir_empresa($array)
	{
		$this->db->insert('empresas' ,$array);
		
	}
	
	public function buscar_pedidos($nempresa, $hoje, $ultima_data_valida)
	{
		$this->db->select('id, nome, nomepacote, participantes, data, horainicio, horafim, situacao, criado_b');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('nempresa', $nempresa);
		$this->db->where('situacao !=', '-----');
		$this->db->where('situacao !=', 'Cancelado');
		$this->db->where("criado_b BETWEEN '$ultima_data_valida' AND '$hoje'");
		$pedidos = $this->db->get();
		
		return $pedidos;
		
	}
	
	public function adicionar_resposta($id, $resposta)
	{
		$this->db->set('situacao', $resposta);
		$this->db->where('id', $id);
        $this->db->update('carrinho');
		
	}
	
	public function buscar_pedidos_da_agenda($nempresa)
	{
		$this->db->select('id, nomepacote, data');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('nempresa', $nempresa);
		$this->db->where('situacao', 'Pago');
		$pedidos_da_agenda = $this->db->get();
		
		return $pedidos_da_agenda;
		
	}
	
	public function buscar_indentificadores($id)
	{
		$this->db->select('npedido, npacote, nomepacote');
		$this->db->from('carrinho');
		$this->db->where('id', $id);
		$indentificadores = $this->db->get()->row_array();
		
		return $indentificadores;
		
	}
	
	public function buscar_itens($npacote)
	{
		$this->db->select('item, quantidade, medida');
		$this->db->from('itens');
		$this->db->where('npacote', $npacote);
		$itens = $this->db->get();
		
		return $itens;
		
	}
	
	public function buscar_info_cliente($npedido)
	{
		$this->db->select('nome, participantes, horainicio, horafim, local, email, telefone');
		$this->db->from('pedidos');
		$this->db->where('npedido', $npedido);
		$info = $this->db->get()->row_array();
		
		return $info;
		
	}
	
	public function buscar_informacao1($id)
	{
		$this->db->select('npedido, nomepacote, preco');
		$this->db->from('carrinho');
		$this->db->where('id', $id);
		$informacao1 = $this->db->get()->row_array();
		
		return $informacao1;
		
	}
	
	public function buscar_informacao2($id)
	{
		$this->db->select('nprotocolo, nome, data, horainicio, cidade, local');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('id', $id);
		$informacao2 = $this->db->get()->row_array();
		
		return $informacao2;
		
	}
	
	public function buscar_informacao3($id)
	{
		$this->db->select('nomeempresa, cnpj');
		$this->db->from('carrinho');
		$this->db->join('empresas', 'carrinho.nempresa = empresas.nempresa');
		$this->db->where('id', $id);
		$informacao3 = $this->db->get()->row_array();
		
		return $informacao3;
		
	}
	
	public function buscar_historico_de_pagamento($nempresa, $inicio, $fim)
	{
		$this->db->select('data, valor_real, situacao');
		$this->db->from('solicitacao_de_pagamento');
		$this->db->where('nempresa', $nempresa);
		$this->db->order_by('id', 'DESC');
		$this->db->limit($fim, $inicio);
		$pagamentos = $this->db->get();
		
		return $pagamentos;
		
	}
	
	public function solicitar_pagamento($array)
	{
		$this->db->insert('solicitacao_de_pagamento', $array);
		
	}
	
	public function buscar_meus_pacotes($nempresa, $inicio, $total_de_anuncio)
	{
		$this->db->select('npacote, nempresa, nomepacote, imagem');
		$this->db->from('pacotes');
		$this->db->where('nempresa', $nempresa);
		$this->db->limit($total_de_anuncio, $inicio);
		$pacotes = $this->db->get();
		
		return $pacotes;
		
	}
	
	public function contar_meus_pacotes($nempresa)
	{
		$this->db->select('id');
		$this->db->from('pacotes');
		$this->db->where('nempresa', $nempresa);
		$total_de_resultados = $this->db->count_all_results();
		
		return $total_de_resultados;
		
	}
	
	public function inserir_pacote($array1)
	{
		$this->db->insert('pacotes', $array1);
		
	}
	
	public function inserir_imagens_do_pacote($array2)
	{
		$this->db->insert('imagens', $array2);
		
	}
	
	public function inserir_itens_do_pacote($array3)
	{
		$this->db->insert('itens', $array3);
		
	}

	public function inserir_estatisticas_dos_pacotes($array4)
	{
		$this->db->insert('estatisticas_dos_pacotes', $array4);
		
	}
	
	public function buscar_dados_do_pacote($npacote)
	{
		$this->db->select('nempresa, nomepacote, imagem, descricao, tags, tipoevento, nivel, precopessoa, precohora, precofixo, endereco, capacidade_maxima, categoria');
		$this->db->from('pacotes');
		$this->db->where('npacote', $npacote);
		$pacotes = $this->db->get()->row_array();
		
		return $pacotes;
		
	}
	
	public function buscar_itens_do_pacote($npacote)
	{
		$this->db->select('id, item, quantidade, medida, multiplicavel');
		$this->db->from('itens');
		$this->db->where('npacote', $npacote);
		$itens = $this->db->get()->result_array();
		
		return $itens;
		
	}
	
	public function atualizar_pacote($npacote, $array)
	{
		$this->db->set($array);
		$this->db->where('npacote', $npacote);
		$this->db->update('pacotes');
		
	}
	
	public function atualizar_itens_do_pacote($npacote, $array)
	{
		$this->db->set($array);
		$this->db->where('npacote', $npacote);
		$this->db->update('itens');
		
	}
	
	public function deletar_pacote($npacote, $nempresa)
	{
		$this->db->where('npacote', $npacote);
		$this->db->where('npacote', $nempresa);
		$this->db->delete('pacotes');
		
	}
	
	public function buscar_dados_da_empresa($nempresa)
	{
		$this->db->select('email, senha, telefone');
		$this->db->from('empresas');
		$this->db->where('nempresa', $nempresa);
		$dados_empresa = $this->db->get()->row_array();
		
		return $dados_empresa;
		
	}
	
	public function editar_dados_da_empresa($nempresa, $array)
	{
		$this->db->set($array);
		$this->db->where('nempresa', $nempresa);
		$this->db->update('empresas');
		
	}
	
	public function deletar_empresa($id)
	{
		$this->db->where('nempresa', $id);
		$this->db->delete('empresas');
		
	}

	public function buscar_faturamento_do_mes($nempresa, $mes)
	{
        $this->db->select_sum('preco');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('nempresa', $nempresa);
		$this->db->where('situacao', 'Pago');
		$this->db->like('data', $mes, 'after');
		$faturamento_do_mes = $this->db->get()->row_array();

		settype($faturamento_do_mes['preco'], 'double');

        return $faturamento_do_mes['preco'];

	}

	public function buscar_vendas_do_mes($nempresa, $mes)
	{
		$this->db->select('id');
		$this->db->from('carrinho');
		$this->db->join('pedidos', 'carrinho.npedido = pedidos.npedido');
		$this->db->where('nempresa', $nempresa);
		$this->db->where('situacao', 'Pago');
		$this->db->like('data', $mes, 'after');
		$vendas_do_mes = $this->db->count_all_results();

        return $vendas_do_mes;
	}
	
 }