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
		$query = mysqli_query($conex, 'SELECT usuarios.id, usuarios.nombre, usuarios.apellidos, user_video.id, user_video.nombre, user_video.observaciones, user_video.link_video FROM user_video INNER JOIN usuarios ON(user_video.id_usuario = usuarios.id) WHERE user_video.id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Editar Video</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_video" value="edit_video">
				<input type="hidden" name="id_video" value="<?php echo $reg[3]; ?>">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_video">Nombre: </label>
						<input type="text" id="nombre_video" name="nombre_video" class="form-control" value="<?php echo $reg[4]; ?>" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="link_video">Link de YouTube: </label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-youtube-play"></i></div>
							<input type="text" id="link_video" name="link_video" class="form-control" value="<?php echo 'https://www.youtube.com/watch?v='.$reg[6]; ?>" required="required">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<label for="usuario">Usuario que publico el video: </label>
						<input type="text" id="usuario" name="usuario" value="<?php echo ucwords($_SESSION['usuario'][0]['nombre']); ?>" class="form-control" readonly="readonly">
						<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION['usuario'][0]['id']; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="observaciones">Observaciones: </label>
						<textarea name="observaciones" id="observaciones" cols="30" rows="5" class="form-control"><?php echo $reg[5]; ?></textarea>
					</div>
					<div class="col-md-4 form-group">
						<div class="col-md-4 form-group">
							<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
						</div>
					</div>
				</div>			
			</form>
			<div class="row">
				<div class="col-md-6">
					<h4><strong>Video que se tiene en este momento</strong></h4>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $reg[6]; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>