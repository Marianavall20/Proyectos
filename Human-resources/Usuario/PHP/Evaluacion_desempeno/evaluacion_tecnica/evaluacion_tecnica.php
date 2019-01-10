<?php

        $admin=$_POST["admin"];
        $empleado=$_POST["empleado"];
        $componente=$_POST["componente"];
		$calificacion=$_POST["calificacion"];	
		

	if(isset($_POST['Enviar'])) 
	{

		include("../../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO evaluacion_tecnica(admin, empleado, componente, calificacion) VALUES ('$admin', '$empleado', '$componente',  '$calificacion')");
    }

        else
    {
    	echo "fallo al insertar";
    }
?>

<script type="text/javascript">
	alert("Guardado exitosamente");window.location="../Evaluacion_desempeno.php"
</script>