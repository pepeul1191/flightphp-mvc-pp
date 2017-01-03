<?php

require 'vendor/autoload.php';

Configuration::init( realpath(dirname(__FILE__)) . '/app/', 'http://localhost:8000/test/', 'sqlite:' . realpath(dirname(__FILE__) . '/db/' . 'db_accesos.db'));

Flight::route('/demo', array('Controller_Demo','hello'));
Flight::route('/demo/params/@id', array('Controller_Demo','parametros'));
Flight::route('/demo/db', array('Controller_Demo','listar_usuarios'));

Flight::start();

?>