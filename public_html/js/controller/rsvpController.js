var app = angular.module('myApp', []);

app.controller('rsvpCtrl', ['$scope', '$http', function ($scope, $http) {
	$scope.eventos = [];

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

	$scope.listarEventos();
}]);