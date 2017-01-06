<?php

class Session
{
	public static function init()
	{
		session_start();
	}

	public static function destroy($clave = false)
	{
		if($clave){
			if(is_array($clave)){
				for($i=0;$i<count($clave);$i++){
					if(isset($_SESSION[$clave[$i]])){
						unset($_SESSION[$clave[$i]]);
					}
				}
			}else{
				if(isset($_SESSION[$clave])){
					unset($_SESSION[$clave]);
				}
			}
		}else{
		session_destroy();
		}
	}

	public static function set($clave, $valor)
	{
		if(!empty($clave))
			$_SESSION[$clave] = $valor;
	}

	public static function get($clave)
	{
		if(isset($_SESSION[$clave]))
			return $_SESSION[$clave];
	}

	public static function tiempo()
	{
		if(!Session::get('tiempo') || !defined('SESSION_TIME')){
			throw new Exception('No se ha definido el tiempo de sesion'); 
		}

		if(Configuration::get('session_time') == 0){
			return;
		}

		if(time() - Session::get('tiempo') > (Configuration::get('session_time') * 60)){
			Session::destroy();
			header('location:' . BASE_URL . 'error/access/8080');
		}
		else{
			Session::set('tiempo', time());
		}
	}

	public static function tiempoBoton(){
		if(!Session::get('tiempo') || !defined('SESSION_TIME')){
			throw new Exception('No se ha definido el tiempo de sesion'); 
		}

		if(Configuration::get('session_time') == 0){
			return;
		}

		if(time() - Session::get('tiempo') > (Configuration::get('session_time') * 60)){
			Session::destroy();
			$mensaje['tipoMensajeControl'] = "text-error";
			$mensaje['mensajeControl'] = "Se ha terminado su tiempo de sesión, ya no puede ejecutar esta operación.";
			echo json_encode($mensaje);exit();
		}
		else{
			Session::set('tiempo', time());
		}
	}

	public static function logueado($tiempo=false)
	{
		if(!Session::get('autenticado')){
			header('location:' . BASE_URL . 'error/access/5050');
			exit;
		}

		if($tiempo){
			Session::tiempo();
		}            
	}
}

?>