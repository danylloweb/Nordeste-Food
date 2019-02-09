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
                            <li role="presentation" class="active">
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
                    <div role="tabpanel" class="tab-pane identificacao active" id="identificacao">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="login-area tabela">
                                    <div class="topo">Já sou cadastrado</div>
                                    <div class="content">
                                        <?php echo form_open('identificacao/do_login', array('class' => 'formLogin')) ?>
                                            <?php if ($erro): ?>
                                                <div class="alert alert-danger"><?php echo $erro ?></div>
                                            <?php endif ?>
                                            <?php if ($oklog): ?>
                                                <div class="alert alert-success"><?php echo $oklog ?></div>
                                            <?php endif ?>
                                            <fieldset class="email">
                                                <label for="email">E-mail: </label>
                                                <input type="text" name="cli_email" id="email" required="true" class="radius-10 form-control email">
                                            </fieldset>
                                            <fieldset class="">
                                                <label for="senha">Senha: </label>
                                                <input type="password" name="cli_senha" id="senha" required="true" class="radius-10 form-control">
                                            </fieldset>
                                            <fieldset>
                                                <small><a href="javascript:;" class="cor-marrom f-left" data-placement="right" data-toggle="popover" data-content='
                                                    <?php echo form_open('identificacao/recovery') ?>
                                                        <div class="txt-form">Insira seu e-mail de cadastro. Uma nova senha será enviada para ele.</div>
                                                        <input type="text" name="cli_email" class="form-control" placeholder="E-mail" style="margin: 10px 0">
                                                        <input type="submit" class="btn btn-amarelo" value="Recuperar">
                                                    <?php echo form_close() ?>
                                                '>Esqueci minha senha</a></small>
                                                <button type="submit" class="btn btn-amarelo f-right">Entrar</button>
                                            </fieldset>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="cadas-area tabela">
                                    <div class="topo">Meu Primeiro Pedido</div>
                                    <div class="content">
                                        <?php echo form_open('identificacao/cadastro', array('class' => 'formCadas')) ?>
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
                                                        <input type="text" name="cli_nome_empresa" id="nome-empresa" value="<?php echo set_value('cli_nome_empresa')?>" required="true" class="radius-10 form-control email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <label for="nome-respons">Nome do Responsável: </label>
                                                        <input type="text" name="cli_nome" id="nome-respons" value="<?php echo set_value('cli_nome')?>" required="true" class="radius-10 form-control email">
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <fieldset class="col-md-4">
                                                    <label for="email">E-mail: </label>
                                                    <input type="email" name="cli_email" id="email" value="<?php echo set_value('cli_email')?>" required="true" class="radius-10 form-control email">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <label for="phone">Telefone: </label>
                                                    <input type="tel" name="cli_telefone" id="phone" value="<?php echo set_value('cli_telefone')?>" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <label for="cel">Celular: </label>
                                                    <input type="tel" name="cli_celular" id="cel" value="<?php echo set_value('cli_celular')?>" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="col-md-10">
                                                    <label for="end">Endereço: </label>
                                                    <input type="text" name="cli_endereco" id="end" value="<?php echo set_value('cli_endereco')?>" required="true" class="radius-10 form-control">
                                                </fieldset>
                                                <fieldset class="col-md-2">
                                                    <label for="bairro">Bairro: </label>
                                                    <input type="text" name="cli_bairro" id="bairro" value="<?php echo set_value('cli_bairro')?>" required="true" class="radius-10 form-control">
                                                </fieldset>
                                            </div>
                                            <fieldset >
                                                <label for="referencia">Referências para entrega: </label>
                                                <textarea type="text" name="cli_referencia" id="referencia" required="true" class="radius-10 form-control"><?php echo set_value('cli_referencia')?></textarea>
                                            </fieldset>
                                            <div class="row">
                                                <fieldset class="col-md-4">
                                                    <label for="senha">Senha: </label>
                                                    <input type="password" name="cli_senha" id="senha" required="true" class="radius-10 form-control">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <label for="confirma-senha">Confirmar Senha: </label>
                                                    <input type="password" name="senha_two" id="confirma-senha" required="true" class="radius-10 form-control">
                                                </fieldset>
                                                <fieldset class="col-md-4">
                                                    <button type="submit" class="btn btn-amarelo">Cadastrar</button>
                                                </fieldset>
                                            </div>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>