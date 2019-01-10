<?php
	if(isset($_POST['Enviar'])) 
	{

		include("../Conexion/Conexion.php");
        $nit=$_POST["nit"];
		$dna_empresa=$_POST["dna_empresa"];
		$nif_empresa=$_POST["nif_empresa"];
		$concepto_empresa=$_POST["concepto_empresa"];
		$razon_social=$_POST["razon_social"];
		$domicilio_empresa=$_POST["domicilio_empresa"];
		$pais_empresa=$_POST["pais_empresa"];
		$municipio_empresa=$_POST["municipio_empresa"];
		$codigo_postal=$_POST["codigo_postal"];
	    $regimen=$_POST["regimen"];
		$cod_prov=$_POST["cod_prov"];
		$numero_cotizacion=$_POST["numero_cotizacion"];
		$digito_contrato=$_POST["digito_contrato"];
		$actividad_economica=$_POST["actividad_economica"];
		$pais_centro=$_POST["pais_centro"];
		$municipio_centro=$_POST["municipio_empresa"];
		$nombre_trabajador=$_POST["nombre_trabajador"];
		$identificacion=$_POST["identificacion"];
		$fecha_nacimiento=$_POST["fecha_nacimiento"];
		$num_afiliacion=$_POST["num_afiliacion"];
		$nivel_formativo=$_POST["nivel_formativo"];
		$nacionalidad=$_POST["nacionalidad"];
		$domicilio_trabajador=$_POST["domicilio_trabajador"];
		$pais_trabajador=$_POST["pais_trabajador"];

	
	
			
mysqli_query($conexion, "INSERT INTO registro_contrato (nit, dna_empresa, nif_empresa, concepto_empresa, razon_social, domicilio_empresa, pais_empresa, municipio_empresa, codigo_postal, regimen, cod_prov, numero_cotizacion, digito_contrato, actividad_economica, pais_centro, municipio_centro, nombre_trabajador, identificacion, fecha_nacimiento, num_afiliacion, nivel_formativo, nacionalidad, domicilio_trabajador, pais_trabajador)
 VALUES ('$nit', '$dna_empresa', '$nif_empresa', '$concepto_empresa', '$razon_social', '$domicilio_empresa', '$pais_empresa', '$municipio_empresa', '$codigo_postal', '$regimen', '$cod_prov', '$numero_cotizacion', '$digito_contrato', '$actividad_economica', '$pais_centro', '$municipio_centro', '$nombre_trabajador', '$identificacion', '$fecha_nacimiento', '$num_afiliacion', '$nivel_formativo', '$nacionalidad', '$domicilio_trabajador', '$pais_trabajador')");
}

else
{echo "Fallo al insertar";}
	?>

<script type="text/javascript">
	window.location="Contratacion.php"
</script>

