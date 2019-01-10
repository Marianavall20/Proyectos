<?php
	include("../Conexion/conexion.php");//Me conecto a la base de datos

	$amount=floatval($_POST['amount']);
	$date=$_POST['sales_date'];
	$type=intval($_POST['type']);
	if ($type==1){
		$sql="insert into sales (amount, sales_date) values ('$amount', '$date')";
	} else if ($type==2){
		$sql="insert into purchases (amount, purchase_date) values ('$amount', '$date')";
	}
	$conexion->query($sql);
	

	header('location:Grafica.php');
?>
<script type="text/javascript">
	alert("Guardado exitosamente");window.location="Grafica.php"
</script>