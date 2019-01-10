<?php 
$host = "mysql.gestionrecursoshumanos.org";
$basededatos = "db_recursoshumanos";
$usuariodb = "user_recursos";
$clavedb = "Recursos2018";
$Conexion= new mysqli ($host,$usuariodb,$clavedb,$basededatos);
if($Conexion->connect_errno){
	echo "error";
	exit();
}
?>