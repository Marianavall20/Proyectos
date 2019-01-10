<?php

	$mysqli = new mysqli("localhost", "root", "", "recursos_humanos");	
	
    $id = $_POST['id'];
	$motivo = $_POST['motivo'];
	$perfil = $_POST['perfil'];
	$funciones = $_POST['funciones'];
	$fecha = $_POST['fecha'];
	$sueldo =  $_POST['sueldo'];
	$prestaciones =  $_POST['prestaciones'];
	$jornada_laboral =  $_POST['jornada_laboral'];
	$cantidad =  $_POST['cantidad'];


	$sql = $mysqli->query ("UPDATE vacante SET  motivo='$motivo',  perfil='$perfil',  funciones='$funciones',  fecha='$fecha', sueldo='$sueldo',  prestaciones='$prestaciones',  jornada_laboral='$jornada_laboral',  cantidad='$cantidad' WHERE id='$id'");
?>	


     <META HTTP-EQUIV='Refresh' CONTENT='0; URL=Registro.php'>";