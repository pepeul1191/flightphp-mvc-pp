app.config(function($routeProvider){
    $routeProvider.
        when('/seguridad/maestros/controles', { 
            templateUrl: 'public/views/seguridad/control/index.html' ,
            controller: 'ControlController',
            resolve: {
                lazy: ['$ocLazyLoad', function($ocLazyLoad) {
                return $ocLazyLoad.load([{
                    name: 'myLanguageApp',
                    files: [
                        BASE_URL + 'public/assets/seguridad/control/js/index.js',
                        //cache: true,
                        
                    ],
                    rerun: true,
                    files: [
                        BASE_URL + 'public/scripts/controllers/seguridad.js'
                        //cache: true,
                    ]
                }]);
                }]
            }
        }).
        when('/seguridad/maestros/vulnerabilidades', { 
            templateUrl: 'public/views/seguridad/vulnerabilidad/index.html' //,controller: 'IndexNoteCtrl'
        })/*.
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
        })*/
});