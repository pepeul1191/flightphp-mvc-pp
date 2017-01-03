<?php

require 'vendor/autoload.php';

Configuration::init( realpath(dirname(__FILE__)) . '/app/', 'http://localhost:8000/test/', 'sqlite:' . realpath(dirname(__FILE__) . '/db/' . 'db_accesos'));

class Greeting {
    public static function hello($name) {
    	$x = Flight::request()->query['encuestado'];
        var_dump($x);
        echo 'hello world???' . $name;
    }
}

Flight::register('user', 'User');

//Flight::route('/@name', array('Greeting','hello'));

Flight::route('/demo', array('Controller_Demo','hello'));
Flight::route('/demo/@id', array('Controller_Demo','parametros'));

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::start();

?>