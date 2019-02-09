<?php
$site_page = "Faça seu Pedido";
include ("includes/head.php"); 
?>

<body class="pg-interna pg-pedido" >
	
	<?php include ("includes/header.php") ?>

	<div class="panel">
		<div class="container">
			<div class="panel-body">
				<div class="t-center"><h2 class="panel-title">Faça seu Pedido</h2></div>

				<h4 class="cor-marrom">Marmita R$ 10,00</h4>
				<p>- Pedidos apenas para empresas. Entregamos em toda João Pessoa e Cabedelo</p>
				<p><b> Horário de entrega de 11h as 14h de segunda à sábado. </b></p>

				<h4 class="cor-marrom">Pedido para hoje:</h4>
				<p>Quinta-Feira | 09/04/2015 </p>

				<hr class="clear">
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="container">
			<div class="panel-body">
				<h4 class="cor-marrom">Monte sua marmita:</h4>
				<p>Selecione as opções:</p>

				<div class="row">
					<div class="col-md-9">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-4">
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione o feijão</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione o arroz</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione o macarrão</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
								</div>
								<div class="col-md-4">
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione 1ª opção de salada</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione 2ª opção de salada</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione o acompanhamento</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
								</div>
								<div class="col-md-4">
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione 1ª opção de carne</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
									<fieldset>
										<select name="" id="" class="entrada radius-10 form-control">
											<option value="selecione">Selecione 2ª opção de carne</option>
											<option value="opcao1">Opção A</option>
											<option value="opcao2">Opção B</option>
											<option value="opcao3">Opção C</option>
										</select>
									</fieldset>
								</div>
							</div>
							<fieldset>
								<p>* Você tem direito a 2 tipos de carnes, no total de 2 pedaços.</p>						
							</fieldset>
							<fieldset>
								<button type="submit" class="btn btn-amarelo f-right">Enviar</button>
							</fieldset>
						</form>
					</div>
					<div class="col-md-3">
						<div class="carrinho-contagem">
							<i class="cart"></i>
							<h3 class="carrinho-contagem-title">Meu Carrinho</h3>
							<h2 class="quant">2</h2>
							<p class="big">MARMITA(S)</p>
							<a href="finalizar.php" class="btn btn-dashed">Enviar</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include ("includes/footer.php") ?>

</body>
</html>