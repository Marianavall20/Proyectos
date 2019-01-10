<?php

	include("conexion.php");
	
	$id = $_POST['id'];
	$empleado = $_POST['empleado'];
	$admin =  $_POST['admin'];
	$componente =  $_POST['componente'];
	$calificacion= $_POST['calificacion'];
	$area=$_POST['area'];
	$periodo_evaluado=$_POST['periodo_evaluado'];
	$cargo_empleado=$_POST['cargo_empleado'];
	$tiempo_servicio=$_POST['tiempo_servicio'];
	$fecha=$_POST['fecha'];
	$pregunta1=$_POST['pregunta1'];
	$pregunta_nueva=$_POST['pregunta_nueva'];
	$justificacion=$_POST['justificacion'];
		

	$sql = $mysqli->query ("UPDATE evaluacion_psicologica SET empleado='$empleado', admin='$admin',calificacion=$calificacion, componente='$componente',area='$area',periodo_evaluado='$periodo_evaluado',cargo_empleado='$cargo_empleado',tiempo_servicio='$tiempo_servicio',fecha='$fecha',pregunta1='$pregunta1',pregunta_nueva='$pregunta_nueva',justificacion='$justificacion'  WHERE id='$id'");
?>	

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($sql) { ?>
						<script type="text/javascript">
	alert("Guardado exitosamente");window.location="index.php"
</script>

						<?php } else { ?>
						<script type="text/javascript">
	alert("Guardado erroneo");window.location="index.php"
</script>
					<?php } ?>
					
					
					
				</div>
			</div>
		</div>
	</body>
</html>
