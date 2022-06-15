			<div id="header2" class="header2-area">
			    <div class="header-top-bar">
                    <div class="container">
                        <div class="row">                         
                            <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
                                <div class="logo-area">
                                    <img class="img-logo" src="<?php echo base_url('FrondEnd/img/old-school-vintage-logo-sticker.png') ?>" alt="logo">
                                </div>
                            </div>
                            <?php 
							if(!isset($_SESSION['npedido']) and (!isset($_SESSION['nempresa']))){
							   echo	"<div class='botao-de-login'>
										<div class='col-lg-10 col-md-10 col-sm-9 col-xs-12'>
											<div class='profile-notification'>                                                                                    
												<a href='".base_url('Login')."'><button id='Login-button' class='btn btn-primary'>Login</button></a>
											</div>
										</div>
									</div>";
							}else{
							   echo	"<div class='botao-de-login'>
										<div class='col-lg-10 col-md-10 col-sm-9 col-xs-12'>
											<div class='profile-notification'>                                                                                    
												<a href='".base_url('Sair')."'><button id='Sair-button' class='btn btn-primary'>Sair</button></a>
											</div>
										</div>
									</div>";
							}
                            ?>							
                        </div>                          
                    </div>
                </div>
				<?php 
				if($Titulo == "Painel"){ 
				echo "<div class='main-menu-area bg-primaryText' id=''>
						<div class='container'>
							<nav id='desktop-nav'>
								<ul>
									<li>
										<p class='painel-titulo'>Painel</p>
									</li>
								</ul>
							</nav>
						</div>
					  </div>
					  <!-- Mobile Menu Area Start -->
						<div class='mobile-menu-area'>
							<div class='container'>
								<div class='row'>
									<div class='col-md-12'>
										<div class='mobile-menu'>
											<nav id='dropdown'>
												<ul class='profile-title'>
													<li value='1'><a href='#Pedidos' data-toggle='tab' aria-expanded='false'><i class='fa fa-user' aria-hidden='true'></i> Pedidos</a></li>
													<li><a href='#Agenda' data-toggle='tab' aria-expanded='false'><i class='fa fa-calendar' aria-hidden='true'></i> Agenda</a></li>
													<li><a href='#Pagamentos' data-toggle='tab' aria-expanded='false'><i class='fa fa-usd' aria-hidden='true'></i> Pagamentos</a></li>
													<li><a href='#Meus_Pacotes' data-toggle='tab' aria-expanded='false'><i class='fa fa-shopping-basket' aria-hidden='true'></i> Meus pacotes</a></li>
													<li><a href='#Minhas_Estatisticas' data-toggle='tab' aria-expanded='false'><i class='fa fa-bar-chart' aria-hidden='true'></i> Minhas estatísticas</a></li>
													<li><a href='#Configurações' data-toggle='tab' aria-expanded='false'><i class='fa fa-cog' aria-hidden='true'></i> Configurações</a></li>
												</ul>
											</nav>
										</div>           
									</div>
								</div>
							</div>
						</div>";
				}elseif($Titulo == "Mercado" or $Titulo == "Pagina de anuncio"){
				echo "<div class='main-menu-area bg-primaryText' id=''>
						<div class='container'>
						    <div class='col-lg-10 col-md-10 col-sm-10 col-xs-10'>
								<nav id='desktop-nav'>
									<ul>
										<li>
											<a href='".base_url('Home')."'>Home</a>
										</li>
										<li>
											<a href='".base_url('Mercado/1/locacao-de-espaco/relevancia/')."'>Mercado</a>
										</li>
										<li>
											<a href='".base_url('Faq/1')."'>FAQ</a>
										</li>
										<li>
											<a href='".base_url('Contato')."'>Contato</a>
										</li>
									</ul>
								</nav>
						    </div>
                            <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>
							    <a data-toggle='modal' data-target='#modal-briefing'><i class='carrinho fa fa-solid fa-filter' aria-hidden='true'></i></a>
							    <a href='".base_url('Carrinho')."'><i class='carrinho fa fa-shopping-cart' aria-hidden='true'></i>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area Start -->
				<div class='mobile-menu-area'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-12'>
								<div class='mobile-menu'>
									<nav id='dropdown'>
										<ul>
											<li>
												<a href='".base_url('Home')."'>Home</a>
											</li>
											<li>
												<a href='".base_url('Mercado/1/locacao-de-espaco/relevancia/')."'>Mercado</a>
											</li>
											<li>
												<a href='".base_url('Faq/1')."'>FAQ</a>
											</li>
											<li>
												<a href='".base_url('Contato')."'>Contato</a>
											</li>
											<li>
											    <a href='".base_url('Login')."'>Login</a>
										    </li>
										</ul>
									</nav>
								</div>           
							</div>
						</div>
					</div>
				</div>";	
				}else{
				echo "<div class='main-menu-area bg-primaryText' id=''>
						<div class='container'>
							<nav id='desktop-nav'>
								<ul>
									<li>
										<a href='".base_url('Home')."'>Home</a>
									</li>
									<li>
										<a href='".base_url('Mercado/1/locacao-de-espaco/relevancia/')."'>Mercado</a>
									</li>
									<li>
										<a href='".base_url('Faq/1')."'>FAQ</a>
									</li>
									<li>
										<a href='".base_url('Contato')."'>Contato</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area Start -->
				<div class='mobile-menu-area'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-12'>
								<div class='mobile-menu'>
									<nav id='dropdown'>
										<ul>
										    <li>
												<a href='".base_url('Home')."'>Home</a>
											</li>
											<li>
												<a href='".base_url('Mercado/1/locacao-de-espaco/relevancia/')."'>Mercado</a>
											</li>
											<li>
												<a href='".base_url('Faq/1')."'>FAQ</a>
											</li>
											<li>
												<a href='".base_url('Contato')."'>Contato</a>
											</li>
											<li>
											    <a href='".base_url('Login')."'>Login</a>
										    </li>
										</ul>
									</nav>
								</div>           
							</div>
						</div>
					</div>
				</div>";
				}?>				
			<div class="inner-banner-area">
				<div class="container">
					<div class="inner-banner-wrapper">
					<?php
					    if($Page == "Mercado"){
							echo "<div class='banner-search-area input-group'>
							        <form method='POST' action='".base_url('Mercado/buscar_palavra_chave/'.$pagina.'/'.$categoria.'/'.$ordem)."'>
                                        <div class='form-group'>									
											<div class='input-group'>
											  <input name='palavra-chave' class='form-control' type='text' placeholder='buscar por palavra-chave' aria-label='Search'>
											</div>
									    </div>
									</form>	
								</div>";
						}
					?>
					</div>                       
				</div>
			</div>		