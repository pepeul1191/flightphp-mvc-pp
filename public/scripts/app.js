var app = angular.module("myLanguageApp", ['ngRoute']);

app.config(function($routeProvider){
    $routeProvider.
	    when('/notas', { 
	        templateUrl: 'public/views/nota/index.html' ,
	        controller: 'IndexNoteCtrl'
	    }).
	    when('/usuarios', { 
	        templateUrl: 'public/views/usuario/index.html' //,controller: 'IndexNoteCtrl'
	    })
});

angular.module('myLanguageApp').controller('ApplicationController', function($scope, $http, $log){
	$scope.title = "Aplicación FlightPHP + Angular",
	$http({
		method : "GET",
    	url : "http://localhost:5001/modulo/listar"
    })
    .then(function(response){
    	$scope.menu_modulos = response.data;
    }),
   $scope.load_submenu = function($event){
		var nombre_modulo = $event.currentTarget.childNodes[0]['data'];
		$http({
				method : "GET",
				url : "http://localhost:5001/item/listar/menu/" + nombre_modulo
			})
			.then(function(response){
				$scope.title = nombre_modulo;
				$scope.items_subtitulos = response.data;
			}
		);
	}
});