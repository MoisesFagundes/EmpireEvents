   							<script>
							    if(<?php isset($this->session->menssagem)?>){
                                    alert(<?php echo $this->session->menssagem ?>);									
								}
							</script>
							<div class="registration-page-area bg-secondary section-space-bottom">
								<div class="registration-details-area">
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<h3 class="title-section">Pedido de pagamento</h3>
										<div class="withdrawal-wrapper inner-page-padding">
											<form method="POST" action="<?= base_url('PainelControlls/solicitar_pagamento') ?>" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="nprotocolo" class="control-label">Nº Protocolo<span class="obrigatorio"> *</span></label>
															<input id="nprotocolo" name="nprotocolo" type="text" class="form-control" value= "<?php echo set_value('nprotocolo'); ?>" REQUIRED>
														</div>	
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
															<input id="email" name="email" type="email" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" REQUIRED>
														</div>	
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="valor" class="control-label">Valor<span class="obrigatorio"> *</span></label>
															<input id="valor" name="valor" type="text" class="form-control" value= "<?php echo set_value('valor'); ?>" REQUIRED>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="data" class="control-label">Data do Evento<span class="obrigatorio"> *</span></label>
															<input name="data" type="date" class="form-control" value= "<?php echo set_value('data'); ?>" REQUIRED>
														</div>	
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="comprovante" class="control-label">Comprovante<span class="obrigatorio"> *</span></label>
															<input name="comprovante" type="file" class="form-control" value= "<?php echo set_value('comprovante'); ?>" REQUIRED>
														</div>	
													</div>
												</div>                                    
												<button name="Enviar" type="submit" class="btn btn-primary btn-lg">Enviar</button>
											</form>
										</div>  
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<h2 class="title-section toppayment">Historico de pagamentos</h2>
										<div class="withdrawal-wrapper inner-page-padding">
											<div class="table-responsive">
												<table class="table table-striped">
												    <thead class="thead-dark">
														<tr>
															<th scope="col">Data</th>
															<th scope="col">Valor</th>
															<th scope="col">Situação</th>
														</tr>
													</thead>
													<tbody>
														<?php
														if($Pagamentos['Pagamentos']->num_rows() > 0){
															foreach($Pagamentos['Pagamentos']->result_array() as $linha){?>
																<tr>
																	<td><?php echo date("d/m/Y", strtotime($linha['data'])) ?></td>
																	<td><?php echo formato_brasileiro($linha['valor_real']) ?></td>
																	<td><span class="obrigatorio" ><?php echo $linha['situacao'] ?></span></td>
																</tr><?php
															}	
														}else{
														    echo "<center class='margin-pagamentos' ><spam>Nada a ser exibido.</spam></center>";
														}
														?>
													</tbody>
												</table>
											</div>
											<a href="<?php echo base_url('PainelControlls/passar_pagamentos/'.$Pagamentos['mais']) ?>"><button name="+" type="submit" class="btn btn-primary">+</button></a>  <a href="<?php echo base_url('PainelControlls/passar_pagamentos/'.$Pagamentos['menos']) ?>" ><button name="-"type="submit" class="btn btn-primary">-</button></a>
										</div>
									</div>
								</div>	
							</div>	