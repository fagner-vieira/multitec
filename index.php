<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Multitec</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css.css" rel="stylesheet">
    </head>
    <body>
        <header class="container">
            <div class="logo"><img src="images/logo.png" class="img-responsive" alt=""></div>
        </header>

        <section class="LineOne">
            <div class="oneBlock">
                <div class="oneProduct">
                    <div>
                        <img src="images/produto.png" class="img-responsive" alt="">
                    </div>
                    <div class="boxTxt">
                        <p class="txtOne">MultiUno</p>
                        <p class="txtOneB">Executiva</p>
                        <div class="pgto">
                            <p class="txtOneC">Por:<br/>10x</p>
                            <p class="txtOneD">R$ 101</p>
                            <p class="centavos">,74</p>
                        </div>
                        <p class="txtOneE">Ou R$ 969,00 à vista.</p>
                    </div>
                </div>



                <div class="twoProduct">
                    <p class="txtTwo">Garanta seu orçamento<br/>com desconto</p>
                    <p class="txtTwoB">Aproveite essa<br/>oportunidade incrível!</p>
                    <p class="formBox">
                        <form class="form-horizontal" name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads" novalidate>
                            <input type="hidden" name="hotsite" id="hotsite" value="casa-toda-favorita-hotpage">
                            <input type="hidden" name="company" id="company" value="favorita-mov-decor">
                            <fieldset class="col-md-12">
                            <?php if(isset($_GET['error']) && $_GET['error'] === 'profanity') { ?>
                            <div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Seja mais educado! </div>
                            <?php } ?>
                            <?php if(isset($_GET['error']) && $_GET['error'] === 'repeat') { ?>
                            <div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Verifique os seus dados e tente novamente! </div>
                            <?php } ?>
                            <!-- Text input-->
                            <div class="form-group"> 
                                <!--label class="col-md-4 control-label" for="nome">Nome</label-->
                                <div class="col-md-12">
                                <input id="name" name="name" type="text" data-required placeholder="Nome" class="form-control input-md formulario" value="<?php if(isset($_GET['name'])) { echo $_GET['name']; } ?>" required="required">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group"> 
                                <!--label class="col-md-4 control-label" for="email">E-mail</label-->
                                <div class="col-md-12">
                                <input id="email" name="email" type="email" data-required placeholder="E-mail" class="form-control input-md formulario" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?>" required="required">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group"> 
                                <!--label class="col-md-4 control-label" for="telefone">Telefone</label-->
                                <div class="col-md-12">
                                <input id="phone" name="phone" type="text" data-required required="required" placeholder="Telefone" value="<?php if(isset($_GET['phone'])) { echo $_GET['phone']; } ?>" class="form-control input-md formulario">
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group"> 
                                <!--label class="col-md-4 control-label" for="enviar"></label-->
                                <div class="col-md-12" style="text-align: center;">
                                <button id="enviar" name="enviar" class="hotEnviar">GARANTIR DESCONTO</button>
                                </div>
                            </div>
                            </fieldset>
                    </form>
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>