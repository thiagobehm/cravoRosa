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
		<div class="row">
			<aside class="col-xs-3 col-md-3 col-lg-2 text-center">
				<?php include 'includes/menu.php'; ?>
			</aside>
			<main class="col-xs-9 col-md-9 col-lg-10">
				<div class="header-bar">
					<div class="header-user">
						<ul class="nav navbar-nav navbar-right">								
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user-circle fa-2x"></span> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Alterar Senha</a></li>
									<li><a href="#">Sair</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="main-content">
					<div class="col-xs-8 btn-space">					
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-danger"  ng-click="abrirCadastro()">
							<span class="fa fa-plus-circle"></span> Cadastrar
						</button>							
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
								<td><a href="" class="btn btn-primary" ng-click="editarEvento(evento.id)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
								<td><a href="" class="btn btn-danger" ng-click="remover(evento.id)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</main>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" ng-show="evento.id === -1" id="myModalLabel">Cadastrar Evento</h4>
						<h4 class="modal-title" ng-show="evento.id !== -1" id="myModalLabel">Editar Evento</h4>
					</div>
					<div class="modal-body">
						<form name="eventoForm" class="form-horizontal transition" method="post">
							<div class="form-group">
								<div class="col-xs-12 input-group">
									<input type="text" class="form-control" name="nome" id="nomeEvento" ng-model="evento.nome" placeholder="Informe nome do evento" autofocus>
									<span class="input-group-addon">
										<button type="button" class="btn btn-danger" ng-show="evento.id === -1" data-dismiss="modal" ng-click="submeter()"> Cadastrar</button>
										<button type="button" class="btn btn-danger" ng-show="evento.id !== -1" data-dismiss="modal" ng-click="submeter(evento.id)"> Editar</button>
									</span>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- load scripts -->
	<?php include '../includes/scripts.php'; ?>		
	<script src="controller/eventosController.js"></script>			
	<script>
		$('#myModal').on('shown.bs.modal', function () {
			$('#nomeEvento').focus() 			 
		})
	</script>	
</body>
</html>


