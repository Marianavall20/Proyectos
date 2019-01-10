<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    						// sera el valor de nuestro host
	$basededatos = "coopmercaf";    				// sera el valor de nuestra BD 
	$usuariodb = "root";    						// sera el valor de nuestro usuario
	$clavedb = "";    								// sera el valor de nuestra clave

	//Lista de Tablas
	$tabla_db1 = "afiliados"; 	   			  	  	// tabla de afiliados
	$tabla_db2 = "categorias_productos";	 	   	// tabla de categorias
	$tabla_db3 = "clientes";	   	   			  	// tabla de clientes
	$tabla_db4 = "departamentos"; 	 	   			// tabla de departamentos
	$tabla_db5 = "inventarios";						// tabla de inventarios
	$tabla_db6 = "municipios";						// tabla de municipios
	$tabla_db7 = "pedidos";							// tabla de pedidos
	$tabla_db8 = "productos";						// tabla de productos
	$tabla_db9 = "promociones";						// tabla de promociones
	$tabla_db10 = "proveedores";					// tabla de proveedores
	$tabla_db11 = "usuarios";						// tabla de usuarios
	$tabla_db12 = "unidades_medida";                // tabla de unidades de medida
	$tabla_db13 = "especiales";						// tabla de especiales
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
</body>
</html>