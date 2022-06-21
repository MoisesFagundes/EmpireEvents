<html>
    <head>
		<meta charset="UTF-8"/>
		<title><?= $Informacao1['npedido'] ?></title>
		
		<style>	
		h1 {	
          font-family: 'Arial';
          font-size: 36px;
          color: #222222;
          font-weight: 500;
          margin-top: 35px;
          margin-bottom: 30px;
        }
        p {
          font-family: 'Arial';
          font-size: 24px;
          color: #444444;
          text-transform: capitalize;
          font-weight: 500;
          line-height: 1.5;
        }
		.protocolo {
		  text-align: right;
		  margin-right: 25px;
		}
		</style>
		
	</head>
	<body>
	    <p class="protocolo"><b>Protocolo: </b><?= $Informacao2['nprotocolo'] ?></p>
		<img src="<?= base_url('FrondEnd/img/logo_transparent - Copy.png') ?>" alt="logo" >
		<h1>Comprovante de prestação de serviço</h1>
		<p>Eu <?= $Informacao2['nome'] ?> declaro que a empresa <?= $Informacao3['nomeempresa'] ?> registrada com o CNPJ <?= $Informacao3['cnpj'] ?>, entregou o produto de nome <?= $Informacao1['nomepacote'] ?> no valor de <?= formato_brasileiro($Informacao1['preco']) ?> no dia <?= date("d/m/Y", strtotime($Informacao2['data'])) ?> e no local combinado na <?= $Informacao2['local'] ?> dentro do horário máximo de <?= substr($Informacao2['horainicio'], 0, -3) ?>.</p>
		<p>Ao assinar estou ciente que estarei autorizando a liberação do pagamento a empresa prestadora de serviço.</p>
		<p></p>
		<p></p>
		<p></p>
		<p><?= $Informacao2['cidade'] ?>, <?= strftime('%d de %B de %Y', strtotime($Informacao2['data'])) ?></p>
		<p></p>
		<p></p>
		<p></p>
		<p><b>Assinatura:</b> ______________________________</p>		
	</body>
</html>