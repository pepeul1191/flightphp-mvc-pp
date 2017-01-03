<?php

class Controller_Home extends Controller
{
    public static function index() 
    {
        Flight::view()->autoload_filters = array('pre' => array('angularjsescape'),'post' => array('angularjsescape'));
        Flight::view()->display('home/index.tpl');
    }
}

?>