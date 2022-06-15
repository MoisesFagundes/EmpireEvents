		<!-- Validar senhas -->
		<script type="text/javascript">
			function validar(){
				var senha = cadastro.senha.value;
				var confimarsenha = cadastro.confimarsenha.value;
				
				if(senha == "" || senha.length <= 5){
					alert('Preencha o campo senha com minimo 6 caracteres');
					cadastro.senha.focus();
					return false;
				}
				
				if(confimarsenha == "" || confimarsenha.length <= 5){
					alert('Preencha o campo senha com minimo 6 caracteres');
					cadastro.confimarsenha.focus();
					return false;
				}
				
				if (senha != confimarsenha) {
					alert('Senhas diferentes');
					cadastro.senha.focus();
					return false;
				}
			}
		</script>
		<?php  
		    if($this->session->menssagem){
				echo $this->session->menssagem;
			}
		?>
		<div class="pagination-area bg-secondary">
			<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Cadastro</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="registration-page-area bg-secondary section-space-bottom">
			<div class="container">
				<h2 class="title-section">Seja uma empresa parceira</h2>
				<div class="registration-details-area inner-page-padding">
					<form id="cadastro" name="cadastro" method="POST" action="<?php echo base_url('PainelControlls/cadastro') ?>">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="nomeempresa" class="control-label">Nome da empresa<span class="obrigatorio"> *</span></label>
									<input id="nomeempresa" name="nomeempresa" type="text" class="form-control" value= "<?php echo set_value('nomeempresa'); ?>" maxlength="50" placeholder="Empire Events Ltda" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="cnpj" class="control-label">CNPJ<span class="obrigatorio"> *</span></label>
									<input id="cnpj" name="cnpj" type="text" class="form-control" value= "<?php echo set_value('cnpj'); ?>" >
								</div>
							</div>
						</div>                            							
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="estado" class="control-label">Estado<span class="obrigatorio"> *</span></label>
									<div class="custom-select">
										<select id="estado" name="estado" class="select2" value= "<?php echo set_value('estado'); ?>" required>
											<option value="">-----</option>
											<option value="SP">SP</option>                                                
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="cidades" class="control-label">Cidades<span class="obrigatorio"> *</span></label>
									<div class="custom-select">
										<select id="cidades" name="cidades[]" class='selectpicker' value= "<?php echo set_value('cidades'); ?>" multiple required>
                                            <option value="SP Capital">SP Capital</option>                            
										</select>
									</div>
								</div>
							</div>
						</div> 
                        <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
								<div class="form-group">
									<label for="nomesocio" class="control-label">Nome do sócio administrador (Completo)<span class="obrigatorio"> *</span></label>
									<input id="nomesocio" name="nomesocio" type="text" class="form-control" value= "<?php echo set_value('nomesocio'); ?>" maxlength="50" required>
								</div>
							</div>
							 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
								<div class="form-group">
									<label for="cpf" class="control-label">CPF<span class="obrigatorio"> *</span></label>
									<input id="cpf" name="cpf" type="text" class="form-control" value= "<?php echo set_value('cpfsocio'); ?>" placeholder="" required>                                        
								</div>
							</div> 
						</div>						
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
								<div class="form-group">
									<label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
									<input id="email" name="email" type="email" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" required>
								</div>
							</div>
							 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
								<div class="form-group">
									<label for="telefone" class="control-label">Telefone<span class="obrigatorio"> *</span></label>
									<input id="telefone" name="telefone" type="tel" class="form-control" value= "<?php echo set_value('telefone'); ?>" placeholder="(11) 5555 - 5555" required>                                        
								</div>
							</div> 
						</div>                            
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="senha" class="control-label">Senha<span class="obrigatorio"> *</span></label>
									<input id="senha" name="senha" type="password" class="form-control" value= "<?php echo set_value('senha'); ?>" maxlength="25" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
								<div class="form-group">
									<label for="confimarsenha" class="control-label">Confimar senha<span class="obrigatorio"> *</span></label>
									<input id="confimarsenha" name="confimarsenha" type="password" class="form-control" value= "<?php echo set_value('confimarsenha'); ?>" maxlength="25" required>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-check">
									<input name="caixa" type="checkbox" class="checkbox-inline"  REQUIRED>
									<label for="caixa" class="form-check-label">Aceitar <a href="<?php echo base_url('Termos_e_Condicoes') ?>">Termos e condições.</a></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
								<div class="pLace-order">
									<button name="cadastrar" type="submit" class="btn btn-primary btn-lg" onclick="return validar()">Cadastrar</button>
								</div>
							</div>
						</div> 
					</form>                      
				</div> 
			</div>
		</div>
