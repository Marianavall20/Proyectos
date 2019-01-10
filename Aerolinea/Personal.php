<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['ID'];
		$C=$_POST['Nombre'];
		$D=$_POST['Categoria'];
	
		
mysqli_query($Conexion, "INSERT INTO personal (Id_trabajador, Nombre, Categoria) VALUES('$B','$C', '$D')");
	}
	?>