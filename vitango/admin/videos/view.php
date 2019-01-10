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
		$query = mysqli_query($conex, 'SELECT usuarios.id, usuarios.nombre, usuarios.apellidos, user_video.id, user_video.nombre, user_video.observaciones, user_video.link_video, usuarios.tipo_usuario FROM user_video INNER JOIN usuarios ON(user_video.id_usuario = usuarios.id) WHERE user_video.id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Video</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<div class="row">
				<div class="col-md-4">
					<blockquote>
						<strong>Nombre: </strong> <?php echo $reg[4]; ?>
					</blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
						<strong>Usuario que publicó el video</strong><br>
						<?php if($_SESSION['usuario'][0]['tipo'] == '2' || $_SESSION['usuario'][0]['tipo']){ 
	                        if($reg[7] == 1){ 
	                        	$nombre = $reg[1].' '.$reg[2]; 
	                        	echo ucwords($nombre) ?>
                      	<?php }else { ?>  
                          		<a href="../profesores/view.php?id=<?php echo $reg[0]; ?>" title="Ver Profesor"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a></td>
                      	<?php } 
                      	}else{ ?>
	                    	<a href="profesores/view.php?id=<?php echo $reg[0]; ?>" title="Ver Profesor"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a></td>
	                    <?php } ?>
					</blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
						<strong>Observaciones del Video: </strong> 
						<p><?php echo $reg[5]; ?></p>
					</blockquote>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-8 form-group">
					<h4><strong>Video:</strong> </h4>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $reg[6]; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>