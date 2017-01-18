<?php

require 'app/vendor/autoload.php';

Configuration::init( realpath(dirname(__FILE__)) . '/app/', 'http://localhost/accesos/', 'http://localhost/accesos/public/', 'sqlite:' . realpath(dirname(__FILE__) . '/db/' . 'db_accesos.db'), 10);

define('HASH_KEY','50631f4f8ba97');

function smarty_prefilter_angularjsescape($source, Smarty_Internal_Template $smarty)
{
   $source = str_replace('{{', '%AJSL%', $source);
   $source = str_replace('}}', '%AJSR%', $source);
   return $source;
}

function smarty_postfilter_angularjsescape($source, Smarty_Internal_Template $template)
{
   $source = str_replace('%AJSL%', '{{', $source);
   $source = str_replace('%AJSR%', '}}', $source);
   return $source;
}

Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = 'app/templates/';
    $smarty->compile_dir = 'app/templates_c/';
    $smarty->config_dir = 'app/config/';
    $smarty->cache_dir = 'app/cache/';
});

Session::init();

Flight::route('GET /demo', array('Controller_Demo','hello'));
Flight::route('POST /demo/params/@id', array('Controller_Demo','parametros'));
Flight::route('GET /demo/db', array('Controller_Demo','listar_usuarios'));
Flight::route('GET /demo/vista', array('Controller_Demo','vista'));
Flight::route('GET /demo/partial/@valor', array('Controller_Demo','partial'));

Flight::route('GET /', array('Controller_Home','index'));
Flight::route('GET /login', array('Controller_Login','index'));
Flight::route('POST /login/acceder', array('Controller_Login','acceder'));
Flight::route('GET /login/ver', array('Controller_Login','ver'));
Flight::route('GET /salir', array('Controller_Login','salir'));

Flight::start();

?>