
<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion/Conexion.php");
		
		
		$B=$_POST['Fecha'];
		$C=$_POST['Aeropuerto'];
		$D=$_POST['Destino'];
	
	    $G=$_POST['Pasajeros'];
		$E=$_POST['Matricula_avion'];
		$F=$_POST['Horario'];
mysqli_query($Conexion, "INSERT INTO vuelos (Fecha, Aeropuerto_origen, Destino, Numero_pasajeros, Matricula_avion, Horario) VALUES('$B','$C', '$D','$G',$E','$F')");
	}
	?>