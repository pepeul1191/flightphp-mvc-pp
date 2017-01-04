<!DOCTYPE html>
<html  ng-app="myLanguageApp" ng-controller="ApplicationController">
    <head>
        <title>{{title}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{Configuration::get('base_url')}public/assets/site/img/favicon.ico" type="image/x-icon">
        <!-- Inicio CSS -->
        <link href="{Configuration::get('base_url')}public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{Configuration::get('base_url')}public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="{Configuration::get('base_url')}public/assets/site/css/styles.css" rel="stylesheet" type="text/css"/>
        <!-- Fin CSS -->
        <!-- Inicio Angular -->
        <script src="{Configuration::get('base_url')}public/bower_components/angular/angular.min.js" type="text/javascript"></script>
        <!--<script src="{Configuration::get('base_url')}public/bower_components/angular-resource/angular-resource.min.js" type="text/javascript"></script>-->
        <script src="{Configuration::get('base_url')}public/bower_components/angular-route/angular-route.min.js" type="text/javascript"></script>
        <script type="text/javascript">var BASE_URL = "http://localhost/accesos/";</script>
        <script src="{Configuration::get('base_url')}public/scripts/app.js" type="text/javascript"></script>
        <script src="{Configuration::get('base_url')}public/scripts/controllers/note.js" type="text/javascript"></script>
        <!-- Fin Angular -->
    </head>
    <body>
        <header ng-include="'public/views/layouts/application/header.html'"></header>
        <div class="body-app">
            <div class="col-md-3">
                {{"Hola"}}
                <input type="text" ng-model="name">
                <div ng-bind="name"></div>
                <div> hello {{name}}</div>
            </div>
            <div class="col-md-6">
                <ng-view></ng-view>
            </div>
            <div class="col-md-3" id="menu-side">
                <ul class="modulos" ng-repeat="items_subtitulo in items_subtitulos">
                   <h3>{{items_subtitulo.subtitulo}}</h3>
                   <ul class="items" ng-repeat="item in items_subtitulo.items">
                        <li><a href="#/{{item.url}}">{{item.item}}</a></li>
                   </ul>
                </ul> 
            </div>
        </div>
        <footer ng-include="'public/views/layouts/application/footer.html'"></footer>
        <script type="text/javascript">
        </script>
        <!-- Inicio Javascript -->
        <script src="{Configuration::get('base_url')}public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="{Configuration::get('base_url')}public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Fin Javascript -->
    </body>
</html>