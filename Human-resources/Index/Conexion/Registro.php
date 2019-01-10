<?php
	if(isset($_POST['Enviar'])) 
	{

		include("Conexion.php");
		
		$Nombres = $_POST['Nombres'];
		$Apellidos = $_POST['Apellidos'];
		$privilegio= $_POST['privilegio'];
		$Email = $_POST['Email'];		
		$Usuario = $_POST['Usuario'];
		$Contrasenia = $_POST['Contrasenia'];
		$Confirmar_contrasenia = $_POST['Confirmar_contrasenia'];
		
mysqli_query($Conexion, "INSERT INTO registro(nombres, apellidos,privilegio, email, usuario, contrasenia, confirmar_contrasenia) VALUES ('$Nombres','$Apellidos','$privilegio','$Email','$Usuario','$Contrasenia','$Confirmar_contrasenia')"); 


}

?>
<script type="text/javascript">
	alert("Guardado exitosamente");window.location="htt://www.google.com"
</script>