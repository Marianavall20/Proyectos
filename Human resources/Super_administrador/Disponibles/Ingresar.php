<?php

        $area=$_POST["area"];
        $correspondencia=$_POST["correspondencia"];
		$motivo=$_POST["motivo"];
		$perfil=$_POST["perfil"];
		$funciones=$_POST["funciones"];
		$fecha=$_POST["fecha"];
		$sueldo=$_POST["sueldo"];
		$prestaciones=$_POST["prestaciones"];
		$jornada_laboral=$_POST["jornada_laboral"];
		$cantidad=$_POST["cantidad"];
		

	if(isset($_POST['Guardar'])) 
	    {

		include("../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO vacante(area,correspondencia,motivo,perfil, funciones, fecha, sueldo, prestaciones, jornada_laboral, cantidad) 
	     VALUES  ('$area','$correspondencia','$motivo','$perfil', '$funciones', '$fecha', '$sueldo', '$prestaciones', '$jornada_laboral', '$cantidad')");
        }
        else
        {
	    echo "fallo al insertar";
        }
?>
<script type="text/javascript">
	window.location="Registro.php"
</script>