<?php
$site_page = "Contato";
include ("includes/head.php"); 
?>

<body class="pg-interna pg-empresa" >
	
	<?php include ("includes/header.php") ?>

	<div class="panel">
		<div class="container">
			<div class="panel-body">
				<div class="t-center"><h2 class="panel-title">Contato</h2></div>

				<p>Entre em contato conosco para encaminhar alguma duvida, crítica, elogio ou sugestão. Preencha o formulário abaixo e retornaremos o mais breve possível.</p>
				<div class="row">
					<div class="col-md-6">
						<form action="enviacontato.php" class="formContato" method="post">
							<fieldset>
								<label for="nome">Nome: </label>
								<input type="text" name="nome" id="nome" required="true" class="radius-10 form-control">
							</fieldset>
							<div class="row">
								<div class="col-md-8">
									<fieldset>
										<label for="email">E-mail: </label>
										<input type="email" name="email" id="email" required="true" class="radius-10 form-control email">
									</fieldset>
								</div>
								<div class="col-md-4">
									<fieldset>
										<label for="phone">Telefone: </label>
										<input type="tel" name="phone" id="phone" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
									</fieldset>
								</div>
							</div>
							<fieldset>
								<label for="mensagem">Mensagem: </label>
								<textarea type="text" name="mensagem" id="mensagem" required="true" class="radius-10 form-control"></textarea>
							</fieldset>
							<fieldset>
								<button type="submit" class="btn btn-amarelo f-right">Enviar</button>
							</fieldset>
						</form>
					</div>
					<div class="col-md-1"></div>

					<div class="col-md-5">
						<div class="contato-area">
							<ul>
								<li>
									<div class="col-md-3 col-xs-3"><div class="icone"><i class="fa fa-phone"></i></div></div>
									<div class="col-md-9 col-xs-9">
										<div class="cont">
											<div class="cel">
												Entre em contato por telefone
												<span class="clear"></span>
												<span class="big">+55 (83) 3215.4558  |  9985.4589</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 col-xs-3"><div class="icone"><i class="fa fa-envelope"></i></div></div>
									<div class="col-md-9 col-xs-9">
										<div class="cont">
											<div class="cel">
												Entre em contato por e-mail
												<span class="clear"></span>
												<span class="big">contato@nordestefoodservice.com.br</span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 col-xs-3"><div class="icone"><i class="fa fa-map-marker"></i></div></div>
									<div class="col-md-9 col-xs-9">
										<div class="cont">
											<div class="cel">
												Onde estamos
												<span class="clear"></span>
												<span class="big">Av. Campos Sales, 156 Manaíra, João Pessoa / PB</span>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-body">
			<div class="container">
				
			</div>
		</div>
	</div>

	<?php include ("includes/panel-pedidos-online.php") ?>

	<?php include ("includes/footer.php") ?>

</body>
</html>