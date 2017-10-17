<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cravo Rosa Eventos</title>
	<?php include 'includes/stylesheet.php'; ?>
</head>
<body>
	<header class="text-center">
		<?php include 'includes/menu.php'; ?>
	</header>
	<div class="container text-center space-RSVP" id="contato">
	
			<div class="row">
				<h3 class="title">Entre em contato</h3>
				<div class="col-xs-12 col-md-6 col-lg-6">
					<form action="" method="post" class="form-horizontal">
						<div class="form-group">							
							<div class="col-xs-12 input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-field" name="nome" placeholder="Seu nome">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>								
								<input type="email" class="form-field" name="email" placeholder="Email">
							</div>
						</div>		
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
								<input type="tel" class="form-field" name="telefone" placeholder="Telefone">
							</div>
						</div>		
						<div class="form-group">							
							<div class="col-xs-12 input-group">
								<span class="input-group-addon"><i class="fa fa-list"></i></span>
								<input type="text" class="form-field" name="assunto" placeholder="Assunto">
							</div>
						</div>					
						<div class="form-group">
							<div class="col-xs-12 input-group">
								<span class="input-group-addon"><i class="fa fa-comments"></i></span>
								<textarea name="mensagem" rows="3" placeholder="Deixe sua mensagem..."></textarea>								
							</div>		
						</div>	
						<button type="button" class="btn btn-danger btn-lg pull-left align-form">Enviar</button>
					</form>
				</div><!--col form -->	
				<div class="col-xs-12 col-md-6 col-lg-6 hidden-xs">
					<div class="well">
						<div class="well-body">
							<h3 class="title">Cravo Rosa Eventos</h3>
							<p><i class="fa fa-envelope fa-2x" aria-hidden="true"></i> <a href="mailto:contato@cravorosaeventos.com.br">contato@cravorosaeventos.com.br</a></p>
							<p><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> <a href="#">/cravorosacerimonial</a></p>
							<p><i class="fa fa-volume-control-phone fa-2x" aria-hidden="true"></i> <a href="tel:51995444195"> (51) 99544.4195</a></p>							
						</div>
						<div class="well-description">
							<div class="contact-area"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<!-- Footer -->
		<?php include 'includes/footer.php'; ?>
		<!-- load scripts -->
		<?php include 'includes/scripts.php'; ?>
	</body>
	</html>

