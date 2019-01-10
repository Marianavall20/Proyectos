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
		$query = mysqli_query($conex, 'SELECT * FROM cursos WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-8">
				<h3 class="ps-sem">Curso 
					<a href="<?php echo URL; ?>/admin/cursos.php" role="button" class="btn btn-info"><i class="fa fa-arrow-left"></i> Atrás</a>
				</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<div class="row">
				<div class="col-md-4">
					<blockquote>
						<strong>Nombre: </strong> <?php echo $reg[1]; ?>
					</blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
						<strong>Horario: </strong> <?php echo $reg[3]; ?>
					</blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
						<strong>Edad: </strong> <?php echo $reg[2]; ?>
					</blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<blockquote>
						<strong>Precio: </strong> <?php echo '$'.number_format($reg[4]); ?>
					</blockquote>
				</div>
				<div class="col-md-4">
					<blockquote>
						<strong>Precio 2:</strong> <?php echo '$'.number_format($reg[5]); ?>
					</blockquote>
				</div>
			</div>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>