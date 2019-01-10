<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$contrasenia = $_POST['contrasenia'];
	$contrasenia = hash('sha512', $contrasenia);


	try {
		$conexion = new PDO('mysql:host=localhost;dbname=recursos_humanos', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT nombres FROM empleados WHERE usuario = :usuario AND  contrasenia = :contrasenia'
	);
	$statement->execute(array(
		':usuario' => $usuario, 
		':contrasenia' => $contrasenia
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}


require 'views/login.view.php';

?>