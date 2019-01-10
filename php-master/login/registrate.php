<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$contrasenia = $_POST['contrasenia'];
	$confirmar_contrasenia = $_POST['confirmar_contrasenia'];

	$errores = '';

	if (empty($usuario) or empty($contrasenia) or empty($confirmar_contrasenia)) {
		$errores .= '<li>Por favor rellena todos los datos</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=recursos_humanos', 'root', '');
		} catch (PDOExeption $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM empleados WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();




		
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
		//HASS DE LA CONTRASEñA (encriptar)
		$contrasenia = hash('sha512', $contrasenia);
		$confirmar_contrasenia = hash('sha512', $confirmar_contrasenia);

		if ($contrasenia != $confirmar_contrasenia) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO empleados (id, usuario, contrasenia) VALUES (null, :usuario, :contrasenia)');
		$statement->execute(array(':usuario' => $usuario, ':contrasenia' => $contrasenia));

		header('Location: login.php');
	}
}
require 'views/registrate.view.php';
?>