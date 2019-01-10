<?php

	if(isset($_POST['Enviar'])) 
	{

	include ("conexion.php");
        $nombres=$_POST["nombres"];
		$primer_apellido=$_POST["primer_apellido"];
		$segundo_apellido=$_POST["segundo_apellido"];
		$identidad=$_POST["identidad"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST['direccion'];
		$email=$_POST['email'];
		$usuario = $_POST['usuario'];
		$contrasenia =$_POST['contrasenia'];
		$confirmar_contrasenia =$_POST['confirmar_contrasenia'];
		$estado= $_POST['estado'];
		$privilegio= $_POST['privilegio'];

		


		
			
mysqli_query($mysqli, "INSERT INTO empleados(nombres,primer_apellido,segundo_apellido,identidad,telefono,direccion,email,usuario,contrasenia,confirmar_contrasenia,estado,privilegio) VALUES ('$nombres','$primer_apellido','$segundo_apellido','$identidad', '$telefono', '$direccion', '$email','$usuario','$contrasenia','$confirmar_contrasenia','$estado','$privilegio')");
}

else
{echo "Fallo al insertar";}

	?>
<script type="text/javascript">
	window.location="index.php"
</script>
