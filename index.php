<?php

require 'app/vendor/autoload.php';

Configuration::init( realpath(dirname(__FILE__)) . '/app/', 'http://localhost/accesos/', 'sqlite:' . realpath(dirname(__FILE__) . '/db/' . 'db_accesos.db'));

Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = 'app/templates/';
    $smarty->compile_dir = 'app/templates_c/';
    $smarty->config_dir = 'app/config/';
    $smarty->cache_dir = 'app/cache/';
});

Flight::route('GET /demo', array('Controller_Demo','hello'));
Flight::route('POST /demo/params/@id', array('Controller_Demo','parametros'));
Flight::route('GET /demo/db', array('Controller_Demo','listar_usuarios'));
Flight::route('GET /demo/vista', array('Controller_Demo','vista'));

Flight::start();

?>