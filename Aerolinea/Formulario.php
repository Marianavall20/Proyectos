<?php
include "Conexion/Conexion.php";

$user_id=null;
$sql1= "SELECT * FROM aviones WHERE Id_avion = ".$_GET["Id_avion"];
$query = $Conexion->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
$person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="POST" action="Actualizar.php">
  <div class="form-group">
    <label for="Id_avion">Id_avion</label>
    <input type="text" class="form-control" value="<?php echo $person->Id_avion; ?>" name="Id_avion" required>
  </div>
  <p></p>
  <div class="form-group">
    <label for="Fabricante">Fabricante</label>
    <input type="text" class="form-control" value="<?php echo $person->Fabricante; ?>" name="Fabricante" required>
  </div>
  <p></p>
  <div class="form-group">
    <label for="Pasajeros">Capacidad</label>
    <input type="text" class="form-control" value="<?php echo $person->Pasajeros; ?>" name="Pasajeros" required>
  </div>
  <p></p>
  <div class="form-group">
    <label for="Modelo">Modelo</label>
    <input type="text" class="form-control" value="<?php echo $person->Modelo; ?>" name="Modelo" >
  </div>
  <p></p>
  
<input type="hidden" name="Id_avion" value="<?php echo $person-> Id_avion; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>