var app = angular.module('myApp', []);

app.controller('eventosCtrl', ['$scope', '$http', function ($scope, $http) {
	$scope.showCadastroEventos = false;
	$scope.evento = {};
	$scope.eventos = [];
	
	$scope.showAddEventos = function () {		
		$("#formEventos").fadeIn();		
		$scope.showCadastroEventos = !$scope.showCadastroEventos;

		setTimeout(function () {
			$("#nome").focus();
		}, 2);			

	}

	$scope.submeter = function (value) {
		
		$http
			$http
			.post('http://localhost/api/cadastrarEvento', $scope.evento)
			.success(function (data) {
				$scope.evento = $scope.objEvento();				
				$scope.listarEventos();
			})
			.error(function (data) {
				alert("Falha de comunicação! Tente novamente mais tarde.");
		});		
	}	

	$scope.remover = function ($index) {		
		if (!confirm("Tem Certeza que deseja deletar o valor?")) 
			return false;		

		$http
			.post('http://localhost/api/removerEvento/' + $index)
			.success(function (data) {
				$scope.listarEventos();
			})
			.error(function () {
				alert("Erro de conexão, tente novamente mais tarde.");
			});
	}

	$scope.editarEvento = function () {
		$http
			.post('api/editarEvento/'+ $scope.tipo.id, $scope.evento)
			.success(function (data) {
				$scope.evento = $scope.objEvento();
				$scope.listarEventos();
			})
			.error(function () {
				alert("Falha ao editar Evento, por favor tente novamente mais tarde!");
			});
			
	}

	$scope.listarEventos = function () {		
		$http
			.get('http://localhost/api/listarEventos')
			.success(function (data) {
				$scope.eventos = data.eventos;				
			})
			.error(function (data) {
				alert("Falha ao carregar Eventos, por favor tente novamente mais tarde!");
			});
	}

	$scope.objEvento = function () {
		return {
			id : -1,
			nome: ""
		}
	}
	$scope.evento = $scope.objEvento();
	$scope.listarEventos();
}]);