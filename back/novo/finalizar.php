<?php
$site_page = "finalizar";
include ("includes/head.php"); 
?>

<body class="pg-interna pg-finalizar" >
	
	<?php include ("includes/header.php") ?>

	<div class="panel">
		<div class="container">
			<div class="panel-body">
				<div class="t-center"><h2 class="panel-title">Finalizar</h2></div>

				<h4 class="cor-marrom">Marmita R$ 10,00</h4>
				<p>- Pedidos apenas para empresas. Entregamos em toda João Pessoa e Cabedelo</p>
				<p><b> Horário de entrega de 11h as 14h de segunda à sábado. </b></p>

				<h4 class="cor-marrom">Pedido para hoje:</h4>
				<p>Quinta-Feira | 09/04/2015 </p>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-body">
			<div class="container">
				<div id="tabpanel-refeicao" role="tabpanel">
					<ul class="nav tabs-custom" role="tablist">
						<li role="presentation" class="active">
							<a href="#carrinho" aria-controls="as" role="tab" data-toggle="tab">Carrinho</a>
						</li>
						<li role="presentation">
							<a href="#identificacao" aria-controls="messages" role="tab" data-toggle="tab">Identificação</a>
						</li>
						<li role="presentation">
							<a href="#endereco" aria-controls="settings" role="tab" data-toggle="tab">Endereço</a>
						</li>
						<li role="presentation">
							<a href="#pagamento" aria-controls="settings" role="tab" data-toggle="tab">Pagamento</a>
						</li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane carrinho active" id="carrinho">
							<div class="tabela">
								<div class="topo">
									<div class="col-md-9">
										<div class="col-md-2"></div>
										<div class="col-md-10">
											Marmita
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-6">
											Quantidade
										</div>
										<div class="col-md-6">
											Subtotal
										</div>
									</div>
								</div>
								<div class="content">
									<div class="row">
										<div class="col-md-9">
											<div class="col-md-2">
												<a href="#" class="excluir"><i class="fa fa-times-circle"></i></a>
											</div>
											<div class="col-md-10">
												Feijão carioca - Arroz branco - Macarrão espaguete ao molho com calabresa - Legumes a portuguesa
												Legumes a portuguesa - Banana empanada - Bife à portuguesa - Bife à portuguesa
											</div>	
										</div>
										<div class="col-md-3">
											<div class="col-md-6">
												<form action="" method="post" class="formQuantQuentinhas">
													<input type="number" value="1" class="form-control" min="1">
												</form>
											</div>
											<div class="col-md-6">
												<div class="subTotal">R$ 10,00</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-9">
											<div class="col-md-2">
												<a href="#" class="excluir"><i class="fa fa-times-circle"></i></a>
											</div>
											<div class="col-md-10">
												Feijão carioca - Arroz branco - Macarrão espaguete ao molho com calabresa - Legumes a portuguesa
												Legumes a portuguesa - Banana empanada - Bife à portuguesa - Bife à portuguesa
											</div>	
										</div>
										<div class="col-md-3">
											<div class="col-md-6">
												<form action="" method="post" class="formQuantQuentinhas">
													<input type="number" value="1" class="form-control" min="1">
												</form>
											</div>
											<div class="col-md-6">
												<div class="subTotal">R$ 10,00</div>
											</div>
										</div>
									</div>
								</div>
								<div class="rodape">
									<h3>Total: R$ 20,00</h3>
								</div>
							</div>                  
							<p class="botoes">
								<a href="pedido.html" class="btn btn-transparente radius-10" title="Comprar mais">Comprar +</a>
								<a href="#identificacao" aria-controls="messages" role="tab" data-toggle="tab" class="avancar btn btn-amarelo" title="Avançar para a próxima etapa">Avançar</a>
							</p>
						</div>
						<div role="tabpanel" class="tab-pane identificacao" id="identificacao">
							<div class="row">
								<div class="col-md-4">
									<div class="login-area tabela">
										<div class="topo">Já sou cadastrado</div>
										<div class="content">
											<form action="" class="formLogin" method="post">
												<fieldset class="email">
													<label for="email">E-mail: </label>
													<input type="text" name="email" id="email" required="true" class="radius-10 form-control email">
												</fieldset>
												<fieldset class="">
													<label for="senha">Senha: </label>
													<input type="password" name="senha" id="senha" required="true" class="radius-10 form-control">
												</fieldset>									  
												<fieldset>
													<small><a href="recuperar-senha.html" title="Esqueci minha senha" class="cor-marrom f-left">Esqueci minha senha</a></small>
													<button type="submit" class="btn btn-amarelo f-right">Entrar</button>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="cadas-area tabela">
										<div class="topo">Meu Primeiro Pedido</div>
										<div class="content">
											<form action="" class="formCadas" method="post">
												<div class="row">
													<div class="col-md-6">
														<fieldset>
															<label for="nome-empresa">Nome da Empresa: </label>
															<input type="text" name="nome-empresa" id="nome-empresa" required="true" class="radius-10 form-control email">
														</fieldset>
													</div>
													<div class="col-md-6">
														<fieldset>
															<label for="nome-respons">Nome do Responsável: </label>
															<input type="text" name="nome-respons" id="nome-respons" required="true" class="radius-10 form-control email">
														</fieldset>
													</div>
												</div>

												<div class="row">
													<fieldset class="col-md-4">
														<label for="email">E-mail: </label>
														<input type="email" name="email" id="email" required="true" class="radius-10 form-control email">
													</fieldset>
													<fieldset class="col-md-4">
														<label for="phone">Telefone: </label>
														<input type="tel" name="phone" id="phone" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
													</fieldset>
													<fieldset class="col-md-4">
														<label for="cel">Celular: </label>
														<input type="tel" name="cel" id="cel" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
													</fieldset>
												</div>
												<div class="row">
													<fieldset class="col-md-10">
														<label for="end">Endereço: </label>
														<input type="text" name="end" id="end" required="true" class="radius-10 form-control">
													</fieldset>
													<fieldset class="col-md-2">
														<label for="bairro">Bairro: </label>
														<input type="text" name="bairro" id="bairro" required="true" class="radius-10 form-control">
													</fieldset>
												</div>
												<fieldset >
													<label for="referencia">Referências para entrega: </label>
													<textarea type="text" name="referencia" id="referencia" required="true" class="radius-10 form-control"></textarea>
												</fieldset>
												<div class="row">
													<fieldset class="col-md-4">
														<label for="senha">Senha: </label>
														<input type="password" name="senha" id="senha" required="true" class="radius-10 form-control">
													</fieldset>
													<fieldset class="col-md-4">
														<label for="confirma-senha">Confirmar Senha: </label>
														<input type="password" name="confirma-senha" id="confirma-senha" required="true" class="radius-10 form-control">
													</fieldset>
													<fieldset class="col-md-4">
														<button type="submit" class="btn btn-amarelo">Cadastrar</button>
													</fieldset>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane identificacao" id="endereco">
							<div class="cadas-area tabela">
								<div class="topo">Confira seus dados</div>
								<div class="content">
									<div class="row">
										<div class="col-md-7">
											<form action="" class="formConfira">
												<div class="row">
													<fieldset class="col-md-6">
														<label for="nome-empresa">Nome da Empresa: </label>
														<input type="text" name="nome-empresa" id="nome-empresa" required="true" class="radius-10 form-control email" value="Lumen Agência" readonly="">
													</fieldset>
													<fieldset class="col-md-6">
														<label for="nome-respons">Nome do Responsável: </label>
														<input type="text" name="nome-respons" id="nome-respons" required="true" class="radius-10 form-control email" value="Isaías Alves" readonly="">
													</fieldset>
												</div>
												<div class="row">
													<fieldset class="col-md-4">
														<label for="email">E-mail: </label>
														<input type="email" name="email" id="email" required="true" class="radius-10 form-control email" value="isaias@lumen.com.br" readonly="">
													</fieldset>
													<fieldset class="col-md-4">
														<label for="phone">Telefone: </label>
														<input type="tel" name="phone" id="phone" required="true" class="radius-10 form-control phone" value="(83) 3254.5689" readonly="" maxlength="15" autocomplete="off">
													</fieldset>
													<fieldset class="col-md-4">
														<label for="cel">Celular: </label>
														<input type="tel" name="cel" id="cel" required="true" class="radius-10 form-control phone" value="(83) 9908.5878" readonly="" maxlength="15" autocomplete="off">
													</fieldset>
												</div>
												<div class="row">
													<fieldset class="col-md-10">
														<label for="end">Endereço: </label>
														<input type="text" name="end" id="end" required="true" class="radius-10 form-control" value="Rua das Hortências, 198" readonly="">
													</fieldset>
													<fieldset class="col-md-2">
														<label for="bairro">Bairro: </label>
														<input type="text" name="bairro" id="bairro" required="true" class="radius-10 form-control" value="Bessa" readonly="">
													</fieldset>
												</div>
												<fieldset>
													<label for="referencia">Referências para entrega: </label>
													<textarea type="text" name="referencia" id="referencia" required="true" class="radius-10 form-control" readonly="">Próximo ao Bessa Shopping</textarea>
												</fieldset>
												
												<fieldset >
													<a href="#" class="btn btn-amarelo f-right">Avançar</a>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane carrinho" id="pagamento">
							<div class="tabela">
								<div class="topo">
									<div class="col-md-9">
										<div class="col-md-2"></div>
										<div class="col-md-10">
											Marmita
										</div>
									</div>
									<div class="col-md-3">
										<div class="col-md-6">
											Quantidade
										</div>
										<div class="col-md-6">
											Subtotal
										</div>
									</div>
								</div>
								<div class="content">
									<div class="row">
										<div class="col-md-9">
											<div class="col-md-2">
											</div>
											<div class="col-md-10">
												Feijão carioca - Arroz branco - Macarrão espaguete ao molho com calabresa - Legumes a portuguesa
												Legumes a portuguesa - Banana empanada - Bife à portuguesa - Bife à portuguesa
											</div>	
										</div>
										<div class="col-md-3">
											<div class="col-md-6">
												<form action="" method="post" class="formQuantQuentinhas">
													<input type="number" value="1" class="form-control" min="1" readonly="">
												</form>
											</div>
											<div class="col-md-6">
												<div class="subTotal">R$ 10,00</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-9">
											<div class="col-md-2">
											</div>
											<div class="col-md-10">
												Feijão carioca - Arroz branco - Macarrão espaguete ao molho com calabresa - Legumes a portuguesa
												Legumes a portuguesa - Banana empanada - Bife à portuguesa - Bife à portuguesa
											</div>	
										</div>
										<div class="col-md-3">
											<div class="col-md-6">
												<form action="" method="post" class="formQuantQuentinhas">
													<input type="number" value="1" class="form-control" min="1" readonly="">
												</form>
											</div>
											<div class="col-md-6">
												<div class="subTotal">R$ 10,00</div>
											</div>
										</div>
									</div>
								</div>
								<div class="rodape">
									<h3>Total: R$ 20,00</h3>
								</div>
							</div>
							<div class="formas-pagamento">
								<form action="" id="fomFormasPagamento">
									<fieldset>
										<div class="f-left">
											<input type="radio" id="dinheiro" value="dinheiro" name="tipoPagamento" checked="">
											<label for="dinheiro">Dinheiro</label>
										</div>
										<div class="f-right">
											<input type="radio" id="maquineta" value="maquineta" name="tipoPagamento">
											<label for="maquineta">Maquineta</label>
										</div>
									</fieldset>
									<fieldset class="campo-troco">
										<label for="troco">Troco para:</label>
										<input type="text" placeholder="R$ 0,00" name="troco" class="troco">
									</fieldset>
									<fieldset>
										<button type="submit" class="btn btn-amarelo f-right">Finalizar</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include ("includes/footer.php") ?>

</body>
</html>