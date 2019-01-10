<?php

	$mysqli = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");	
	
	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$descripcion =  $_POST['descripcion'];
	$cantidad =  $_POST['cantidad'];


	$sql = $mysqli->query ("UPDATE vacante SET nombre='$nombres', descripcion='$descripcion', cantidad='$cantidad' WHERE id='$id'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";