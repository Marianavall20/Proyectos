<?php

require "bd.php";
$bd = new Bd();

$sqlBusca = $_POST['sql'];
$resultado = $bd->query($sqlBusca)

while ($array = mysqli_fetch_assoc($resultado)) {
	$datos[] = $array;

	echo json_encode($datos);

}


?>