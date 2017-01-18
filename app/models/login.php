<?php

class Login extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function existe($usuario, $contrasenia){
		$stmt = $this->_db->prepare("SELECT (CASE WHEN (COUNT(*) > 0) THEN 'true' ELSE 'false' END) AS existe FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia;");
		$stmt->bindParam(':usuario', $usuario);
		$stmt->bindParam(':contrasenia', $contrasenia);
		$stmt->execute();
		$existe = $stmt->fetch(PDO::FETCH_ASSOC);

		$rpta = false;
		if ($existe["existe"] == "true"){
			$rpta = true;
		}

		return $rpta;
	}
}

?>