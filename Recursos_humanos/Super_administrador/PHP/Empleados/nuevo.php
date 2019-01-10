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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<br>
                    <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombres" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombres" placeholder="Nombres"  required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="primer_apellido" class="col-sm-2 control-label">Primer apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer apellido"   required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="segundo_apellido" class="col-sm-2 control-label">Segundo Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido"  >
					</div>
				</div>

				<div class="form-group">
					<label for="doc_identidad" class="col-sm-2 control-label">Identidad</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="doc_identidad" name="doc_identidad" placeholder="Identidad"  >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" >
					</div>
				</div>

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"  >
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" >
					</div>
				</div>

				<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="contrasenia" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="contrasenia" name="contrasenia" placeholder="Ingrese Contraseña" >
					</div>
				</div>

				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
							</select>
					</div>
				</div>

				<div class="form-group">
					<label for="privilegio" class="col-sm-2 control-label">Privilegio</label>
					<div class="col-sm-10">
						<select class="form-control" id="privilegio" name="privilegio">
							<option value="Usuario">Usuario</option>
							</select>
					</div>
				</div>
				
                          

                              <div class="modal-footer">
                         <button type="submit" class="btn btn-info" name="Enviar">Enviar</button> 
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>              
                      </form>
                    </div>
                   
                </div>
            </div>
        </div> 
	</body>
</html>