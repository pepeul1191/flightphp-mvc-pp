<?php

class Controller_Demo extends Controller
{
    public static function hello() 
    {
        echo 'hello world!';
    }

    public static function parametros($id) 
    {
        $query_param = Flight::request()->query['qp'];
        echo 'id : ' . $id . '<br>qp : ' . $query_param;
    }

    public static function listar_usuarios()
    {
        $modelo = Controller::load_model('demos');
        echo json_encode($modelo->usuarios());
    }

    public static function vista()
    {
        Flight::view()->display('demo/index.tpl');
    }

    public static function partial($valor)
    {
        Flight::view()->assign('valor', $valor);
        Flight::view()->assign('partial', 'demo/partial2.tpl');
        Flight::view()->display('layouts/blank.tpl');
    }
}

?>