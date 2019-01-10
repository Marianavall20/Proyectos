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
				<h3 style="text-align:center">NUEVO EVALUACION</h3>
			</div>
			
			<br>
                    <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="empleado" class="col-sm-2 control-label">EMPLEADO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="empleado" name="empleado" placeholder="Empleado a evaluar"  required>
					</div>
				</div>
				
				
			
				<div class="form-group">
					<label for="admin" class="col-sm-2 control-label">ADMINISTRADOR QUE EVALUA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="admin" name="admin" placeholder="Administrador que evalua"   required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="componente" class="col-sm-2 control-label">COMPONENTE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="componente" name="componente" placeholder="Componente a evaluar"  >
					</div>
				</div>

				
				<div class="form-group">
					<label for="calificacion" class="col-sm-2 control-label">CALIFICACION</label>
					<div class="col-sm-10">
						<select class="form-control" id="calificacion" name="calificacion">
							<option value="Bajo">Bajo</option>
							<option value="Medio">Medio</option>
							<option value="Alto">Alto</option>
							</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="area" class="col-sm-2 control-label">Area</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="area" name="area" placeholder="Area"  >
					</div>
				</div>
				<div class="form-group">
					<label for="periodo_evaluado" class="col-sm-2 control-label">Periodo evaluado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="periodo_evaluado" name="periodo_evaluado" placeholder="Periodo evaluado"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="cargo_empleado" class="col-sm-2 control-label">Cargo empleado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cargo_empleado" name="cargo_empleado" placeholder="Cargo empleado"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="tiempo_servicio" class="col-sm-2 control-label"> Tiempo de servicio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tiempo_servicio" name="tiempo_servicio" placeholder="Tiempo de servicio"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="pregunta1" class="col-sm-2 control-label">¿ ?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pregunta1" name="pregunta1" placeholder="Pregunta"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="pregunta_nueva" class="col-sm-2 control-label">¿ ?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pregunta_nueva" name="pregunta_nueva" placeholder="Pregunta"   required>
					</div>
				</div>
				<div class="form-group">
					<label for="justificacion" class="col-sm-2 control-label">¿ ?</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="justificacion" name="justificacion" placeholder="Justificacion"   required>
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