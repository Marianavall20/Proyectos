<?php
	if(isset($_POST['Enviar'])) 
	{

		include("../Conexion/Conexion.php");

        $profesion_trabajador=$_POST["profesion_trabajador"];
        $grupo_profesional=$_POST["grupo_profesional"];       
        $funciones=$_POST["funciones"];
        $direccion_centro=$_POST["direccion_centro"];
        $actividad_trabajador=$_POST["actividad_trabajador"];
        $actividad=$_POST["actividad"];
        $duracion_actividad=$_POST["duracion_actividad"];
        $duracion_estimada=$_POST["duracion_estimada"];
        $convenio=$_POST["convenio"];
        $jornada_actividad=$_POST["jornada_actividad"];
        $distribucion_horaria=$_POST["distribucion_horaria"];
        $tiempo_parcial=$_POST["tiempo_parcial"];
        $jornada_completa=$_POST["jornada_completa"];
        $hora_inicio=$_POST["hora_inicio"];
        $hora_final=$_POST["hora_final"];
        $jornada_parcial=$_POST["jornada_parcial"];
        $tiempo=$_POST["tiempo"];
        $distribucion_tiempo=$_POST["distribucion_tiempo"];
        $extras=$_POST["extras"];
        $fecha_inicio=$_POST["fecha_inicio"];
        $periodo_prueba=$_POST["periodo_prueba"];
        $salario=$_POST["salario"];
        $concepto_salarial=$_POST["concepto_salarial"];
        $duracion_vacaciones=$_POST["duracion_vacaciones"];
        $convenio_colectivo=$_POST["convenio_colectivo"];
        $contrato_relevo=$_POST["contrato_relevo"];
        $desempleado=$_POST["desempleado"];
        $numero_contrato=$_POST["numero_contrato"];
        $fecha_contrato=$_POST["fecha_contrato"];
        $nombre_trabajador=$_POST["nombre_trabajador"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $direccion=$_POST["direccion"];
        $grupo_laboral=$_POST["grupo_laboral"];   
        $salario_jubilacion=$_POST["salario_jubilacion"];
        $fecha_decreto=$_POST["fecha_decreto"];       
        $fecha_final_decreto=$_POST["fecha_final_decreto"];
        $num_contrato=$_POST["num_contrato"];
        $fecha_finaldecreto=$_POST["fecha_finaldecreto"];
		
	
			
mysqli_query($conexion, "INSERT INTO contratos( profesion_trabajador, grupo_profesional, funciones, direccion_centro, actividad_trabajador, actividad, duracion_actividad, duracion_estimada, convenio, jornada_actividad, distribucion_horaria, tiempo_parcial, jornada_completa, hora_inicio, hora_final, jornada_parcial, tiempo, distribucion_tiempo, extras, fecha_inicio, periodo_prueba, salario, concepto_salarial, duracion_vacaciones, convenio_colectivo, contrato_relevo, desempleado, numero_contrato, fecha_contrato, nombre_trabajador, fecha_nacimiento, direccion, grupo_laboral, salario_jubilacion, fecha_decreto, fecha_final_decreto, num_contrato, fecha_finaldecreto) VALUES ('$profesion_trabajador', '$grupo_profesional', '$funciones', '$direccion_centro', '$actividad_trabajador', '$actividad', '$duracion_actividad', '$duracion_estimada', '$convenio', '$jornada_actividad', '$distribucion_horaria', '$tiempo_parcial', '$jornada_completa', '$hora_inicio', '$hora_final', '$jornada_parcial', '$tiempo', '$distribucion_tiempo', '$extras', '$fecha_inicio', '$periodo_prueba', '$salario', '$concepto_salarial', '$duracion_vacaciones', '$convenio_colectivo', '$contrato_relevo', '$desempleado', '$numero_contrato', '$fecha_contrato', '$nombre_trabajador', '$fecha_nacimiento', '$direccion', '$grupo_laboral', '$salario_jubilacion', '$fecha_decreto', '$fecha_final_decreto', '$num_contrato', '$fecha_finaldecreto')");
}

else
{echo "Fallo al insertar";}
	?>

<script type="text/javascript">
        alert("Guardado exitosamente");window.location="Contratacion.php"
</script>