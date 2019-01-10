<?php

	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "", "recursos_humanos");		
	$sql = $mysqli->query("delete from vacante where id='$id'");	
	
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";
	 

?>