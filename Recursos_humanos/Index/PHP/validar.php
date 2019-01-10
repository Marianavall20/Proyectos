<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
		//Validar usuario
			include("../Conexion/Conexion.php");
            $usuario=$_POST['usuario'];
            $clave=$_POST['contrasenia']; 
			$log=$Conexion->query("SELECT * FROM empleados WHERE usuario='$usuario' and contrasenia='$clave' and privilegio='usuario' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='../../usuario/PHP/inicio/index.php';</script>";
			}
		?>
		<?php
		//Validar usuario
			include("../Conexion/Conexion.php");
            $usuario=$_POST['usuario'];
            $clave=$_POST['contrasenia']; 
			$log=$Conexion->query("SELECT * FROM administradores WHERE usuario='$usuario' and contrasenia='$clave' and privilegio='empleado' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='../../usuario/PHP/Inicio.php';</script>";
			}
		?>
		<?php

		//Validar administrador
			include("../Conexion/Conexion.php");
            $usuario=$_POST['usuario'];
            $clave=$_POST['contrasenia']; 
			$log=$Conexion->query("SELECT * FROM administradores WHERE usuario='$usuario' and contrasenia='$clave' and privilegio='Administrador' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='administrador/PHP/inicio/index.php';</script>";
			}
		?>

				<?php
		//Validar administrador
			include("../Conexion/Conexion.php");
            $usuario=$_POST['usuario'];
            $clave=$_POST['contrasenia']; 
			$log=$Conexion->query("SELECT * FROM administradores WHERE usuario='$usuario' and contrasenia='$clave' and privilegio='Super_administrador' and estado='activo'");
			if ($log->num_rows>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row['usuario'];
			  	print "<script>window.location='../../Super_administrador/PHP/inicio/index.php';</script>";
			}
		?>

		<?php 
		//Validar si no es ni usuario ni administrador
			include("../Conexion/Conexion.php");
			if (isset($_SESSION['user_id'])) {
				$records= $Conexion->prepare('SELECT id, usuario, correo, contrasena, privilegio, estado FROM registro_usuario WHERE id= :id');
				$records->bindparam(':id', $_SESSION['user_id']);
				$records->execute();
				$results= $records->fetch(PDO::FETCH_ASSOC);
				$user=null;
				if (count($results) > 0) {
					$user=$results;
				}
			}
 ?>
<script type="text/javascript">
	alert("usuario no activo u erroneo");window.location="../../index.php"
</script>




</body>
</html>

<script type="text/javascript">
	alert("usuario no activo u erroneo");window.location="../../index.php"
</script>