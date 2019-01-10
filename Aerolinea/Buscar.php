
<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="Ver.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<style type="text/css">
#menu{ padding: 10px;
	
	 }
	 #menu li{display: inline;}
	  #menu li a{ text-decoration: none;
	  float: left;
	  padding: 30px; 
	  color: blue;
	  font-size: 20px;
	}
	.navbar input{ border-radius: 8px;
		margin-top: 30px;
		margin-right: 50px;}
		
	.tabla{border-radius: 12px;
		border-color: blue;
		margin-right: 20px;
	}
			th{border-radius: 10px  }
			td{border-radius: 10px;
				text-decoration: none;

	}
	h2{color: blue;}

	</style>
</head>
<body>
<ul id="menu">
<li><a href="Inicio.php">Inicio</a></li>
<li><a href="Ver.php">Ver</a></li>
<li><a href="">Buscar</a></li>
<?php include "Navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
<?php include "Busqueda.php"; ?>

</ul>

		


	</body>
</html>