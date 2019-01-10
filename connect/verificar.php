<?php

$conexion = mysql_connect("localhost", "root", "");

mysql_select_db('contador', $conexion);

$sql = "select * from data";
$resultado = mysql_query($sql) or die("Error .:" .mysql_error());
if (mysql_num_rows($resultado) > 0) 

	echo "OK";
else
	echo "0";


?>