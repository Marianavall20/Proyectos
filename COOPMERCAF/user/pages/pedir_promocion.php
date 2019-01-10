<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106974140-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-106974140-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COOPMERCAF</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="shortcut icon" href="../img/favicon.png">
</head>

<body>

<?php 

include("abrir_conexion.php");

$consulta = mysqli_query($conexion,"SELECT id,departamento FROM $tabla_db4 ORDER BY departamento asc");
            ?>
    <?php
        session_start();
        ob_start();
        if ($_SESSION['sesion_exito']<>1) {
            header('location:../../index.php');
        }
     ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">COOPMERCAF</a>
                <ul class="nav navbar-nav">
                        <li><a href="mi_pedido.php">Mis pedidos</a></li>
                    </ul>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../../index.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sección</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="consultar_productos.php"><i class="fa fa-th-list "></i> Productos</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#pedidos" data-toggle="modal"><i class="fa fa-bar-chart"></i>Hacer pedido</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="promociones.php"><i class="fa fa-calculator"></i> Promociones</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        
        <div id="page-wrapper">
            <div class="row col-md-offset-1">
                <div class="col-lg-10 text-center">
                    <h1 class="page-header">Pedir promoción</h1>
                </div>
                <div class="row">
                    <div class="col-md-10">
                    <?php
            include("abrir_conexion.php");


            $id= $_REQUEST['id'];

            $query = "SELECT * FROM $tabla_db9  WHERE id = '$id'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
        ?>

                        <form action="pedir_promocion.php?id=<?php echo $row['id']?>" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
                                <label for="titulo">TITULO</label>
                                    <input id="titulo" class="form-control" placeholder="Titulo" name="titulo" type="text" value="<?php echo $row['titulo']; ?>" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <label for="precio">PRECIO</label>
                                    <input id="precio" class="form-control" placeholder="Precio" name="precio" type="text" value="<?php echo $row['precio']; ?>" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <label for="inicio">FECHA DE INICIO</label>
                                    <input id="inicio" class="form-control" placeholder="fecha De inicio" name="fecha_inicio" type="date" value="<?php echo $row['fecha_inicio']; ?>" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <label for="finalizacion">FECHA DE FINALIZACION</label>
                                    <input id="finalizacion" class="form-control" placeholder="fecha De Finalizacion" name="fecha_finalizacion" type="date" value="<?php echo $row['fecha_finalizacion']; ?>" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <label for="usuario">NOMBRE COMPLETO</label>
                                    <input id="usuario" class="form-control" placeholder="Nombre" name="nombre" type="text" autofocus required="required">
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Enviar Peticion" name="enviar">
                                <br/>
                            
                        </form>
                        <?php
                        if (isset($_POST['enviar'])) {

                            include ("abrir_conexion.php");
                            $titulo=$_POST['titulo'];
                            $precio=$_POST['precio'];
                            $fecha = date('Y-m-d');
                            $inicio=$_POST['fecha_inicio'];
                            $finalizacion=$_POST['fecha_finalizacion'];
                            $nombre=$_POST['nombre'];
                            $query = "INSERT INTO $tabla_db13(titulo,precio,fecha_pedido,fecha_inicio,fecha_finalizacion,estado,usuario) values ('$titulo','$precio','$fecha','$inicio','$finalizacion','PEDIDO','$nombre')";
                            $resultado = $conexion->query($query);

                            if ($resultado)
                             {
                                     
                                 echo "

                                 <script>alert(\"Pedido realizado exitosamente.\");window.location='promociones.php';</script>

                                 ";
                             }
                              else
                              {
                                 echo "no se Inserto";
                              }
                        }
                         ?>
                    </div>
                </div>
            </div>
        </div>
            
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" language="javascript" src="../js/ajax.js"></script>

</body>

</html>