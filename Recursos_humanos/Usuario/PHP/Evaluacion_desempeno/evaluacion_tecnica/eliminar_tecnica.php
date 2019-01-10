<?php

	$id_tecnica = $_GET['id_tecnica'];
	$mysqli = new mysqli("mysql.gestiorecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");		
	$sql = $mysqli->query("delete from evaluacion_tecnica where id_tecnica='$id_tecnica'");	
	
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Evaluacion_desempeno.php'>";
	echo "<script language='javascript'> alert('Eliminado correctamente'); </script>";	 

?>