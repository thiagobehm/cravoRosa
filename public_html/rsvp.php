<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cravo Rosa Eventos</title>
	<?php include 'includes/stylesheet.php'; ?>
</head>
<body ng-app="myApp">
	<header class="text-center">
		<?php include 'includes/menu.php'; ?> 
	</header>
	<div class="container text-center space" id="RSVP" ng-controller="rsvpCtrl">	
		<div class="row"> 
			<div class="col-xs-12 col-md-6" id="Description">
				<h3 class="title">R.S.V.P.</h3>
				<p class="text">R.S.V.P. é a sigla que corresponde a Répondez S’il Vous Plaît, que em francês, significa “responda, por favor”. </p>
				<p class="text">Realizamos o serviço de confirmação de presença dos convidados, visando um melhor planejamento e conforto no dia!</p>
				<p class="text">Vale também para confirmar ausências.</p>			
			</div><!-- col RSVP -->
			<div class="col-xs-12 col-md-6">
				<form action="" method="post" class="form-horizontal" id="form">
					<div class="form-group" id="evento">
						<div class="col-xs-12 input-group"> 
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<select name="evento" class="form-field" ng-model="eventoCB">	
								<option ng-repeat="evento in eventos" value="{{evento.nome}}"> {{evento.nome}} </option>							
							</select>						
						</div>
					</div>
					<div class="form-group" id="nome">							
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-field" name="nome" placeholder="Seu nome">
						</div>
					</div>
					<div class="form-group" id="email">
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>								
							<input type="email" class="form-field" name="email" placeholder="Email">
						</div>
					</div>		
					<div class="form-group" id="telefone">
						<div class="col-xs-12 input-group">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							<input type="tel" class="form-field" name="telefone" placeholder="Telefone">
						</div>
					</div>						
					<div class="form-group" id="confirmacao">
						<div class="col-xs-12 text-left">
							<label for="confirmacao" class="align-form">Você vai ao evento?</label> <br>
							<div class="btn-group align-form" data-toggle="buttons">
								<div class="btn btn-pink">
									<input type="radio" name="confirmacao"> Sim
								</div>
								<div class="btn btn-pink">
									<input type="radio" name="confirmacao"> Não
								</div>																		
							</div>
						</div>
					</div>					
					<div class="form-group" id="mensagem">			
						<div class="col-xs-12 input-group">						
							<span class="input-group-addon"><i class="fa fa-comments"></i></span>
							<textarea name="mensagem" rows="3" placeholder="Deixe sua mensagem..."></textarea>								
						</div>		
					</div>	
					<button type="button" class="btn btn-danger btn-lg pull-left align-form">Enviar</button>
				</form>
			</div><!--col form -->	
		</div>
	</div>
	<hr>
	<!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	<!-- load scripts -->
	<?php include 'includes/scripts.php'; ?>
	<script src="js/controller/rsvpController.js"></script>
</body>
</html>

