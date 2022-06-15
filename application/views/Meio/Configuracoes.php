   							<!-- Validar senhas -->
							<script type="text/javascript">
								function validar(){
									var senha = alterar.senha.value;
									var confimarsenha = alterar.confimarsenha.value;
									
									if(senha.length >= 1 && senha.length <= 5){
										alert('Preencha o campo senha com no minimo 6 caracteres');
										alterar.senha.focus();
										return false;
									}
									
									if(confimarsenha.length >= 1 && confimarsenha.length <= 5){
										alert('Preencha o campo confimar senha com no minimo 6 caracteres');
										alterar.confimarsenha.focus();
										return false;
									}
									
									if (senha != confimarsenha) {
										alert('Senhas diferentes');
										alterar.senha.focus();
										return false;
									}
								}
							</script>
							<div class="registration-page-area bg-secondary section-space-bottom">
								<div class="registration-details-area">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<h3 class="title-section">Mudanças de Perfil</h3>
										<div class="withdrawal-wrapper inner-page-padding">
											<form id="alterar" name="alterar" method="POST" action="<?= base_url('PainelControlls/editar_usuario') ?>">
											    <div class="row">
													<div class="form-group">
														<label for="email" class="control-label">Novo email<i style= color:#C8C8C8 > (opcional)</i></label>
														<input id="email" name="email" type="email" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50">
													</div>
												</div>
                                                <div class="row">
													<div class="form-group">
														<label for="senha" class="control-label">Nova senha<i style= color:#C8C8C8 > (opcional)</i></label>
														<input id="senha" name="senha" type="password" class="form-control" value= "<?php echo set_value('senha'); ?>" maxlength="50">
													</div>
												</div>
                                                <div class="row">
													<div class="form-group">
														<label for="confimarsenha" class="control-label">Confimar senha<i style= color:#C8C8C8 > (opcional)</i></label>
														<input id="confimarsenha" name="confimarsenha" type="password" class="form-control" value= "<?php echo set_value('confimarsenha'); ?>" maxlength="50">
													</div>
												</div>
                                                <div class="row">
													<div class="form-group">
														<label for="telefone" class="control-label">Novo telefone<i style= color:#C8C8C8 > (opcional)</i></label>
														<input id="telefone" name="telefone" type="text" class="form-control" value= "<?php echo set_value('telefone'); ?>" placeholder="(11) 5555 - 5555">
													</div>
												</div>												
												<button name="alterar" type="submit" class="btn btn-primary btn-lg" onclick="return validar()">Alterar</button><br><br>
											</form>
											<!-- <center><a href="<?= base_url('PainelControlls/deletar_empresa') ?>"><i class="fa fa-close"></i>Apagar usuario</a></center> -->
										</div>  
									</div>
								</div>	
							</div>