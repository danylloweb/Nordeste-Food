<div class="header">    
	<div class="container">
		<div class="row">
			<div class="col-md-3 ">
				<a href="index.php"  title="Ir à página inicial">
					<h1 class="logo"> <?php echo $site_title; ?> </h1>
				</a>
			</div>
			<div class="col-md-9 ">
				<div class="header-container">
					<div class="row">
						<div class="col-md-7">
							<a class="phone" href="tel:+558332154558">(83) 4141-4420</a>
						</div>
						<div class="col-md-2 col-xs-6">
							<div class="redes-sociais">
								<a href="#" class="item" title=""><i class="fa fa-facebook"></i></a>Facebook
								
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="cart-preview">
								<div class="count">
									<p class="title">Carrinho</p>
									<span class="value">0</span>
									<span class="label">Marmita(s)</span>
								</div>
								<span class="fa fa-shopping-cart"></span>
							</div>
						</div>
					</div>
				</div>
				<?php include("menu-principal.php"); ?>
			</div>
		</div>
	</div>
</div>

<!-- * Menu Mobile -->
<a href="javascript:void"  class="btn-menu-mob" title="Abrir Menu"><i class="fa fa-bars"></i></a>
<nav>
	<ul class="menu-mob">
		<li><a href="javascript:void" onClick="abrirMenuMob('menu-mob')" class="fechar" title="Fechar Menu"><i class="fa fa-bars"></i></a></li>
		<li><a href="index.php" title="Home" class="<?php echo ($site_page == 'Home')?'active':''?>" ><i class="fa fa-home" alt="home"></i></a></li>
		<li><a href="empresa.php" title="A Empresa" class="<?php echo ($site_page == 'Empresa')?'active':''?>" ><i class="fa fa-question-circle"></i></a></li>
		<li><a href="refeicoes.php" title="Refeições" class="<?php echo ($site_page == 'Refeições')?'active':''?>" ><i class="fa fa-cutlery"></i></a></li>
		<li><a href="pedido.php" title="Faça seu Pedido" class="<?php echo ($site_page == 'Faça seu Pedido')?'active':''?>" ><i class="fa fa-check-square-o"></i></a></li>
		<li><a href="servicos.php" title="Serviços" class="<?php echo ($site_page == 'Serviços')?'active':''?>" ><i class="fa fa-bookmark"></i></a></li>
		<li><a href="contato.php" class="<?php echo ($site_page == 'Contato')?'active':''?>" title="Contato"><i class="fa fa-envelope"></i></a></li>

	</ul>
</nav>