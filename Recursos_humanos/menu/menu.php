<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun=1.0">
	<link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="fonts/style.css">    
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="jquery.js"></script>
    <script src="main.js"></script>

<!-- Estilo de caja de configuración -->
<style>

.dropbtn {
    background-color:#fff;
    color: #000;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin-top: -12px;
}

.dropdown {
    position: relative;
    display: inline-block;
}


.dropdown-content {
    display: none;
    position: relative;
    background-color: #f1f1f1;
    min-width: 260px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px;
    padding: 10px;
    margin-top: 2px;

}

.dropdown-content a {
    color: black;
    padding: 20px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;
color: #36847b;}

.dropdown:hover .dropdown-content {
    display: block;
    font-size: 18px;
    
}

.dropdown:hover .dropbtn {
    background-color: #fff;
    color: #00b19d;
}

.flecha{color: #f1f1f1;

font-size: 25px;
margin-left: 200px;
margin-top: -42px;
display: block;
position: relative;
padding: 10px;
-webkit-transform: rotate(-90deg);
-moz-transform: rotate(-90deg);
-ms-transform: rotate(-90deg);
transform: rotate(-90deg);}

</style>
<!-- Finaliza estilo de caja de configuración -->

</head>

<body>
<!-- Menú horizontal -->
<header>
    <nav>
        <ul>
<li>
<div class="dropdown">
  <button class="dropbtn"><h4>Recursoshumanos@gmail.com</h4></button>
  <div class="dropdown-content"><span class="flecha icon-play3"></span>
    <a href="#">Configuración</a>
    <hr>
    <a href="../perfiles/perfil.php">Mi cuenta</a>
    <hr>
    <a href="#">Salir</a>
   
  </div>
</div>
</li>
<li><a href=""><span class="conos icon-cog "></span></a></li>
<li><a href=""><span class="conos icon-home"></span></a></li>
        </ul>
    </nav>
</header>
<!-- Finaliza menú horizontal -->

<!-- Menú lateral -->
<div class="color">
    <div class="contenedor-menu">

        <ul class="menu">
            <li><img src="../imagenes/otra.png" width="300px" height="150px" id="logo">
            </li>
            <li class="activado"><a href=""><span class="icono izquierda icon-home"></span>Inicio</a>
            </li>
            
            <li><a href=""><span class="icono izquierda icon-profile"></span>Registro de vacantes<span class="icono derecha icon-ctrl"></span></a>
                <ul>
                    <li class="enlace"><a href="../Administrador/PHP/disponibles.php">Disponibles</a></li>
                    <li class="enlace"><a href="../Administrador/PHP/hojasdevida.php">Hojas de vida</a></li>
                </ul>
            </li>

            <li><a href=""><span class="icono izquierda icon-history"></span>Tiempo laboral<span class="icono derecha icon-ctrl"></span></a>
                <ul>
                    <li class="enlace"><a href="../Administrador/PHP/desde.php">Registro de hora de ingreso y salida</a></li>
                    <li class="enlace"> <a href="../Administrador/PHP/permisos.php">Permisos</a></li>
                    <li class="enlace"><a href="../Administrador/PHP/incapacidades.php">Incapacidad</a></li>
                    <li class="enlace"><a href="../Administrador/PHP/incapacidades.php">Vacaciones</a></li>
                </ul>
            </li>

<!--
<li><a href=""><span class="icono izquierda icon-calendar"></span>Calerndario<span class="icono derecha icon-ctrl"></span></a>
<ul>
<li><a href="">Eventos externos</a></li>
<li><a href="">Eventos internos</a></li>
</ul>
</li>
-->
            <li class="activado"><a href=""><span class="icono izquierda icon-cog"></span>Configuracion</a>
            </li>
            
        </ul>
    </div>
</div>

<!-- Finaliza menú horizontal -->

</body>
</html>

