<!DOCTYPE html>
<html>
<head>
	<title>Modificar Imagen</title>
</head>
<body>

   <?php
    include("conexion.php");


    $id= $_REQUEST['id'];

    $query = "SELECT * FROM usuarios  WHERE id = '$id'";
    $resultado = $conexion->query($query);
    $row = $resultado->fetch_assoc();
    ?>

      <form action="Actualizar.php?id= <?php echo $row['id'];?> " method="POST" enctype="multipart/form-data">

   	 	<input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>"/><br/><br/>
      <input type="password" name="Clave" value="<?php echo $row['Clave'];?>"/><br/><br/>
      <input type="text" name="Email" value="<?php echo $row['Email'];?>"/><br/><br/>
      <input type="text" name="Sexo" value="<?php echo $row['Sexo'];?>"/><br/><br/>
      <input type="text" name="Fecha_nacimiento" value="<?php echo $row['Fecha_nacimiento'];?>"/><br/><br/>
      <input type="text" name="Ciudad" value="<?php echo $row['Ciudad'];?>"/><br/><br/>
      <input type="text" name="Pais" value="<?php echo $row['Pais'];?>"/><br/><br/>
      <input type="file" name="Foto"><br/><br/>
      <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']);?>"/>
      
   	 	
   	 	<input type="submit" name="enviar">
   	 </form>
</body>
</html>