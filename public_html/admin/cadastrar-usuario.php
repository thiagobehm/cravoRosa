<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="images/rose.png" />
	<title>Cravo Rosa Eventos - Admin</title>
	<?php include 'includes/header.php'; ?>
</head>
<body ng-app="myApp">
	<div class="container" ng-controller="userCtrl">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<form action="" method="post" class="form-horizontal" id="login">	
					<div class="login-logo">
						<img src="../images/logo.png" alt="Logo" class="img-responsive">
						<h4 class="text-center sub-title">Cadastrar novo Usuário</h4>			
					</div>	
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-field" name="nome" required="required" placeholder="Nome" ng-model="user.nome" required="required">
						</div>
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-field" required="required" name="email" placeholder="Email..." ng-model="user.email">
						</div>
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-field" required="required" name="senha" id="senha" placeholder="Senha..." ng-model="user.password">
						</div>
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-field" required="required" name="senhaConfirmacao" id="senhaConfirmacao" placeholder="Confirme sua senha..." ng-model="user.senhaConfirmacao" ng-keyup="validarSenha()">							
						</div>
						<span ng-show="hasError.error" class="text-danger form-errorMSG">{{hasError.message}} </span>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-danger">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- load scripts -->
	<?php include '../includes/scripts.php'; ?>
	<script src="controller/app.js"></script>
	<script src="controller/userController.js"></script>
</body>
</html>

