
<div class="panel">
    <div class="container">
        <div class="panel-body">
            <div class="t-center"><h2 class="panel-title">Finalizar</h2></div>

         
            <p>- Pedidos apenas para empresas. Entregamos em toda João Pessoa e Cabedelo</p>
            <p><b> Horário de entrega de 11h as 14h de segunda à sábado. </b></p>

            <h4 class="cor-marrom">Pedido para hoje:</h4>
            <p><?php echo $marmita->mar_dia_semana ?> | <?php echo data_for_humans($marmita->mar_data) ?> </p>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <div class="container">
            <div id="tabpanel-refeicao" role="tabpanel">
                <ul class="nav tabs-custom" role="tablist">
                    <div class="row">
                        <div class="col-md-3">
                            <li role="presentation">
                                <a href="#carrinho">Carrinho</a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li role="presentation">
                                <a href="#">Identificação</a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li role="presentation" class="active">
                                <a href="#">Endereço</a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li role="presentation">
                                <a href="#">Pagamento</a>
                            </li>
                        </div>
                    </div>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane identificacao active" id="endereco">
                        <div class="cadas-area tabela">
                            <div class="topo">Confira seus dados</div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <?php echo form_open('confirmacao_endereco/atualizar', array('class' => 'formConfira')) ?>
                                            <?php if ($errocad): ?>
                                                <div class="alert alert-danger"><?php echo $errocad ?></div>
                                            <?php endif ?>
                                            <?php if ($okcad): ?>
                                                <div class="alert alert-success"><?php echo $okcad ?></div>
                                            <?php endif ?>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <label for="nome-empresa">Nome da Empresa: </label>
                                                        <input type="text" name="cli_nome_empresa" id="nome-empresa" value="<?php echo set_value('cli_nome_empresa', $cliente->cli_nome_empresa)?>" required="true" class="radius-10 form-control email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <label for="nome-respons">Nome do Responsável: </label>
                                                        <input type="text" name="cli_nome" id="nome-respons" value="<?php echo set_value('cli_nome', $cliente->cli_nome)?>" required="true" class="radius-10 form-control email">
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <fieldset class="col-md-4">
                                                    <label for="email">E-mail: </label>
                                                    <input type="email" name="cli_email" id="email" value="<?php echo set_value('cli_email', $cliente->cli_email)?>" required="true" class="radius-10 form-control email">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <label for="phone">Telefone: </label>
                                                    <input type="tel" name="cli_telefone" id="phone" value="<?php echo set_value('cli_telefone', $cliente->cli_telefone)?>" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <label for="cel">Celular: </label>
                                                    <input type="tel" name="cli_celular" id="cel" value="<?php echo set_value('cli_celular', $cliente->cli_celular)?>" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="col-md-10">
                                                    <label for="end">Endereço: </label>
                                                    <input type="text" name="cli_endereco" id="end" value="<?php echo set_value('cli_endereco', $cliente->cli_endereco)?>" required="true" class="radius-10 form-control">
                                                </fieldset>
                                                <fieldset class="col-md-2">
                                                    <label for="bairro">Bairro: </label>
                                                    <input type="text" name="cli_bairro" id="bairro" value="<?php echo set_value('cli_bairro', $cliente->cli_bairro)?>" required="true" class="radius-10 form-control">
                                                </fieldset>
                                            </div>
                                            <fieldset >
                                                <label for="referencia">Referências para entrega: </label>
                                                <textarea type="text" name="cli_referencia" id="referencia" required="true" class="radius-10 form-control"><?php echo set_value('cli_referencia', $cliente->cli_referencia)?></textarea>
                                            </fieldset>
                                            <fieldset >
                                                <button type="submit" class="btn btn-amarelo f-left">Atualizar</button>
                                                <a href="<?php echo base_url('pagamento') ?>" class="btn btn-amarelo f-right">Avançar</a>
                                            </fieldset>
                                        <?php echo form_close() ?>
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