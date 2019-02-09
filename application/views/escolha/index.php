<div class="container">

    <h1 class="t-page page-title">Faça seu pedido online</h1>
    <div id="box-pedidos">
        <div class="txt1 n-quentinha descricao-pag">
            Entregamos apenas no Bessa, Intermares, Poço, Jacaré, Manaíra, Tambaú, Cabo Branco, Bairro dos Estados, Miramar e Tambauzinho as marmitas individuais e os pedidos à la carte, e nas empresas localizadas na grande João Pessoa e Cabedelo.

            <br>
            <br>
            <div class="txt1 pedido-dia text-uppercase"><strong><span>Pedido para hoje: </span><?= $marmita->mar_dia_semana ?> | <?= data_for_humans($marmita->mar_data) ?></strong></div>
        </div>

        
        <br>

        <div class="txt-escolha text-center">Selecione uma das opções a baixo para começar:</div>
        
        <br>

        <ul class="list-inline text-center">
            <li>
                <a href="<?= site_url('pedidos')?>" class="botao btn-amarelo text-uppercase">Pedidos Marmitas</a>
                <span class="sprit ic-marmita"></span>
            </li>
            <li>
                <a href="<?= site_url('cardapio_alacarte')?>" class="botao btn-amarelo text-uppercase">Pedidos À la carte</a>
                <span class="sprit ic-lacarte"></span>
            </li>
        </ul>
        <br>

    </div><!-- box-pedidos --> 
</div>   