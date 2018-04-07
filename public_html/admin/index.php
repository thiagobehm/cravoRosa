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
	<div class="container" ng-controller="loginCtrl">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<form action="" method="post" class="form-horizontal" id="login">	
					<div class="login-logo">
						<img src="../images/logo.png" alt="Logo" class="img-responsive">			
					</div>	
					<div class="alert alert-danger text-center" ng-show='hasError'>
						<strong>Opps!</strong> {{hasError.message}}
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="email" class="form-field" name="email" ng-model='usuario.email' placeholder="Seu Email">
						</div>
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-field" name="senha" ng-model='usuario.password' placeholder="Senha...">
						</div>
					</div>
					<div class="helpLinks text-center">
						<a href="cadastrarUser.php">Cadastrar novo Usuário?</a> <br>
						<a href="">Esqueceu sua senha?</a>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-danger" ng-click='autenticarUsuario()'>Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- load scripts -->
	<?php include '../includes/scripts.php'; ?>
	<script src="controller/loginController.js"></script>
</body>
</html>

