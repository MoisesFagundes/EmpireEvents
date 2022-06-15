         <div class="pagination-area bg-secondary">
				<div class="container">
				<div class="pagination-wrapper">
					<ul>
						<li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
						<li>Faq</li>
					</ul>
				</div>
			</div>  
		</div>        
        <div class="help-page-area bg-secondary section-space-bottom">
			<div class="container">
				<h2 class="title-section">Quais são suas dúvidas?</h2>
				<div class="inner-page-details inner-page-padding">
				    <nav class="navbar navbar-expand-lg navbar-light bg-light">
					    <div class="navbar-collapse" id="navbarNavAltMarkup">
						    <div class="navbar-nav">
							    <a class=" <?php echo $active == 1 ? 'active' : "" ?>" href="#Clientes" data-toggle="tab" aria-expanded="false">Clientes</a>
							    <a class=" <?php echo $active == 2 ? 'active' : "" ?>" href="#Empresas" data-toggle="tab" aria-expanded="false">Empresas</a>
						    </div>
					    </div>
					</nav>
                    <div class="tab-content">
                        <div class="tab-pane fade <?php echo $active == 1 ? 'active in' : ""?>" id="Clientes">					
							<div class="panel-group help-page-wrapper" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#1">
											   O que é a Empire Events?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="1" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>A Empire Events é um mecanismo de busca no nicho de eventos, feito para encontrar fornecedores e que possibilita fazer múltiplos orçamentos de modo instantâneo, afim de trazer o melhor custo–benefício para o cliente.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#2">
											  Quem são seus fornecedores?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="2" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Nossos fornecedores são selecionados pela nossa equipe com base em alguns pré-requisitos, como ser uma empresa com cnpj válido em situação ativa que esteja em conformidade com as leis vigente.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#3">
											   Quais são suas formas de pagamento?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="3" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Aceitamos PIX, boleto registrado e boleto parcelado.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#4">
											   A Empire Events é de confiança?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="4" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Para prevenir fraudes além de nossa seleção de empresas parceiras, nós também só estaremos repassando o valor pago, após a apresentação do comprovante de prestação de serviço pela empresa contratada.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#5">
											   Meus dados ficam com quem?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="5" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Seus dados ficaram com nossa equipe e com os fornecedores contratados, afim que seja usado unicamente para ajudar na realização do evento.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#6">
											   Como realizar o cancelamento do meu evento?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="6" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Na página carrinho clicando em cancelar eventos. Nossa equipe ser encarregará da devolução do valor pago, com o cancelamento ocorrendo até 2 mês antes do dia do evento faremos a devolução total de 100% do valor. Após esse período devolução parcial de 75% do valor. Os outros 25% ficaram com os fornecedores para cobrir por eventuais perdas, e pela disponibilidade que tiveram em resevar a data do seu evento. Você também poderá adiar o seu evento por 2 vezes, cada adiamento podendo ser prorrogado por 3 meses. Uma vez adiado o cancelamento após será com devolução parcial de 75% do valor pago.</p>
										</div>
									</div>
								</div> 						
							</div>
						</div>
                        <div class="tab-pane fade <?php echo $active == 2 ? 'active in' : ""?>" id="Empresas">
						    <div class="panel-group help-page-wrapper" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#1e">
											   Como funciona a comissão de vocês?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="1e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>A nossa comissão é de 7,5% sobre valor original, porém também adicionando uma margem a mais de 7,5% para o cliente pagar.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#2e">
											  Até quanto tempo após a realização do evento posso está recebendo?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="2e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Após 5 dias utéis depois da solicitação do pagamento, deverá consta o deposito em sua conta epayments.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#3e">
											   Como obter o comprovante de prestação de serviço?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="3e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Na aba agenda, ao clicar sobre um dia com evento marcado, aparecerá a aba detalhes do evento, na parte inferior clique no botão emitir comprovante, vai se abrir uma nova guia, onde poderá estar baixando e imprindo o comprovante.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#4e">
											   Por qual meio poderei estar recebendo?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="4e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Para estar recebendo deverá ter uma conta no site epayments, caso não tenha uma conta no momento do envio do dinheiro será solicitado que crie uma conta para pode está recebendo, todo pagamento será feito por email, então quanto for solicitar um pagamento informe um email valido que tenha cadastro na epayments.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#5e">
											   Como solicitar o pagamento pelo serviço prestado?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="5e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Ao logar em sua conta, na aba solicitação de pagamento prenchar os campos protocolo, valor, data do evento, e anexie uma foto ou scaneer do comprovante de prestação de serviço assinado pelo cliente ou um representante.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#6e">
											   Posso pedir antecipação de recebíveis?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="6e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Após a realização de 10 eventos na plataforma você poderá solicitar a função antecipação de pagamento de 50% do valor total para os próximos eventos.</p>
										</div>
									</div>
								</div>
                                <div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">
											<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#7e">
											   Meu cadastro não está sendo aceito?
											</a>
										</div>
									</div>
									<div aria-expanded="false" id="7e" role="tabpanel" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Para ser aceito em nossa plataforma deverá ter um cnpj válido de qualquer natureza seja ele mei, ltda, sa, etc, deis que esteja em situação ativa.Todo cnpj será chegado e caso se encontre fora de nossa politicas de validade, reservamos o direito de estar recusando o cadastro em questão.</p>
										</div>
									</div>
								</div> 								
							</div>
                        </div>						
					</div>	
				</div>  
			</div>  
		</div>
