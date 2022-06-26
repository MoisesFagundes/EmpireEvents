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

			<div class="cookie-disclaimer">
				<div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
				<div class="container">
					<p>A Empire Events usa cookies para aumentar a qualidade do site. <a href="<?= base_url('Politica_de_Privacidade') ?>" target="_blank" >Leia mais sobre nossa política de privacidade.</a>
					<br>Ao continuar a usar o site, você aceita nosso uso de cookies.</p>
					<button type="button" class="btn btn-warning accept-cookie">Está bem!</button>
				</div>
			</div> 
		<footer>
		    <?php $this->load->view('Template/Footer') ?>
		</footer>		        
        <script>
			$(window).on('load', function () {
				$('#preloader .inner').fadeOut();
				$('#preloader').delay(10).fadeOut('slow'); 
				$('body').delay(10).css({'overflow': 'visible'});
			})
			
			$(document).ready(function() { 
				var cookie = false;
				var cookieContent = $('.cookie-disclaimer');

				checkCookie();

				if (cookie === true) {
				cookieContent.hide();
				}

				function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
				var expires = "expires=" + d.toGMTString();
				document.cookie = cname + "=" + cvalue + "; " + expires;
				}

				function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i].trim();
					if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
				}
				return "";
				}

				function checkCookie() {
				var check = getCookie("acookie");
				if (check !== "") {
					return cookie = true;
				} else {
					return cookie = false; //setCookie("acookie", "accepted", 365);
				}
				
				}
				$('.accept-cookie').click(function () {
				setCookie("acookie", "accepted", 365);
				cookieContent.fadeOut('slow');
				});
			});
		</script>

        <?php $this->load->view('Template/Js') ?>
	</body>
</html>