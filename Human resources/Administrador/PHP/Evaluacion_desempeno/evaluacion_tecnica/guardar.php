<?php

	if(isset($_POST['Enviar'])) 
	{

	include ("conexion.php");
        $empleado=$_POST["empleado"];
		$admin=$_POST["admin"];
		$componente=$_POST["componente"];
		$calificacion=$_POST["calificacion"];
		$area=$_POST['area'];
		$periodo_evaluado=$_POST['periodo_evaluado'];
		$cargo_empleado=$_POST['cargo_empleado'];
		$tiempo_servicio=$_POST['tiempo_servicio'];
		$fecha=$_POST['fecha'];
		$pregunta1=$_POST['pregunta1'];
		$pregunta_nueva=$_POST['pregunta_nueva'];
		$justificacion=$_POST['justificacion'];
		
		


		
			
mysqli_query($mysqli, "INSERT INTO evaluacion_psicologica(empleado,admin,componente,calificacion,area,periodo_evaluado,cargo_empleado,tiempo_servicio,fecha,pregunta1,pregunta_nueva,justificacion) VALUES ('$empleado','$admin','$componente','$calificacion','$area','$periodo_evaluado','$cargo_empleado','$tiempo_servicio','$fecha','$pregunta1','$pregunta_nueva','$justificacion')");
}

else
{echo "Fallo al insertar";}

	?>
<script type="text/javascript">
	window.location="index.php"
</script>
