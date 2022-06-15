        <div class="pagination-area bg-secondary">
				<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
							<li><a href="<?php echo base_url('Mercado/1/locacao-de-espaco/relevancia/') ?>">Mercado</a><span> -</span></li>
                            <li><a href="<?php echo base_url('Carrinho')?>">Carrinho</a><span> -</span></li>
						<li>Finalizar</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="about-page-area bg-secondary section-space-bottom">
			<div class="container">
				<h2 class="title-section">Pagamento</h2>
				<div class="inner-page-details inner-page-padding">
				    <center><img src="<?= base_url('FrondEnd/img/paymento.jpg') ?>" class="img-responsive" alt="imagem" ></center></br></br>
					<div class="row">
                        <div class="col align-self-start">
					        <strong><h2>Escolha uma forma de pagamento:</h2></strong>
						</div>
					</div>
                    <div class="row">					
						<div class="col-lg-offset-8 col-lg-4 col-md-offset-8 col-md-4 col-sm-offset-8 col-sm-4 col-xs-offset-8 col-xs-4">                                          
						    <span><span class="asterisco">Total: </span><?php echo formato_brasileiro($valor) ?></span>
						</div>	
					</div>
					<div class="tab-content">
						<div class="panel-group help-page-wrapper" id="accordion">
							<div class="panel panel-default">
							    <div class="panel-heading">
									<div class="panel-title">
										<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#1c">
										   Cadastro
										</a>
									</div>
								</div>
								<div aria-expanded="false" id="1c" role="tabpanel" class="panel-collapse collapse">
									<div class="panel-body">
									    <div class="registration-page-area bg-secondary">
											<div class="registration-details-area fundo-branco">
												<form class="checkout-form-select2" method="POST" action="<?= base_url('Mercado/nota_fiscal') ?>">								
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
															<div class="form-group">
																<label for="nome_completo" class="control-label">Nome completo<span class="obrigatorio"> *</span></label>
																<input name="nome_completo" type="text" class="form-control" value= "<?= set_value('nome') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
															<div class="form-group">
																<label for="cpf" class="control-label">CPF<span class="obrigatorio"> *</span></label>
																<input id="cpf" name="cpf" type="text" class="form-control" value= "<?= set_value('cpf') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="cep" class="control-label">CEP<span class="obrigatorio"> *</span></label>
																<input id="cep" name="cep" type="text" class="form-control" value= "<?= set_value('cep') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="estado" class="control-label">Estado<span class="obrigatorio"> *</span></label>
																<input id="uf" name="estado" type="text" class="form-control" value= "<?= set_value('estado') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="cidade" class="control-label">Cidade<span class="obrigatorio"> *</span></label>
																<input id="cidade" name="cidade" type="text" class="form-control" value= "<?= set_value('cidade') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="bairro" class="control-label">Bairro<span class="obrigatorio"> *</span></label>
																<input id="bairro" name="bairro" type="text" class="form-control" value= "<?= set_value('bairro') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="rua" class="control-label">Rua<span class="obrigatorio"> *</span></label>
																<input id="rua" name="rua" type="text" class="form-control" value= "<?= set_value('rua') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
															<div class="form-group">
																<label for="numero" class="control-label">Número<span class="obrigatorio"> *</span></label>
																<input name="numero" type="text" class="form-control" value= "<?= set_value('numero') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
													</div>																
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
															<div class="form-group">
																<label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
																<input name="email" type="email" class="form-control" value= "<?= set_value('email') ?>" maxlength="255" REQUIRED>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                  
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
							<div class="panel panel-default">
							    <div class="panel-heading">
									<div class="panel-title">
										<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#pagamentos">
										   Formas de Pagamentos
										</a>
									</div>
								</div>
								<div aria-expanded="true" id="pagamentos" role="tabpanel" class="collapse">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">
												<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#1">
												PIX
												</a>
											</div>
										</div>
										<div aria-expanded="true" id="1" role="tabpanel" class="collapse">
											<div class="panel-body">
												<?= $qr_code ?>
												<div class="box-pix">
												<p id="pix" class="invisivel"><?= $pix_code ?></p>
													<center><p><?= substr($pix_code, 0, 38) ?> <i id="copia" onclick="copy('#pix')" class="copia-pix fa fa-copy" aria-hidden="true"></i></p></center>
												</div>	
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">
												<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#3">
												Boleto
												</a>
											</div>
										</div>
										<div aria-expanded="false" id="3" role="tabpanel" class="collapse">
											<div class="panel-body">
												<p>Clique aqui para <a href="<?= base_url('Mercado/gerar_boleto/'.$npedido)?>" target="_blank">gerar boleto</a>.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">
												<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#4">
												Boleto parcelado
												</a>
											</div>
										</div>
										<div aria-expanded="false" id="4" role="tabpanel" class="collapse">
											<div class="panel-body">
												<p>Clique aqui para <a href="#">gerar boleto</a>.</p>
											</div>
										</div>
									</div>
	                            </div>		
	                        </div>	
						</div>
	                </div>									
				</div>				
			</div>  
		</div>
		<!-- Adicionando Javascript -->
		<script>

		$(document).ready(function() {

			function limpa_formulário_cep() {
				// Limpa valores do formulário de cep.
				$("#rua").val("");
				$("#bairro").val("");
				$("#cidade").val("");
				$("#uf").val("");
				$("#ibge").val("");
			}
			
			//Quando o campo cep perde o foco.
			$("#cep").blur(function() {

				//Nova variável "cep" somente com dígitos.
				var cep = $(this).val().replace(/\D/g, '');

				//Verifica se campo cep possui valor informado.
				if (cep != "") {

					//Expressão regular para validar o CEP.
					var validacep = /^[0-9]{8}$/;

					//Valida o formato do CEP.
					if(validacep.test(cep)) {

						//Preenche os campos com "..." enquanto consulta webservice.
						$("#rua").val("...");
						$("#bairro").val("...");
						$("#cidade").val("...");
						$("#uf").val("...");
						$("#ibge").val("...");

						//Consulta o webservice viacep.com.br/
						$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

							if (!("erro" in dados)) {
								//Atualiza os campos com os valores da consulta.
								$("#rua").val(dados.logradouro);
								$("#bairro").val(dados.bairro);
								$("#cidade").val(dados.localidade);
								$("#uf").val(dados.uf);
								$("#ibge").val(dados.ibge);
							} //end if.
							else {
								//CEP pesquisado não foi encontrado.
								limpa_formulário_cep();
								alert("CEP não encontrado.");
							}
						});
					} //end if.
					else {
						//cep é inválido.
						limpa_formulário_cep();
						alert("Formato de CEP inválido.");
					}
				} //end if.
				else {
					//cep sem valor, limpa formulário.
					limpa_formulário_cep();
				}
			});
		});

		</script>
		<script>
			function copy(selector){
			var $temp = $("<div>");
			$("body").append($temp);
			$temp.attr("contenteditable", true)
				.html($(selector).html()).select()
				.on("focus", function() { document.execCommand('selectAll',false,null); })
				.focus();
			document.execCommand("copy");
			$temp.remove();
			}
		</script>
