<?php 
$host = "localhost";
$basededatos = "googlechart";
$usuariodb = "root";
$clavedb = "";
$Conexion= new mysqli ($host,$usuariodb,$clavedb,$basededatos);
if($Conexion->connect_errno){
	echo "error";
	exit();
}


 ?>