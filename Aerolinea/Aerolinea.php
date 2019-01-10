<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<link rel="stylesheet" type="text/css" href="Css/Estilo.css">
<body>
<div id="header">


<?php 
include("Conexion/Conexion.php");
$Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
mysql_select_db($basededatos, $Conexion)or die("):( ");
$avion="SELECT * from aviones";
$rematricula=mysql_query($avion);
?>


<div >

<form method="POST" action="Vuelo.php">

<table class="vuelo">
<caption><h3>Vuelo</h3></caption>
<tr>
	<td>Fecha</td>
	<td><label for="textfield"></label>
	<input type="date" name="Fecha"></td>
</tr>
<p></p>
<tr>
	<td>Aeropuerto</td>
	<td><label for="textfield"></label>
	<input type="text" name="Aeropuerto"></td>
</tr>
<p></p>

<tr>
	<td>Destino</td>
	<td><label for="textfield"></label>
	<input type="text" name="Destino"></td>
</tr>
<p></p>
<tr>
	<td>Horario</td>
	<td><label for="textfield"></label>
	<input type="time" name="Horario"></td>
</tr>

<p></p>
<tr>
	<td>Numero de Pasajeros</td>
	<td><label for="textfield"></label>
	<input type="text" name="Pasajeros"></td>
</tr>

<p></p>
<td>Matricula</td>
<td><label for="Matricula"></label>
<select name="Matricula_avion"><br>
<option value="Matricula_avion">Seleccione matricula</option>
<?php 
while ($fila=mysql_fetch_row($rematricula)) {
	echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
}
?>
</td>
</tr>
<p></p>
<tr>
		<td><input type="submit" name="Enviar"></td>
		</tr>

</table>
</form>
</div>

<p></p>

<div class="avion">
<form method="POST" action="Avion.php" >
<table>
<caption><h3>Aviones</h3></caption>
<tr>
	<td>Matricula Avion</td>
	<td><label for="textfield"></label>
	<input type="text" name="Id_avion"></td>
<p></p>
<tr>
	<td>Fabricante</td>
	<td><label for="textfield"></label>
	<input type="text" name="Fabricante"></td>
</tr>
<tr>
	<td>Capacidad</td>
	<td><label for="textfield"></label>
	<input type="text" name="Pasajeros"></td>
</tr>
<p></p>
<tr>
	<td>Modelo</td>
	<td><label for="textfield"></label>
	<input type="text" name="Modelo"></td>
</tr>
<p></p>

<tr>
		<td><input type="submit" name="Enviar" class="enviar"></td>
		</tr>

</form>
</table>
</div>

<p></p>
<div class="pasajeros">

<form method="POST" action="Pasajeros.php">
<table >
<caption><h3>Pasajeros</h3></caption>
<tr>
	<td>Id pasajeros</td>
	<td><label for="textfield"></label>
	<input type="text" name="Id_pasajeros"></td>
</tr>
<p></p>
<tr>
	<td>Nombre</td>
	<td><label for="textfield"></label>
	<input type="text" name="Nombre"></td>
</tr>
<tr>
		<td><input type="submit" name="Enviar"></td>
		</tr>
<p></p>

</table>
</form>
</table>
</div>
<p></p>

<?php 
include("Conexion/Conexion.php");
$Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
mysql_select_db($basededatos, $Conexion)or die("):( ");
$vuelo="SELECT Id_vuelo from vuelos";
$convuelo=mysql_query($vuelo);
?>
<?php 
include("Conexion/Conexion.php");
$Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
mysql_select_db($basededatos, $Conexion)or die("):( ");
$pasajero="SELECT Id_pasajeros from pasajeros";
$conpasajero=mysql_query($pasajero);
?>

<div class="pasajes"> 
<form method="POST" action="Pasajes.php">
<table>
<caption><h3>Pasajes</h3></caption>
<p></p>
<tr>
	<td>Asiento</td>
	<td><label for="textfield"></label>
	<input type="text" name="Asiento"></td>
</tr>
<p></p>
<tr>
	<td>Clase</td>
	<td><label for="textfield"></label>
	<input type="text" name="Clase"></td>
</tr>

<p></p>
<td>Vuelo</td>
<td><label for="Vuelo"></label>
<select name="textfield2"><br>
<option value="textfield2">Seleccione vuelo</option>
<?php 
while ($fila=mysql_fetch_row($convuelo)) {
	echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
}
?>
</td>
</tr>
<p></p>
<td>Pasajeros</td>
<td><label for="Pasajeros"></label>
<select name="Pasajeros"><br>
<option value="Pasajeros">Seleccione pasajero</option>
<?php 
while ($fila=mysql_fetch_row($conpasajero)) {
	echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
}
?>
</td>
</tr>
<tr>
		<td><input type="submit" name="Enviar"></td>
		</tr>

</form>
</table>
</div>

<div class="personal">
	<form method="POST" action="Personal.php">
	<table >
	<caption><h3>Personal</h3></caption>
	<tr>
	<td>Id trabajador</td>
	<td><label for="textfield"></label>
	<input type="text" name="ID"></td>
</tr>
<p></p>
	<tr>
	<td>Nombre</td>
	<td><label for="textfield"></label>
	<input type="text" name="Nombre"></td>
</tr>
	<p></p>
	<tr>
	<td>Categoria</td>
	<td><label for="textfield"></label>
	<input type="text" name="Categoria"></td>
</tr>
	<p></p>
	<tr>
		<td><input type="submit" name="Enviar"></td>
		</tr>

	
	</form>
</table>


</div>
<?php 
include("Conexion/Conexion.php");
$Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
mysql_select_db($basededatos, $Conexion)or die("):( ");
$personal="SELECT Id_trabajador from personal";
$conpersonal=mysql_query($personal);
?>
<?php 
include("Conexion/Conexion.php");
$Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
mysql_select_db($basededatos, $Conexion)or die("):( ");
$vuelo="SELECT Id_vuelo from vuelos";
$convuelo=mysql_query($vuelo);
?>



<div class="tripulacion">

	<form method="POST" action="Tripulacion.php">
	<table >
	<caption><h3>Tripulacion</h3></caption>
	<tr>
<td> Personal </td>
<td><label for="Personal"></label>
<select name="Personal" id="textfield2"><br>
<option value="Personal">Seleccione personal</option>
<?php 
while ($fila=mysql_fetch_row($conpersonal)) {
	echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
}
?>
</td>
</tr>
<p></p>
<tr>
<td> Vuelo </td>
<td><label for="Vuelo"></label>
<select name="Vuelo" ><br>
<option value="Vuelo">Seleccione vuelo</option>
<?php 
while ($fila=mysql_fetch_row($convuelo)) {
	echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
}
?>
</td>
</tr>
<p></p>
<tr>
	<td>Puesto</td>
	<td><label for="Puesto"></label>
	<input type="text" name="Puesto"></td>
</tr>
<tr>
		<td><input type="submit" name="Enviar"> </td>
		</tr>


</table>
</form>

</div>
</body>
</html>