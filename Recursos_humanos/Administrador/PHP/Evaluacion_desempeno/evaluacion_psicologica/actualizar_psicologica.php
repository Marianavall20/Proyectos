<?php

	$mysqli = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");	
	
	$id_psicologica = $_POST['id_psicologica'];
	$empleado = $_POST['empleado'];
	$admin = $_POST['admin'];
	$componente =  $_POST['componente'];
	$calificacion =  $_POST['calificacion'];	
		

	$sql = $mysqli->query ("UPDATE evaluacion_psicologica SET empleado='$empleado', admin='$admin', 
		componente='$componente', calificacion='$calificacion' WHERE id_psicologica='$id_psicologica'");
?>	

	 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Evaluacion_psicologica.php'>";