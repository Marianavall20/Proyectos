
<?php

if(!empty($_GET)){
			include "../Conexion/conexion.php";
			
			$sql = "DELETE FROM contratos WHERE id=".$_GET["id"];
			$query = $conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='Contra.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='Contra.php';</script>";

			}
}

?>