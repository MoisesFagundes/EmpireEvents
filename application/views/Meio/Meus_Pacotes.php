							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 
								<div class="tab-content">                                 
									<div id="Products">
										<div class="page-controls">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
													<h2 class="title-section2">Meus pacotes</h2>																
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
													<div class="layout-switcher">
														<ul>
															<div class="layout-switcher">
																<ul>
																	<li <?php echo $active == 7 ? 'class=active' : ""?> value="7"><a href="#Criar_Pacote" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i></a>
																</ul>
															</div>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="inner-page-main-body"> 
											<div class="row more-product-item-wrapper">
											<?php
											if($Pacotes['Pacotes']->num_rows() > 0){
												foreach($Pacotes['Pacotes']->result_array() as $linha){?>
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<div class="more-product-item">
														<div class="more-product-item-img">
															<img src="<?php echo base_url('FrondEnd/img/pacotes/'.$linha['nempresa'].'/'.$linha['npacote'].'/'.$linha['imagem']) ?>" alt="<?php echo $linha['imagem'] ?>" class="img-meus-produtos">
														</div>
														<div class="more-product-item-details">
															<h4><?= $linha['nomepacote']?></h4>
															<a href="<?php echo base_url('PainelControlls/apagar_pacote/'.$linha['npacote']) ?>"><i class="fa fa-close" aria-hidden="true"></i> Excluir</a></br>
														</div>
													</div>
												</div><?php
												}
											}else{
												echo "<center class='margin-meus-pacotes' ><spam>Nada a ser exibido.</spam></center>";
											}	
											?>
											</div>
											<div class="row">
												<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
													<ul class="pagination-align-left">
														<?php
															
															echo "<li><a href='".base_url('PainelControlls/passar_meus_pacotes/1')."'><i class='fa fa-angle-double-left' aria-hidden='true'></i></a></li> ";
															
															$Pagina = $this->session->mp;
															
															for($pag_ant = $Pagina - total_de_links; $pag_ant <= $Pagina - 1; $pag_ant++){
																if($pag_ant >= 1){
																	echo "<li><a href='".base_url('PainelControlls/passar_meus_pacotes/'.$pag_ant)."'>".$pag_ant."</a></li> ";
																}
															}
																
															echo "$Pagina ";
															
															for($pag_prox = $Pagina + 1; $pag_prox <= $Pagina + total_de_links; $pag_prox++){
																if($pag_prox <= $this->session->mpu){
																	echo "<li><a href='".base_url('PainelControlls/passar_meus_pacotes/'.$pag_prox)."'>".$pag_prox."</a></li> ";
																}
															}
															
															$Ultima_pagina = $this->session->mpu;
															
															echo "<li><a href='".base_url('PainelControlls/passar_meus_pacotes/'.$Ultima_pagina)."'><i class='fa fa-angle-double-right' aria-hidden='true'></i></a></li>";
														
														?>
													</ul>
												</div>  
											</div>
										</div>
									</div>
								</div>	
							</div>