<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Index/PHP/login/Login_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="Index/PHP/login/Login_v4/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<button type="button1" class="btn btn-default btn-lg" id="myBtn1">Iniciar sesión</button>

 

 <!-- Modal Iniciar sesion -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      
        <div class="modal-body" >
          
           
  

  
  <div class="limiter">
    <div class="container-login100" ">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form class="login100-form validate-form" action="Index/PHP/validar.php" method="post">
          <span class="login100-form-title p-b-49">
            Iniciar sesión
          </span>
<br>
</br>
<br>
<br>
</br>
<br>
  
          <div class="wrap-input100 validate-input m-b-23" data-validate = "Usuario es requerido">
            <span class="label-input100">Usuario</span>
            <input class="input100" type="text" name="usuario" placeholder="Ecriba su usuario" autocomplete="off">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>
<br>
</br>
<br>

     
          <div class="wrap-input100 validate-input" data-validate="Contraseña es requerida">
            <span class="label-input100">Contraseña</span>
            <input class="input100" type="password" name="contrasenia" placeholder="Escriba su contraseña">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>
          
<br></br>
<br>
</br>
<br>
</br>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                INICIAR SESIÓN
              </button>
            </div>
          </div>

          
        </form>
      </div>
    </div>
  </div>

	<div id="dropDownSelect1"></div>
	<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
    });
});
</script> 
</div>
</div>
</div>
</div>  
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="Index/PHP/login/Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="Index/PHP/login/Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Index/PHP/login/Login_v4/js/main.js"></script>

</body>
</html>