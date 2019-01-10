<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['Id_avion'];
		$C=$_POST['Fabricante'];
		$D=$_POST['Pasajeros'];
		$F=$_POST['Modelo'];
		
mysqli_query($Conexion,"INSERT INTO aviones (Id_avion, Fabricante, Pasajeros, Modelo) VALUES ('$B','$C','$D','$F')");
print "<script>alert(\"Guardado exitosamente.\");window.location='Ver.php';</script>";
	}
	?>