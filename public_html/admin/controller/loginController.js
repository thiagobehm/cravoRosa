var app = angular.module('myApp', []);

app.controller('loginCtrl', ['$scope', '$http', function($scope, $http) {

  $scope.usuario = {};
  $scope.usuarios = [];
  $scope.hasError = false;

    $(document).ready(function () {
      $('.form-field').on('keypress', function (e) {        
        if (e.which === 13) {
          $scope.autenticarUsuario();
        }
      });
    });

  $scope.listarUsuarios = function () {
    $http
      .get('http://localhost/api/listarUsuarios')
      .success(function (data) {
        $scope.usuarios = data.usuarios;
        $scope.usuario = $scope.objLogin();
      })
      .error(function () {
        toastr.error('Falha de comunicação! Tente novamente mais tarde.');        
      });
  }

  $scope.autenticarUsuario = function () {
    $http
      .post('http://localhost/api/login', $scope.usuario)
      .success(function (data) { 
        if (data.logado) {
          window.location = 'painel.php';
        } else {
          $scope.hasError = {
            error: true,
            message: 'Email ou senha incorreto, por favor tente novamente!'
          }
        }
      })
      .error(function () {
        toastr.error('Falha de comunicação! Tente novamente mais tarde.'); 
      });

  }
  
  $scope.objLogin = function() {
    return {
      nome: '', 
      email: '',
      password: ''
    }
  }

  $scope.usuario = $scope.objLogin();
   
}]);

