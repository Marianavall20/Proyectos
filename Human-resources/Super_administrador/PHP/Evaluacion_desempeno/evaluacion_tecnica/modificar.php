<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM evaluacion_psicologica WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR EVALUACION</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="empleado" class="col-sm-2 control-label">EMPLEADOS</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="empleado" name="empleado" placeholder="empleado" value="<?php echo $row['empleado']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="admin" class="col-sm-2 control-label">ADMINISTRADOR QUE EVALUA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="admin" name="admin" placeholder="Administrador que evalua" value="<?php echo $row['admin']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="componente" class="col-sm-2 control-label">COMPONENTE</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="componente" name="componente" placeholder="Componente" value="<?php echo $row['componente']; ?>" >
					
					</div>

				</div>

				
				
                <div class="form-group">
					<label for="calificacion" class="col-sm-2 control-label">CALIFICACION </label>
					<div class="col-sm-10">
						<select class="form-control" id="calificacion" name="calificacion">
							<option value="Bajo" <?php if($row['calificacion']=='Bajo') echo 'selected'; ?>>Bajo</option>
							<option value="Medio" <?php if($row['calificacion']=='Medio') echo 'selected'; ?>>Medio</option>
							<option value="Alto" <?php if($row['calificacion']=='Alto') echo 'selected'; ?>>Alto</option>
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="area" class="col-sm-2 control-label">Area</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="area" name="area" placeholder="Area" value="<?php echo $row['area']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="periodo_evaluado" class="col-sm-2 control-label">Periodo evaluado</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="periodo_evaluado" name="periodo_evaluado" placeholder="Periodo evaluado" value="<?php echo $row['periodo_evaluado']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="cargo_empleado" class="col-sm-2 control-label"> Cargo empleado</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="cargo_empleado" name="cargo_empleado" placeholder="Cargo empleado" value="<?php echo $row['cargo_empleado']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="tiempo_servicio" class="col-sm-2 control-label"> Tiempo de servicio</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="tiempo_servicio" name="tiempo_servicio" placeholder="Tiempo de servicio" value="<?php echo $row['tiempo_servicio']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="pregunta1" class="col-sm-2 control-label">¿Cual ha sido el aspecto que mas ha mejorado el colaborador durante el periodo evaluado?</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="pregunta1" name="pregunta1" placeholder="Pregunta" value="<?php echo $row['pregunta1']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="pregunta_nueva" class="col-sm-2 control-label">¿el colaborador tiene potencial de desarrollo dentro de la organizacion?</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="pregunta_nueva" name="pregunta_nueva" placeholder="Pregunta" value="<?php echo $row['pregunta_nueva']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="justificacion" class="col-sm-2 control-label">Justificacion</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="justificacion" name="justificacion" placeholder="Justificacion" value="<?php echo $row['justificacion']; ?>" >
					</div>
				</div>
				


			
				
				
				
			
				
				<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
						<br>
						 <button type="submit" class="btn btn-info" name="Enviar">Enviar</button> 
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <br>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>