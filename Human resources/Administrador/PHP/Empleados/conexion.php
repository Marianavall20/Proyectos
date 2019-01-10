<?php
	
	$mysqli = new mysqli('mysql.gestionrecursoshumanos.org', 'user_recursos', 'Recursos2018', 'db_recursoshumanos');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
