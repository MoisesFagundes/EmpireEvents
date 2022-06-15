        <div class="pagination-area bg-secondary">
				<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Briefing</li>
					</ul>
				</div>
			</div>  
		</div>		
        <div class="registration-page-area bg-secondary section-space-bottom">
			<div class="container">
				<h2 class="title-section">Briefing</h2>
				<div class="registration-details-area inner-page-padding">
					<form class="checkout-form-select2" method="POST" action="<?php echo base_url('Mercado/briefing') ?>">								
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
								<div class="form-group">
									<label for="nome" class="control-label">Nome<span class="obrigatorio"> *</span></label>
									<input name="nome" type="text" class="form-control" value= "<?php echo set_value('nome'); ?>" maxlength="50" REQUIRED>
								</div>
							</div>
						</div>									
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
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
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
								<div class="form-group">
									<label for="participantes" class="control-label">Participantes<span class="obrigatorio"> *</span></label>
									<input name="participantes" type="number" min="5" max="10000" step="5" class="form-control" value= "<?php echo set_value('participantes'); ?>" REQUIRED>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                                           
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
						   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
								<div class="form-group">
									<label for="data" class="control-label">Data<span class="obrigatorio"> *</span></label>
									<input name="data" type="date" min="<?php echo date('Y-m-d', $data_minima) ?>" max="<?php echo date('Y-m-d', $data_maxima)?>" class="form-control" value= "<?php echo set_value('data'); ?>" REQUIRED>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
								<div class="form-group">
									<label for="horainicio" class="control-label">Hora de início<span class="obrigatorio"> *</span></label>
									<input name="horainicio" type="time" class="form-control" value= "<?php echo set_value('horainicio'); ?>" REQUIRED>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
								<div class="form-group">
									<label for="horafim" class="control-label">Hora de fim<span class="obrigatorio"> *</span></label>
									<input name="horafim" type="time" class="form-control" value= "<?php echo set_value('horafim'); ?>" REQUIRED>
								</div>
							</div>
						</div>									
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
								<div class="form-group">
									<label for="cidade" class="control-label">Cidade<span class="obrigatorio"> *</span></label>
									<div class="custom-select">
										<select name="cidade" class="select2" value= "<?php echo set_value('cidade'); ?>" REQUIRED>
										    <option value="">----</option>
    											<option value="Americana">Americana</option>
                                            <option value="Amparo">Amparo</option>
                                            <option value="Andradina">Andradina</option>
                                            <option value="Araçatuba">Araçatuba</option>
                                            <option value="Araraquara">Araraquara</option>
                                            <option value="Araras">Araras</option>
                                            <option value="Artur Nogueira">Artur Nogueira</option>
                                            <option value="Arujá">Arujá</option>
                                            <option value="Assis">Assis</option>
                                            <option value="Atibaia">Atibaia</option>
                                            <option value="Avaré">Avaré</option>
                                            <option value="Barretos">Barretos</option>
                                            <option value="Barueri">Barueri</option>
                                            <option value="Batatais">Batatais</option>
                                            <option value="Bauru">Bauru</option>
                                            <option value="Bebedouro">Bebedouro</option>
                                            <option value="Bertioga">Bertioga</option>
                                            <option value="Birigui">Birigui</option>
                                            <option value="Boituva">Boituva</option>
                                            <option value="Botucatu">Botucatu</option>
                                            <option value="Bragança Paulista">Bragança Paulista</option>
                                            <option value="Cabreúva">Cabreúva</option>
                                            <option value="Caçapava">Caçapava</option>
                                            <option value="Caieiras">Caieiras</option>
                                            <option value="Cajamar">Cajamar</option>
                                            <option value="Campinas">Campinas</option>
                                            <option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
                                            <option value="Campos do Jordão">Campos do Jordão</option>
                                            <option value="Capão Bonito">Capão Bonito</option>
                                            <option value="Capivari">Capivari</option>
                                            <option value="Caraguatatuba">Caraguatatuba</option>
                                            <option value="Carapicuíba">Carapicuíba</option>
                                            <option value="Catanduva">Catanduva</option>
                                            <option value="Cerquilho">Cerquilho</option>
                                            <option value="Cosmópolis">Cosmópolis</option>
                                            <option value="Cotia">Cotia</option>
                                            <option value="Cruzeiro">Cruzeiro</option>
                                            <option value="Cubatão">Cubatão</option>
                                            <option value="Diadema">Diadema</option>
                                            <option value="Embu das Artes">Embu das Artes</option>
                                            <option value="Embu-Guaçu">Embu-Guaçu</option>
                                            <option value="Fernandópolis">Fernandópolis</option>
                                            <option value="Ferraz de Vasconcelos">Ferraz de Vasconcelos</option>
                                            <option value="Franca">Franca</option>
                                            <option value="Francisco Morato">Francisco Morato</option>
                                            <option value="Franco da Rocha">Franco da Rocha</option>
                                            <option value="Guaratinguetá">Guaratinguetá</option>
                                            <option value="Guarujá">Guarujá</option>
                                            <option value="Guarulhos">Guarulhos</option>
                                            <option value="Hortolândia">Hortolândia</option>
                                            <option value="Ibitinga">Ibitinga</option>
                                            <option value="Ibiúna">Ibiúna</option>
                                            <option value="Indaiatuba">Indaiatuba</option>
                                            <option value="Itanhaém">Itanhaém</option>
                                            <option value="Itapecerica da Serra">Itapecerica da Serra</option>
                                            <option value="Itapetininga">Itapetininga</option>
                                            <option value="Itapeva">Itapeva</option>
                                            <option value="Itapevi">Itapevi</option>
                                            <option value="Itapira">Itapira</option>
                                            <option value="Itaquaquecetuba">Itaquaquecetuba</option>
                                            <option value="Itararé">Itararé</option>
                                            <option value="Itatiba">Itatiba</option>
                                            <option value="Itu">Itu</option>
                                            <option value="Itupeva">Itupeva</option>
                                            <option value="Jaboticabal">Jaboticabal</option>
                                            <option value="Jacareí">Jacareí</option>
                                            <option value="Jaguariúna">Jaguariúna</option>
                                            <option value="Jales">Jales</option>
                                            <option value="Jandira">Jandira</option>
                                            <option value="Jaú">Jaú</option>
                                            <option value="Jundiaí">Jundiaí</option>
                                            <option value="Leme">Leme</option>
                                            <option value="Lençóis Paulista">Lençóis Paulista</option>
                                            <option value="Limeira">Limeira</option>
                                            <option value="Lins">Lins</option>
                                            <option value="Lorena">Lorena</option>
                                            <option value="Louveira">Louveira</option>
                                            <option value="Mairinque">Mairinque</option>
                                            <option value="Mairiporã">Mairiporã</option>
                                            <option value="Marília">Marília</option>
                                            <option value="Matão">Matão</option>
                                            <option value="Mauá">Mauá</option>
                                            <option value="Mirassol">Mirassol</option>
                                            <option value="Mococa">Mococa</option>
                                            <option value="Mogi das Cruzes">Mogi das Cruzes</option>
                                            <option value="Mogi Guaçu">Mogi Guaçu</option>
                                            <option value="Mogi Mirim">Mogi Mirim</option>
                                            <option value="Mongaguá">Mongaguá</option>
                                            <option value="Monte Alto">Monte Alto</option>
                                            <option value="Monte Mor">Monte Mor</option>
                                            <option value="Nova Odessa">Nova Odessa</option>
                                            <option value="Olímpia">Olímpia</option>
                                            <option value="Osasco">Osasco</option>
                                            <option value="Ourinhos">Ourinhos</option>
                                            <option value="Paulínia">Paulínia</option>
                                            <option value="Pederneiras">Pederneiras</option>
                                            <option value="Pedreira">Pedreira</option>
                                            <option value="Penápolis">Penápolis</option>
                                            <option value="Peruíbe">Peruíbe</option>
                                            <option value="Piedade">Piedade</option>
                                            <option value="Pindamonhangaba">Pindamonhangaba</option>
                                            <option value="Piracicaba">Piracicaba</option>
                                            <option value="Pirassununga">Pirassununga</option>
                                            <option value="Poá">Poá</option>
                                            <option value="Pontal">Pontal</option>
                                            <option value="Porto Feliz">Porto Feliz</option>
                                            <option value="Porto Ferreira">Porto Ferreira</option>
                                            <option value="Praia Grande">Praia Grande</option>
                                            <option value="Presidente Prudente">Presidente Prudente</option>
                                            <option value="Registro">Registro</option>
                                            <option value="Ribeirão Pires">Ribeirão Pires</option>
                                            <option value="Ribeirão Preto">Ribeirão Preto</option>
                                            <option value="Rio Claro">Rio Claro</option>
                                            <option value="Rio Grande da Serra">Rio Grande da Serra</option>
                                            <option value="Salto">Salto</option>
                                            <option value="Santa Bárbara d'Oeste">Santa Bárbara d'Oeste</option>
                                            <option value="Santa Cruz do Rio Pardo">Santa Cruz do Rio Pardo</option>
                                            <option value="Santa Isabel">Santa Isabel</option>
                                            <option value="Santana de Parnaíba">Santana de Parnaíba</option>
                                            <option value="Santo André">Santo André</option>
                                            <option value="Santos">Santos</option>
                                            <option value="São Bernardo do Campo">São Bernardo do Campo</option>
                                            <option value="São Caetano do Sul">São Caetano do Sul</option>
                                            <option value="São Carlos">São Carlos</option>
                                            <option value="São João da Boa Vista">São João da Boa Vista</option>
                                            <option value="São Joaquim da Barra">São Joaquim da Barra</option>
                                            <option value="São José do Rio Pardo">São José do Rio Pardo</option>
                                            <option value="São José do Rio Preto">São José do Rio Preto</option>
                                            <option value="São José dos Campos">São José dos Campos</option>
                                            <option value="São Paulo">São Paulo</option>
                                            <option value="São Roque">São Roque</option>
                                            <option value="São Sebastião">São Sebastião</option>
                                            <option value="São Vicente">São Vicente</option>
                                            <option value="Sertãozinho">Sertãozinho</option>
                                            <option value="Sorocaba">Sorocaba</option>
                                            <option value="Sumaré">Sumaré</option>
                                            <option value="Suzano">Suzano</option>
                                            <option value="Taboão da Serra">Taboão da Serra</option>
                                            <option value="Taquaritinga">Taquaritinga</option>
                                            <option value="Tatuí">Tatuí</option>
                                            <option value="Taubaté">Taubaté</option>
                                            <option value="Tremembé">Tremembé</option>
                                            <option value="Tupã">Tupã</option>
                                            <option value="Ubatuba">Ubatuba</option>
                                            <option value="Valinhos">Valinhos</option>
                                            <option value="Vargem Grande Paulista">Vargem Grande Paulista</option>
                                            <option value="Várzea Paulista">Várzea Paulista</option>
                                            <option value="Vinhedo">Vinhedo</option>
                                            <option value="Votorantim">Votorantim</option>
                                            <option value="Votuporanga">Votuporanga</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">                                           
								<div class="form-group">
									<label for="local" class="control-label">Local</label>
									<input name="local" type="text" class="form-control" value= "<?php echo set_value('local'); ?>" maxlength="50" placeholder="Av.Paulista - 2.202">
								</div>
							</div>
						</div>									
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">                                           
								<div class="form-group">
									<label for="email" class="control-label">Email<span class="obrigatorio"> *</span></label>
									<input name="email" type="email" class="form-control" value= "<?php echo set_value('email'); ?>" maxlength="50" REQUIRED>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">                                           
								<div class="form-group">
									<label for="telefone" class="control-label">Telefone<span class="obrigatorio"> *</span></label>
									<input id="telefone" name="telefone" type="tel" class="form-control" value= "<?php echo set_value('telefone'); ?>" placeholder="(11) 5555 - 5555" REQUIRED>
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
									<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
								</div>
							</div>
						</div>									                                    
					</form>                      
				</div> 
			</div>
		</div>