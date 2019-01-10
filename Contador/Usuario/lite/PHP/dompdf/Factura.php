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
	height: 12%;
	border: 1px solid black;
	background-color: #F8F7F7;
}

#titulo {
	font-family: Arial;
	text-align: center;
	padding: 10px;
	font-size: 18px;
}

.costado_izquierdo{
	background-color: #E9E9E9;
	width: 458px;
	margin-bottom:  350px;
	margin-left: 12px;
	border: 1px solid #4F4F4;
	padding: 10px;
	color: #323232;
}


.costado_izquierdo b {
	background-color: ;
	padding-top: -10px;
	margin-left: 10px;
	margin-right: 10px;
	display: inline;
	height: 30px;
}

.costado_izquierdo p{
	display: inline;
}

.costado_derecho {
	width: 458px;
	margin-left: 12px;
	border: 1px solid #4F4F4;
	padding: 10px;
	color: #323232;
	height: 105px;
	margin-bottom: 15px;
	background-color: #E9E9E9;
}

.costado_derecho b {
	background-color:;
	padding-top: -10px;
	margin-left: 20px;
	margin-right: 10px;
	height: 30px;
}

.costado_derecho p {
	display: inline;
}

.arriba {
	text-align: center;
	font-size: 10px;
	margin-bottom: 25px;

}

.an {
	float: right;
	margin-left: 150px;
	display: inline-block;
	width: 100px;
	background-color: ;
}

.en {
	float: right;
	margin-left: 88px;
	display: inline-block;
	width: 180px;
	background-color: ;
}

.in {
	float: right;
	margin-left: 36px;
	display: inline-block;
	width: 180px;
	background-color: ;
}

.on {
	float: right;
	margin-left: 45px;
	display: inline-block;
	width: 180px;
	background-color: ;
}

.un {
	float: right;
	margin-left: 45px;
	display: inline-block;
	width: 180px;
	background-color: ;
}

</style>
</head>
<body>

<div id="titulo">SERVICIO PÚBLICO DOMICILIARIO DE AGUA</div>
<br>

<?php
foreach ($result as $fila){?>

<div class="encabezado">
<div class="arriba">
<br> EMPRESAS PÚBLICAS DE ABEJORRAL E.P.A E.S.P </br>
<br>NIT: 800123369-2</br>
<br>CLL 50 N° 52-26</br>
<br>Tel: 8647272 Fax: 8647272</br>
<br>E-mail: administrativaepaesp@edatel.net.co</br>
</div>

	<div class="costado_derecho">
		<p><b>Ruta:</b></p> <?php echo $fila['ruta'] ?> 
		<div class="an"><p><b> Código:</b></p><?php echo $fila['codigo'] ?></div>
		<br>
		<p><b>Dirección:</b></p><?php echo $fila['direccion'] ?>
		<div class="en"><p><b>Código Postal:</b</p><?php echo $fila['codigo_postal'] ?> </div>
		<br>
		<p><b>Suscriptor:</b></p><?php echo $fila['suscriptor'] ?>
		<div class="in"><p><b>Estrato:</b></p><?php echo $fila['estrato'] ?> </div>
	</div>
	<div class="costado_izquierdo">
		<p><b>Fecha límite sin recargo:</b></p><?php echo $fila['sin_recargo'] ?>
		<div class="on"><p><b>Período facturado:</b></p><?php echo $fila['periodo_facturado'] ?></div>
		<br>
		<p><b>Fecha límite con recargo:</b></p><?php echo $fila['con_recargo'] ?>
		<div class="un"><p><b># de cuentas vencidas:</b></p><?php echo $fila['cuentas_vencidas'] ?></div>
	</div>
</div>


<!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
              
       <!-- Gráfica de estrato-->       
<script src="../code/highcharts.js"></script>
<script src="../code/modules/exporting.js"></script>
<script src="../code/modules/export-data.js"></script>

<div id="container" style="min-width: 280px; height: 370px; max-width: 520px; margin-left:100px"></div>

<!--Llama conexión a la base de datos-->
<?php
include("Conexion.php");

//Consultas para la información de la base de datos//
$resulttotal=$cone->query("SELECT * FROM consumo");
$reg=$resulttotal->num_rows;


$resultn1=$cone->query("SELECT * FROM consumo where mes=' '");
$regn1=$resultn1->num_rows;
$prcn1=$regn1*100/$reg;

$resultn2=$cone->query("SELECT * FROM estratos where consumo=' '");
$regn2=$resultn2->num_rows;
$prcn2=$regn2*100/$reg;

while($filan1=$resultn1->fetch_array(MYSQLI_BOTH))
{
  $n1= "{ name:'".$filan1['mes']."', y:".$prcn1."},";
}

while($filan2=$resultn2->fetch_array(MYSQLI_BOTH))
{
  $n2= "{ name:'".$filan2['consumo']."', y:".$prcn2."},";
}
?>

    <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Consumo del Usuario|'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Consumo',
         
        data: [

        <?php
           echo $n1;
           echo $n2;
       ?>
             ]          
        }]
    });

    </script>


</body>
</html>


<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'Contrato.pfd';
$dompdf->stream($filename, array("Attachment" => 0));
?>