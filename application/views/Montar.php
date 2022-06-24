<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <?php $this->load->view('Template/Head') ?>
	</head>
	<body>
		<div id="preloader">
			<div class="inner">
				<img src="<?= base_url('FrondEnd/img/1493.gif') ?>" >
			</div>
		</div>
	    <header>		                    
			<?php $this->load->view('Template/Header') ?>  
		</header>         
            <?php $this->load->view('Meio/'.$Page) ?> 
		<footer>
		    <?php $this->load->view('Template/Footer') ?>
		</footer>		        
        <script>
			$(window).on('load', function () {
				$('#preloader .inner').fadeOut();
				$('#preloader').delay(10).fadeOut('slow'); 
				$('body').delay(10).css({'overflow': 'visible'});
			})	
		</script>

        <?php $this->load->view('Template/Js') ?>
	</body>
</html>