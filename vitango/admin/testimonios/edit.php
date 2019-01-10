<?php require('../../conex/conex.php');
	require('../header.php');  
	if(!isset($_GET['id'])){
		$_SESSION['mensaje'] = '<script>alert("No puede ingresar a esta parte")</script>';
		$url = explode('/', $_SERVER['REQUEST_URI']);
		$url2 = $_SERVER['HTTP_HOST'];
		for($i=1;$i<count($url);$i++){
			if($i != 4){
				$url2 = $url2.'/'.$url[$i];
			}else{
				break;
			}
		}
		$urlrequest = 'http://'.$url2.'.php'; ?>
		<script> location.href = '<?php echo $urlrequest; ?>' </script>
<?php }else{ 
		$query = mysqli_query($conex, 'SELECT * FROM testimonios WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Editar Testimonio</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_testimonio" value="edit_testimonio">
				<input type="hidden" name="id_testimonio" value="<?php echo $reg[0]; ?>">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_testimonio">Nombre: </label>
						<input type="text" id="nombre_testimonio" name="nombre_testimonio" class="form-control" value="<?php echo $reg[1] ?>" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="descripcion">Relato: </label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" required="required"><?php echo $reg[2]; ?></textarea>
					</div>
					<div class="col-md-4 form-group">
						<div class="col-md-4 form-group">
							<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
						</div>
					</div>
				</div>				
			</form>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>