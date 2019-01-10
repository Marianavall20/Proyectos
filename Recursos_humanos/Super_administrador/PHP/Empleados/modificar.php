<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM administradores WHERE id = '$id'";
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombres" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombres" placeholder="Nombre" value="<?php echo $row['nombres']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="primer_apellido" class="col-sm-2 control-label">Primer Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer apellido" value="<?php echo $row['primer_apellido']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="segundo_apellido" class="col-sm-2 control-label">Segundo Apellido</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido" value="<?php echo $row['segundo_apellido']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="doc_identidad" class="col-sm-2 control-label">Identidad</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="doc_identidad" name="doc_identidad" placeholder="Identidad" value="<?php echo $row['doc_identidad']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $row['email']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario']; ?>" >
					</div>
				</div>

                <div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado </label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="Activo" <?php if($row['estado']=='Activo') echo 'selected'; ?>>Activo</option>
							<option value="Inactivo" <?php if($row['estado']=='Inactivo') echo 'selected'; ?>>Inactivo</option>
							
						</select>
					</div>
				</div>

			<div class="form-group">
					<label for="privilegio" class="col-sm-2 control-label">Privilegio </label>
					<div class="col-sm-10">
						<select class="form-control" id="privilegio" name="privilegio">
							<option value="Administrador" <?php if($row['privilegio']=='Administrador') echo 'selected'; ?>>Administrador</option>
							<option value="Super_administrador" <?php if($row['privilegio']=='Super_administrador') echo 'selected'; ?>>Super Administrador</option>
							
						</select>
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