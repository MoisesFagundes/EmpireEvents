							<div class="registration-page-area bg-secondary section-space-bottom">
								<div class="registration-details-area">
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<div class="fundo-geral">
										    <a href="#Meus_Pacotes" data-toggle="tab"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></br></br>
											<form class="checkout-form-select2" method="POST" action="<?= base_url('Painel/inserir_pacote') ?>" enctype="multipart/form-data">								
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                          
														<div class="form-group">
															<label for="nomepacote" class="control-label">Título<span class="obrigatorio"> *</span></label>
															<input name="nomepacote" type="text" class="form-control" value= "<?php echo set_value('nomepacote'); ?>" maxlength="40" REQUIRED>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                          
														<div class="form-group">
															<label for="categoria" class="control-label">Categoria<span class="obrigatorio"> *</span></label>
															<div class="custom-select">
																<select id="categoria" name="categoria" class="select2" value= "<?php echo set_value('tipofornecedor'); ?>" required>
																	<option value="">-----</option>
																	<option value="locacao-de-espaco">Locação de espaço</option>
																	<option value="alimentacao-e-bebidas">Alimentação e bebidas</option>
																	<option value="som-e-iluminacao">Som e iluminação</option>
																	<option value="decoracao">Decoração</option>
																	<option value="flores-e-arranjos">Flores e arranjos</option>
																	<option value="foto-e-filmagem">Foto e filmagem</option>
																	<option value="locacao-de-brinquedos">Locação de brinquedos</option>
																	<option value="brindes-e-lembrancinhas">Brindes e lembrancinhas</option>
																	<option value="musicos-e-bandas">Músicos e bandas</option>
																	<option value="entretenimento">Entretenimento</option>
																</select>
															</div>	
														</div>
													</div>                                
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
														<div class="form-group">
															<label for="imagem" class="control-label">Imagens<span class="obrigatorio"> *</span></label>
															<input name="imagem[]" type="file" class="form-control" value= "<?php echo set_value('imagem'); ?>" multiple="multiple" REQUIRED>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
														<div class="form-group">
															<label for="descricao" class="control-label">Descrição<span class="obrigatorio"> *</span></label>
															<textarea name="descricao" class="form-control" value= "<?php echo set_value('descricao'); ?>" rows="5" maxlength="600" placeholder="Digite seu texto..." REQUIRED></textarea>
														</div>
													</div>
												</div>
												<div id="add-input1"></div>
												<script>

												$('#categoria').on('change', function(){

													var escolha = $(this).val();
													
													if(escolha == "locacao-de-espaco"){
																											
														$('#add-input1').append('<div id="adicionar" class="row"><div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><div class="form-group"><label for="endereco" class="control-label">Endereço<span class="obrigatorio"> *</span></label><input name="endereco" class="form-control" value="" maxlength="100" placeholder="Digite o endereço do local..." REQUIRED></div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="form-group"><label for="capacidade_maxima" class="control-label">Capacidade máxima<span class="obrigatorio"> *</span></label><input name="capacidade_maxima" type="number" class="form-control" value="" max="5000" placeholder="Número máximo de participantes" REQUIRED></div></div></div>');
														
													}

													if(escolha != "locacao-de-espaco"){
												   
														$('#adicionar').remove();

													}		
														
												});

												</script>
												<fieldset>
                                                    <legend>Definições de P.A:</legend>												
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="tipoevento" class="control-label">Tipos de eventos<span class="obrigatorio"> *</span></label>
																<div class="custom-select">
																	<select name="tipoevento[]" class="selectpicker" value= "<?php echo set_value('tipoevento'); ?>" multiple REQUIRED>
																		<option value="">----</option>
																		<option value="Aniversário">Aniversário</option>
																		<option value="Aniversário infantil masculino">Aniversário infantil masculino</option>
																		<option value="Aniversário infantil feminino">Aniversário infantil feminino</option>
																		<option value="Casamento">Casamento</option>
																		<option value="Chá de bebê">Chá de bebê</option>
																		<option value="Debutante">Debutante</option>
																		<option value="Festa">Festa</option>
																		<option value="Formatura fundamental">Formatura fundamental</option>
																		<option value="Formatura ensino médio">Formatura ensino médio</option>
																		<option value="Formatura superior">Formatura superior</option>
																		<option value="Feiras">Feiras</option>
																		<option value="Workshops">Workshops</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="expectativa_de_gastos" class="control-label">Nível<span class="obrigatorio"> *</span></label>
																 <div class="custom-select">
																	<select name="expectativa_de_gastos" class="select2" value= "<?php echo set_value('nivel'); ?>" REQUIRED>
																		<option value="">----</option>
																		<option value="Baixa">Econômico</option>
																		<option value="Média">Intermediário</option>
																		<option value="Alta">Luxo</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="tags" class="control-label">Tags<span class="obrigatorio"> *</span></label>
																<input name="tags" type="text" class="form-control" value= "<?php echo set_value('tags'); ?>" maxlength="100" placeholder="Adicione tags..." data-role="tagsinput" REQUIRED>
															</div>
														</div>
												    </div>
												</fieldset>	
												<fieldset>
                                                    <legend>Lista de produtos:</legend>
													<div class="row">
													   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
															<div class="form-group">
																<label for="item" class="control-label">Item<span class="obrigatorio"> *</span></label>
																<input name="item[]" type="text" class="form-control" value= "<?php echo set_value('item'); ?>" maxlength="50" placeholder="Nome do produto">
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
															<div class="form-group">
																<label for="quantidade" class="control-label">Quantidade<span class="obrigatorio"> *</span></label>
																<input name="quantidade[]" type="number" class="form-control" value= "<?php echo set_value('quantidade'); ?>" min="0" step="0.01" max="5000" placeholder="100">
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
															<div class="form-group">
																<label for="medida" class="control-label">Medida<span class="obrigatorio"> *</span></label>
																<div class="custom-select">
																	<select name="medida[]" class="select2" value= "<?php echo set_value('medida'); ?>">
																		<option value="">----</option>
																		<option value="unidade">unidade</option>
																		<option value="kg">kg</option>
																		<option value="milhar">milhar</option>
																		<option value="duzia">duzia</option>
																		<option value="litro">litro</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2 col-xs-10">
														    <label class="control-label"></label>
															<div class="form-check">
																<input name="multiplicavel[]" type="checkbox" class="checkbox-inline" value="1">
																<label for="multiplicavel" class="form-check-label">⠀Auto-ajuste</label><i class="pergunta fa fa-question-circle" data-container="body" data-toggle="popover" data-placement="top" title="Auto-ajuste" data-content="********************************" aria-hidden="true"></i>
															</div>
														</div>
														<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
														    <button id="add-campo" type="button" class="inserer">+</button>
														</div>	
													</div>
													<div id="add-input"></div>
													<script>
														var cont = 1;
														//https://api.jquery.com/click/
														$("#add-campo").click(function () {
															cont++;
															//https://api.jquery.com/append/
															$("#add-input").append('<div id="campo' + cont + '" class="row"><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="form-group"><label for="item" class="control-label">Item<span class="obrigatorio"> *</span></label><input name="item[]" type="text" class="form-control" value= "<?php echo set_value('item'); ?>" maxlength="50" placeholder="Nome do produto"></div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="form-group"><label for="quantidade" class="control-label">Quantidade<span class="obrigatorio"> *</span></label><input name="quantidade[]" type="number" class="form-control" value= "<?php echo set_value('quantidade'); ?>" min="0" step="0.01" max="5000" placeholder="100"></div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="form-group"><label for="medida" class="control-label">Medida<span class="obrigatorio"> *</span></label><div class="custom-select"><select name="medida[]" class="select2" value= "<?php echo set_value('medida'); ?>"><option value="">----</option><option value="unidade">unidade</option><option value="kg">kg</option><option value="milhar">milhar</option><option value="duzia">duzia</option><option value="litro">litro</option></select></div></div></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-10"><label class="control-label"></label><div class="form-check"><input name="multiplicavel[]" type="checkbox" class="checkbox-inline" value="1"><label for="multiplicavel" class="form-check-label">⠀Auto-ajuste</label></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-2"><button id="' + cont + '" class="apagar" type="button">-</button></div></div>');
														});
														
														$('form').on('click', '.apagar', function () {
															var button_id = $(this).attr("id");
															$('#campo' + button_id + '').remove();
														});
													</script>
												</fieldset>
                                                <fieldset>
                                                    <legend>Orçamento:</legend>												
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="precopessoa" class="control-label">Preço por pessoa<span class="obrigatorio"> *</span></label>
																<input id="precopessoa" name="precopessoa" type="text" class="form-control" value= "<?php echo set_value('precopessoa'); ?>" placeholder="$00.00" >
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="precohora" class="control-label">Preço por hora<span class="obrigatorio"> *</span></label>
																<input id="precohora" name="precohora" type="text" class="form-control" value= "<?php echo set_value('precohora'); ?>" placeholder="$00.00" >
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
															<div class="form-group">
																<label for="precofixo" class="control-label">Preço base<span class="obrigatorio"> *</span></label>
																<input id="precofixo" name="precofixo" type="text" class="form-control" value= "<?php echo set_value('precofixo'); ?>" placeholder="$00.00" >
															</div>
														</div>
													</div>
												</fieldset>	
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
														<div class="pLace-order">
															<button type="submit" class="btn btn-primary btn-lg">Criar</button>
														</div>
													</div>
												</div>									                                    
											</form> 
										</div>
									</div>
								</div>	
							</div>
							<script>
								$(function () {
								  $('[data-toggle="popover"]').popover()
								})
							</script>