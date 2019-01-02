<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/css.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>

		<div class="container-fluid" id="topo">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 topo01">
						<img src="images/logo.png" class="img-responsive center-block" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bg01">
			<div class="container">
				<div class="row topo02">
					<div class="col-lg-8 marginProd">
						<div class="row">
							<div class="col-lg-6 col-xs-6 col-sm-6">
								<img src="images/produto.png" class="img-responsive" alt="">
							</div>
							<div class="col-lg-6 col-xs-6 col-sm-6 marginL">
									<p class="txtOne">MultiUno</p>
									<p class="txtOneB">Executiva</p>
									<div class="row espaco">
										<div class="col-lg-2 col-xs-2 col-sm-2 tiraM">
											<p class="txtOneC">Por:<br/>10x</p>
										</div>
										<div class="col-lg-8 col-xs-8 col-sm-8 tiraM">
												<p class="txtOneD">R$ 101</p>
										</div>
										<div class="col-lg-2 col-xs-2 col-sm-2 tiraM">
											<p class="centavos">,74</p>
										</div>
									</div>
									<p class="txtOneE">Ou R$ 969,00 à vista.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 twoProduct">
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
			</div>
		</div>
	
		<div class="container-fluid bgProd">
			<div class="container bgProd2">
				<div class="row">
					<div class="col-lg-12">
						<p class="tituloProd">a oportunidade que você <br/>estava esperando!</p>
					</div>
				</div>
				<div class="row marginProd">
					<div class="col-lg-3">
						<img src="images/img01.png" class="img-responsive center-block" alt="">
						<p class="txtProdOne">MULTI 1002</p>
						<p class="txtProdTwo">Poltrona MultiUno<br/> presidente, base preta<br/> piramidal...</p>
						<div class="row">
							<div class="col-lg-3 col-xs-3 col-sm-3 empurra">
								<p class="txtProdThree">Por:<br/>10x</p>
							</div>
							<div class="col-lg-6 col-xs-6 col-sm-6 tiraM2">
									<p class="txtProdFour">R$ 117</p>
							</div>
							<div class="col-lg-2 col-xs-2 col-sm-2 tiraM2">
								<p class="centavosTwo">,49</p>
							</div>
						</div>
						<p class="txtProdFive">Ou R$ 1.119,00 à vista.</p>
					</div>
					<div class="col-lg-3">
						<img src="images/img02.png" class="img-responsive center-block" alt="">
						<p class="txtProdOne">MULTI 1004</p>
						<p class="txtProdTwo">Poltrona MultiUno<br/> diretor, base preta<br/> piramidal...</p>
						<div class="row">
							<div class="col-lg-3 col-xs-3 col-sm-3 empurra">
								<p class="txtProdThree">Por:<br/>10x</p>
							</div>
							<div class="col-lg-6 col-xs-6 col-sm-6 tiraM2">
									<p class="txtProdFour">R$ 105</p>
							</div>
							<div class="col-lg-2 col-xs-2 col-sm-2 tiraM2">
								<p class="centavosTwo">,94</p>
							</div>
						</div>
						<p class="txtProdFive">Ou R$ 1.009,00 à vista.</p>
					</div>
					<div class="col-lg-3">
						<img src="images/img03.png" class="img-responsive center-block" alt="">
						<p class="txtProdOne">MULTI 1008</p>
						<p class="txtProdTwo">Poltrona MultiUno<br/> diálogo, fixa, base <br/>suspensa...</p>
						<div class="row">
							<div class="col-lg-3 col-xs-3 col-sm-3 empurra">
								<p class="txtProdThree">Por:<br/>10x</p>
							</div>
							<div class="col-lg-6 col-xs-6 col-sm-6 tiraM2">
									<p class="txtProdFour">R$ 51</p>
							</div>
							<div class="col-lg-2 col-xs-2 col-sm-2 tiraM2">
								<p class="centavosTwo">,34</p>
							</div>
						</div>
						<p class="txtProdFive">Ou R$ 489,00 à vista.</p>
					</div>
					<div class="col-lg-3">
						<img src="images/img04.png" class="img-responsive center-block" alt="">
						<p class="txtProdOne">MULTI 2001</p>
						<p class="txtProdTwo">Poltrona MultiDue<br/>diretor, base piramidal, <br/>mecanismo syncron...</p>
						<div class="row">
							<div class="col-lg-3 col-xs-3 col-sm-3 empurra">
								<p class="txtProdThree">Por:<br/>10x</p>
							</div>
							<div class="col-lg-6 col-xs-6 col-sm-6 tiraM2">
									<p class="txtProdFour">R$ 103</p>
							</div>
							<div class="col-lg-2 col-xs-2 col-sm-2 tiraM2">
								<p class="centavosTwo">,84</p>
							</div>
						</div>
						<p class="txtProdFive">Ou R$ 989,00 à vista.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid bgFooter">
			<div class="container">
				<div class="row marginOne">
					<div class="col-lg-12 imgBlock marginTwo"> 
						<p class="txtFooter">Solicite agora seu orçamento e <br/>ganhe um super desconto</p>
						<p><a href="#topo" class="btnSolicitar">Solicitar agora</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="txtRodape">© Todos os direitos reservados Multitec.</p>
					</div>
				</div>
			</div>
		</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>