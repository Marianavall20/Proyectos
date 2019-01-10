<?php

if(!empty($_POST)){
	if(isset($_POST["Id_avion"]) && isset($_POST["Fabricante"]) && isset($_POST["Pasajeros"]) &&isset($_POST["Modelo"])){
		if($_POST["Id_avion"]!="" && $_POST["Fabricante"]!="" && $_POST["Pasajeros"]!="" && $_POST["Modelo"]!=""){
			include "Conexion/Conexion.php";
			
$sql = "UPDATE aviones SET Id_avion=\"$_POST[Id_avion]\",Fabricante=\"$_POST[Fabricante]\",Pasajeros=\"$_POST[Pasajeros]\",Modelo=\"$_POST[Modelo]\" WHERE Id_avion=".$_POST["Id_avion"];
            
            $query = $Conexion->query($sql);
			
            if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='Ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='Ver.php';</script>";

			}
		}
	}
}



?>