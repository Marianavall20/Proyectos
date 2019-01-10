<?php 
$host = "localhost";
$basededatos = "recursos_humanos";
$usuariodb = "root";
$clavedb = "";
$Conexion= new mysqli ($host,$usuariodb,$clavedb,$basededatos);
if($Conexion->connect_errno){
	echo "error";
	exit();
}


 ?>