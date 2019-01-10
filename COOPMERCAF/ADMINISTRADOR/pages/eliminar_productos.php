<?php
include ("abrir_conexion.php");

$id = $_REQUEST['id'];
$query = "DELETE  FROM $tabla_db8 WHERE id='$id'";
$resultado = mysqli_query($conexion,$query);

echo $resultado;

echo "

	<script>alert(\"Eliminado exitosamente.\");window.location='consultar_productos.php';</script>

";
?>