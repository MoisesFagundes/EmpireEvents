<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercado_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->database();
				
	}

	public function inserir_cliente($array)
	{
		$this->db->insert('clientes' ,$array);
		
	}
	
	public function inserir_pedido($array)
	{
		$this->db->insert('pedidos' ,$array);
		
	}
	
	public function buscar_dados_do_pedido($npedido)
	{
		$this->db->select('tipoevento, participantes, nivel, cidade');
		$this->db->from('pedidos');
		$this->db->where('npedido', $npedido);
		$pedido = $this->db->get()->row_array();
		
		return $pedido;
		
	}
	
	public function buscar_dados_do_cliente($npedido)
	{
		$this->db->select('nome, tipoevento, participantes, nivel, data, horainicio, horafim, cidade, local, email, telefone');
		$this->db->from('pedidos');
		$this->db->where('npedido', $npedido);
		$pedido = $this->db->get()->row_array();
		
		return $pedido;
		
	}
	
	public function update_briefing($npedido, $array)
	{
		$this->db->set($array);
		$this->db->where('npedido', $npedido);
        $this->db->update('pedidos');
				
	}
	
	public function contar_pacotes_validos_no_carrinho_do_cliente($npedido)
	{
		$this->db->select('id');
		$this->db->from('carrinho');
		$this->db->where('npedido', $npedido);
		$this->db->where('situacao!=', '-----');
		$this->db->where('situacao!=', 'Recusado');
		$total_de_resultados = $this->db->count_all_results();
	
        return $total_de_resultados;

	}
	
	public function buscar_pacotes($nivel, $categoria, $tipoevento, $cidade, $participantes, $palavra_chave)
	{
		$this->db->select('npacote, nempresa, nomepacote, imagem, descricao, precopessoa, precohora, precofixo, nota');
		$this->db->from('pacotes');
		$this->db->like('nivel', $nivel);
		$this->db->like('categoria', $categoria);
		$this->db->like('tipoevento', $tipoevento);
		$this->db->like('localdeatuacao', $cidade);
		$this->db->like('tags', $palavra_chave);
		$this->db->where('capacidade_maxima >=', $participantes);
		$pacote = $this->db->get();
		
		return $pacote;
		
	}
	
	public function nota_empresas($nempresa)
	{
		$this->db->select('nota');
		$this->db->from('empresas');
		$this->db->where('nempresa', $nempresa);
		$notas = $this->db->get();
		
		return $notas;
		
	}
	
	public function buscar_dados_do_pacote($npacote)
	{
		$this->db->select('nempresa, nomepacote, imagem, descricao, precopessoa, precohora, precofixo, endereco');
		$this->db->from('pacotes');
		$this->db->where('npacote', $npacote);
		$pacotes = $this->db->get()->row_array();
		
		return $pacotes;
		
	}
	
	public function buscar_imagens_do_pacote($npacote)
	{
		$this->db->select('imagem');
		$this->db->from('imagens');
		$this->db->where('npacote', $npacote);
		$imagens = $this->db->get();
		
		return $imagens;
		
	}
	
	public function buscar_itens_do_pacote($npacote)
	{
		$this->db->select('item, quantidade, medida, multiplicavel');
		$this->db->from('itens');
		$this->db->where('npacote', $npacote);
		$itens = $this->db->get();
		
		return $itens;
		
	}
	
	public function buscar_dados_da_empresa($npacote)
	{
		$this->db->select('nomeempresa, cnpj');
		$this->db->from('pacotes');
		$this->db->join('empresas', 'pacotes.nempresa = empresas.nempresa');
		$this->db->where('npacote', $npacote);
		$empresa = $this->db->get()->row_array();
		
		return $empresa;
		
	}
	
	public function adicionar_pacote_ao_carrinho($array)
	{
		$this->db->insert('carrinho', $array);
		
		return TRUE;
		
	}
	
	public function buscar_pacotes_do_carrinho($npedido)
	{
		$this->db->select('id, nempresa, npacote, nomepacote, imagem, preco, situacao');
		$this->db->from('carrinho');
		$this->db->where('npedido', $npedido);
		$pacotes = $this->db->get();
		
		return $pacotes;
		
	}
	
	public function buscar_situacoes_dos_pacotes($npedido)
	{
		$this->db->select('situacao');
		$this->db->from('carrinho');
		$this->db->where('npedido', $npedido);
		$this->db->where('situacao!=', 'Recusado');
		$this->db->where('situacao!=', 'Cancelado');
		$situacao = $this->db->get();
		
		return $situacao;
		
	}
	
	public function buscar_telefones_das_empresas($npedido)
	{
		$this->db->select('telefone');
		$this->db->from('carrinho');
		$this->db->join('empresas', 'empresas.nempresa = carrinho.nempresa');
		$this->db->where('npedido', $npedido);
		$contatos = $this->db->get()->result_array();
		
		return $contatos;
		
	}
	
	public function calcular_valor_a_ser_pago($npedido)
	{
		$this->db->select_sum('preco');
		$this->db->from('carrinho');
		$this->db->where('npedido', $npedido);
		$this->db->where('situacao!=', 'Pago');
		$total = $this->db->get()->row_array();
		
		return $total;
		
	}

    public function deletar_pacote_do_carrinho($id)
	{
		$this->db->where('id', $id);
		$this->db->where('situacao!=', 'Pago');
		$this->db->where('situacao!=', 'Finalizado');
		$this->db->delete('carrinho');
		
	}
	
	public function buscar_emails_das_empresas($npedido)
	{
		$this->db->select('email');
		$this->db->from('carrinho');
		$this->db->join('empresas', 'empresas.nempresa = carrinho.nempresa');
		$this->db->where('npedido', $npedido);
		$this->db->where('situacao', '-----');
		$contatos = $this->db->get();
		
		return $contatos;
		
	}
	
	public function enviar_notificacao_de_compra($Emails, $Mensagem)
	{
		$this->email->from('notificacao@empireevents.com.br');
		$this->email->bcc($Emails);
		$this->email->subject('Notificação de compra');
		$this->email->message($Mensagem);
		$this->email->send();
		
	}
	
	public function alterar_situacao_para_enviado($npedido)
	{
		$this->db->set('situacao', 'Enviado');
		$this->db->set('criado_b', date('Y-m-d H:i:s'));
		$this->db->where('npedido', $npedido);
		$this->db->where('situacao', '-----');
        $this->db->update('carrinho');
		
	}
	
	public function adiar_evento($npedido, $data)
	{
		$this->db->set('data', $data);
		$this->db->where('npedido', $npedido);
        $this->db->update('pedidos');
		
	}
	
	 public function cancelar_evento($npedido)
	{
		$this->db->where('npedido', $npedido);
		$this->db->delete('pedidos');
		
	}
	
	public function buscar_nome_do_pagador($npedido)
	{
		$this->db->select('nome');
		$this->db->from('pedidos');
		$this->db->where('npedido', $npedido);
		$pagador = $this->db->get()->row_array();
		
		return $pagador;
		
	}

	public function inserir_nota_fiscal($array)
	{
        $this->db->insert('nota_fiscal', $array);

	}
	
	public function inserir_venda($array)
	{
		$this->db->insert('vendas', $array);
		
	}
	
	public function buscar_id_e_valor_a_ser_pago($npedido)
	{
		$this->db->select('id, valor');
		$this->db->from('vendas');
		$this->db->where('npedido', $npedido);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$valor = $this->db->get()->row_array();
		
		return $valor;
		
	}
	
	public function buscar_dados_do_cliente_nf($id)
	{
		$this->db->select('nome_completo, cpf, estado, cidade, cep, bairro, rua, numero');
		$this->db->from('nota_fiscal');
		$this->db->where('npedido', $id);

		$cliente = $this->db->get()->row_array();
		
		return $cliente;
		
	}

	public function verificar_protocolo($nprotocolo)
	{
		$this->db->select('protocolo');
		$this->db->from('carrinho');
		$this->db->where('nprotocolo', $nprotocolo);
		$resultado = $this->db->count_all_results();

		if($resultado >= 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
 }