
<div class="panel">
    <div class="panel-body">
        <div class="container">
            <div class="t-center"><h2 class="panel-title">Refeições</h2></div>
            <ul class=" tabs-refeicoes" role="tablist">
                <li role="presentation" class="active">
                    <a href="#segunda" class="btn btn-transparente2" aria-controls="as" role="tab" data-toggle="tab">Segunda-feira</a>
                </li>
                <li role="presentation">
                    <a href="#terca" class="btn btn-transparente2" aria-controls="profile" role="tab" data-toggle="tab">Terça-feira</a>
                </li>
                <li role="presentation">
                    <a href="#quarta" class="btn btn-transparente2" aria-controls="messages" role="tab" data-toggle="tab">Quarta-feira</a>
                </li>
                <li role="presentation">
                    <a href="#quinta" class="btn btn-transparente2" aria-controls="settings" role="tab" data-toggle="tab">Quinta-feira</a>
                </li>
                <li role="presentation">
                    <a href="#sexta" class="btn btn-transparente2" aria-controls="settings" role="tab" data-toggle="tab">Sexta-feira</a>
                </li>
                <li role="presentation">
                    <a href="#sabado" class="btn btn-transparente2" aria-controls="settings" role="tab" data-toggle="tab">Sábado</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="segunda">
                    <div class="row">
                        <?php if (count($segunda)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $segunda->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $segunda->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $segunda->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $segunda->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $segunda->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $segunda->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $segunda->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="terca">
                    <div class="row">
                        <?php if (count($terca)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $terca->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $terca->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $terca->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $terca->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $terca->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $terca->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $terca->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="quarta">
                    <div class="row">
                        <?php if (count($quarta)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $quarta->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $quarta->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $quarta->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $quarta->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $quarta->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $quarta->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $quarta->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="quinta">
                    <div class="row">
                        <?php if (count($quinta)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $quinta->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $quinta->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $quinta->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $quinta->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $quinta->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $quinta->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $quinta->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="sexta">
                    <div class="row">
                        <?php if (count($sexta)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $sexta->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $sexta->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $sexta->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $sexta->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $sexta->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $sexta->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $sexta->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="sabado">
                    <div class="row">
                        <?php if (count($sabado)): ?>

                            <?php $feijoes = $this->marmita->listar_marmita_feijao(array('mtf_mar_id' => $sabado->mar_id), 0, 99, 'fei_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Feijões</h3></div>
                            <?php foreach ($feijoes as $feijao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $feijao->fei_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $arrozes = $this->marmita->listar_marmita_arroz(array('mta_mar_id' => $sabado->mar_id), 0, 99, 'arr_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Arrozes</h3></div>
                            <?php foreach ($arrozes as $arroz): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $arroz->arr_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $macarroes = $this->marmita->listar_marmita_macarrao(array('mtm_mar_id' => $sabado->mar_id), 0, 99, 'mac_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Macarrões</h3></div>
                            <?php foreach ($macarroes as $macarrao): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $macarrao->mac_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $saladas = $this->marmita->listar_marmita_salada(array('mts_mar_id' => $sabado->mar_id), 0, 99, 'sal_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Saladas</h3></div>
                            <?php foreach ($saladas as $salada): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $salada->sal_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $acompanhamentos = $this->marmita->listar_marmita_acompanhamento(array('maa_mar_id' => $sabado->mar_id), 0, 99, 'aco_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Acompanhamentos</h3></div>
                            <?php foreach ($acompanhamentos as $acompanhamento): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $acompanhamento->aco_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $carnes = $this->marmita->listar_marmita_carne(array('mtc_mar_id' => $sabado->mar_id), 0, 99, 'car_nome', 'asc'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Carnes</h3></div>
                            <?php foreach ($carnes as $carne): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $carne->car_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                            <?php $bebidas = $this->marmita->listar_marmita_bebida(array('mtb_mar_id' => $sabado->mar_id), 0, 99, 'beb_nome', 'ASC'); ?>
                            <div class="col-xs-12"><h3 style="margin-bottom: 13px; font-size: 22px; color: #8A4A31">Bebidas</h3></div>
                            <?php foreach ($bebidas as $bebida): ?>
                                <div class="col-md-5">
                                    <p class="simple-text no-margin"><?php echo $bebida->beb_nome ?></p>
                                </div>
                            <?php endforeach ?>
                            <div class="col-xs-12"><hr style="margin-top: 10px; margin-bottom: 10px;"></div>

                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('panel-pedidos-online') ?>