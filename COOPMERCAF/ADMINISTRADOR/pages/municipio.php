<?php include ("abrir_conexion.php");?>
	<?php 

		$consulta1 = mysqli_query($conexion,"SELECT * FROM $tabla_db6 WHERE $tabla_db6.departamentos_id=" .$_GET['id']);
		// while ($fila=mysql_fetch_array($res)){
		// echo $fila['nombre'];
		// }
?>
								<div class="form-group">
                                <select class="form-control" id="sel1"  name="municipio" required="required">
                                    <option value="">Seleccione Municipio...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($consulta1))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['2']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>