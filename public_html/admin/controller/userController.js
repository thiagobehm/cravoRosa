

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

  $scope.atualizarDados = function () {
    console.log($scope.user.nome);
    if ($scope.user.email === undefined || $scope.user.nome === undefined) {
       toastr.error('Os campos não podem ficar em branco!');
       return;        
    } else {
      //edit the values on the db
      $http
        .post('http://localhost/api/editarUsuario/' + $scope.user.idusuarios, $scope.user)
        .success((data) => {
          toastr.success('Dados atualizados com sucesso!');  
        })
        .error(() => {
          toastr.error('Falha de comunicação! Tente novamente mais tarde.');
        });
    }

  }

  $scope.buscarUsuario = function (email) {
    $http
      .get('http://localhost/api/buscarUsuario/' + email)
      .success((data) => {
        $scope.user = data.user;
      })
      .error(() => {
        toastr.error('Falha de comunicação! Tente novamente mais tarde.');        
      });
  }

  $scope.ObjUser = {
    idusuarios: -1,
  	nome: '',
  	email: '',
  	senha: ''
  }


}]);