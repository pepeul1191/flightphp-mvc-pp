'use strict';

var app = angular.module("myLanguageApp", ['ngRoute', 'oc.lazyLoad']);
var BASE_URL = "http://localhost/accesos/";

app.config(function($routeProvider){
    $routeProvider.
	    when('/notas', { 
	        templateUrl: 'public/views/nota/index.html' ,
	        controller: 'IndexNoteCtrl'
	    }).
	    when('/usuarios', { 
	        templateUrl: 'public/views/usuario/index.html' //,controller: 'IndexNoteCtrl'
	    }).
	    when('/seguridad', { 
	        templateUrl: 'public/views/seguridad/index.html',
	        controller: 'SeguridadController',
	        resolve: {
                lazy: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'myLanguageApp',
                        files: [
                        	BASE_URL + 'public/assets/seguridad/index/js/index.js',
                        	BASE_URL + 'public/scripts/controllers/seguridad.js'
                        ],
                        cache: true,
                        rerun: true,
                    }]);
                }]
            }
	    })
});

angular.module('myLanguageApp').controller('ApplicationController', function($scope, $http, $log){
	$scope.title = "Aplicación FlightPHP + Angular",
	$scope.base_url = "http://localhost/accesos/",
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

angular.module('myLanguageApp').controller('SeguridadController', function($scope, $http, $log, $ocLazyLoad, $injector){

});