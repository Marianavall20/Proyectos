<?php
include ("conexion.php");

$id = $_REQUEST ['id'];
$Nombre=$_POST['Nombre'];
$Clave=$_POST['Clave'];
$Email=$_POST['Email'];
$Sexo=$_POST['Sexo'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$Ciudad=$_POST['Ciudad'];
$Pais=$_POST['Pais'];
$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

$query = "UPDATE usuarios SET Nombre='$Nombre', Clave='$Clave', Email='$Email', Sexo='$Sexo', Fecha_nacimiento='$Fecha_nacimiento', Ciudad='$Ciudad', Pais='$Pais', Foto='$Foto' WHERE id='$id'";
$resultado = $conexion->query($query);

if ($resultado)
	{
		 
		header("location:Listar.php");
	}
	 else
	 {
	 	echo "no se modifico";
	 }
?>