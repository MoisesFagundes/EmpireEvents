<script>
    $(document).ready(function(){
		$(document).on('click', ',view_data', function(){
			var user_id = $(this).attr("id");
			alert(user_id);
		}
	});	
</script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary view_data" id="<?php echo $Id ?>">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
			</button>
			<h2 class='modal-title' id='exampleModalLongTitle'>O que levar?</h2>
		</div>
		<div class='modal-body'>
			<table class='table'>
				<thead class='thead-dark'>
					<tr>
						<th scope='col'>#</th>
						<th scope='col'>Itens</th>
						<th scope='col'>Quantidades</th>
					   <th scope='col'>Medidas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>1</th>
						<td>2</td>
						<td>3</td>
						<td>4</td>
					</tr>
			   </tbody>
			</table>
			<h5><strong>Para onde: </strong>Rua Rio Gatimim - 103</h5>
		</div>
		<div class='modal-footer'>
			<a href='http://localhost/Empire_Events/PainelControlls/gerar_comprovante/2' target='_blank' ><button type='button' class='btn btn-primary'>Emitir comprovante</button></a>
		</div>
    </div>
  </div>
</div>