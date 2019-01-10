<?php

    $mysqli = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");	
	
	$id_tecnica = $_POST['id_tecnica'];
	$empleado = $_POST['empleado'];
	$admin = $_POST['admin'];
	$componente =  $_POST['componente'];
	$calificacion =  $_POST['calificacion'];	
		

	$sql = $mysqli->query ("UPDATE evaluacion_tecnica SET empleado='$empleado', admin='$admin', componente='$componente', calificacion='$calificacion' WHERE id_tecnica='$id_tecnica'");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Actualizado exitosamente"); 
     </SCRIPT> 
     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Evaluacion_desempeno.php'>";