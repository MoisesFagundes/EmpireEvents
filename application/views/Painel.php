<?php 
    if(!isset($this->session->nempresa)){
		redirect('Home', location);
	}
?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <?php $this->load->view('Template/Head') ?>

		<!-- Google Charts -->
		
		<!-- Full calendar -->
		<link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/core/main.min.css')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/daygrid/main.min.css')?>"/>
        <script src="<?php echo base_url('FrondEnd/js/core/main.min.js')?>"></script>
        <script src="<?php echo base_url('FrondEnd/js/interaction/main.min.js')?>"></script>
        <script src="<?php echo base_url('FrondEnd/js/daygrid/main.min.js')?>"></script>
        <script src="<?php echo base_url('FrondEnd/js/core/locales/pt-br.js')?>"></script>
    </head>
    <body>
		<header>                
			<?php $this->load->view('Template/Header') ?> 
		</header>
		<div class="pagination-area bg-secondary">
			<div class="container">
			    <a class="right mobile sair" href="<?= base_url('Sair') ?>">Sair</a>
				<div class="pagination-wrapper">
					<ul>
						<li>Painel</li>
					</ul>
				</div>
				<a class="feedback-desktop desktop" href="mailto:feedback@empireevents.com.br?subject=Tenho%20uma%20ideia%20de%20melhoria:"><i class="fa fa-comment" aria-hidden="true"></i> Feedback</a>
			</div>  
		</div>
		<div class="profile-page-area bg-secondary section-space-bottom">                
			<div class="container">
				<div class="row profile-wrapper">
				    <div class="desktop">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<ul class="profile-title">
								<li <?php echo $active == 1 ? 'class=active' : ""?> value="1"><a href="#Pedidos" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>Pedidos</a></li>
								<li <?php echo $active == 2 ? 'class=active' : ""?> value="2"><a href="#Agenda" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar" aria-hidden="true"></i>Agenda</a></li>
								<li <?php echo $active == 3 ? 'class=active' : ""?> value="3"><a href="#Pagamentos" data-toggle="tab" aria-expanded="false"><i class="fa fa-usd" aria-hidden="true"></i>Pagamentos</a></li>
								<li <?php echo $active == 4 ? 'class=active' : ""?> value="4"><a href="#Meus_Pacotes" data-toggle="tab" aria-expanded="false"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Meus pacotes</a></li>
								<li <?php echo $active == 5 ? 'class=active' : ""?> value="5"><a href="#Minhas_Estatisticas" data-toggle="tab" aria-expanded="false"><i class="fa fa-bar-chart" aria-hidden="true"></i>Minhas estatísticas</a></li>
								<li <?php echo $active == 6 ? 'class=active' : ""?> value="6"><a href="#Configurações" data-toggle="tab" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i>Configurações</a></li>
							</ul>
						</div>
					</div>					
					<div class="tab-content">
					    <div class="tab-pane fade <?php echo $active == 1 ? 'active in' : ""?>" id="Pedidos">
						    <?php $this->load->view('Meio/Pedidos') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 2 ? 'active in' : ""?>" id="Agenda">
						    <?php $this->load->view('Meio/Agenda') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 3 ? 'active in' : ""?>" id="Pagamentos">
						    <?php $this->load->view('Meio/Pagamentos') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 4 ? 'active in' : ""?>" id="Meus_Pacotes">
						    <?php $this->load->view('Meio/Meus_Pacotes') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 7 ? 'active in' : ""?>" id="Criar_Pacote">
						    <?php $this->load->view('Meio/Criar_Pacote') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 5 ? 'active in' : ""?>" id="Minhas_Estatisticas">
						    <?php $this->load->view('Meio/Minhas_Estatisticas') ?>
						</div>
						<div class="tab-pane fade <?php echo $active == 6 ? 'active in' : ""?>" id="Configurações">
						    <?php $this->load->view('Meio/Configuracoes') ?>
						</div>
					</div>
                </div>
            </div>
			<center><a class="feedback-mobile mobile" href="mailto:feedback@empireevents.com.br?subject=Tenho%20uma%20ideia%20de%20melhoria:"><i class="fa fa-comment" aria-hidden="true"></i> Ajude-nos a melhorar nossa plataforma!</a></center>
		</div>
		<script>
			$("li").click(function() {
				//Pegar variável check-point
				var checkpoint = $(this).val();
				
				//Enviar variável check-point por Ajax.
				$.ajax({
				type: "POST" ,
				url: "<?= base_url('PainelControlls/checkpoint') ?>",
				data: {'checkpoint': checkpoint},
				dataType: 'html',
				});
				
			});
		</script>	
		<footer>
			<?php $this->load->view('Template/Footer') ?>
		</footer>
		
		<?php $this->load->view('Template/Js') ?>
    </body>
</html>
