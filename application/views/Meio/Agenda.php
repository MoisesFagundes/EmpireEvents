							<script>

							  document.addEventListener('DOMContentLoaded', function() {
								var calendarEl = document.getElementById('calendar');

								var calendar = new FullCalendar.Calendar(calendarEl, {
								  locale: 'pt-br',	
								  plugins: [ 'interaction', 'dayGrid' ],
								  editable: true,
								  eventLimit: true, // allow "more" link when too many events
								  events: [
									<?php foreach($Pedidos_da_Agenda['Pedidos_da_Agenda']->result_array() as $linha) {?>
									{
									  title: "<?= $linha['nomepacote'] ?>",
									  start: "<?= $linha['data'] ?>",
									  id: "<?= $linha['id'] ?>"
									},<?php
									}?>
								  ],
								  eventClick: function (info){
									  //Pegar id.
									  var id = (info.event.id);
									  
									  //Enviar id por post.
									  $.ajax({
										  type: "POST" ,
										  url: "<?= base_url('PainelControlls/modal') ?>",
										  data: {'id': id},
										  dataType: 'html',
										  success: function(retorna){
											  $('#visul_usuario').html(retorna);
											  $('#visualizar').modal('show');
										  }
										});	  
									}
								});

								calendar.render();
							  });

							</script>
							
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<div class="fundo-geral">
									<div id='calendar'></div>
								</div>	
							</div>
							<div id="visualizar" class="modal" tabindex="-1" role="dialog">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content" id="visul_usuario">
								  
									</div>
								</div>
							</div>						