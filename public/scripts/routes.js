'use strict';

var app = angular.module('myLanguageApp', ['ngRotue']);

app.config("$routeProvider", function($routeProvider){
    $routeProvider.
    when('/notas', { 
        templateUrlxd: 'views/nota/index.html' ,controller: 'IndexNoteCtrl'
    }).
    when('/usuarios', { 
        templateUrlxd: 'views/usuario/index.html' //,controller: 'IndexNoteCtrl'
    })
    .otherwise({
        redirectTo:"/notas"
    });
});

