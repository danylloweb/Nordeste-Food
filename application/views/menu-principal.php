<nav class="menu menu-principal">
	<li><a href="<?php echo base_url() ?>">Home</a></li>
	<li><a href="<?php echo base_url('institucional') ?>">A Empresa</a></li>
	<li>
		<a href="javascript:void(0)">Refeições</a>  
		<ul class="submenu animated fadeInUp">
			<li><a href="<?php echo base_url("cardapio_semanal") ?>">Cardápio</a></li>
			<li><a href="<?php echo base_url("cardapio_alacarte") ?>">À La Carte</a></li>
			<li><a href="<?php echo base_url("bebidas") ?>">Bebidas</a></li>
			<li><a href="<?php echo base_url("sobremesas") ?>">Sobremesas</a></li>
		</ul>
	</li>
	
	<li><a href="<?php echo base_url("escolha") ?>">Faça seu Pedido</a></li>
	<!-- <li><a href="<?php echo base_url('pedidos') ?>">Marmita</a></li> -->
	<li><a href="<?php echo base_url('servicos') ?>">Serviços</a></li>
	<li><a href="<?php echo base_url('contato') ?>">Contato</a></li>
</nav>
