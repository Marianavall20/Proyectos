<?php

        $empleado=$_POST["empleado"];
        $eps=$_POST["eps"];
		$saldo_eps=$_POST["saldo_eps"];
		$arl=$_POST["arl"];
		$saldo_riesgos=$_POST["saldo_riesgos"];
		$pensiones=$_POST["pensiones"];
		$saldo_pensiones=$_POST["saldo_pensiones"];	

		

	if(isset($_POST['Enviar'])) 
	    {

		include("../../Conexion/conexion.php");		
			
        mysqli_query($conexion, "INSERT INTO empresas_afiliadoras(empleado, eps, saldo_eps, arl, saldo_riesgos, pensiones, saldo_pensiones ) 
	     VALUES  ('$empleado', '$eps', '$saldo_eps', '$arl', '$saldo_riesgos', '$pensiones', '$saldo_pensiones')");

 
        }
        else
        {
	    echo "Fallo al insertar";
        }
?>
<script type="text/javascript">
	window.location="Seguridad_social.php"
</script>