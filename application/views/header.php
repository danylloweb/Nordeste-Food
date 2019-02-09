<div class="header" id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3 ">
				<a href="<?php echo base_url() ?>"  title="Ir à página inicial">
					<h1 class="logo"><?php echo $title ?></h1>
				</a>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<div class="header-top">
					<div class="row">
						<div class="col-md-6">
							 <span class="pull-left"><a class="phone" href="tel:(83) 4141-4420">(83) 4141-4420</a></span>
							 <span class="pull-left"> | </span>
							 <span class="pull-left"><a class="phone" href="tel:(83) 3191-4401">(83) 3191-4401</a></span>
						</div>
						<div class="col-md-3">
							<div class=" social">
								<a href="https://www.facebook.com/NordesteFoodService/" class="" title=""> <i class="fa fa-facebook"></i></a>
								<!-- <a href="#" class="item" title=""><i class="fa fa-twitter"></i></a> -->
								<!-- <a href="#" class="item" title=""><i class="fa fa-google-plus"></i></a> -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="cart-preview cart">
								<div class="pull-left">
									<div class="count">
										<p class="title">Carrinho</p>
										<p class="count">
											<span class="value"><?php echo $this->cart->total_items() ?></span>
											<span class="label">Pedido(s)</span>
										</p>
									</div>
								</div>
								<i class="icon-cart"></i>
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
		<li><a href="javascript:void" class="fechar" title="Fechar Menu"><i class="fa fa-bars"></i></a></li>
		<li><a href="<?php echo base_url() ?>" title="Home" class="" ><i class="fa fa-home" alt="home"></i></a></li>
		<li><a href="<?php echo base_url('institucional') ?>" title="A Empresa" class="" ><i class="fa fa-question-circle"></i></a></li>
		<li><a href="<?php echo base_url('refeicoes') ?>" title="Refeições" class="" ><i class="fa fa-cutlery"></i></a></li>
		<li><a href="<?php echo base_url('escolha') ?>" title="Faça seu Pedido" class="" ><i class="fa fa-check-square-o"></i></a></li>
		<li><a href="<?php echo base_url('servicos') ?>" title="Serviços" class="" ><i class="fa fa-bookmark"></i></a></li>
		<li><a href="<?php echo base_url('contato') ?>" class="" title="Contato"><i class="fa fa-envelope"></i></a></li>

	</ul>
</nav>