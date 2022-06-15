 <html>
 
	<head>
	    <title> Meu formulário </title>
	</head>
	
	<body>

        <?php echo validation_errors(); ?>
		<?php echo form_open('Form/teste');  ?>

			<h5> Nome de usuário </h5>
			<input type= "text" name= "informacao" size ="50" />

			<div> 
				<input type= "submit" value= "Enviar" /> 
			</div>

		<?php echo form_close();  ?>

	</body>
	
 </html>