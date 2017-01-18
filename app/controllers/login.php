<?php

class Controller_Login extends Controller
{
    public static function index() 
    {
    	if(Session::get('autenticado')){
           header('location:' . Configuration::get('base_url'));
           exit();
        }else{
	    	Flight::view()->assign('title', 'Login');
	    	Flight::view()->assign('csss', ['assets/login/css/index']);
	       Flight::view()->assign('partial', 'login/index.tpl');
	       Flight::view()->display('layouts/blank.tpl');
	    }
    }

    public static function acceder()
    {
    	$usuario = Flight::request()->{'data'}->{'usuario'};
    	$contrasenia = Flight::request()->{'data'}->{'contrasenia'};
       $cipher = Controller::get_library('cipher');
       $contrasenia = $cipher->encrypt($contrasenia);

       $modelo_login = Controller::load_model('login');

    	if($modelo_login->existe($usuario, $contrasenia)){
    		Session::set('autenticado', true);
           Session::set('tiempo', time());
           Session::set('usuario', $usuario);
    		header('location:' . Configuration::get('base_url'));
			exit;
    	}else{
    		Flight::view()->assign('title', 'Login - Error');
    		Flight::view()->assign('csss', ['assets/login/css/index']);
	       Flight::view()->assign('partial', 'login/index.tpl');
	       Flight::view()->assign('mensaje', true);
	       Flight::view()->display('layouts/blank.tpl');
    	}
    }

    public static function ver()
    {
    	$autenticado = Session::get('autenticado');
        $tiempo = Session::get('tiempo');
        $usuario = Session::get('usuario');

        echo 'autenticado : ' . $autenticado . '<br>tiempo : ' . $tiempo . '<br>usuario : ' . $usuario;
    }

    public static function salir()
    {
    	Session::destroy();
       header('location:' . Configuration::get('base_url') . 'login');
       exit();
    }
}

?>