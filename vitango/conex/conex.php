<?php 
	$conex = mysqli_connect("localhost", "root", "", "vitango");

	if (!$conex) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos Vitango es genial." . PHP_EOL;
	//echo "Información del host: " . mysqli_get_host_info($conex) . PHP_EOL;

	//Depurar el Error en el mysqli_query
	//echo mysqli_error($conex);