<div class="panel">
    <div class="container">
        <div class="panel-body">
            <div class="t-center"><h2 class="panel-title">Contato</h2></div>

            <p>Entre em contato conosco para encaminhar alguma dúvida, crítica, elogio ou sugestão. Preencha o formulário abaixo e retornaremos o mais breve possível.</p>
            <div class="row">
                <div class="col-md-6">
                    <?php if (isset($erros)): ?>
                        <div class="alert alert-warning"><?php echo $erros ?></div>
                    <?php endif; ?>
                    <?php if (isset($sucesso)): ?>
                        <div class="alert alert-success"><?php echo $sucesso ?></div>
                    <?php endif; ?>
                    <?php echo form_open('contato', array('id' => 'form-contato', 'class' => 'formContato')) ?>
                    <fieldset>
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" value="<?php echo isset($erros) ? set_value('nome') : null ?>" required="true" class="radius-10 form-control">
                    </fieldset>
                    <div class="row">
                        <div class="col-md-8">
                            <fieldset>
                                <label for="email">E-mail: </label>
                                <input type="email" name="email" id="email" value="<?php echo isset($erros) ? set_value('email') : null ?>" required="true" class="radius-10 form-control email">
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <label for="phone">Telefone: </label>
                                <input type="tel" name="telefone" id="phone" value="<?php echo isset($erros) ? set_value('telefone') : null ?>" required="true" class="radius-10 form-control phone" maxlength="15" autocomplete="off">
                            </fieldset>
                        </div>
                    </div>
                    <fieldset>
                        <label for="mensagem">Mensagem: </label>
                        <textarea type="text" name="mensagem" id="mensagem" required="true" class="radius-10 form-control"><?php echo isset($erros) ? set_value('mensagem') : null ?></textarea>
                    </fieldset>
                    <fieldset>
                        <button type="submit" class="btn btn-amarelo f-right">Enviar</button>
                    </fieldset>
                    <?php echo form_close() ?>
                </div>

                <div class="col-md-6">
                    <div class="contato-area">
                        <ul>
                            <li>
                                <div class="col-md-2"><div class="icone"><i class="fa fa-phone"></i></div></div>
                                <div class="col-md-10">
                                    <div class="cont">
                                        <div class="cel">
                                            Entre em contato por telefone
                                            <span class="clear"></span>
                                            <span class="big"><?php echo $phone1 ?>  |  <?php echo $phone2 ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-2"><div class="icone"><i class="fa fa-envelope"></i></div></div>
                                <div class="col-md-10">
                                    <div class="cont">
                                        <div class="cel">
                                            Entre em contato por e-mail
                                            <span class="clear"></span>
                                            <span class="big"><?php echo $email ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-2"><div class="icone"><i class="fa fa-map-marker"></i></div></div>
                                <div class="col-md-10">
                                    <div class="cont">
                                        <div class="cel">
                                            Onde estamos
                                            <span class="clear"></span>
                                            <span class="big"><?php echo $endereco ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mapa">
                <h3>Localização</h3>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5455854071065!2d-34.908417700061335!3d-7.178407064613398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace975e58bf5ff%3A0xba985cb4a519216f!2sAv.+das+Ind%C3%BAstrias%2C+400+-+Distrito+Industrial%2C+Jo%C3%A3o+Pessoa+-+PB!5e0!3m2!1spt-BR!2sbr!4v1467651488125" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6062025365695!2d-34.87309784925584!3d-7.1714374947967015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace9db0ab1481d%3A0xea31087ea1e655ac!2sCaraj%C3%A1s+Home+Center+-+Jo%C3%A3o+Pessoa!5e0!3m2!1spt-BR!2sbr!4v1487012381392" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13318.90179083273!2d-34.85599843282887!3d-7.040609724019622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acde13d8c847db%3A0xe1bdc0841444c4a0!2sCaraj%C3%A1s+Home+Center!5e0!3m2!1spt-BR!2sbr!4v1487012028022" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('panel-pedidos-online') ?>