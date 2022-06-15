<?php
    function arredondar_time($hora)
	{
		$hora = str_replace(":", ".", $hora);
        $hora = explode(".", $hora);
		$hora[1] = $hora[1]/10;
		$hora[1] = round($hora[1]);
		$hora[1] = $hora[1]*10;
		$hora = array($hora[0], $hora[1]);
		$hora = implode(":", $hora);
		
		return $hora;
		
	}

    function duracao($data, $horainicio, $horafim){
		//Calcular duração
		$horainicio_str = strtotime($horainicio);
		$horafim_str = strtotime($horafim);
		$hora_inicio = $data." ".$horainicio;
		
		if($horainicio_str < $horafim_str)
		{
			$hora_fim = $data." ".$horafim;
		}else{
			$data = strtotime($data);
			$nova_data = strtotime('+1 day', $data);
			$nova_data_modificada = date('Y-m-d', $nova_data);
			$hora_fim = $nova_data_modificada." ".$horafim;
		}
			
		$hora_de_inicio = strtotime($hora_inicio);
		$hora_de_fim = strtotime($hora_fim);
				
		return $duracao = ($hora_de_inicio - $hora_de_fim) /-3600;
		
	}
	
	 function fazer_orcamento($quantidade_de_participantes, $preco_por_pessoa, $duracao, $preco_por_hora, $preco_fixo)
	{
		//Realizar o orçamento
		$valor = $quantidade_de_participantes*$preco_por_pessoa+$duracao*$preco_por_hora+$preco_fixo;
		$preco_final = number_format(round($valor), 2, ',', '.');
		
		return $valor;
		
	}
	
	function formato_brasileiro($valor)
	{
		//$valor = str_replace(array(",", "."), "", $valor);
        //$valor = $valor/100;		
		$valor = number_format($valor, 2, ',', '.');
		$valor = "R$".$valor;
		
		return $valor;
	}
	
	function limpar_decimais($valor)
	{
		$encontrar_caracteres = array(".", ",");
		$substituir_caracteres = array("", ".");
		$valor = str_replace($encontrar_caracteres, $substituir_caracteres, $valor);
		
		return $valor;
	}
	
	function geraSenha($tamanho, $maiusculas, $numeros, $simbolos)
	{
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';
		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;
		$len = strlen($caracteres);
	    for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
	    }
	    return $retorno;
	}
	
	function criptografar_senha($data)
	{
		$data_formato_br = date("d/m/Y", strtotime($data));
		$data_formato_numerico = str_replace("/", "", $data_formato_br);
		$senha_criptografada = md5($data_formato_numerico);
		
		return $senha_criptografada;
	}
	
	function contagem_de_tempo($criado)
	{
		//Receber dados
		$Data_hj = date('Y-m-d H:i:s');
		$Data_hj = strtotime($Data_hj);
		$Criado= strtotime($criado);

		//Subtrair datas
		$Tempo = $Data_hj - $Criado;

		//Calcular tempo em minuto
		IF ($Tempo >= 120 and $Tempo < 3600){
			$Duracao = floor($Tempo/60);
		}
		//Calcular tempo em horas
		IF ($Tempo >= 3600 and $Tempo < 86400){
			$Duracao = floor($Tempo/3600);
		}
		//Calcular tempo em dias
		IF ($Tempo >= 86400){
			$Duracao = floor($Tempo/86400);
		}

		//Definir complemento no singular ou plural

		IF ($Tempo < 120){
			$Complemento = " 1 minuto atrás";
		}

		IF ($Tempo >= 120 and $Tempo < 3600){
			$Complemento = $Duracao." minutos atrás";
		}

		IF ($Tempo >= 3600 and $Tempo < 7200){
			$Complemento = $Duracao." hora atrás";
		}

		IF ($Tempo >= 7200 and $Tempo < 86400){
			$Complemento = $Duracao." horas atrás";
		}

		IF ($Tempo >= 86400 and $Tempo < 172800){
			$Complemento = $Duracao." dia atrás";
		}

		IF ($Tempo >= 172800){
			$Complemento = $Duracao." dias atrás";
		}


        return $Tempo = $Complemento;
	}
	
	function delTree($dir)
	{ 
      $files = array_diff(scandir($dir), array('.','..')); 
      foreach ($files as $file) { 
        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
      } 
      return rmdir($dir); 
    }
	
	function calcular_comissao($valor_original, $metodo)
	{		
		
		if($metodo == "Meio-a-Meio"){
			if($valor_original < 1000){
				$dados['valor_final'] = (($valor_original/100) * 7.5) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 7.5);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 1000 and $valor_original < 3000){
				$dados['valor_final'] = (($valor_original/100) * 5) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 5);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 3000){
				$dados['valor_final'] = (($valor_original/100) * 2.5) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 2.5);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}
		}elseif($metodo == "Total_Fornecedor"){
			if($valor_original < 1000){
				$dados['valor_final'] = $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 15);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 1000 and $valor_original < 3000){
				$dados['valor_final'] = $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 10);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 3000){
				$dados['valor_final'] = $valor_original;
				$dados['valor_a_pagar'] = $valor_original - (($valor_original/100) * 5);
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}
		}elseif($metodo == "Total_Cliente"){
			if($valor_original < 1000){
				$dados['valor_final'] = (($valor_original/100) * 15) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original;
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 1000 and $valor_original < 3000){
				$dados['valor_final'] = (($valor_original/100) * 10) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original;
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}elseif($valor_original >= 3000){
				$dados['valor_final'] = (($valor_original/100) * 5) + $valor_original;
				$dados['valor_a_pagar'] = $valor_original;
				$dados['comissao_nominal'] = $dados['valor_final'] - $dados['valor_a_pagar'];
				$dados['percentual_de_comissao'] = ($dados['comissao_nominal'] * 100)/$dados['valor_final'];
				
				return $dados;
				
			}
		}
		
	}
	
	/*
	Referência para a criação da function
	https://www.gerarpix.com.br/
	https://www.youtube.com/watch?v=eO11iFgrdCA
	https://www.bcb.gov.br/content/estabilidadefinanceira/forumpireunioes/AnexoI-PadroesParaIniciacaodoPix.pdf
	*/	
	function gerar_pix($id, $valor)
	{
		//Setar informações do pagamento
		define('chave_pix', '35884233000189'); //TEM QUE SER CNPJ OU VAI MUDAR A ESTRUTURA DO CÓDIGO
		define('nome_do_recebedor', 'EMPIRE EVENTS LTDA'); // ATÉ 25 CARACTERES
		define('cidade_do_recebedor', 'SAO PAULO'); // ATÉ 15 CARACTERES
		
	    //Calcular tamanho dos parametros
		$tamanho_id = str_pad(strlen($id), 2, '0', STR_PAD_LEFT);
		$tamanho_chave = str_pad(strlen(chave_pix), 2, '0', STR_PAD_LEFT);
		$tamanho_nome_do_recebedor = str_pad(strlen(nome_do_recebedor), 2, '0', STR_PAD_LEFT);
		$tamanho_cidade_do_recebedor = str_pad(strlen(cidade_do_recebedor), 2, '0', STR_PAD_LEFT);
	    $tamanho_valor = str_pad(strlen($valor), 2, '0', STR_PAD_LEFT);

		//Gerar cogigo PIX prévio
		$codigo_pre = "00020126360014BR.GOV.BCB.PIX01".$tamanho_chave.chave_pix."52040000530398654".$tamanho_valor.$valor."5802BR59".$tamanho_nome_do_recebedor.nome_do_recebedor."60".$tamanho_cidade_do_recebedor.cidade_do_recebedor."621005".$tamanho_id.$id."6304";
		
		
		//DADOS DEFINIDOS PELO BACEN
		$polinomio = 0x1021;
		$resultado = 0xFFFF;

		//CHECKSUM
		if (($length = strlen($codigo_pre)) > 0) {
			for ($offset = 0; $offset < $length; $offset++) {
				$resultado ^= (ord($codigo_pre[$offset]) << 8);
				for ($bitwise = 0; $bitwise < 8; $bitwise++) {
					if (($resultado <<= 1) & 0x10000) $resultado ^= $polinomio;
					$resultado &= 0xFFFF;
				}
			}
			
			$CRC16 = strtoupper(dechex($resultado));
		   
	    }
		
		//Gerar cogigo PIX final
		$codigo_final = $codigo_pre.$CRC16;
		
		return $codigo_final;
		
	}

	//Envio de sitemap para motores de buscar
	function myCurl($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return $httpCode;
	}

?>