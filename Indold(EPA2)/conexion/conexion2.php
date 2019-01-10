<?php
$local="localhost";
$usuariobd="root";
$password="";
$db="proyecto";
$cone= new mysqli ($local,$usuariobd,$password,$db);
if($cone->connect_error){
	echo"error";
	exit();
}


?>