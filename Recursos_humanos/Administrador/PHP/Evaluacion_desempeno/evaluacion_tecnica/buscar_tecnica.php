<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../../CSS/ingresar.php">
</head>
<body>
<?php

include "../../Conexion/conexion.php";

$buscar=$_POST['buscar'];
$sql1= "select * from empleados where identidad='$buscar'";
$query = $conexion->query($sql1);
?>

<?php if($query->num_rows>0):?>

<div class="tabla">
<table class="registro">
 <thead>
  <th>Id</th>
  <th>Empleado</th>
  <th>Administrador que evalúa</th>
  <th>Componente</th>
  <th>Calificacion</th>
  
 </thead>
 <?php
      $mysqli = new mysqli("localhost", "root", "", "recursos_humanos");   
      if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          exit();
      }
      $consulta= "SELECT * FROM evaluacion_tecnica where empleado='$buscar'";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombres='" .$fila[1] ."' data-primer_apellido='" .$fila[2] ."' data-segundo_apellido='" .$fila[3] ."' data-identidad='" .$fila[4] ."'><img src='../../imgadmin/plus.png'></span></a>";  
          echo"<td>";     
          echo "<a href='Eliminar.php?id=" .$fila[0] ."'><img src='../../imgadmin/cancel.png'></a>";

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();    
   
?>  
</table>

<!--Ventana modal para editar trabajador -->

 <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">  

                       <form action="actualizar_tecnica.php" method="POST">                 
                                 
                         <input  id_tecnica="id_tecnica" name="id_tecnica" type="hidden" ></input>
                        <div class="form-group">
                         <label >Empleado:</label>
                         <input class="form-control" id="empleado" name="empleado" type="text" placeholder="" required=""></input>
                        </div>
                        <div class="form-group">
                          <label>Administrador que evalúa:</label>
                          <input class="form-control" id="admin" name="admin" type="text" placeholder="Apellidos" required=""></input>
                        </div>
                        <div class="form-group">
                          <label>Componente:</label>
                          <input class="form-control" id="componente" name="componente" type="text" placeholder="" required=""></input>
                        </div>
                        <div class="form-group">
                          <label >Calificación:</label>
                          <input class="form-control" id="calificacion" name="calificacion" type="text" placeholder="" required=""></input>
                        </div>
                        
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="Enviar">Enviar</button> 
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>        
                  </form>
                </div>
             </div>
          </div> 
</div>

  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script> 
    
  <script>       
      $('#editUsu').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('id_tecnica')
      var recipient1 = button.data('empleado')
      var recipient2 = button.data('admin')
      var recipient2 = button.data('componente')
      var recipient3 = button.data('calificacion')
      
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id_tecnica').val(recipient0)
      modal.find('.modal-body #empleado').val(recipient1)
      modal.find('.modal-body #admin').val(recipient2)
      modal.find('.modal-body #componente').val(recipient3)
      modal.find('.modal-body #calificacion').val(recipient4) 
     
    });   

  </script>

<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

</body>
</html>


