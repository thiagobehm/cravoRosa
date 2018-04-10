<!DOCTYPE html>
<html lang="en" class="ls-theme-gray">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cravo Rosa Admin Panel</title>
  <?php include 'includes/header.php'; ?> 
</head>
<body ng-app="myApp">
  <!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> to improve your experience.</p>
  <![endif]-->

  <?php include 'includes/menu.php'; ?>

  <main class="ls-main" ng-controller="eventosCtrl">
    <div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-calendar">Eventos</h1>

     <div class="col-xs-8 btn-space">         
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger"  ng-click="abrirCadastro()">
              <span class="fa fa-plus-circle"></span> Cadastrar (c)
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
  </main>


  <!-- load scripts -->
  <?php include '../includes/scripts.php'; ?>   
  <script src="controller/app.js"></script>
  <script src="controller/loginController.js"></script>
  <script src="controller/eventosController.js"></script>     
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#nomeEvento').focus()       
    })
  </script>
</body>
</html>
