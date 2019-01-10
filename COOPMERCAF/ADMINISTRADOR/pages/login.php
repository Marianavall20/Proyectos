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

    <title>INGRESE</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
    <div class="container" style="height:597px;">
    <br/>
    <div class="row">
            <div class="text-center">
                <img src="../img/LOGOTIPO.png" style="width:400px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">INICIO DE SESIÓN</h3>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" method="POST" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario:" name="usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="contrasena" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="recuerdame" type="checkbox" value="Recuérdame">Recuerdame.
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar sesión" name="inicio">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    <?php 
                    session_start();
                    ob_start();
                        $_SESSION["sesion_exito"];
                        $_SESSION["sesion_exito"]==0;

                        if ($_SESSION["sesion_exito"]==0) {
                            echo "<div class='row text-center'>
        <div class='col-md-6 col-md-offset-3'>
            <p class='bg-danger alert' style='font-size:25px;' align='center'>
                <b>
                    INICIE SESION, POR FAVOR
                </b>
            </p>
        </div>
        </div>";
                        }elseif ($_SESSION['sesion_exito']==2) {
                            echo "<div class='row text-center'>
        <div class='col-md-6 col-md-offset-3'>
            <p class='bg-danger alert' style='font-size:25px;' align='center'>
                <b>
                    LOS DATOS SON OBLIGATORIOS
                </b>
            </p>
        </div>
        </div>";
                        }elseif ($_SESSION['sesion_exito']==3) {
                            echo "<div class='row text-center'>
        <div class='col-md-6 col-md-offset-3'>
            <p class='bg-danger alert' style='font-size:25px;' align='center'>
                <b>
                    DATOS INCORRECTOS
                </b>
            </p>
        </div>
        </div>";
                        }elseif ($_SESSION['sesion_exito']==4) {
                            echo "<div class='row text-center'>
        <div class='col-md-6 col-md-offset-3'>
            <p class='bg-danger alert' style='font-size:25px;' align='center'>
                <b>
                    NO ERES ADMINISTRADOR
                </b>
            </p>
        </div>
        </div>";}
                     ?>
    </div>

    <footer class="text-center" id="footer" style="background:#f2f2f2; padding: 10px 0px;">
       2017 Aprendices SENA - Fundación Celia Duque de Duque &copy Todos los derechos reservados.
    </footer>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
