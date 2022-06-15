							<div class='col-lg-10 col-md-10 col-sm-9 col-xs-12'>
								<ul class='profile-notification'>                                                                                    
									<li>
										<div class='apply-btn-area'>
											<button id='login-button' href='#' class='btn btn-primary' >Login</button>
											<div id='login-form' class='login-form' style='display: none;'>
												<h3>Login</h3>
											   <form method='POST' action='valida.php'>
													<input name='email' type='email' class='form-control' maxlength='50' placeholder='Email' required/>
													<input name='senha' type='password' class='form-control' maxlength='50' placeholder='Senha' required/>
													<button name='login' type='submit' class='btn btn-primary btn-lg'>Login</button>
													<button name='cadastrar' href='registration.php' class='btn btn-primary btn-lg'>Cadastrar</button>
												</form>	
												<div class='remember-lost'>
													<a id='login-button1' href='#' class='lost-password'>Esqueceu sua senha?</a>
													<div id='login-form1' class='login-form1' style='display: none;'>
														<h3>Recuperação de senha</h3>
													   <form method='POST' action='redefinicaodesenha.php'>
															<input name='email1' type='email' class='form-control' maxlength='50' placeholder='Email' required/>
															<h5>
															  <small class='text-muted'>* Enviaremos sua nova senha por email em alguns instantes.</small>
															</h5>
															<button name='login' type='submit' class='btn btn-primary btn-lg btn-block'>Enviar</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>