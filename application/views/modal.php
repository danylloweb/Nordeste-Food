<div id="modalPesquisa" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pesquisar</h4>
			</div>
			<div class="modal-body">
				<form action="" id="formPesquisa">
					<div class="input-group">
						<input type="text" required="true" aria-describedby="basic-addon1" placeholder="Pesquisar..." name="pesquisa" class="form-control">			
						<span class="input-group-btn posquisaLink">
							<button type="submit" class="btn btn-azul" type="button"><i class="fa fa-search fa-inverse fa-2"></i></button>
						</span>
					</div><!-- /input-group -->
				</form> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<div id="modalLogin" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				<form action="" id="formLogin">
					<input type="text" required="true" aria-describedby="basic-addon1" placeholder="Usuário:" name="usu" class="form-control email">
					<input type="password" required="true" aria-describedby="basic-addon1" placeholder="Senha:" name="senha" class="form-control">
					<button type="submit" class="btn btn-azul" type="button">Entrar</button>
					<a href="cadastro.php"  class="btn btn-default" >Cadastrar-se</a>
				</form> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>				
			</div>
		</div>

	</div>
</div>

<div id="modalRecuperarSenha" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Recuperar senha</h4>
			</div>
			<div class="modal-body">
				<form action="" id="formRecuperarSenha">
					<input type="text" required="true" aria-describedby="basic-addon1" placeholder="Informe seu e-mail:" name="email" class="form-control email">
					<button type="submit" class="btn btn-azul" type="button">Enviar</button>					
				</form> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>				
			</div>
		</div>

	</div>
</div>
