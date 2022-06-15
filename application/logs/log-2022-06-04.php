<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-04 10:24:14 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 10:26:33 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 10:26:35 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 10:32:34 --> Query error: Column 'npacote' in field list is ambiguous - Invalid query: SELECT `nempresa`, `npacote`, `modificado`, `imagem`
FROM `pacotes`
JOIN `imagens` ON `pacotes`.`npacote` = `imagens`.`npacote`
ERROR - 2022-06-04 10:34:33 --> Query error: Column 'npacote' in field list is ambiguous - Invalid query: SELECT `nempresa`, `npacote`, `modificado`, `imagem`
FROM `pacotes`
JOIN `imagens` ON `imagens`.`npacote` = `pacotes`.`npacote`
ERROR - 2022-06-04 10:37:20 --> Query error: Column 'npacote' in field list is ambiguous - Invalid query: SELECT `nempresa`, `npacote`, `modificado`, `imagem`
FROM `pacotes`
LEFT JOIN `imagens` ON `pacotes`.`npacote` = `imagens`.`npacote`
ERROR - 2022-06-04 10:40:23 --> Query error: Column 'npacote' in field list is ambiguous - Invalid query: SELECT `nempresa`, `npacote`, `modificado`, `imagem`
FROM `imagens`
JOIN `pacotes` ON `imagens`.`npacote` = `pacotes`.`npacote`
ERROR - 2022-06-04 10:42:34 --> Query error: Column 'npacote' in field list is ambiguous - Invalid query: SELECT `npacote`, `nempresa`, `imagem`, `modificado`
FROM `imagens`
JOIN `pacotes` ON `imagens`.`npacote` = `pacotes`.`npacote`
ERROR - 2022-06-04 10:51:35 --> Severity: error --> Exception: Too few arguments to function Cron_Jobs_model::buscar_imagens(), 0 passed in C:\xampp\htdocs\EmpireEvents\application\controllers\Cron_Jobs.php on line 25 and exactly 1 expected C:\xampp\htdocs\EmpireEvents\application\models\Cron_Jobs_model.php 25
ERROR - 2022-06-04 10:52:07 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\sitemap.php 13
ERROR - 2022-06-04 10:57:45 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 10:58:16 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 10:58:26 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 12
ERROR - 2022-06-04 11:03:43 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 11:05:14 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 12:54:07 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp\htdocs\EmpireEvents\application\views\Gerador_de_Sitemap.php 15
ERROR - 2022-06-04 13:14:23 --> Severity: error --> Exception: syntax error, unexpected '$dados' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\EmpireEvents\application\controllers\Cron_Jobs.php 36
ERROR - 2022-06-04 13:27:12 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\EmpireEvents\application\controllers\Cron_Jobs.php 30
ERROR - 2022-06-04 13:46:30 --> Severity: error --> Exception: Cannot use assign-op operators with string offsets C:\xampp\htdocs\EmpireEvents\application\controllers\Cron_Jobs.php 31
