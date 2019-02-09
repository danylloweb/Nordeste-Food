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
                            <li role="presentation">
                                <a href="#">Endereço</a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li role="presentation" class="active">
                                <a href="#">Pagamento</a>
                            </li>
                        </div>
                    </div>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane carrinho active" id="pagamento">
                        <div class="tabela">
                            <div class="topo">
                                <div class="col-md-8">
                                    <div class="col-md-12">Pedido</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-6">Quantidade</div>
                                    <div class="col-md-6">Subtotal</div>
                                </div>
                            </div>
                            <div class="content">
                                <?php if ($this->cart->contents()): ?>
                                    <?php foreach ($this->cart->contents() as $cart): ?>
                                        <?php $refeicao = $this->refeicao->get_refeicao(array('ref_id' => $cart['id'])); ?>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="col-md-12">
                                                    <?php echo $cart['name']; ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-6">
                                                    <input type="number" value="<?php echo $cart['qty'] ?>" class="form-control" min="1" readonly="">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="subTotal">R$ <?php echo number_format($cart['subtotal'], 2, ',', '.') ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="rodape">
                                    <h3>Total: R$ <?php echo $this->cart->format_number($this->cart->total()) ?></h3>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="formas-pagamento">
                            <?php echo $this->session->userdata('tipo_cardapio') == 'marmita' ? form_open('pagamento/processar', array('class' => 'fomFormasPagamento')) : form_open('pagamento/processar_alacarte') ?>
                           <!-- <?php //echo form_open('pagamento/processar', array('class' => 'fomFormasPagamento')) ?>-->
                                <fieldset>
                                    <div class="f-left">
                                        <input type="radio" id="dinheiro" value="dinheiro" name="ped_tipo_pagamento" checked="">
                                        <label for="dinheiro">Dinheiro</label>
                                    </div>
                                    <div class="f-right">
                                        <input type="radio" id="maquineta" value="maquineta" name="ped_tipo_pagamento">
                                        <label for="maquineta">Maquineta</label>
                                    </div>
                                </fieldset>
                                <fieldset class="campo-troco">
                                    <label for="troco">Troco para:</label>
                                    <input type="text" placeholder="R$ 0,00" name="ped_dinheiro_troco" class="troco">
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="btn btn-amarelo f-right">Finalizar</button>
                                </fieldset>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>