<?php
$site_page = "Home";
include ("includes/head.php"); 
?>

<body id="home" class="" >
	
	<?php include ("includes/header.php") ?>
	
	<div class="container">
		<div class="slide slide-principal slide-1">
			<div class="item">
				<img src="imagens/base/banner-home.jpg" alt="" class="image">
			</div>
			<div class="item">
				<img src="imagens/base/banner-home.jpg" alt="" class="image">
			</div>
		</div>
	</div>

	<div class="panel panel-empresa bgAmarelo">
		<div class="container">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-5">
						<figure class="imagem-border"><img src="imagens/base/empresa-home.png" alt="Nordeste Food" class="empresa-img"></figure>
					</div>
					<div class="col-md-7">
						<h2 class="panel-title">A Empresa</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam animi at, quasi sunt esse ut quae perferendis. Nemo soluta totam quas suscipit, eligendi voluptatum nesciunt voluptate excepturi pariatur numquam, non!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam animi at, quasi sunt esse ut quae perferendis. Nemo soluta totam quas suscipit, eligendi voluptatum nesciunt voluptate excepturi pariatur numquam, non!</p>

						<a href="empresa.php" class="btn btn-transparente">Confira</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php include ("includes/panel-pedidos-online.php") ?>

	<?php include ("includes/panel-clientes.php") ?>
	
	<?php include ("includes/footer.php") ?>

</body>
</html>