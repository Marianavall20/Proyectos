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
			if(isset($_POST['entrar'])){
				include("../conexion/conexion.php");
				$usuario= $_POST['usuario'];
				$contrasena= $_POST['contrasena'];
				$log=$cone->query("SELECT * FROM registro_admi WHERE usuario='$usuario' AND
					contrasena='$contrasena'");
				if ($log->num_rows>0) {
					$row = mysqli_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario'];
				  	print "<script>alert(\"Inicio de sesión exitoso.\");window.location='../index.php';</script>";
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrecta.");</script>';
					echo '<script> window.location="login.php"; </script>';
				}
			}
		?>
</body>
</html>
