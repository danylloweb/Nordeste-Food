<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3 ">
				<a href="<?php echo base_url() ?>"  title="Ir à página inicial">
					<h1 class="logo"><?php echo $title ?></h1>
				</a>
			</div>
			<div class="col-md-9 ">
				<div class="header-container">
					<div class="row">
						<div class="col-md-7">
							<a class="phone" href="tel:(83) 4141-4420">(83) 4141-4420</a>
						</div>
						<div class="col-md-2 col-xs-6">
							<div class="redes-sociais">
								<a href="https://www.facebook.com/NordesteFoodService/" class="" title="">Facebook <div class="item"><i class="fa fa-facebook"></i></div> </a>
								<!-- <a href="#" class="item" title=""><i class="fa fa-facebook"></i></a> -->
								<!-- <a href="#" class="item" title=""><i class="fa fa-twitter"></i></a> -->
								<!-- <a href="#" class="item" title=""><i class="fa fa-google-plus"></i></a> -->
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="cart-preview">
								<div class="count">
									<p class="title">Carrinho</p>
									<span class="value"><?php echo $this->cart->total_items() ?></span>
									<span class="label">Pedido(s)</span>
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
		<li><a href="<?php echo base_url() ?>" title="Home" class="" ><i class="fa fa-home" alt="home"></i></a></li>
		<li><a href="<?php echo base_url('institucional') ?>" title="A Empresa" class="" ><i class="fa fa-question-circle"></i></a></li>
		<li><a href="<?php echo base_url('refeicoes') ?>" title="Refeições" class="" ><i class="fa fa-cutlery"></i></a></li>
		<li><a href="<?php echo base_url('pedidos') ?>" title="Faça seu Pedido" class="" ><i class="fa fa-check-square-o"></i></a></li>
		<li><a href="<?php echo base_url('servicos') ?>" title="Serviços" class="" ><i class="fa fa-bookmark"></i></a></li>
		<li><a href="<?php echo base_url('contato') ?>" class="" title="Contato"><i class="fa fa-envelope"></i></a></li>

	</ul>
</nav>