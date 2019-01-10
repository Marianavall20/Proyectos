<?php

$conexao=mysqli_connect("mysql.gestionrecursoshumanos.org", "user_contadorepa", "Contador2018", "contadorepa");



$username = $_POST['username'];
$useremail = $_POST['useremail'];
$usermobile = $_POST['usermobile'];
$useradress = $_POST['useradress'];

$smtp = $conexao->conn->prepare('INSERT INTO data(username, useremail, usermobile, useradress) VALUES (:username, :useremail, :usermobile, :useradress)');
$smtp = $smtp->execute(array(
	'username'=> $username,
	'useremail'=> $useremail,
	'usermobile'=> $usermobile,
	'useradress'=> $useradress,
	));

if ($smtp) {
	echo "Inserción satisfactoria";
}else{
	echo "Error";
}

?>