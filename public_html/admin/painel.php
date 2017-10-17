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
	<div class="container-fluid" id="admin" ng-controller="eventosCtrl">
		<div class="row" ng-init="listarEventos()">
			<aside class="col-xs-3 col-md-3 col-lg-2 text-center">
				<div class="admin-logo">
					<img src="../images/logo2.png" alt="Logo" class="img-responsive">
				</div>
				<ul class="list-group">										
					<li class="list-group-item active"><a class="fa fa-calendar" href="#"> <span>Eventos</span></a></li>
					<hr>
					<li class="list-group-item"><a href="" class="fa fa-gift"> <span>Presentes</span> </a> </li>
				</ul>
			</aside>
			<main class="col-xs-9 col-md-9 col-lg-10 panel">
				<div class="col-xs-8" style="margin-bottom: 30px;">		
					<button class="btn btn-danger" ng-click="showAddEventos()"> <span class="fa fa-plus-circle"></span> Cadastrar novo Evento</button>
				</div>
				<div class="col-xs-12 col-md-6" ng-show="showCadastroEventos" id="formEventos">
					<form name="eventoForm" class="form-horizontal transition" ng-submit="submeter()" method="post">					
						<div class="form-group">							
							<div class="col-xs-12 input-group">							
								<input type="text" class="form-control" name="nome" id="nome" ng-model="evento.nome" placeholder="Informe nome do evento">
								<span class="input-group-addon"><button type="submit" class="btn btn-danger"> Cadastrar</button></span>
							</div>
						</div>
					</form>
				</div>				
				<table class="table table-hover"> 
					<thead>
						<tr>
							<th>Nome</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="evento in eventos"> 
							<td>{{evento.nome}}</td>
							<td><a href="" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
							<td><a href="" class="btn btn-danger" ng-click="remover(evento.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
						</tr>
					</tbody>
				</table>
			</main>
		</div>
	</div>	
		
	<!-- load scripts -->
	<?php include 'includes/scripts.php'; ?>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="controller/eventosController.js"></script>	
</body>
</html>

