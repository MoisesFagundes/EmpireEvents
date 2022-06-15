                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<h2 class="title-section">Pedidos</h2>
								<?php
								if($Pedidos['Pedidos']->num_rows() > 0){
									foreach($Pedidos['Pedidos']->result_array() as $linha) {?>
										<div class="message-wrapper">
											<div class="single-item-message">
												<div class="single-item-inner">
												    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
													    <img src="<?php echo base_url('FrondEnd/img/user.png') ?>" alt="profile" class="user-img">
													</div>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
														<div class="item-content">
															<h4><?= $linha['nome'] ?></h4>
															<span><?php echo contagem_de_tempo($linha['criado_b']) ?></span>
															<p>Olá, meu nome é <?php echo $linha['nome'] ?> estou interessado em comprar seu pacote <?php echo $linha['nomepacote'] ?> para um evento de <?php echo $linha['participantes'] ?> participantes no dia <?php echo date("d/m/Y", strtotime($linha['data'])) ?> às <?php echo substr($linha['horainicio'], 0, -3) ?> até <?php echo substr($linha['horafim'], 0, -3) ?>.</p>
                                                            <?php if($linha['situacao'] == "Enviado"){
																echo  '<div class="row">
																		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
																			<a href="'.base_url('PainelControlls/resposta/'.$linha['id'].'/Aceito').'"><button class="btn btn-primary btn-lg">Aceitar</button></a>
																			<a href="'.base_url('PainelControlls/resposta/'.$linha['id'].'/Recusado').'"><button class="btn btn-primary btn-lg">Recusar</button></a> 
																		</div>
																		<div class="col-lg-4 col-lg-offset-3 col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-3 col-xs-12">
																			<center class="status-pedidos"><i class="fa fa-clock-o" aria-hidden="true"></i><span> Aguardando resposta...</span></center>	
																		</div>
																	</div>';
															}elseif($linha['situacao'] == "Aceito"){
																echo  '<center class="status-pedidos"><i class="fas fa-check" aria-hidden="true"></i><span> Aceito</span></center>';
															}elseif($linha['situacao'] == "Recusado"){
																echo  '<center class="status-pedidos"><i class="fas fa-times" aria-hidden="true"></i><span> Recusado</span></center>';
															}elseif($linha['situacao'] == "Pago"){
																echo  '<center class="status-pedidos"><i class="fas fa-check-double" aria-hidden="true"></i><span> Pago</span></center>';
															}
															?>															
														</div>
													</div>	
												</div> 
											</div>
										</div><?php
									}
								}else{
									echo "<div class='mensagem-pedidos'>
									        <center><img src='".base_url('FrondEnd/img/open-cardboard-box_152098-20.jpg')."' class='img-box'></center>
											<center><spam>Você ainda não tem novos pedidos.</spam></center>
										  </div>";
								}	
								?>
							</div>