<?php

include "conect.php";
if (isset($_POST['registar'])) {
	$id="";
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$usermobile = $_POST['usermobile'];
	$useradress = $_POST['useradress'];
}
if ($username !="&& $useremail !="&& $usermobile !="&& $useradress !=") {

	$registro=mysqli_query($conexion, "INSERT INTO data(username, useremail, usermobile, useradress)VALUES('$username', '$useremail', '$usermobile', '$useradress')") or die (mysqli_error());

alert("Registro exitoso");	
}else{
	alert("Hay campos vacíos");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <section class="clean" id="Registro">
  	<h4>Registro de cuenta</h4>
  	<form method="POST">
  		<div class="row">
  		  <input type="text" name="username">
  		</div>
  		<div class="row">
  		  <input type="text" name="useremail">
  		</div>
  		<div class="row">
  		  <input type="text" name="usermobile">
  		</div>
  		<div class="row">
  		  <input type="text" name="useradress">
  		</div>
  		<button type="submit" name="registar">Registrar</button>
  	</form>



  </section>
</body>
</html>