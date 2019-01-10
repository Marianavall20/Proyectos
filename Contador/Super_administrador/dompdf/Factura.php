<?php ob_start();
$mysqli = new mysqli("localhost", "root", "", "contador");

$query = "SELECT * FROM factura";
$result = $mysqli-> query($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">

<style type="text/css">
body{
  margin: 50px;
}

.encabezado{
	margin-top: -250px;
	position: relative;
}

</style>
</head>
<body>

<div class="encabezado"><h2>SERVICIO PUBLICO DOMICILIARIO DE AGUA</h2></div>
<br>

<?php
foreach ($result as $fila){?>
 <?php echo $fila['codigo'] ?>
<?php 
}
?>

</body>
</html>


<?php
require_once("dompdf_config.inc.php");
$dompdf= new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Contrato.pfd';
$dompdf->stream($filename, array("Attachment" => 0));
?>