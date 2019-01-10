<!DOCTYPE html>
<html>
<head>
   <title>Mostrar Imagenes</title>
   <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
   <table>
        <thead>
          <th colspan="5"> <a href="Index.html">Nuevo</th>
          <tr>
            <th> Id </th>
            <th> Nombre </th>
            <th> Clave </th>
            <th> Email </th>
            <th> Sexo </th>
            <th> Fecha_nacimiento </th>
            <th> Ciudad </th>
            <th> Pais </th>
            <th> Foto </th>
            
         </tr>
        </thead>

        <tbody>
          <?php

              include("conexion.php");

              $query = "SELECT * FROM usuarios";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc())
      {
          ?>
                <tr>
                   <td> <?php echo $row['id']; ?> </td>
                   <td> <?php echo $row['Nombre']; ?> </td>
                   <td> <?php echo $row['Clave']; ?> </td>
                   <td> <?php echo $row['Email']; ?> </td>
                   <td> <?php echo $row['Sexo']; ?> </td>
                   <td> <?php echo $row['Fecha_nacimiento']; ?> </td>
                   <td> <?php echo $row['Ciudad']; ?> </td>
                   <td> <?php echo $row['Pais']; ?> </td>
                   <td> <img height="100px" src="data:image/jpg;base64,
                   <?php echo base64_encode($row['Foto']); ?>"/></td>
                   
                   <th><a href="Editar.php?id=<?php echo $row['id'];?>">Modificar</th>
                   <th><a href="Eliminar.php?id=<?php echo $row['id'];?>">Eliminar</th>
                   
               </tr>

               <?php 
           }
               ?>
        </tbody>
   </table>
</body>
</html>