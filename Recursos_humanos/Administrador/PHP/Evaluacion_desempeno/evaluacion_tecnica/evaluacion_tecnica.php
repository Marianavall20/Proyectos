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
    	echo "Fallo al insertar";
    }
?>

<script type="text/javascript">
	window.location="../Evaluacion_desempeno.php"
</script>