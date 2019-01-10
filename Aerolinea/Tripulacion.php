<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['Personal'];
		$C=$_POST['Vuelo'];
		$D=$_POST['Puesto'];
		
		
mysqli_query($Conexion, "INSERT INTO tripulacion (Id_trabajador, Id_vuelo, Puesto) VALUES('$B','$C', '$D')");
	}
	?>

