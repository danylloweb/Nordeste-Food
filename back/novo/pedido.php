<?php
$site_page = "Faça seu Pedido";
include ("includes/head.php"); 
include ("control/classe/alacarte_class.php"); 
$categorias=ListarCategoria();
$pratos=Listar();
?>

<body class="pg-interna pg-pedido" >
	
	<?php include ("includes/header.php") ?>

	<div class="container">

    <h1 class="t-page">Faça seu pedido online</h1>
    <div id="box-pedidos">
        <div class="txt1 n-quentinha">Entregamos apenas no Bessa, Intermares, Poço, Jacaré, Manaíra, Tambaú, Cabo Branco, Bairro dos Estados, Miramar e Tambauzinho as marmitas individuais e os pedidos à la carte, e nas empresas localizadas na grande João Pessoa e Cabedelo.<br><b>Horário de entrega de 11h as 14h de segunda à sábado.</b></div>

        <div class="txt1 pedido-dia"><span>Pedido para hoje: </span>data</div>

        <div class="row">
            <div class="col-md-8">
                <div class="bloco-monte">
                    <div class="txt1 ">
                        <span>Cardápio:
                            <select name="" id="" class="selects type1 changeCat"> 
                                <?php foreach ($categorias as $categoria){ ?>
                                    <option value="<?php echo $categoria->prc_id; ?>" data-href=""><?php echo $categoria->prc_id; ?></option> 
                                <?php } ?>
                            </select>
                        </span>
                    </div>

                    <ul class="list-ala">
                        <?php foreach ($pratos as $prato){ ?>
                                           
                            <li>
                                <input type="hidden" name="id" value="<?php echo $prato->pra_id; ?>" />
                                <div class="n-item"><?php echo $prato->pra_nome; ?></div>
                                <input type="hidden" name="name" value="<?php echo $prato->pra_nome; ?>" />
                                <div class="desc-item"><?php echo $prato->pra_descricao; ?></div>
                                <div class="valor">R$ <?php echo number_format($prato->pra_valor, 2, ',', '.'); ?></div>                        
                                <div class="ranger cont-ala">
                                    <input type="text" name="qty" value="1">
                                    <span>
                                        <a href="#" class="mais">+</a>
                                        <a href="#" class="menos">-</a>
                                    </span>
                                </div>
                                <input type="submit" class="btn-1 bt-compra" value="Comprar" />
                              
                            </li>
                          
                        <?php } ?>                    
                    </ul>
                    <!--<input type="submit" value="Adicionar Marmita" class=" btn-1">-->
                    <a href="http://nordestefoodservice.com.br/" class="btn-1 right">Voltar para Home</a>            
                    </form>        
                </div><!-- bloco-monte -->
            </div>
            <div class="col-md-4">
                <div class="box-carrinho">
                    <div class="img-car"></div>
                    <h1>Meu Carrinho</h1>
                    <?php if ($this->cart->total_items() != 0): ?>
                        <div class="qtd-car">Você tem:<br><span><?php $this->cart->total_items(); ?></span><br>Prato(s)</div>
                        <a href="<?php site_url('carrinho_alacarte') ?>" class="btn-1">Próxima Etapa</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- box-pedidos --> 
</div>

	<?php include ("includes/footer.php") ?>

</body>
</html>