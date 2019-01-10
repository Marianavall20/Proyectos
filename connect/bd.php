<?php
class Bd{
	private $con;
	function _construct(){
		$this->con = mysqli_connect('mysql.gestionrecursoshumanos.org', 'user_contadorepa', 'Contador2018', 'contadorepa');
		if (mysql_connect_errno($this->con)) {
			echo "Problemas para conectar con la base de datos";
			die();
		}

	}
	public function query($sql){
		return mysqli_query($this->con, $sql);
	}
}



?>