<?php

class Controller_Home extends Controller
{
    public static function index() 
    {
    	if(!Session::get('autenticado')){
           header('location:' . Configuration::get('base_url') . 'login');
           exit();
        }else{
	        Flight::view()->autoload_filters = array('pre' => array('angularjsescape'),'post' => array('angularjsescape'));
	        Flight::view()->display('home/index.tpl');
       }
    }
}

?>