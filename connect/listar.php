<?php
$conexion = mysql_connect("localhost", "root", "");

mysql_select_db('contador', $conexion);

$sql = "select * from data";
$resultado = mysql_query($sql) or die ("Error .:" .mysql_error());

while ($linha  = mysql_fetch_object($resultado))
	echo $linha -> username."#";
echo "?";



?>