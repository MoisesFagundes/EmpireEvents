            <div class="modal fade" id="modal-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
							</button>
							<h2 class="modal-title">Cadastro</h2>
						</div>
						<div class="modal-body">
							<div class="registration-page-area bg-secondary">
								<div class="registration-details-area inner-page-padding">
									<form class="checkout-form-select2" method="POST" action="<?= base_url('Mercado/nota_fiscal') ?>">								
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="nome" class="control-label">Nome completo<span class="obrigatorio"> *</span></label>
													<input name="nome" type="text" class="form-control" value= "<?= set_value('nome') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="cpf" class="control-label">CPF<span class="obrigatorio"> *</span></label>
													<input name="cpf" type="text" class="form-control" value= "<?= set_value('cpf') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="estado" class="control-label">Estado<span class="obrigatorio"> *</span></label>
													<input name="estado" type="text" class="form-control" value= "<?= set_value('estado') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="cidade" class="control-label">Cidade<span class="obrigatorio"> *</span></label>
													<input name="cidade" type="text" class="form-control" value= "<?= set_value('cidade') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="cep" class="control-label">CEP<span class="obrigatorio"> *</span></label>
													<input name="cep" type="text" class="form-control" value= "<?= set_value('cep') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="bairro" class="control-label">Bairro<span class="obrigatorio"> *</span></label>
													<input name="bairro" type="text" class="form-control" value= "<?= set_value('bairro') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="rua" class="control-label">Rua<span class="obrigatorio"> *</span></label>
													<input name="rua" type="text" class="form-control" value= "<?= set_value('rua') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="numero" class="control-label">Número<span class="obrigatorio"> *</span></label>
													<input name="numero" type="text" class="form-control" value= "<?= set_value('numero') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
												<div class="form-group">
													<label for="complemento" class="control-label">Complemento<span class="obrigatorio"> *</span></label>
													<input name="complemento" type="text" class="form-control" value= "<?= set_value('complemento') ?>" maxlength="255">
												</div>
											</div>
										</div>																
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
												<div class="form-group">
													<label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
													<input name="email" type="email" class="form-control" value= "<?= set_value('email') ?>" maxlength="255" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">	
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                  
												<div class="form-group">
													<label for="telefone" class="control-label">Telefone<span class="obrigatorio"> *</span></label>
													<input id="telefone" name="telefone" type="tel" class="form-control" value= "<?= set_value('telefone') ?>" placeholder="" REQUIRED>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-check">
													<input name="caixa" type="checkbox" class="checkbox-inline"  REQUIRED>
													<label for="caixa" class="form-check-label">Aceitar <a href="<?= base_url('Termos_e_Condicoes') ?>">Termos e condições.</a></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
												<div class="pLace-order">
													<center><button name="cadastrar" type="submit" class="btn btn-primary btn-lg" onclick="return validar()">Cadastrar</button></center>
												</div>
											</div>
										</div>									                                    
									</form>                      
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>