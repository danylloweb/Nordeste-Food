<div class="container-fluid">
    <div class="slide slide-principal slide-1">
        <?php
        $i = 0;
        foreach ($banners as $banner):

            if (0 == $i) {
                echo '<a href="' . base_url('public/uploads/lista.pdf') . '" target="_blank"><img src="' . base_url('public/uploads/banners/' . $banner->ban_imagem) . '"></a>';
                $i++;
                continue;
            }
            ?>

            <div class="item">
                <img src="<?php echo base_url('public/uploads/banners/' . $banner->ban_imagem) ?>" alt="<?php echo $banner->ban_descricao ?>" class="image">
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="panel panel-empresa bgAmarelo">
    <div class="container">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
                    <figure class="imagem-border"><img src="<?php echo base_url('public/imagens/empresa-home.png') ?>" alt="Nordeste Food" class="empresa-img"></figure>
                </div>
                <div class="col-md-7">
                    <h2 class="panel-title" style="margin-bottom: 30px;">A Empresa</h2>
                    <p><?php echo $this->configs->get_desc() ?></p>
                    <a href="<?php echo base_url('institucional') ?>" class="btn btn-transparente" style="margin-top: 30px;">Confira</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('panel-pedidos-online') ?>

<section class="panel-info bg-green">
    <div class="container">
        <img src="public/imagens/empresa-home.png" alt="Nordeste Food" class="empresa-img pull-right">
        <h2 class="section-title">Nutrição</h2>
        <div class="empresa-text simple-text">
            <p>
                Muitos indivíduos têm padrões diários, regulares e distintos para comer, e comummente muitos tem entre três e quatro refeições diárias.
                O objectivo de uma alimentação saudável é, há muito tempo, uma importante preocupação de diferentes pessoas e culturas. Nós seguimos todas as normas de higiene e saúde para que o bem estar dos nossos clientes seja rigorosamente respeitado.
            </p>
        </div>
        <a href="<?php echo base_url("servicos") ?>" class="btn-green">Confira</a>
    </div>
</section>

<!--
    POPUP SALEX
-->
<!--
<a id="demo01" href="#animatedModal" style="visibility: hidden;"></a>
<div id="animatedModal">
    <div class="close-animatedModal" style="position: absolute; top: 20px; left: 20px; z-index: 1; padding: 10px 40px; background-color: orange; color: #ffffff; text-transform: uppercase; border-radius: 10px; cursor: pointer;">Fechar</div>
    <div class="modal-content" style="width: 100%;height: 100%;position: relative;">
        <iframe src="http://gruposalex.com.br/" frameborder="0" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; z-index: 0;"></iframe>
    </div>
</div>
-->
<!-- Modal -->
<div class="modal ativo" data-modal="facebook-menssenger">
    <div class="modal-inner">
        <div class="btn-fechar-modal" data-modal-close="facebook-menssenger" title="Fechar">
            <svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30"></path></svg>
        </div>
        <div class="modal-miolo">
            <img class="img-responsive" src="//lexrestaurante.com.br/assets/images/flutuante/feliz-natal.jpg" alt=""/>
        </div>
    </div>
</div>
<?php $this->load->view('panel-clientes') ?>