<?php

use ctodobom\APInterPHP\BancoInter;
use ctodobom\APInterPHP\TokenRequest;
use ctodobom\APInterPHP\BancoInterException;
use ctodobom\APInterPHP\Cobranca\Boleto;
use ctodobom\APInterPHP\Cobranca\Pagador;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// dados do correntista
$conta = $_ENV['INTER_CONTA'];
$cnpj = $_ENV['INTER_CNPJ'];
$certificado = $_ENV['INTER_CERTIFICATE_PATH'];
$chavePrivada = $_ENV['INTER_PRIVATE_KEY_PATH'];

$banco = new BancoInter($conta, $certificado, $chavePrivada, new TokenRequest($_ENV['INTER_CLIENT_ID'],$_ENV['INTER_CLIENT_SECRET'],'boleto-cobranca.read boleto-cobranca.write'));

// Se a chave privada estiver encriptada no disco
// $banco->setKeyPassword("senhadachave");

$pagador = new Pagador();
$pagador->setTipoPessoa(Pagador::PESSOA_FISICA);
$pagador->setNome($cliente['nome_completo']);
$pagador->setEndereco($cliente['rua']);
$pagador->setNumero($cliente['numero']);
$pagador->setBairro($cliente['bairro']);
$pagador->setCidade($cliente['cidade']);
$pagador->setCep($cliente['cep']);
$pagador->setCpfCnpj($cliente['cpf']);
$pagador->setUf($cliente['estado']);

$boleto = new Boleto();
$boleto->setPagador($pagador);
$boleto->setSeuNumero($venda['id']);
$boleto->setValorNominal($venda['valor']);
$boleto->setDataVencimento(date_add(new DateTime() , new DateInterval("P10D"))->format('Y-m-d'));


$banco->createBoleto($boleto);

$pdf = $banco->getPdfBoleto($boleto->getNossoNumero());
redirect($pdf);
