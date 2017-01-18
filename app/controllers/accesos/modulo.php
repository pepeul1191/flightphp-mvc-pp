<?php

class Controller_Modulo extends Controller
{
    public static function listar()
    {
    	$modulos = Controller::get(Configuration::get('accesos') . 'modulo/listar');
    	
    	echo $modulos;
    }
}

?>