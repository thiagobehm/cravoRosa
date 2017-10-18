var app = angular.module('myApp', []);

app.controller('eventosCtrl', ['$scope', '$http', function($scope, $http) {
  $scope.showCadastroEventos = false;
  $scope.evento = {};
  $scope.eventos = [];

  /**
   * cadastra novo evento no banco
   * @return {[type]}
   */
  $scope.cadastrarEvento = function() {       
   
    $http
      .post('http://localhost/api/cadastrarEvento', $scope.evento)
      .success(function(data) {         
        toastr.success('Novo Evento Cadastrado!');       
        $scope.evento = $scope.objEvento();        
        $scope.listarEventos();
      })
      .error(function(data) {
        alert("Falha de comunicação! Tente novamente mais tarde.");
      });      
  }

  $scope.remover = function($index) {
    if (!confirm("Tem Certeza que deseja deletar o valor?"))
      return false;

    $http
      .post('http://localhost/api/removerEvento/' + $index)
      .success(function(data) {
        toastr.success('Evento removido!');
        $scope.listarEventos();
      })
      .error(function() {
        alert("Erro de conexão, tente novamente mais tarde.");
      });
  }

  /**
  * Busca no banco evento para editar e mostra o modal para edição do mesmo
  **/
  $scope.editarEvento = function (id) {
    $scope.getEvento(id);

    setTimeout(function () {
      $('#myModal').modal('show');
    }, 1000)
    
  }

  /**
   * realiza edição dos dados no banco
   */
  $scope.updateEvento = function() {

    $http
      .post('http://localhost/api/editarEvento/' + $scope.evento.id, $scope.evento)
      .success(function(data) {
        toastr.success('Evento Atualizado com sucesso!');
        $scope.evento = $scope.objEvento();
        $scope.listarEventos();
      })
      .error(function() {        
        toastr.danger('Falha ao editar Evento, por favor tente novamente mais tarde!');
      });

  }

  /**
   * Busca no banco de dados o evento 
   * @id  {Integer}
   */
  $scope.getEvento = function ($id) {    
    $http
      .get('http://localhost/api/getEvento/' + $id)
      .success(function (data) {
        $scope.evento = data.evento;
      })
      .error(function () {
        alert("Falha ao buscar evento, por favor tente novamente mais tarde!");
      });
  };


  $scope.listarEventos = function() {
    $http
      .get('http://localhost/api/listarEventos')
      .success(function(data) {
        $scope.eventos = data.eventos;        
      })
      .error(function(data) {
        toastr.danger('Falha ao carregar Eventos, por favor tente novamente mais tarde!');                
      });
  }

  $scope.objEvento = function() {
    return {
      id: -1,
      nome: ""
    }
  }
  $scope.evento = $scope.objEvento();
  $scope.listarEventos();

 
}]);
