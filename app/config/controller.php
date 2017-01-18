<?php

abstract class Controller
{
    protected $_request;

    public function __construct($peticion)
    {
        $this->_request = $peticion;
    }

    //abstract public function index();

    protected static function load_model($modelo)
    {
        $ruta_modelo = Configuration::get('path') . 'models' . DIRECTORY_SEPARATOR . $modelo . '.php';
        //var_dump($ruta_modelo);
        if(is_readable($ruta_modelo)){
            require_once $ruta_modelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else {
            throw new Exception('Error de modelo');
        }
    }

    protected static function load_controller($controlador)
    {
        $ruta_controlador = Configuration::get('path') . 'controllers' . DIRECTORY_SEPARATOR . $controlador . '.php';
        //var_dump($ruta_controlador);
        if(is_readable($ruta_controlador)){
            require_once $ruta_controlador;
            $controllerInstacia = new $controlador($this->_request);
            //$controlador = new $controlador;
            return $controllerInstacia;
        }
        else {
            throw new Exception('Error, controlador a cargar dinámicamente no existe');
        }
    }

    protected static function get_library($libreria)
    {
        $ruta_libreria = Configuration::get('path') . 'libs' . DIRECTORY_SEPARATOR . $libreria . '.php';

        if(is_readable($ruta_libreria)){
            require_once $ruta_libreria;
            $libreriaInstacia = new $libreria();
            //$controlador = new $controlador;
            return $libreriaInstacia;
        }
        else{
            throw new Exception('Error de libreria');
        }
    }

    protected static function get($url)
    {
       return file_get_contents($url);;
    }

    protected static function post($url)
    {
       $curl = curl_init($url);
       $curl_post_data = array();
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
       $rpta = curl_exec($curl);
       curl_close($curl);

       return $rpta;
    }
}

?>
