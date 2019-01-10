<?php

	include("conexion.php");
	
	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$primer_apellido =  $_POST['primer_apellido'];
	$segundo_apellido =  $_POST['segundo_apellido'];
	$identidad =  $_POST['identidad'];	
	$telefono =  $_POST['telefono'];
	$direccion =  $_POST['direccion'];
	$email =  $_POST['email'];		
	$usuario = $_POST['usuario'];
	$estado= $_POST['estado'];	
	$privilegio= $_POST['privilegio'];	
		

	$sql = $mysqli->query ("UPDATE empleados SET nombres='$nombres', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido',identidad='$identidad', telefono='$telefono', direccion='$direccion', email='$email', usuario='$usuario',   estado='$estado', privilegio='$privilegio' WHERE id='$id'");
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
