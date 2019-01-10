<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['Id_pasajeros'];
		$C=$_POST['Nombre'];
	
		
mysqli_query($Conexion, "INSERT INTO pasajeros (Id_Pasajeros, Nombre) VALUES('$B','$C')");
	}
	?>