<?php

        $tipo=$_POST["tipo"];
        $empresa=$_POST["empresa"];
			

		

	if(isset($_POST['Enviar'])) 
	    {

		include("../../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO afiliciaciones(tipo, empresa) 
	     VALUES  ('$tipo', '$empresa')");

 
        }
        else
        {
	    echo "Fallo al insertar";
        }
?>
<script type="text/javascript">
	window.location="Seguridad_social.php"
</script>