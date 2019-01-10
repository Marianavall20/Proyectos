<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<li><a href="Aerolinea.php">Inicio</a></li>
<li><a href="Ver.php">Ver</a></li>
<li><a href="">Buscar</a></li>



<?php

include "Conexion/Conexion.php";

$sql1= "select * from aviones";
$query = $Conexion->query($sql1);
?>
<?php include "Navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
</ul>

<hr  style="color: #0056b2;" align="left" noshade="noshade" size="2" width="80%"/>
<?php if($query->num_rows>0):?>
	
	<h2>Aviones</h2>
<table border="2px" class="tabla">
<thead >
	<th>Id_avion</th>
	<th>Fabricante</th>
	<th>Capacidad</th>	
	<th>Modelo</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
	<td><?php echo $r["Id_avion"]; ?></td>
	<td><?php echo $r["Fabricante"]; ?></td>
	<td><?php echo $r["Pasajeros"]; ?></td>	
	<td><?php echo $r["Modelo"]; ?></td>
	<td >
		<a href="Editar.php?Id_avion=<?php echo $r["Id_avion"];?>" >Editar</a>
<td>
		<a href="Eliminar.php? Id_avion=<?php echo $r["Id_avion"];?>">Eliminar</a>
		<script>
		$("Id_avion"+<?php echo $r["Id_avion"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="Eliminar.php?Id_avion="+<?php echo $r["Id_avion"];?>;

			}

		});
		</script>

	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p >No hay resultados</p>
<?php endif;?>


</body>
</html>
