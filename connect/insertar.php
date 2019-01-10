<?php
$username=$_GET['username'];
$useremail=$_GET['useremail'];
$usermobile=$_GET['usermobile'];
$useradress=$_GET['useradress'];

$conexion = mysqli_connect("mysql.gestionrecursoshumanos.org", "user_contadorepa", "Contador2018", "contador");

mysqli_select_db('contador', $conexion);

$sql = "INSERT INTO data (username, useremail, usermobile, useradress) VALUES ('$username', '$useremail', '$usermobile', $useradress)";

$resultado = mysqli_query($sql) or die ("Error .:" .mysqli_error());
if (mysqli_num_rows($resultado) > 0) 

	echo "OK";
else
	echo "0";


?>

