<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM empleados WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
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
				<?php if($resultado) { ?>
				<script type="text/javascript">
	alert("Registrado eliminado");window.location="index.php"
</script>
				<?php } else { ?>
				<script type="text/javascript">
	alert("Error al eliminar");window.location="index.php"
</script>
				<?php } ?>

				
				
				
				</div>
			</div>
		</div>
	</body>
</html>
