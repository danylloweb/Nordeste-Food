<div class="container">

    <h1 class="page-title panel-title">Faça seu Pedido online - A La Carte</h1>
    <div id="box-pedidos">
        <div class="txt1 n-quentinha descricao-pag">Entregamos apenas no Bessa, Intermares, Poço, Jacaré, Manaíra, Tambaú, Cabo Branco, Bairro dos Estados, Miramar e Tambauzinho as marmitas individuais e os pedidos à la carte, e nas empresas localizadas na grande João Pessoa e Cabedelo.<br><b>Horário de entrega de 11h as 14h de segunda à sábado.</b></div>

        <div class="txt1 pedido-dia text-uppercase"><strong><span>Pedido para hoje: </span><?= $marmita->mar_dia_semana ?> | <?= data_for_humans($marmita->mar_data) ?></strong></div>
        <br>

        <div class="row">
            <div class="relative">
                <div class="col-md-8">
                    <h3>Cardápio</h3>

                    <!-- links não usados 
                    <?php foreach ($categorias as $categoria): ?>
                    <a class="form-control" href="<?= site_url('cardapio_alacarte/categoria/' . $categoria->prc_id)?>#list-ala"><?= $categoria->prc_nome ?></a>
                    <?php endforeach; ?>
                    <br> -->

                   <!-- ANTIGO 
                   <select name="" id="" class="selects type1 changeCat form-control"> 
                        <?php foreach ($categorias as $categoria): ?>
                             <option value="<?= $categoria->prc_id ?>" data-href="<?= site_url('cardapio_alacarte/categoria/' . $categoria->prc_id)?>" <?= set_selecionado($categoria->prc_id, $this->uri->segment(3), 'selected') ?> <?php if ($this->uri->segment(2) != 'categoria' && $categoria->prc_nome == 'Carnes'):?> selected="selected"<?php endif;?>><?= $categoria->prc_nome ?></option> 
                        <?php endforeach; ?>
                    </select>-->

                    <select name="" id="" class="selects type1 changeCat form-control select-cardapio"> 
                        <option value="" selected="" data-href="<?= site_url('cardapio_alacarte/') ?>">Escolha...</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria->prc_id ?>" data-href="<?= site_url('cardapio_alacarte/categoria/' . $categoria->prc_id)?>" <?= set_selecionado($categoria->prc_id, $this->uri->segment(3), 'selected') ?> <?php if ($this->uri->segment(2) != 'categoria' && $categoria->prc_nome == 'Carnes'):?> <?php endif;?>><?= $categoria->prc_nome ?></option> 
                            <?php 
                            endforeach; ?>
                        </select>

                        <ul class="list-ala" id="list-ala">
                            <?php foreach ($pratos as $prato): ?>
                                <li>
                                    <?= form_open('cardapio_alacarte/add_alacarte') ?>                    
                                    <input type="hidden" name="id" value="<?= $prato->pra_id?>" />
                                    <div class="n-item"><?= $prato->pra_nome ?></div>
                                    <input type="hidden" name="name" value="<?= convert_accented_characters($prato->pra_nome)?>" />
                                    <div class="desc-item"><?= $prato->pra_descricao ?></div>

                                    <div class="pedidos-quant-area">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="valor">R$ <?= number_format($prato->pra_valor, 2, ',', '.') ?></div>                        
                                            </div>
                                            <div class="col-md-2">
                                                <div class="ranger cont-ala">
                                                    <input type="text" name="qty" value="1" class="form-control">
                                                    <span class="botoes">
                                                        <a href="#" class="mais">+</a>
                                                        <a href="#" class="menos">-</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="submit" class="btn-1 bt-compra botao btn-amarelo" value="Comprar"  />
                                                <!--<a href="<?= site_url('cardapio_alacarte/add_alarcarte/' . $prato->pra_id) ?>" class="btn-1 bt-compra">Comprar</a>-->  
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /pedidos-quant-area -->
                                    <?= form_close() ?>
                                </li>
                            <?php endforeach; ?>                    
                        </ul>

                    </div>
                    <div class="col-md-4">
                        <div class="carrinho-contagem">
                            <i class="cart"></i>
                            <h3 class="carrinho-contagem-title">Meu Carrinho</h3>
                            <h2 class="quant"><?php echo $this->cart->total_items() ?></h2>
                            <p class="big">PRATO(S)</p>
                            <a href="<?php echo base_url('carrinho_alacarte') ?>" class="btn btn-dashed">Próxima Etapa</a>
                        </div>
                    </div>

                </div>
                <!-- /relative -->
            </div>

        </div>
    </div>
    <?php $this->load->view('panel-pedidos-online') ?>
</div>
