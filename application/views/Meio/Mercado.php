			<div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
                            <li>Mercado</li>
                        </ul>
                    </div>
                </div>  
            </div>
			<div class="product-page-list bg-secondary section-space-bottom">                
                <div class="container">
                    <div class="row">
					    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 desktop">
                            <div class="fox-sidebar">
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Categorias</h3>
                                        <ul class="sidebar-categories-list">
                                            <li><a href="<?php echo base_url('Mercado/1/locacao-de-espaco/'.$ordem) ?>">Locação de espaço</a></li>
											<li><a href="<?php echo base_url('Mercado/1/alimentacao-e-bebidas/'.$ordem) ?>">Alimentação e bebidas</a></li>
											<li><a href="<?php echo base_url('Mercado/1/som-e-iluminacao/'.$ordem) ?>">Som e iluminação</a></li>
											<li><a href="<?php echo base_url('Mercado/1/decoracao/'.$ordem) ?>">Decoração</a></li>
											<li><a href="<?php echo base_url('Mercado/1/flores-e-arranjos/'.$ordem) ?>">Flores e arranjos</a></li>
											<li><a href="<?php echo base_url('Mercado/1/foto-e-filmagem/'.$ordem) ?>">Foto e filmagem</a></li>
											<li><a href="<?php echo base_url('Mercado/1/locacao-de-brinquedos/'.$ordem) ?>">Locação de brinquedos</a></li>
											<li><a href="<?php echo base_url('Mercado/1/brindes-e-lembrancinhas/'.$ordem) ?>">Brindes e lembrancinhas</a></li>
											<li><a href="<?php echo base_url('Mercado/1/musicos-e-bandas/'.$ordem) ?>">Músicos e bandas</a></li>
											<li><a href="<?php echo base_url('Mercado/1/entretenimento/'.$ordem) ?>">Entretenimento</a></li>
                                        </ul>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						    <div class="row">
								<div class="mobile">
								    <a href="<?= base_url('Carrinho') ?>"><i class="atalho-mobile fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a data-toggle="modal" data-target="#modal-briefing"><i class="atalho-mobile fa fa-solid fa-filter" aria-hidden="true"></i></a>
								</div>
                            </div>								
                            <div class="inner-page-main-body">
							    <div class="panel-group help-page-wrapper mobile" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">
												<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#1">
												   Categoria:
												</a>
											</div>
										</div>
										<div aria-expanded="false" id="1" role="tabpanel" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="sidebar-item-inner">
													<ul class="sidebar-categories-list">
														<li><a href="<?php echo base_url('Mercado/1/locacao-de-espaco/'.$ordem) ?>">Locação de espaço</a></li>
														<li><a href="<?php echo base_url('Mercado/1/alimentacao-e-bebidas/'.$ordem) ?>">Alimentação e bebidas</a></li>
														<li><a href="<?php echo base_url('Mercado/1/som-e-iluminacao/'.$ordem) ?>">Som e iluminação</a></li>
														<li><a href="<?php echo base_url('Mercado/1/decoracao/'.$ordem) ?>">Decoração</a></li>
														<li><a href="<?php echo base_url('Mercado/1/flores-e-arranjos/'.$ordem) ?>">Flores e arranjos</a></li>
														<li><a href="<?php echo base_url('Mercado/1/foto-e-filmagem/'.$ordem) ?>">Foto e filmagem</a></li>
														<li><a href="<?php echo base_url('Mercado/1/locacao-de-brinquedos/'.$ordem) ?>">Locação de brinquedos</a></li>
														<li><a href="<?php echo base_url('Mercado/1/brindes-e-lembrancinhas/'.$ordem) ?>">Brindes e lembrancinhas</a></li>
														<li><a href="<?php echo base_url('Mercado/1/musicos-e-bandas/'.$ordem) ?>">Músicos e bandas</a></li>
														<li><a href="<?php echo base_url('Mercado/1/entretenimento/'.$ordem) ?>">Entretenimento</a></li>
													</ul>
												</div>		
											</div>
										</div>
									</div>									
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">
												<a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#2">
												  Ordenar por:
												</a>
											</div>
										</div>
										<div aria-expanded="false" id="2" role="tabpanel" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="sidebar-item-inner">
													<ul class="sidebar-categories-list">
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Menor-para-maior-preco'.'/'.$palavra_chave) ?>">Mais barato</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Maior-para-menor-preco'.'/'.$palavra_chave) ?>">Mais caro</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Maior-para-menor-avaliacao'.'/'.$palavra_chave) ?>">Melhor avaliado</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Menor-para-maior-avaliacao'.'/'.$palavra_chave) ?>">Pior avaliado</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <div class="page-controls desktop">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                            <div class="page-controls-sorting">
                                                <div class="dropdown">
                                                    <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Ordenar por:<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                    <ul class="dropdown-menu">
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Menor-para-maior-preco'.'/'.$palavra_chave) ?>">Mais barato</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Maior-para-menor-preco'.'/'.$palavra_chave) ?>">Mais caro</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Maior-para-menor-avaliacao'.'/'.$palavra_chave) ?>">Melhor avaliado</a></li>
														<li><a href="<?php echo base_url('Mercado/'.$pagina.'/'.$categoria.'/Menor-para-maior-avaliacao'.'/'.$palavra_chave) ?>">Pior avaliado</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                            <div class="layout-switcher">
                                                <ul>
                                                    <li class=""><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">                       
								<?php echo $alert ?>             
                                    <div role="tabpanel" class="tab-pane fade in active clear products-container" id="list-view">
                                        <div class="product-list-view">
										<?php
										if(isset($pacotes) and $inicio < count($pacotes['npacote'])){
											for($i = $inicio; $i < $fim; $i++){?>
												<div class="single-item-list">
													<div class="tamanho-img-produto-mercado">
														<div id="<?= $pacotes['npacote'][$i] ?>" class="carousel slide" data-ride="carousel" data-interval="0">
														<?php $imagens = $this->Mercado_model->buscar_imagens_do_pacote($pacotes['npacote'][$i]); ?>
															<!-- Embaladora para slides -->
															<div class="carousel-inner" role="listbox">
																<?php
																	$controle_ativo = 2;
																	foreach($imagens->result_array() as $linha){  
																		if($controle_ativo == 2){ ?>
																			<div class="item active">
																			<center><a href="<?= base_url('Pagina_de_Anuncio/'.$pacotes['npacote'][$i])?>"><img src="<?php echo base_url("FrondEnd/img/pacotes/".$pacotes['nempresa'][$i]."/".$pacotes['npacote'][$i]."/".$linha['imagem']) ?>" alt="<?php echo substr ($linha['imagem'], 0 ,-4) ?>" class="img-produto-mercado"></a></center>
																			</div><?php
																			$controle_ativo = 1;
																		}else{ ?>
																			<div class="item">
																				<?php $formato = substr($linha['imagem'],-3);

																						IF($formato == "jpg" or $formato == "png"){
																							echo "<center><a href='".base_url('Pagina_de_Anuncio/'.$pacotes['npacote'][$i])."'><img src='".base_url("FrondEnd/img/pacotes/".$pacotes['nempresa'][$i]."/".$pacotes['npacote'][$i]."/".$linha['imagem'])."' alt='".substr($linha['imagem'], 0 ,-4)."' class='img-produto-mercado'></a></center>";
																						}else{
																							echo "<center><video width='640' height='480' controls >
																										<source src='".base_url('FrondEnd/img/pacotes/'.$pacotes['nempresa'].'/'.$npacote.'/'.$linha['imagem'])."' type='video/".$formato."' alt='".substr($linha['imagem'], 0 ,-4)."' class='img-produto'>
																								</video></center>";
																						}
																				
																				?>	
																			</div> <?php
																		}
																	}
																?>					
															</div>
															<!-- Controles -->
															<a class="left carousel-control" href="#<?= $pacotes['npacote'][$i] ?>" role="button" data-slide="prev">
																<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																<span class="sr-only">Previous</span>
															</a>
															<a class="right carousel-control" href="#<?= $pacotes['npacote'][$i] ?>" role="button" data-slide="next">
																<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
																<span class="sr-only">Next</span>
															</a>
														</div>
													</div>
													<div class="item-content">
														<div class="item-info">
															<div class="item-title">
																<h3><a href="<?= base_url('Pagina_de_Anuncio/'.$pacotes['npacote'][$i]) ?>"><?php echo $pacotes['nomepacote'][$i] ?></a></h3>
																<p><?php echo strlen($pacotes['descricao'][$i]) <= 200 ? $pacotes['descricao'][$i] : substr($pacotes['descricao'][$i], 0, 200)."..." ?></p>
																<div class="item-profile mobile">
																	<div class="profile-rating-info">
																		<ul>
																			<li>
																				<ul class="profile-rating">
																					<?php 
																					for($n = 1; $n <= $pacotes['avaliacao'][$i]; $n++){ ?>
																					<li><i class="fa fa-star" aria-hidden="true"></i></li><?php
																					} 
																					?>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="item-sale-info">
																<div class="price"><?php echo formato_brasileiro($pacotes['preco'][$i]) ?></div>
															</div>
														</div>
														<div class="item-profile desktop">
															<div class="profile-rating-info">
																<ul>
																	<li>
																		<ul class="profile-rating">
																		    <?php 
																			for($n = 1; $n <= $pacotes['avaliacao'][$i]; $n++){ ?>
																			<li><i class="fa fa-star" aria-hidden="true"></i></li><?php
																			} 
																			?>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
														<div class="item-profile mobile">
															<div class="profile-rating-info">
																<center><a href="#item<?= $pacotes['npacote'][$i] ?>" aria-expanded="false" class="seta-pra-baixo collapsed" data-toggle="collapse" data-parent="#accordion"></a></center>
															</div>
														</div>
														<div class="item-profile mobile">
															<div class="profile-rating-info">
																<div class="tab-content">
																	<div id="item<?= $pacotes['npacote'][$i] ?>" aria-expanded="false" role="tabpanel" class="panel-collapse collapse">
																	    <?php $itens = $this->Mercado_model->buscar_itens_do_pacote($pacotes['npacote'][$i]) ?>
																		<table class="table">
																			<thead class="thead-dark">
																				<tr>
																					<th scope="col">Itens</th>
																					<th scope="col">Quantidades</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																				foreach($itens->result_array() as $linha){ ?>
																				<tr>
																					<td class="text-left"><?php echo $linha['item'] ?></td>
																					<td class="text-left"><?php echo $linha['multiplicavel'] == "1" ? ceil($linha['quantidade']*participantes)." ".$linha['medida'] : ceil($linha['quantidade'])." ".$linha['medida'] ?></td>
																				</tr><?php
																				}
																				?>								
																			</tbody>
																		</table>
																	</div>
																</div>	
															</div>
														</div>
													</div>
												</div><?php
											}												
										}else{
											echo "<center><img src='".base_url('FrondEnd/img/empty-folder.png')."' alt='folder' class='empty-folder'></center><center class='margin-mercado' ><spam>Nada a ser exibido.</spam></center>";
										}	
											?>
											 <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <ul class="pagination-align-left">	
														<li><a href="<?= base_url('Mercado/'.$page_anterior.'/'.$categoria.'/'.$ordem.'/'.$palavra_chave) ?>"><i class='fa fa-angle-double-left' aria-hidden='true'></i></a></li>
														<?php
														for($i = $link_inicio; $i <= $link_final; $i++){
															echo "<li><a href='".base_url('Mercado/'.$i.'/'.$categoria.'/'.$ordem.'/'.$palavra_chave)."'>".($i == $pagina ? "<strong>".$i."</strong>" : $i)."</a></li> ";
														}
														?>
														<li><a href="<?= base_url('Mercado/'.$page_posterior.'/'.$categoria.'/'.$ordem.'/'.$palavra_chave) ?>"><i class='fa fa-angle-double-right' aria-hidden='true'></i></a></li>
													</ul>
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
			<?php $this->load->view('Meio/Modal_Briefing') ?>