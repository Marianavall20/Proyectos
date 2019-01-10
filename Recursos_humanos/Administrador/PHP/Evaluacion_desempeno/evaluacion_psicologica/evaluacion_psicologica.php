<?php

        $empleado=$_POST["empleado"];
        $admin=$_POST["admin"];
        $componente=$_POST["componente"];
		$calificacion=$_POST["calificacion"];
		
		
		

	if(isset($_POST['Enviar'])) 
	{

		include("../../Conexion/conexion.php");
		
			
        mysqli_query($conexion, "INSERT INTO evaluacion_psicologica (empleado, admin,  componente, calificacion) VALUES ( '$empleado', '$admin', '$componente',  '$calificacion')");
    }

       else
    {
    	echo "fallo al insertar";
    }
	?>

<script type="text/javascript">
	window.location="../Evaluacion_psicologica.php"
</script>
