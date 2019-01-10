<?php

include "Conexion/Conexion.php";

$user_id=null;
$sql1= "select * from aviones where Id_avion like '%$_GET[s]%' or Fabricante like '%$_GET[s]%' or Pasajeros like '%$_GET[s]%' or Modelo like '%$_GET[s]%'";
$query = $Conexion->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Id_avion</th>
	<th>Fabricante</th>
	<th>Pasajeros</th>
	<th>Modelo</th>
	
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["Id_avion"]; ?></td>
	<td><?php echo $r["Fabricante"]; ?></td>
	<td><?php echo $r["Pasajeros"]; ?></td>
	<td><?php echo $r["Modelo"]; ?></td>
	
	<td style="width:150px;">
		
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>


