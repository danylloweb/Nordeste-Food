<!-- Pag. carrinho a lacarte -->

<div class="pg-finalizar">

    <div class="panel">
        <div class="container">
            <div class="panel-body">
                <div class="t-center"><h2 class="panel-title">Finalizar</h2></div>

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
                                <li role="presentation" class="active">
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
                                <li role="presentation">
                                    <a href="#">Pagamento</a>
                                </li>
                            </div>
                        </div>
                    </ul>

                    <div class="tab-content">
                        <!-- /Código duplicado do Carrinho, o anterior está comentado no final -->
                        <div role="tabpanel" class="tab-pane carrinho active" id="carrinho" class="carrinho">
                            <?php echo form_open('carrinho/atualizar_carrinho') ?>
                            <div class="tabela">
                                <div class="topo">
                                    <div class="col-md-8">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10">Marmita</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-6">Quantidade</div>
                                        <div class="col-md-6">Subtotal</div>
                                    </div>
                                </div>
                                <div class="content">
                                 <?php if ($this->cart->contents()): ?>

                                    <?php $i = 1; ?>

                                    <?php foreach ($this->cart->contents() as $cart): ?> 

                                        <?php $refeicao = $this->refeicao->get_refeicao(array('ref_id' => $cart['id'])); ?>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="col-md-2">
                                                    <?php echo form_hidden($i . '_rowid', $cart['rowid']); ?> 

                                                    <a href="<?php echo base_url('carrinho/remover_marmita/' . $cart['rowid']) ?>" class="excluir"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                                <div class="col-md-10">
                                                    <?php echo $cart['name']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-6">
                                                    <input type="number" name="<?php echo $i ?>_qty" value="<?php echo $cart['qty'] ?>" class="form-control" min="1">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="subTotal">R$ <?php echo number_format($cart['subtotal'], 2, ',', '.') ?></div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php $i++ ?> 

                                    <?php endforeach ?>
                                </div>
                                <div class="rodape">
                                    <button type="submit" class="btn pull-left" style="margin-top: 5px; background: transparent; color: #8A4A31">Atualizar Carrinho</button>
                                    <h3>Total: R$ <?php echo $this->cart->format_number($this->cart->total()) ?></h3>
                                </div>
                                <!-- <?php endif ?> -->
                            </div>
                            <p class="botoes">
                                <a href="<?php echo base_url('pedidos') ?>" class="btn btn-transparente radius-10" title="Comprar mais">Comprar +</a>
                                <a href="<?php echo base_url('identificacao') ?>" class="avancar btn btn-amarelo" title="Avançar para a próxima etapa">Avançar</a>
                            </p>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /pg-finalizar -->
<?php /*

<!-- <div role="tabpanel" class="tab-pane carrinho active" id="carrinho">
    <?php echo form_open('carrinho/atualizar_carrinho') ?>
    <div class="tabela">
        <div class="topo">
            <div class="col-md-8">
                <div class="col-md-2"></div>
                <div class="col-md-10">Prato</div>
            </div>
            <div class="col-md-4">
                <div class="col-md-6">Quantidade</div>
                <div class="col-md-6">Subtotal</div>
            </div>
        </div>
        <div class="content">
            <?php if ($this->cart->contents()): ?>

                <?php $i = 1; ?>

                <?php foreach ($this->cart->contents() as $cart): ?>

                    <?php $refeicao = $this->refeicao->get_refeicao(array('ref_id' => $cart['id'])); ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-2">
                                <?php echo form_hidden($i . '_rowid', $cart['rowid']); ?>
                                <a href="<?php echo base_url('carrinho/remover_marmita/' . $cart['rowid']) ?>" class="excluir"><i class="fa fa-times-circle"></i></a>
                            </div>
                            <div class="col-md-10">
                                <?php echo $cart['name']; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-6">
                                <input type="number" name="<?php echo $i ?>_qty" value="<?php echo $cart['qty'] ?>" class="form-control" min="1">
                            </div>
                            <div class="col-md-6">
                                <div class="subTotal">R$ <?php echo number_format($cart['subtotal'], 2, ',', '.') ?></div>
                            </div>
                        </div>
                    </div>

                    <?php $i++ ?>

                <?php endforeach ?>
            </div>
            <div class="rodape">
                <button type="submit" class="btn pull-left" style="margin-top: 5px; background: transparent; color: #8A4A31">Atualizar Carrinho</button>
                <h3>Total: R$ <?php echo $this->cart->format_number($this->cart->total()) ?></h3>
            </div>
        <?php endif ?>
    </div>
    <p class="botoes">
        <a href="<?php echo base_url('pedidos') ?>" class="btn btn-transparente radius-10" title="Comprar mais">Comprar +</a>
        <a href="<?php echo base_url('identificacao') ?>" class="avancar btn btn-amarelo" title="Avançar para a próxima etapa">Avançar</a>
    </p>
    <?php echo form_close() ?>
</div> -->

*/ ?>
