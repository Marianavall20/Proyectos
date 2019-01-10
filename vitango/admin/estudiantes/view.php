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
		$query = mysqli_query($conex, 'SELECT * FROM usuarios WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Estudiante</h3>
			</div>
		</section><br>
		<section id="info-prod">
				<div class="row">
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Nombre: </strong> <?php echo $reg[1]; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Apellido: </strong> <?php echo $reg[2]; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Documento: </strong> <?php echo $reg[3]; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Genero: </strong> <?php echo $reg[7]; ?>
						</blockquote>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						<blockquote>
							<strong>Usuario: </strong> <?php echo $reg[4]; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Correo: </strong> <?php echo $reg[5]; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Fecha de Nacimiento: </strong> <?php $date = $reg[8];
                       $my_date = date('d/m/Y', strtotime($date));
                       echo $my_date; ?>
						</blockquote>
					</div>
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Teléfono: </strong> <?php echo $reg[9]; ?>
						</blockquote>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3 form-group">
						<blockquote>
							<strong>Dirección: </strong> <?php echo $reg[10]; ?>
						</blockquote>
					</div>
					<div class="col-md-4">
						<blockquote>
							<strong>Imagen que tienes en este momento: </strong>
							<img src="<?php echo $reg[11]; ?>" alt="<?php echo $reg[11]; ?>" width="200" height="200" class="img-responsive">
						</blockquote>
					</div>
				</div>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>