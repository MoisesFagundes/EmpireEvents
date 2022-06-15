            <?php
			$data_atual = date('Y-m-d');
			$data_modificada = strtotime($data_atual);
			$data_minima = strtotime('+2 month', $data_modificada);
			$data_maxima = strtotime('+1 year', $data_modificada);
			
			if($this->session->npedido){
				$cliente = $this->Mercado_model->buscar_dados_do_cliente($this->session->npedido);
				
				$botao = "<a href='".base_url('Mercado/atualizar_briefing')."'><button class='btn btn-primary btn-lg'>Atualizar</button></a>";
			}else{
				$botao = "<a href='".base_url('Briefing')."'><button class='btn btn-primary btn-lg'>Iniciar</button></a>";
			}
			
			?>
			<div class="modal fade" id="modal-filtro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
							</button>
							<h2 class="modal-title">Filtro</h2>
						</div>
						<div class="modal-body">
							<div class="registration-page-area bg-secondary">
								<div class="registration-details-area inner-page-padding">
									<form class="checkout-form-select2" method="POST" action="<?php echo base_url('Mercado/briefing') ?>">									
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
												<div class="form-group">
													<label for="tipoevento" class="control-label">Tipo de evento<span class="obrigatorio"> *</span></label>
													<div class="custom-select">
														<select name="tipoevento" class="select2" REQUIRED>
															<option value="">----</option>
															<option value="Aniversário" <?= $cliente['tipoevento'] ==  "Aniversário" ? "selected" : "" ?>>Aniversário</option>
															<option value="Aniversário infantil masculino" <?= $cliente['tipoevento'] ==  "Aniversário infantil masculino" ? "selected" : "" ?>>Aniversário infantil masculino</option>
															<option value="Aniversário infantil feminino" <?= $cliente['tipoevento'] ==  "Aniversário infantil feminino" ? "selected" : "" ?>>Aniversário infantil feminino</option>
															<option value="Casamento" <?= $cliente['tipoevento'] ==  "Casamento" ? "selected" : "" ?>>Casamento</option>
															<option value="Chá de bebê" <?= $cliente['tipoevento'] ==  "Chá de bebê" ? "selected" : "" ?>>Chá de bebê</option>
															<option value="Debutante" <?= $cliente['tipoevento'] ==  "Debutante" ? "selected" : "" ?>>Debutante</option>
															<option value="Festa" <?= $cliente['tipoevento'] ==  "Festa" ? "selected" : "" ?>>Festa</option>
															<option value="Formatura fundamental" <?= $cliente['tipoevento'] ==  "Formatura fundamental" ? "selected" : "" ?>>Formatura fundamental</option>
															<option value="Formatura ensino médio" <?= $cliente['tipoevento'] ==  "Formatura ensino médio" ? "selected" : "" ?>>Formatura ensino médio</option>
															<option value="Formatura superior" <?= $cliente['tipoevento'] ==  "Formatura superior" ? "selected" : "" ?>>Formatura superior</option>
															<option value="Feiras" <?= $cliente['tipoevento'] ==  "Feiras" ? "selected" : "" ?>>Feiras</option>
															<option value="Workshops" <?= $cliente['tipoevento'] ==  "Workshops" ? "selected" : "" ?>>Workshops</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
												<div class="form-group">
													<label for="participantes" class="control-label">Nº de participantes<span class="obrigatorio"> *</span></label>
													<input name="participantes" type="number" min="5" max="10000" step="5" class="form-control" value= "<?= $cliente['participantes'] ?>" REQUIRED>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
												<div class="form-group">
													<label for="expectativa_de_gastos" class="control-label">Expectativa de gastos<span class="obrigatorio"> *</span></label>
													 <div class="custom-select">
														<select name="expectativa_de_gastos" class="select2" REQUIRED>
															<option value="">----</option>
															<option value="Baixa" <?= $cliente['nivel'] ==  "Baixa" ? "selected" : "" ?>>Baixa</option>
															<option value="Média" <?= $cliente['nivel'] ==  "Média" ? "selected" : "" ?>>Média</option>
															<option value="Alta" <?= $cliente['nivel'] ==  "Alta" ? "selected" : "" ?>>Alta</option>
														</select>
													</div>
												</div>
											</div>
										</div>									
										<div class="row">
										   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
												<div class="form-group">
													<label for="data" class="control-label">Data<span class="obrigatorio"> *</span></label>
													<input name="data" type="date" min="<?php echo date('Y-m-d', $data_minima) ?>" max="<?php echo date('Y-m-d', $data_maxima)?>" class="form-control" value= "<?= $cliente['data'] ?>" REQUIRED>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
												<div class="form-group">
													<label for="horainicio" class="control-label">Hora de início<span class="obrigatorio"> *</span></label>
													<input name="horainicio" type="time" class="form-control" value= "<?= $cliente['horainicio'] ?>" REQUIRED>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
												<div class="form-group">
													<label for="horafim" class="control-label">Hora de encerramento<span class="obrigatorio"> *</span></label>
													<input name="horafim" type="time" class="form-control" value= "<?= $cliente['horafim'] ?>" REQUIRED>
												</div>
											</div>
										</div>									
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
												<div class="form-group">
													<label for="cidade" class="control-label">Cidade<span class="obrigatorio"> *</span></label>
													<div class="custom-select">
														<select name="cidade" class="select2" REQUIRED>
														    <option value="SP Capital" <?= $cliente['cidade'] ==  "SP Capital" ? "selected" : "" ?>>----</option>	
															<option value="SP Capital" <?= $cliente['cidade'] ==  "SP Capital" ? "selected" : "" ?>>SP Capital</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">                                           
												<div class="form-group">
													<label for="local" class="control-label">Local</label>
													<input name="local" type="text" class="form-control" value= "<?= $cliente['local'] ?>" maxlength="50" placeholder="Av.Paulista - 2.202">
												</div>
											</div>
										</div>									
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                         
												<div class="pLace-order">
													<center><a href="<?= base_url('Briefing') ?>"><button class='btn btn-primary btn-lg'>Filtrar</button></a></center>
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