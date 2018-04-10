<!DOCTYPE html>
<html lang="en" class="ls-theme-gray">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cravo Rosa Admin - Minha Conta</title>
  <?php include 'includes/header.php'; ?> 
</head>
<body ng-app="myApp">
  <!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> to improve your experience.</p>
  <![endif]-->

  <?php include 'includes/menu.php'; ?>
  <?php 
    session_start();
    $id  = $_SESSION['id'];
   ?>
  <main class="ls-main" ng-controller="userCtrl" ng-init="buscarUsuario('<?php echo $id; ?>')">
    <div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-user">Minha Conta</h1>
      <form action="" method="POST" onsubmit="event.preventDefault();" ng-submit="atualizarDados()">
        <div class="form-group">              
              <div class="col-xs-12 col-md-6 input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-field" required="required" name="user" ng-model='user.nome' placeholder="Seu Nome">
              </div>
        </div>
        <div class="form-group">              
              <div class="col-xs-12 col-md-6 input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                <input type="email" required="required" class="form-field" name="email" ng-model='user.email' placeholder="Seu Email">
              </div>
        </div><!-- email form -->
        <div class="pull-left">
              <button type="submit" class="btn btn-danger">Atualizar Dados</button>
        </div>
      </form>
    </div><!-- container-fluid-->
  </main>


  <!-- load scripts -->
  <?php include '../includes/scripts.php'; ?>   
  <script src="controller/app.js"></script>
  <script src="controller/loginController.js"></script>   
  <script src="controller/userController.js"></script>  
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#nomeEvento').focus()       
    })
  </script>
</body>
</html>
