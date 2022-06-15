        <div class="pagination-area bg-secondary">
			<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Esqueceu a senha</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="registration-page-area bg-secondary section-space-bottom">
			<div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                        <center><h2 class="title-section">Recuperação de senha</h2></center>
                        <div class="registration-details-area inner-page-padding">
						    <?php echo $this->session->mensagem ?>
                            <form method="POST" action="<?php echo base_url('Login/esqueceu_a_senha')?>">
                                <div class="row">
                                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">                                          
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
                                            <input id="email" name="email" type="mail" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" placeholder="meuemail@gmail.com" required>
											<div class="form-check">
												<input id="clientes" name="usuario" class="form-check-input" type="radio" value="pedidos" checked="checked">
												<label for="clientes" class="form-check-label">Cliente</label> 
												<input id="empresas" name="usuario" class="form-check-input" type="radio" value="empresas">
												<label for="empresas" class="form-check-label">Empresas</label>
											</div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">                            
                                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">                                           
                                        <div class="pLace-order">
                                            <button name="recuperar" type="submit" class="btn btn-primary btn-lg" >Recuperar</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>                      
				</div>
			</div>
		</div>
