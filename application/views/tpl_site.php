<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title><?php echo $title ?> | <?php echo $titulo ?></title>
	<meta name="description" content="<?php echo $description ?>"/>
	<meta name="keywords" content="<?php echo $keywords ?>"/>
	<meta name="author" content="www.lumenagencia.com.br"/>
	<meta name="robots" content="index, follow"/>
	<meta property="og:title" content="Nordeste Food Service">
	<meta property="og:description" content="">
	<meta property="og:url" content="<?php echo site_url() ?>">
	<meta property="og:image" content="<?php echo base_url('public/imagens/favicon.png') ?>">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:site_name" content="Nordeste Food Service">
	<meta property="og:type" content="website">
	<link rel="shortcut icon" href="<?php echo base_url('public/imagens/favicon.ico') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/includes/bootstrap-3.3.4-dist/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/includes/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('public/includes/font-awesome-4.5.0/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/includes/owl-carousel/owl.carousel.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/includes/owl-carousel/owl.theme.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/includes/owl-carousel/owl.transitions.css') ?>" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300,700|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/animate.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/main.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/estilos.css') ?>" />
	<!-- ok -->
</head>
<body class="<?php echo isset($body_class) ? $body_class : null ?>">
	<?php $this->load->view('header') ?>

	<?php echo $contents ?>

	<div class="footer">
		<div class="container" style="margin-bottom: 30px;">
			<div class="row">
				<div class="col-md-3">
					<figure><img src="<?php echo base_url('public/imagens/footer-img.jpg') ?>" alt="" class="footer-img"></figure>
				</div>
				<div class="col-md-9">
					<?php $this->load->view('menu-principal') ?>
					<div class="header-container">
						<div class="row">
							<div class="col-md-8">
								<div class="ass">
									<div>&copy; Nordeste Food Service</div>
									<div>Av. das Indústrias 400, Distritto Industrial, João Pessoa/PB</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class=" social">
									<a href="https://www.facebook.com/NordesteFoodService/" class="" title=""> <i class="fa fa-facebook"></i></a>
									<!-- <a href="#" class="item" title=""><i class="fa fa-twitter"></i></a> -->
									<!-- <a href="#" class="item" title=""><i class="fa fa-google-plus"></i></a> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>  <!-- Container -->
		</div>

		<?php $this->load->view('modal') ?>

		<script src="<?php echo base_url('public/scripts/jquery-1.11.0.min.js') ?>"></script>
		<script src="<?php echo base_url('public/includes/owl-carousel/owl.carousel.js') ?>"></script>
		<script src="<?php echo base_url('public/includes/bootstrap-3.3.4-dist/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/jquery.mask.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/placeholder-IE.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/jquery.validate.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/validacao-forms.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/jquery.smoothscroll.js') ?>"></script>
		<script src="<?php echo base_url('public/scripts/scripts.js') ?>"></script>
<script src="http://paraibarefeicoes.com.br/public/animatedModal.min.js"></script>
<script>
/**
     * PopUpSalex
     */
    if($('#demo01').length) {
        $('#demo01').on('click',function (e) {
            e.preventDefault();
        });
        $("#demo01").animatedModal();

        $(window).on('load',function (e) {
            setTimeout(function () {
                $("#demo01").trigger('click');
                $('.sprit').css('zIndex','0');
            }, 5000);
            $('.close-animatedModal').css('display','block');
        });

        $('.close-animatedModal').on('click',function (e) {
            e.preventDefault();
            $('.sprit').css('zIndex','999999');
            $('#animatedModal').remove();
        });
    }
</script>

	</body>
	</html>
