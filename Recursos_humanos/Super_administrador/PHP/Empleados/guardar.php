<?php

	if(isset($_POST['Enviar'])) 
	{

	include ("conexion.php");
        $nombres=$_POST["nombres"];
		$primer_apellido=$_POST["primer_apellido"];
		$segundo_apellido=$_POST["segundo_apellido"];
		$doc_identidad=$_POST["doc_identidad"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST['direccion'];
		$email=$_POST['email'];
		$usuario = $_POST['usuario'];
		$contrasenia =$_POST['contrasenia'];
		$estado= $_POST['estado'];
		$privilegio= $_POST['privilegio'];

		


		
			
mysqli_query($mysqli, "INSERT INTO administradores (nombres,primer_apellido,segundo_apellido,doc_identidad,telefono,direccion,email,usuario,contrasenia,estado,privilegio) VALUES ('$nombres','$primer_apellido','$segundo_apellido','$doc_identidad', '$telefono', '$direccion', '$email','$usuario','$contrasenia','$estado','$privilegio')");
}

else
{echo "Fallo al insertar";}

	?>
<script type="text/javascript">
	alert("Guardado exitosamente");window.location="index.php"
</script>
