            <div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="<?php echo base_url('Home') ?>">Home</a><span> -</span></li>
							<li><a href="<?php echo base_url('Mercado/1/locacao-de-espaco/relevancia/') ?>">Mercado</a><span> -</span></li>
                            <li>Carrinho</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Cart Page Area Start Here -->
            <div class="cart-page-area bg-secondary section-space-bottom">
                <div class="container">
				<h2 class="title-section">Carrinho</h2>
                    <div class="row fundo">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cart-page-top table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td class="cart-form-heading"></td>
                                            <td class="cart-form-heading">Produto</td>
                                            <td class="cart-form-heading">Preço</td>
                                            <td class="cart-form-heading">Situação</td>
											<td class="cart-form-heading">Telefone</td>
                                            <td class="cart-form-heading"></td>
                                        </tr>
                                    </thead>
                                    <tbody id="quantity-holder">
                                        <tr>
										<?php
										if($Pacotes->num_rows() != 0){
										    $i = 0;
											foreach($Pacotes->result_array() as $linha){?>
												<td class="cart-img-holder">
													<a href="<?php echo base_url('Pagina_de_Anuncio/'.$linha['npacote'])?>"><img src="<?php echo base_url('FrondEnd/img/pacotes/'.$linha['nempresa'].'/'.$linha['npacote'].'/'.$linha['imagem']) ?>" alt="<?php echo substr($linha['imagem'], 0, -4) ?>" class="img-carrinho"></a>
												</td>
												<td>
													<h3><a href="<?php echo base_url('Pagina_de_Anuncio/'.$linha['npacote'])?>"><?php echo $linha['nomepacote'] ?></a></h3>
												</td>
												<td class="amount"><?php echo "R$".number_format($linha['preco'], 2, ',', '.') ?></td>
												<td class="amount"><?php echo $linha['situacao'] ?></td>
												<td class="amount"><?php echo $linha['situacao'] == "Pago" ? $Contatos[$i]['telefone'] : "<i class='fa fa-lock' aria-hidden='TRUE' ></i><strong> BLOQUEADO</strong>" ?></td>
												<td class="dismiss"><a href="<?php echo base_url('Remover_Pacote/'.$linha['id']) ?>"><i class="fa fa-times" aria-hidden="true"></i></a></td>
											</tr>
											<?php
											$i++;
											}
										}	
										?>                                        
                                    </tbody>
                                </table>
								<div class="cart-page-bottom-right">
								    <?php
								    if($Pacotes->num_rows() == 0){
								        echo "<center><h2 class='margin-carrinho'>Você ainda não tem pacotes adicionados</h2></center>";
									}
                                    ?>									
                                    <h2>Total</h2>
                                    <h3>Total<span><?= formato_brasileiro($Total['preco']) ?></span></h3>
                                    <div class="proceed-button">
									    <?= $botoes ?>
                                    </div>
                                    <div id="input_adiar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>

            var cont = 0;

			$("#adiar_evento").click(function () {    
			    if(cont == 0){
					$("#input_adiar").append('<form class="checkout-form-select2" method="POST" action=""><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="form-group"><label for="nova_data" class="control-label">Nova Data<span class="obrigatorio"> *</span></label><input id="nova_data" name="nova_data" type="date" class="form-control" value= "" REQUIRED></div></div></form>');
				    var cont = 1;
				}else{
					$("#input_adiar").remove();
					var cont = 0;
				}

			});	    

			$("#cancelar_evento").click(function () {
				alert('<div class="modal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p>Modal body text goes here.</p></div><div class="modal-footer"><button type="button" class="btn btn-primary">Save changes</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div></div>');
			});

			</script>