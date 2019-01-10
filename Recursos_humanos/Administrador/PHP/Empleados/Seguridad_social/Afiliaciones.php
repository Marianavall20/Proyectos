<?php

     
        $eps=$_POST["eps"];
		$saldo_eps=$_POST["saldo_eps"];		
		$empleado=$_POST["empleado"];

		$arl=$_POST["arl"];
		$saldo_riesgos=$_POST["saldo_riesgos"];

		$pensiones=$_POST["pensiones"];
		$saldo_pensiones=$_POST["saldo_pensiones"];	

		

	if(isset($_POST['Enviar'])) 
	    {

		include("../../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO empresas_salud(eps,saldo_eps,empleado) 
	     VALUES  ('$eps','$saldo_eps','$empleado')");

        mysqli_query($conexion, "INSERT INTO riesgos(arl,saldo_riesgos,empleado) 
	     VALUES  ('$arl','$saldo_riesgos','$empleado')");

        mysqli_query($conexion, "INSERT INTO fondo_pensiones(pensiones,saldo_pensiones,empleado) 
	     VALUES  ('$pensiones','$saldo_pensiones','$empleado')");
        }
        else
        {
	    echo "Fallo al insertar";
        }
?>
<script type="text/javascript">
	window.location="Seguridad_social.php"
</script>