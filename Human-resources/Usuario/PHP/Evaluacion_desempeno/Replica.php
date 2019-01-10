<?php

        $empleado=$_POST["empleado"];
        $disconcormidad=$_POST["disconcormidad"];
		
	if(isset($_POST['Guardar'])) 
	    {

		include("../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO replica (empleado,disconcormidad) 
	     VALUES  ('$empleado','$disconcormidad')");
        }
        else
        {
	    echo "Fallo al insertar";
        }
?>
<script type="text/javascript">
	window.location="Evaluacion_desempeno.php"
</script>