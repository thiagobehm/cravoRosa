var app = angular.module('myApp', []);

app.controller('userCtrl', ['$scope', '$http', function ($scope, $http) {
	$scope.user = {};
	$scope.hasError = {};

	$scope.validarSenha = function (){
		var senha = document.getElementById('senha');
		var senhaConfirmacao = document.getElementById('senhaConfirmacao');

		if(senha.value !== senhaConfirmacao.value) {				
			senhaConfirmacao.setCustomValidity("Senhas não conferem!");
			$scope.hasError = {
				error: true,
				message: 'Senhas não conferem!'
			};
		} else {			
			$scope.hasError = {
				error: false,
				message: ''
			};

			senhaConfirmacao.setCustomValidity('');
		}
	}

	 /**
   * cadastra novo evento no banco
   * @return {[type]}
   */
  $scope.cadastrarUsuario = function() {       
   
    $http
      .post('http://localhost/api/cadastrarUsuario', $scope.user)
      .success(function(data) {         
        toastr.success('Novo Evento Cadastrado!');       
        $scope.user = $scope.ObjUser();   
        
        //redirects to login after one second     
        setTimeout(()=>{
        	window.location = 'index.php' ;
        }, 1000);
      })
      .error(function(data) {
        toastr.error('Falha de comunicação! Tente novamente mais tarde.');        
      });      
  }

  $scope.ObjUser = {
  	nome: '',
  	email: '',
  	senha: ''
  }


}]);