<!-- Pagina de Pedidos -->
<section id="wrap-centro">
	<div class="panel">
		<div class="container">
			<div class="panel-body">
				<div class="t-center"><h2 class="panel-title">Faça seu Pedido</h2></div>

				<h4 class="cor-marrom">Marmita R$ <?php echo number_format($preco_quentinha, 2, ',', '.') ?></h4>
				<p>- Pedidos apenas para empresas. Entregamos em toda João Pessoa e Cabedelo</p>
				<p><b> Horário de entrega de 11h as 14h de segunda à sábado. </b></p>

				<h4 class="cor-marrom">Pedido para hoje:</h4>
				<p><?php echo $marmita->mar_dia_semana ?> | <?php echo data_for_humans($marmita->mar_data) ?> </p>

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
					<div class="col-md-8">
						<?php if ($this->session->flashdata('erro')): ?>
							<div class="alert alert-danger"><?php echo $this->session->flashdata('erro') ?></div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('sucesso')): ?>
							<div class="alert alert-success"><?php echo $this->session->flashdata('sucesso') ?></div>
						<?php endif; ?>
						<?php echo form_open('pedidos/add_marmita') ?>
						<div class="row">
							<div class="col-md-4">
								<fieldset>
									<select name="ref_feijao" class="entrada radius-10 form-control">
										<?php if (count($feijoes)): ?>
											<option value="">Selecione o Feijão</option>
											<?php foreach ($feijoes as $feijao): ?>
												<option value="<?php echo $feijao->fei_nome ?>"><?php echo $feijao->fei_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
								<fieldset>
									<select name="ref_arroz" class="entrada radius-10 form-control">
										<?php if (count($arrozes)): ?>
											<option value="">Selecione o Arroz</option>
											<?php foreach ($arrozes as $arroz): ?>
												<option value="<?php echo $arroz->arr_nome ?>"><?php echo $arroz->arr_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
								<fieldset>
									<select name="ref_macarrao" class="entrada radius-10 form-control">
										<?php if (count($macarroes)): ?>
											<option value="">Selecione o Macarrão</option>
											<?php foreach ($macarroes as $macarrao): ?>
												<option value="<?php echo $macarrao->mac_nome ?>"><?php echo $macarrao->mac_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
							</div>
							<div class="col-md-4">
								<fieldset>
									<select name="ref_salada_um" class="entrada radius-10 form-control">
										<?php if (count($saladas)): ?>
											<option value="">Selecione o 1ª opção de salada</option>
											<?php foreach ($saladas as $salada): ?>
												<option value="<?php echo $salada->sal_nome ?>"><?php echo $salada->sal_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
								<fieldset>
									<select name="ref_salada_dois" class="entrada radius-10 form-control">
										<?php if (count($saladas)): ?>
											<option value="">Selecione o 2ª opção de salada</option>
											<?php foreach ($saladas as $salada): ?>
												<option value="<?php echo $salada->sal_nome ?>"><?php echo $salada->sal_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
								<fieldset>
									<select name="ref_acompanhamento" class="entrada radius-10 form-control">
										<?php if (count($acompanhamentos)): ?>
											<option value="">Selecione o Acompanhamento</option>
											<?php foreach ($acompanhamentos as $acompanhamento): ?>
												<option value="<?php echo $acompanhamento->aco_nome ?>"><?php echo $acompanhamento->aco_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
							</div>
							<div class="col-md-4">
								<fieldset>
									<select name="ref_carne_um" class="entrada radius-10 form-control">
										<?php if (count($carnes)): ?>
											<option value="">Selecione a 1ª opção de carne</option>
											<?php foreach ($carnes as $carne): ?>
												<option value="<?php echo $carne->car_nome ?>"><?php echo $carne->car_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
								<fieldset>
									<select name="ref_carne_dois" class="entrada radius-10 form-control">
										<?php if (count($carnes)): ?>
											<option value="">Selecione a 2ª opção de carne</option>
											<?php foreach ($carnes as $carne): ?>
												<option value="<?php echo $carne->car_nome ?>"><?php echo $carne->car_nome ?></option>
											<?php endforeach ?>
										<?php else: ?>
											<option value="">Não há opções</option>
										<?php endif ?>
									</select>
								</fieldset>
							</div>
						</div>
						<fieldset>
							<p>* Você tem direito a 2 tipos de carnes, no total de 2 pedaços.</p>
						</fieldset>
						<fieldset>
							<button type="submit" class="btn btn-amarelo f-right">Adicionar</button>
						</fieldset>
						<?php echo form_close() ?>
					</div>

					<div class="col-md-4">
						<div class="carrinho-contagem">
							<i class="cart"></i>
							<h3 class="carrinho-contagem-title">Meu Carrinho</h3>
							<h2 class="quant"><?php echo $this->cart->total_items() ?></h2>
							<p class="big">MARMITA(S)</p>
							<a href="<?php echo base_url('carrinho') ?>" class="btn btn-dashed">Próxima Etapa</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>



