<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-28 13:09:05 --> Query error: Unknown column 'nome' in 'field list' - Invalid query: INSERT INTO `clientes` (`nome`, `email`, `senha`, `telefone`, `criado`) VALUES ('Moises Fagundes', 'moises.fagundes98@gmail.com', 'aade5caa3d9399b41b659fc29ac66e03', '(11) 98954-9064', '2022-05-28 13:09:05')
ERROR - 2022-05-28 13:10:17 --> Query error: Unknown column 'criado' in 'field list' - Invalid query: INSERT INTO `clientes` (`nome_completo`, `email`, `senha`, `telefone`, `criado`) VALUES ('Moises Fagundes', 'moises.fagundes98@gmail.com', 'aade5caa3d9399b41b659fc29ac66e03', '(11) 98954-9064', '2022-05-28 13:10:17')
ERROR - 2022-05-28 13:36:01 --> Query error: Unknown column 'nome' in 'field list' - Invalid query: SELECT `nome`, `tipoevento`, `participantes`, `nivel`, `data`, `horainicio`, `horafim`, `cidade`, `local`, `email`, `telefone`
FROM `pedidos`
WHERE `npedido` = '2'
