<?php

	$mysqli = new mysqli("localhost", "root", "", "recursos_humanos");	
	
	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$descripcion =  $_POST['descripcion'];
	$cantidad =  $_POST['cantidad'];


	$sql = $mysqli->query ("UPDATE vacante SET nombre='$nombres', descripcion='$descripcion', cantidad='$cantidad' WHERE id='$id'");
?>	


     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";