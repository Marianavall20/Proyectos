<?php

        $area=$_POST["area"];
        $nombres=$_POST["nombres"];
		$descripcion=$_POST["descripcion"];
		$cantidad=$_POST["cantidad"];
		

	if(isset($_POST['Guardar'])) 
	    {

		include("../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO vacante(area,nombre,descripcion,cantidad) 
	     VALUES  ('$area','$nombres','$descripcion','$cantidad')");
        }
        else
        {
	    echo "fallo al insertar";
        }
?>
<script type="text/javascript">
	alert("Guardado exitosamente");window.location="Registro.php"
</script>