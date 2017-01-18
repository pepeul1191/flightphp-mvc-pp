<?php

class Controller_Item extends Controller
{
    public static function listar($modulo)
    {
    	$modulos = Controller::get(Configuration::get('accesos') . 'item/listar/menu/' . $modulo);
    	
    	echo $modulos;
    }
}

?>