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