        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $Titulo ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('FrondEnd/img/favicon_32x32_created_by_logaster.png') ?>">

        <!-- Normalize css --> 
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/normalize.css') ?>">

        <!-- Main css -->         
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/main.css') ?>">

        <!-- Bootstrap css --> 
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/bootstrap.min.css') ?>">

        <!-- Animate css --> 
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/animate.min.css') ?>">

        <!-- Font-awesome css -->
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/font-awesome.min.css') ?>">
        
        <!-- Font-awesome css -->
		<script src="https://kit.fontawesome.com/6501e1e3d0.js" crossorigin="anonymous"></script>
		
        <!-- Main Menu css -->      
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/meanmenu.min.css') ?>">

        <!-- Datetime Picker Style css -->
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/jquery.datetimepicker.css') ?>">

        <!-- Switch Style css -->
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/hover-min.css') ?>">
        
        <!-- Bootstrap multiselect -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="<?php echo base_url('FrondEnd/css/style.css') ?>">
		
		<!-- Full calendar -->
		<link rel="stylesheet" href="<?= base_url('FrondEnd/css/core/main.min.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('FrondEnd/css/daygrid/main.min.css') ?>"/>
		
		<!-- jquery-->  
        <script src="<?php echo base_url('FrondEnd/js/jquery-2.2.4.min.js') ?>" type="text/javascript"></script>
		
		<!-- Jquery Mask Plugin -->
        <script src="<?php echo base_url('FrondEnd/js/jquery.mask.min.js') ?>"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167497185-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-167497185-2');
        </script>

		<!-- Adicionar mascaras -->
		<script type="text/javascript">
			$(document).ready(function(){
				$("#cnpj").mask("00.000.000/0000-00")
				$("#cpf").mask("000.000.000-00")
				$("#cep").mask("00000-000")
				$("#telefone").mask("(00) 00000-0009")
				$("#precopessoa").mask("99.990,00", {reverse: true})
				$("#precohora").mask("99.990,00", {reverse: true})
				$("#precofixo").mask("99.990,00", {reverse: true})
				$("#nprotocolo").mask("000000")
				$("#valor").mask("999.990,00", {reverse: true})
			})
		</script>