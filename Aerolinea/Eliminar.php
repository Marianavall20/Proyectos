<?php

if(!empty($_GET)){
			include "Conexion/Conexion.php";
			
			$sql = "DELETE FROM aviones WHERE Id_avion=".$_GET["Id_avion"];
			$query = $Conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='Ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='Ver.php';</script>";

			}
}

?>