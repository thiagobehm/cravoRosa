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
<body>
	<div class="container" >
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
				<form action="" method="post" class="form-horizontal" id="login">	
					<div class="login-logo">
						<img src="../images/logo.png" alt="Logo" class="img-responsive">			
					</div>	
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-field" name="nome" placeholder="Seu Login">
						</div>
					</div>
					<div class="form-group">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-field" name="senha" placeholder="Senha...">
						</div>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-danger">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- load scripts -->
	<?php include 'includes/scripts.php'; ?>

</body>
</html>
