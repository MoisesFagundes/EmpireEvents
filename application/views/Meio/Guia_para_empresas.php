<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
    	<style>
    	    body {
              height: 100%;
              font-family: 'Roboto', sans-serif;
              line-height: 1.5;
              font-weight: 400;
              vertical-align: baseline;
              background: #FFFFFF;
              color: #444444;
            }
            h2 {
              font-size: 28px;
            }
            p {
              margin: 0 0 20px 0;
              font-family: 'Arial';
              font-size: 24px;
            }
            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto
            }
    	</style>
	</head>
	<body>
		<p>Saiba como a Empire Events pode te ajudar a vender mais, é bem simples você se cadastra em
            nossa plataforma em menos de 5 minutos e se torna uma empresa parceira. Em seguida você já
            poderá anunciar seus produtos.</p> 
            <p>Trabalhamos com um sistema de P.A (Público-alvo), nele você
            define alguns pré-requisitos, para quais públicos são seus pacotes.
            </p>
		<h2>Por exemplo:</h2>
		<p>Você poderá definir com base em quais tipos de eventos será realizado ou por expectativa de gastos dos
            clientes, e também por região, como em quais cidades estará disponibilizando seus
            serviços.</p>
		<h2>E o preço como é que fica?</h2>
		<p>Essa é uma das melhores partes, o orçamento é calculado de forma automática.</p>
		<p>No momento da criação de seus pacotes, você definirá 3 critérios que formarão seu preço, são
            eles, preço fixo (PF), é uma espécie de preço base, preço por participante (PP), é o valor para
            cada participante do evento, e por último o preço por hora (PH), calculado pelo tempo de
            duração do evento. Não é necessário preencher todos os critérios caso não queira.
            </p>
		<p>Então a formação de preço fica assim:</p>
		<h2><center>PP x Total de participantes + PH x Duração + PF</center></h2>
		<p>Um exemplo, imagine que você definiu esses valores:</p>
		<p><strong>Preço por participante:</strong> R$20,00</p>
		<p><strong>Preço por hora:</strong> R$05,00</p>
		<p><strong>Preço fixo:</strong> R$150,00</p>
		<p>Num evento que tem 50 participantes e durará 4 horas, o preço final seria esse: <strong>R$1.170,00.</strong></p>
		<p>Tudo isso feito de forma automática em poucos segundos.</p>
		<h2>Funcionamos por meio de pacotes dinâmicos</h2>
		<p>O que significa que ele acompanha às necessidades do cliente.</p>
		<h2>Por exemplo:</h2>
		<p>Imagine um evento para 50 pessoas, e a contratação de um buffet, a quantidade de itens disposto será essa:</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/menu.png') ?>" alt="img" ></center>
		<p>Agora imagine o mesmo evento, só que agora com 100 pessoas, onde o mesmo buffet foi contratado, oferecendo o mesmo pacote.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/menu_dobro.png') ?>" alt="img" ></center>
		<p>A quantidade de itens tem que ser o dobro, já que agora temos o dobro de participantes.</p>
		<p>É só durante o momento da criação dos pacotes, marcar a opção valor multiplicável. Assim ele poderá aumentar e diminuir sua quantidade de itens conforme o total de participantes.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/valor_multiplicavel.png') ?>" alt="img" ></center>
		<h2>E como que eu faço para receber e acompanhar meus pedidos?</h2>
		<p>É muito simples, sempre que alguém comprar um de seus pacotes o notificaremos por e-mail.</p>
		<p>Logo em seguida é só logar em sua conta, ir na aba pedidos, ler a descrição do evento e decidir se aceitará ou não o pedido.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/pedidos.png') ?>" alt="img" ></center>
		<h2>E para acompanhar?</h2>
		<p>O acompanhamento poderá ser feito na aba agenda, lá você terá uma visão geral de todos os pedidos aceitos e pagos, ou seja, todos os eventos marcados.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/Agenda.png') ?>" alt="img" ></center>
		<p> Ao clicar no ícone do evento, poderá ver mais detalhes do evento. Informações como endereço do evento, nome do contratante, telefone, total de itens do pacote</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/detalhes_do_evento.png') ?>" alt="img" ></center>
		<h2>E sobre os pagamentos?</h2>
		<p>Para receber você deverá nos enviar uma foto ou scanner do comprovante de prestação de serviço assinado pelo cliente ou por um representante. Que poderá ser impresso na guia detalhes do evento.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/emitir_comprovante.png') ?>" alt="img" ></center>
		<p>Para enviar entre na aba pagamentos e preencha o formulário com o número de protocolo, valor, data e um anexo do comprovante de prestação de serviço.</p>
		<center><img class="img-responsive" src="<?= base_url('FrondEnd/img/receber_pagamento.png') ?>" alt="img" ></center>
		<p>O envio do pagamento será feito em até 5 dias úteis por e-mail, então terá que ter uma conta ativa no paypal. Caso não tenha no primeiro envio de pagamento será solicitado que crie uma. O valor repassado já estará descontado o percentual de 15% sobre o total, valor que cobramos como comissão de venda.</p>
	</body>
</html>
