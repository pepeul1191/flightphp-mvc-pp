<?php

class Demos extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function usuarios(){
    	$stmt = $this->_db->prepare("SELECT * FROM usuarios");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>