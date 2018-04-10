

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


  $scope.autenticarUsuario = function () {
    $http
      .post('http://localhost/api/login', $scope.usuario)
      .success(function (data) { 
        if (data.logado) {
          window.location = 'eventos.php';
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

  $scope.logout = function () {
    $http
      .post('http://localhost/api/logout')
      .success(() => {
        window.location = 'index.php';
      })
      .error(() => {
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

