<?php

include ("conn.php");

$sql=$Conexion->query("INSERT INTO 'data' VALUES (0, '".$_REQUEST['username']."','".$_REQUEST['useremail']."','".$_REQUEST['usermobile']."','".$_REQUEST['useradress']."')");
if (!$sql) {
   die("No se pudo conectar");

}


$sql=$Conexion->query("SELECT * FROM 'data' where username='".$_REQUEST['username']."' and useremail='".$_REQUEST['useremail']."'");

if (!$sql) {
	die("No se pudo conectar");
}

if ($row_cnt = $sql->num_rows($sql)>0) {
	echo "Login ok";

	$fila = $sql->fecth_array($sql, MSQL_ASSOC);

	echo $fila['id'];
	echo $fila['username'];
	echo $fila['useremail'];
}
else{
	echo "error login";
}
$sql->free();
$Conexion->close();
?>