							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h2 class="title-section">Gráfico de oferta e demanda</h2>
								<div class="withdrawal-wrapper inner-page-padding">
									<script type="text/javascript">    
										
										<?php
											$mes = array("Jarneiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julio", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
											$valor = array("150", "200", "178", "230", "70", "125", "345", "225", "50", "305", "172", "237",);
										?>
										
										google.charts.load('current', {'packages':['corechart']});
										google.charts.setOnLoadCallback(drawChart);
										
										function drawChart() {
										
											var data = new google.visualization.DataTable();
											
											data.addColumn('string', 'Data');
											data.addColumn('number', 'Oferta');
											
											data.addRows(12);
											
											<?php
											for ($i = 0; $i < 12; $i++) {
											?>
												data.setValue(<?php echo $i ?>, 0, '<?php echo $mes[$i] ?>');
												data.setValue(<?php echo $i ?>, 1, '<?php echo $valor[$i] ?>');
											<?php
											}
											?>

											var options = {
												width: 500, height: 250,
												colors: ['red'],
												legend: { position: 'bottom' }
											};

											var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
											
											chart.draw(data, options);
											
										}

									</script>
									<div id="chart_div"></div>
								</div>							
							</div>
							<div class="registration-page-area bg-secondary section-space-bottom">
								<div class="registration-details-area">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<h3 class="title-section">Pesquisa</h3>
										<div class="withdrawal-wrapper inner-page-padding">
											<form id="personal-info-form" method="POST" action="#">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="tipoevento" class="control-label">Tipo de evento<span class="obrigatorio"> *</span></label>
															<div class="custom-select">
																<select name="tipoevento" class="select2" value= "<?php echo set_value('tipoevento'); ?>" REQUIRED>
																	<option value="">----</option>
																	<option value="Aniversário">Aniversário</option>
																	<option value="Aniversário infantil masculino">Aniversário infantil masculino</option>
																	<option value="Aniversário infantil feminino">Aniversário infantil feminino</option>
																	<option value="Casamento">Casamento</option>
																	<option value="Chá de bebê">Chá de bebê</option>
																	<option value="Festa">Festa</option>
																	<option value="Formatura fundamental">Formatura fundamental</option>
																	<option value="Formatura ensino médio">Formatura ensino médio</option>
																	<option value="Formatura superior">Formatura superior</option>
																	<option value="Feiras">Feiras</option>
																	<option value="Workshops">Workshops</option>
																	<option value="Debutante">Debutante</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group"> 
															<label for="categoria" class="control-label">Categoria<span class="obrigatorio"> *</span></label>
															<div class="custom-select">
																<select name="categoria" class="select2" value= "<?php echo set_value('tipofornecedor'); ?>" required>
																	<option value="">----</option>
																	<option value="Salao">salão</option>
																	<option value="atendimento-e-recepcao">Atendimento e recepção</option>
																	<option value="Buffet">buffet</option>
																	<option value="doces-e-salgados">Doces e salgados</option>
																	<option value="churrasco">Churrasco</option>
																	<option value="som-e-iluminacao">Som e iluminação</option>
																	<option value="moveis-e-objetos">Móveis e objetos</option>
																	<option value="flores-e-arranjos">Flores e arranjos</option>
																	<option value="foto-e-filmagem">Foto e filmagem</option>
																	<option value="locacao-de-brinquedos">Locação de brinquedos</option>
																	<option value="brindes-e-lembrancinhas">Brindes e lembrancinhas</option>
																	<option value="musicos-e-bandas">Musicos e bandas</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="expectativa_de_gastos" class="control-label">Expectativa de gastos<span class="obrigatorio"> *</span></label>
															 <div class="custom-select">
																<select name="expectativa_de_gastos" class="select2" value= "<?php echo set_value('nivel'); ?>" REQUIRED>
																	<option value="">----</option>
																	<option value="Baixa">Baixa</option>
																	<option value="Média">Média</option>
																	<option value="Alta">Alta</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="form-group">
															<label for="cidade" class="control-label">Cidade<span class="obrigatorio"> *</span></label>
															<div class="custom-select">
																<select id="cidade" name="cidade" class='select2' value= "<?php echo set_value('cidade'); ?>" required>
																	<option value="">----</option>
																	<option value="SP(Capital)">SP(Capital)</option>                                            
																</select>
															</div>
														</div>
													</div>
												</div>                                    
												<button name="Pesquisar" type="submit" class="btn btn-primary btn-block">Pesquisar</button>
											</form>
										</div>  
									</div>
								</div>	
							</div>	