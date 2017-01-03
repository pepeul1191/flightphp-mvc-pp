<?php

class Controller_Demo 
{
    public static function hello() 
    {
        echo 'hello world!';
    }

    public static function parametros($id) 
    {
    	$query_param = Flight::request()->query['qp'];
        var_dump($query_param);
        echo 'id : ' . $id;
    }
}

?>