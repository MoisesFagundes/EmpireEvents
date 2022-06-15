<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-05 14:22:03 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:22:06 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:22:14 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:22:15 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:22:29 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:22:29 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:23:15 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:23:16 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:25:08 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:25:09 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:25:38 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:25:40 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:27:43 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:27:44 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:42:04 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:42:06 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:42:25 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:42:27 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:42:41 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:42:43 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 14:42:57 --> 404 Page Not Found: FrondEnd/css
ERROR - 2022-05-05 14:42:59 --> 404 Page Not Found: FrondEnd/js
ERROR - 2022-05-05 17:20:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-5, 0' at line 5 - Invalid query: SELECT `data`, `valor_real`, `situacao`
FROM `solicitacao_de_pagamento`
WHERE `nempresa` IS NULL
ORDER BY `id` DESC
 LIMIT -5, 0
ERROR - 2022-05-05 17:32:27 --> Query error: Duplicate entry '0' for key 'PRIMARY' - Invalid query: INSERT INTO `solicitacao_de_pagamento` (`nempresa`, `nprotocolo`, `nome_do_comprovante`, `email`, `data`, `valor`, `comissao`, `valor_real`, `situacao`, `criado`) VALUES ('1', '567467', '13E39AFC-5408-4EF3-B7F6-1178A2DA31BD.jpeg', 'moises.fagundes98@gmail.com', '2022-05-30', '655.75', '15%', 557.3875, 'Em espera', '2022-05-05 17:32:27')
ERROR - 2022-05-05 17:35:15 --> Query error: Column 'nprotocolo' cannot be null - Invalid query: INSERT INTO `solicitacao_de_pagamento` (`nempresa`, `nprotocolo`, `nome_do_comprovante`, `email`, `data`, `valor`, `comissao`, `valor_real`, `situacao`, `criado`) VALUES ('1', NULL, NULL, NULL, NULL, '', '15%', 0, 'Em espera', '2022-05-05 17:35:15')
ERROR - 2022-05-05 17:35:49 --> Query error: Duplicate entry '0' for key 'PRIMARY' - Invalid query: INSERT INTO `solicitacao_de_pagamento` (`nempresa`, `nprotocolo`, `nome_do_comprovante`, `email`, `data`, `valor`, `comissao`, `valor_real`, `situacao`, `criado`) VALUES ('1', '567467', '13E39AFC-5408-4EF3-B7F6-1178A2DA31BD.jpeg', 'moises.fagundes98@gmail.com', '2022-05-30', '655.75', '15%', 557.3875, 'Em espera', '2022-05-05 17:35:49')
