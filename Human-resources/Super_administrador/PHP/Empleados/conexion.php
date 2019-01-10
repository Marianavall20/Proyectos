<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'recursos_humanos');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
