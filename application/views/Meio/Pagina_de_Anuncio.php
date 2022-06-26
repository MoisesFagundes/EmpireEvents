            <script>
			    function alert()
				{
					alert("menssagem");
				}				
			</script>
			<div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
                            <li>Página de anuncio</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <div class="product-details-page bg-secondary">                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 fundo-2">
						    <a href="<?= $this->session->ultima_pagina ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></br></br>
                            <div class="inner-page-main-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="0">
								<!-- Indicatores -->
									<ol class="carousel-indicators">
										<?php
										    $controle_ativo = 2;
											$controle_num_slide = 1;
											foreach($imagens->result_array() as $linha){ 
												if($controle_ativo == 2){ ?>
										            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><?php
													$controle_ativo = 1;
												}else{ ?>
										            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
													$controle_num_slide++;
												}
											}
										?>						
									</ol>
									
									<!-- Embaladora para slides -->
									<div class="carousel-inner" role="listbox">
										<?php
										    $controle_ativo = 2;
											foreach($imagens->result_array() as $linha){  
												if($controle_ativo == 2){ ?>
													<div class="item active">
														<center><img src="<?php echo base_url("FrondEnd/img/pacotes/".$pacotes['nempresa']."/".$npacote."/".$linha['imagem']) ?>" alt="<?php echo substr ($linha['imagem'], 0 ,-4) ?>" class="img-produto"></center>
													</div><?php
													$controle_ativo = 1;
												}else{ ?>
													<div class="item">
														<?php $formato = substr($linha['imagem'],-3);

                                                        		IF($formato == "jpg" or $formato == "png"){
                                                                    echo "<center><img src='".base_url('FrondEnd/img/pacotes/'.$pacotes['nempresa'].'/'.$npacote.'/'.$linha['imagem'])."' alt='".substr($linha['imagem'], 0 ,-4)."' class='img-produto'></center>";
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
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
                                <!--Rever essa parte-->
                                <h2 class="title-inner-default"><?php echo $pacotes['nomepacote'] ?></h2>
                                <p class="para-inner-default"><?php echo $pacotes['descricao'] ?></p>
                                <?php if($pacotes['endereco'] != ""){
                                    echo '<p class="para-inner-default"><strong>Endereço: </strong>'.$pacotes["endereco"].'</p>';
                                }
                                ?>    
                                <div class="product-details-tab-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="product-details-title">
                                                <li><h2>Itens do pacote <span class="label label-danger">Recomendado</span></h2></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content">
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
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 zerar-margin">
                            <div class="fox-sidebar">
                                <div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <ul class="sidebar-sale-info">
										    <li>Vendido Por:</li>
										    <li><?php echo $empresa['nomeempresa'] ?></li>
                                            <li><?php echo $empresa['cnpj'] ?></li>
                                        </ul>
                                    </div>
                                </div>
								<div class="sidebar-item">
                                    <div class="sidebar-item-inner">
                                        <h3 class="sidebar-item-title">Preço do Pacote</h3>
                                        <ul class="sidebar-product-price">
                                            <li><?php echo formato_brasileiro($preco)  ?></li>
										</ul>	
										<ul class="sidebar-product-btn">
											<li><?= isset($this->session->npedido) ? "<a href=".base_url('Mercado/adicionar_ao_carrinho').">" : "<a class='alert-link' data-toggle='modal' data-target='#modal-briefing'>" ?><button name="adicionar" class="buy-now-btn" onclick="<?php echo $alert ?>">Adicionar ao carrinho</button></a></li>
										</ul>
										<?php echo $this->session->menssagem ?>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
			<?php $this->load->view('Meio/Modal_Briefing') ?>
