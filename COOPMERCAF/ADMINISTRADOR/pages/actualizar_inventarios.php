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

    <title>COOPMERCAF ADMINISTRADOR</title>

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
include("cerrar_conexion.php")
            ?>
    <?php
    session_start();
    ob_start();
        if ($_SESSION['sesion_exito']<>1) {
            header('location:login.php');
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
                        <li><a href="inventarios.php">Inventarios</a></li>
                        <li><a href="pedidos.php">Pedidos</a></li>
                        <li><a href="promociones.php">Promociones</a></li>
                        <li><a href="especiales.php">Pedidos especiales</a></li>
                    </ul>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Pedro Perez</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Alexander Quintero</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Juan M.</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Leer Todos Los Mensajes.</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Nuevo Comentario
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 nuevos usuarios
                                    <span class="pull-right text-muted small">Hace 12 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Nuevo Producto
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Nueva petición
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sección</a>
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insertar_clientes.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="consultar_clientes.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Proveedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insertar_proveedores.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="consultar_proveedores.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar"></i> Categorías<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insertar_categorias.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="consultar_categorias.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-list "></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insertar_productos.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="consultar_productos.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="insertar_usuarios.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="consultar_usuarios.php">Consultar</a>
                                </li>
                            </ul>
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
                    <h1 class="page-header">Actualizar inventarios</h1>
                </div>
                <div class="row">
                    <div class="col-md-10">
                    <?php
            include("abrir_conexion.php");


            $id= $_REQUEST['id'];

            $query = "SELECT * FROM $tabla_db5  WHERE id = '$id'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
        ?>

                        <form action="actualizar_inventarios.php?id=<?php echo $row['id']?>" method="POST" role="form" name="form1">
                            <?php   
                include('abrir_conexion.php');
                            $usuarios = mysqli_query($conexion, "SELECT * FROM $tabla_db11");
                            $proveedor = mysqli_query($conexion, "SELECT * FROM $tabla_db10");
                            $categoria = mysqli_query($conexion, "SELECT * FROM $tabla_db2");
                            $unidad = mysqli_query($conexion, "SELECT * FROM $tabla_db12");
                include('cerrar_conexion.php');
                             ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $row['id']; ?>" disabled placeholder="Id" name="id" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $row['fecha_registro']; ?>" placeholder="Fecha de Regitro" name="fecha-registro" type="date" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $row['cantidad']; ?>" placeholder="Cantidad" name="cantidad" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <select class="form-control" id=""  name="unidad" required="required">
                                    <option value="">Seleccione Unidad de medida...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($unidad))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['1']. " " .$fila['2']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $row['precio']; ?>" placeholder="Precio" name="precio" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <select class="form-control" id=""  name="usuario" required="required">
                                    <option value="">Seleccione Usuario...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($usuarios))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['1']. " " .$fila['2']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <select class="form-control" id=""  name="proveedor" required="required">
                                    <option value="">Seleccione Proveedor...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($proveedor))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['1']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <select class="form-control" id=""  name="categoria" onchange="from(document.form1.categoria.value,'midiv','producto.php')" required="required">
                                    <option value="">Seleccione Categoria del producto...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($categoria))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['1']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>
                                <div id="midiv">
                                    
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" style="max-width:100%; min-width:100%; min-height:125px; max-height:175px;" placeholder="Ingresa una descripción" name="descripcion"><?php echo $row['descripcion']; ?></textarea>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Insertar" name="enviar" >
                                <br/>
                            </fieldset>
                            <?php 

                            if (isset($_POST['enviar'])) {
                            
                            include('abrir_conexion.php');

                                $fecha = $_POST['fecha-registro'];
                                $precio = $_POST['precio'];
                                $cantidad = $_POST['cantidad'];
                                $unidad = $_POST['unidad'];
                                $usuario = $_POST['usuario'];
                                $proveedor = $_POST['proveedor'];
                                $categoria = $_POST['categoria'];
                                $producto = $_POST['productos'];
                                $descripcion = $_POST['descripcion'];
                            mysqli_query($conexion, "UPDATE $tabla_db5 SET fecha_registro='$fecha', cantidad='$cantidad', unidades_medida='$unidad', precio='$precio',descripcion='$descripcion',usuarios_id='$usuario',proveedores_id='$proveedor',categorias_productos_id='$categoria',productos_id='$producto' WHERE id='$id'");

                            include('cerrar_conexion.php');

                             echo "

                           <script>
                                alert('Datos Insertados con Exito');
                           </script>

                           ";
                           }
                             ?>
                        </form>
                        <?php
                        if (isset($_POST['enviar'])) {

                            include ("abrir_conexion.php");
                            $categoria=$_POST['cat'];
                            $query = "UPDATE $tabla_db2 SET categoria='$categoria' WHERE id='$id'";
                            $resultado = $conexion->query($query);

                            if ($resultado)
                             {
                                     
                                 header("location:inventarios.php");
                             }
                              else
                              {
                                 echo "no se modifico";
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