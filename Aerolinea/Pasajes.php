<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['Asiento'];
		$C=$_POST['Clase'];
	$D=$_POST['Pasajeros'];
		
mysqli_query($Conexion, "INSERT INTO pasaje(Asiento, Clase, Id_pasajero) VALUES('$B','$C','$D')");
	}
	?>