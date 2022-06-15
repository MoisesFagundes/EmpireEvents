        <div class="pagination-area bg-secondary">
			<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Mude sua senha</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="registration-page-area bg-secondary section-space-bottom">
			<div class="container">
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                        <center><h2 class="title-section">Alteração de senha</h2></center>
                        <div class="registration-details-area inner-page-padding">
                            <form method="POST" action="<?php echo base_url('Form/alteracao_de_senha')?>">
                                <div class="row">
                                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">                                          
                                        <div class="form-group">
                                            <label for="senha" class="control-label">Senha<span class="obrigatorio"> *</span></label>
                                            <input id="senha" name="senha" type="password" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">                                          
                                        <div class="form-group">
                                            <label for="confimesuasenha" class="control-label">Confime sua senha<span class="obrigatorio"> *</span></label>
                                            <input id="confimesuasenha" name="confimesuasenha" type="password" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" required>
                                        </div>
                                    </div>
                                </div> 								
                                <div class="row">                            
                                    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12">                                           
                                        <div class="pLace-order">
                                            <button name="mudarsenha" type="submit" class="btn btn-primary btn-lg" >Mudar senha</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>                      
				</div>
			</div>
		</div>
