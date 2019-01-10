<?php
include ("conexion.php");

$Nombre=$_POST['Nombre'];
$Clave=$_POST['Clave'];
$Email=$_POST['Email'];
$Sexo=$_POST['Sexo'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$Ciudad=$_POST['Ciudad'];
$Pais=$_POST['Pais'];
$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

$query = "INSERT INTO usuarios (Nombre, Clave, Email, Sexo, Fecha_nacimiento, Ciudad, Pais, Foto) values ('$Nombre','$Clave', '$Email', '$Sexo', '$Fecha_nacimiento', '$Ciudad', '$Pais', '$Foto')";
$resultado = $conexion->query($query);

if ($resultado)
	{
		header("location:index.php");
	}
	 else
	 {
	 	echo "no se inserto";
	 }
?>