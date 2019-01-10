
<?php 
$host = "localhost";
$usuariodb = "root";
$clavedb = "";
$basededatos = "contador";
$conexion = mysql_connect($host, $usuariodb, $clavedb);
mysql_select_db($basededatos, $conexion);
$mes = array();
$consumo = array();

$i = 0;
$sql ="select * from consumo";
$resultado = mysql_query($sql);
while ($row = mysql_fetch_object($resultado)){
 $mes[$i] = $row->mes;
 $consumo[$i]=$row ->consumo;
 $i = $i + 1;

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!--Menú horizontal-->
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>

          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Buscar-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!--Cerrar cuenta-->
                <li class="nav-item"><a href="php/cerrar.php" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!--Menú vertical-->
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center" >
            <!--Imagen administrador-->
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nombre del Administrador</h1>
              <p>Administrador</p>
            </div>
          </div>
          
          <!--Item menú-->
          <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Inicio </a></li>
                    <li><a href="php/formulario.php"> <i class="icon-padnote"></i>Formulario Trabajador </a></li>
                    <li><a href="php/registro.php"> <i class="icon-grid"></i>Registro Trabajador </a></li>
                    <li><a href="php/factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="php/registro_factura.php"> <i class="fa fa-bar-chart"></i>Formulario factura</a></li>
                    <li><a href="php/ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Normas ambientales</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="php/decreto.php">Decretos</a></li>
                        <li><a href="php/ley.php">Leyes</a></li>
                        <li><a href="php/resolucion.php">Resoluciones</a></li>
                      </ul>
                    </li>
                     <li><a href="php/curiosidades.php"> <i class="icon-paper-airplane"></i>Datos curiosos </a></li>
                    

        </nav>
        <!--Cierre menú-->




        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Gráficas</h2>
            </div>
          </header>
          
          <div class="breadcrumb-holder container-fluid" >
            <ul class="breadcrumb" >
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Gráficas</li>
            </ul>
          </div>

          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
              
       <!-- Gráfica de estrato-->       
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container" style="min-width: 280px; height: 370px; max-width: 520px; margin-left:100px"></div>

<!--Llama conexión a la base de datos-->
<?php
include("conexion/conexion.php");

//Consultas para la información de la base de datos//
$resulttotal=$cone->query("SELECT * FROM estratos");
$reg=$resulttotal->num_rows;


$resultn1=$cone->query("SELECT * FROM estratos where nivel='1'");
$regn1=$resultn1->num_rows;
$prcn1=$regn1*100/$reg;

$resultn2=$cone->query("SELECT * FROM estratos where nivel='2'");
$regn2=$resultn2->num_rows;
$prcn2=$regn2*100/$reg;

$resultn3=$cone->query("SELECT * FROM estratos where nivel='3'");
$regn3=$resultn3->num_rows;
$prcn3=$regn3*100/$reg;


while($filan1=$resultn1->fetch_array(MYSQLI_BOTH))
{
  $n1= "{ name:'".$filan1['nivel']."', y:".$prcn1."},";
}

while($filan2=$resultn2->fetch_array(MYSQLI_BOTH))
{
  $n2= "{ name:'".$filan2['nivel']."', y:".$prcn2."},";
}

while($filan3=$resultn3->fetch_array(MYSQLI_BOTH))
{
  $n3= "{ name:'".$filan3['nivel']."', y:".$prcn3."},";
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
        text: 'Promedio de consumo por estratos|'
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
        name: 'Estrato',
         
        data: [

        <?php
           echo $n1;
           echo $n2;
           echo $n3;
        ?>

             ]          
        }]
    });

    </script>



   
    

    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>





























    <!-- Page wrapper  -->
    
        <div class="page-wrapper">
        
            <!-- Container fluid  -->
          
            <div class="container-fluid">
              
                <!-- Bread crumb and right sidebar toggle -->
              
                
                
                <!-- End Bread crumb and right sidebar toggle -->
          
                <!-- Start Page Content -->
            
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                </div>
                                         
                                      </div>
  <div class="x_content2">
  <div id="graph_line" style="width:150%; height:360px;">
  <div id="chart_div">
  <script type="text/javascript">
  google.load('visualization', '1', {'packages':['corechart']});
  google.setOnLoadCallback(desenhaGrafico);

  function desenhaGrafico(){

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Mes');
    data.addColumn('number', 'Consumo');

    data.addRows(<?php echo $i ?>);

    <?php 
    $k = $i;
    for ($i = 0; $i < $k; $i++){ 

    ?>
    data.setValue(<?php echo $i ?>, 0, '<?php echo $mes[$i] ?>');
    data.setValue(<?php echo $i ?>, 1, '<?php echo $consumo[$i] ?>');
    <?php
     }
    ?> 
    

    var options = {
      title: 'Consumo mensual',
      width: 620, height: 300,
      colors: ['#335070'],
      legend: { position: 'bottom'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options)

  }

</script>
</div>
</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                           <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                
                </div>
               
                <!-- End PAge Content -->
       
            </div>
     
            <!-- End Container fluid  -->
       
    
    <!-- All Jquery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../js/dashboard1.js"></script>
 
  </body>
</html>