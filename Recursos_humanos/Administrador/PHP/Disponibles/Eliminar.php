<?php

	$id = $_GET['id'];
	$mysqli = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");		
	$sql = $mysqli->query("delete from vacante where id='$id'");	
	
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";
	 

?>