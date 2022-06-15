        <div class="pagination-area bg-secondary">
				<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Contato</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="cart-page-area about-page-area bg-secondary">
			<div class="container">
			    <h2 class="title-section">Contato</h2>
				<div class="row fundo">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 desktop">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.1872825565956!2d-46.3806582855449!3d-23.48976286483604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce635cf1a52aad%3A0x88bb55966d9d118!2sR.%20Rio%20Gatimim%2C%20103%20-%20Jardim%20das%20Oliveiras%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008111-240!5e0!3m2!1spt-BR!2sbr!4v1599262023959!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desktop">
						<div class="contact-us-left">
							<h2>Informações de contato</h2>      
							<ul>
								<li>
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<h4 class="title-bar-medium-left">Endereço</h4>
									<p>Rua Rio Gatimim, 103 - Jardim das Oliveiras, São Paulo - SP</p> 
								</li>
								<li>
									<i class="fa fa-whatsapp" aria-hidden="true"></i>
									<h4 class="title-bar-medium-left">Telefone</h4>
									<p>(11) 96916 - 0058</p>   
								</li>
								<li>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h4 class="title-bar-medium-left">E-mail</h4>
									<p>contato@empireevents.com.br</p>   
								</li>      
							</ul>
						</div>  
					</div>					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="contact-us-right"> 
							<h2>Escreva sua mensagem...</h2>    
							<div class="contact-form">
							    <?php echo $this->session->mensagem ?> 
								<form method="POST" action="<?php echo base_url('Page/enviar_email')?>">
									<fieldset>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input name="nome" type="text" class="form-control" value= "<?php echo set_value('nome'); ?>" maxlength="50" placeholder="Nome *" id="form-name" data-error="Nome é requirido" REQUIRED>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input name="email" type="email" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" placeholder="Email *" id="form-email" data-error="Email é requirido" REQUIRED>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											 <div class="col-sm-12">
												<div class="form-group">
													<input name="titulo" type="text"class="form-control" value= "<?php echo set_value('titulo'); ?>" maxlength="50" placeholder="Título *" id="form-subject" data-error="Título é requirido" REQUIRED>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<textarea name="mensagem" class="textarea form-control" value= "<?php echo set_value('mensagem'); ?>" rows="7" cols="20" maxlength="1200" placeholder="Mensagem *"  id="form-message"  data-error="Mensagem é requirido" REQUIRED></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
												<div class="form-group margin-bottom-none">
													<button name="enviar" type="submit" class="btn btn-primary btn-lg">Enviar</button>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
												<div class='form-response'></div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
