<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <?php $this->load->view('Template/Head') ?>
	</head>
	<body>
	    <header>		                    
			<?php $this->load->view('Template/Header') ?>  
		</header>         
            <?php $this->load->view('Meio/'.$Page) ?> 
		<footer>
		    <?php $this->load->view('Template/Footer') ?>
		</footer>		        

        <?php $this->load->view('Template/Js') ?>
	</body>
</html>