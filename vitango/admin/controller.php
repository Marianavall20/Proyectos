<?php 
  #Incluir la conexión.
  require('../conex/conex.php');
  session_start();

  ### DEFINICIÓN DE CONSTANTES ###
  $url = explode('/', $_SERVER['REQUEST_URI']);
  $url2 = $_SERVER['HTTP_HOST'];
  for($i=1;$i<count($url);$i++){
    if($i != 2){
      $url2 = $url2.'/'.$url[$i];
    }else{
      break;
    }
  }
  @define(URL, 'http://'.$url2);

  ### SESIONES ###
  #Iniciar Sesión
  if(isset($_POST['btn-ini-ses'])){
    $user = $_POST['mail'];
    $pass = $_POST['password'];
    $query = mysqli_query($conex, 'SELECT * FROM usuarios WHERE email = "'.$user.'" AND pass = "'.$pass.'"');
    if($query){
      $i = 0;
      while($reg = mysqli_fetch_array($query)){
        $request[$i]['id'] = $reg[0];
        $request[$i]['nombre'] = $reg[1].' '.$reg[2];
        $request[$i]['correo'] = $reg[5];
        $request[$i]['tipo'] = $reg[12];
        $i++;
      }
      if(isset($request)){
        $_SESSION['usuario'] = $request;
        header('Location: index.php');
      }else{
        $_SESSION['mensaje'] = '<script>alert("Usuario o Contraseña incorrectas!")</script>';
        header("Location: ../login.php");
      }
    }else{
      $_SESSION['mensaje'] = '<script>alert("Usuario o Contraseña incorrectas!")</script>';
      header("Location: ../login.php");
    }
  }

  #Cerrar Sesión
  if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location: ../index.php");
  }

  /********************************************************************************************/

  ### CLASES ###
  #Agregar una clase
  if(isset($_POST['add_clase']) && $_POST['add_clase'] == 'add_clase'){
    $nombre_clase = $_POST['nombre_clase'];
    $ext = explode('/', $_FILES['imagen_clase']['type'][0]);
    $extencion = $ext[1];
    if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
      $original = $_FILES['imagen_clase']['tmp_name'][0];
      $nombre_tmp = md5(mktime().$original);
      $nombre_file = $nombre_tmp.'.'.$extencion;
      $carpeta = 'images/clases/'.$_POST['nombre_clase'].'-'.mktime();
      if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
        chmod($carpeta, 0777);
      }
      $ruta = $carpeta.'/'.$nombre_file;
      move_uploaded_file($original, $ruta);
      $ruta_db = URL.'/admin/'.$ruta;
      $array_img[$i] = $ruta_db;
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite la clase e ingrese las imagenes con una extensión válida.")</script>';
      header("Location: clases.php");
    }
    $query = 'INSERT INTO clases(nombre, image) VALUES ("'.$nombre_clase.'", "'.$ruta_db.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Clase guardada con exito!")</script>';
      header("Location: clases.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: clases.php");
    }
  }

  #Editar una clase
  if(isset($_POST['edit_clase']) && $_POST['edit_clase'] == 'edit_clase'){
    $id_clase = $_POST['id_clase'];
    $nombre_clase = $_POST['nombre_clase'];
    $img_calse_ext = $_POST['img_calse_ext'];

    if($_FILES['imagen_clase']['error'][0] == 0){
      $ext = explode('/', $_FILES['imagen_clase']['type'][0]);
      $extencion = $ext[1];
      if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
        $original = $_FILES['imagen_clase']['tmp_name'][0];
        $nombre_tmp = md5(mktime().$original);
        $nombre_file = $nombre_tmp.'.'.$extencion;
        $aux_carpeta1 = explode('clases', $img_calse_ext);
        $aux_carpeta2 = explode('/', $aux_carpeta1[1]);
        $carpeta = 'images/clases/'.$aux_carpeta2[1];
        $ruta = $carpeta.'/'.$nombre_file;
        move_uploaded_file($original, $ruta);
        $ruta_db = URL.'/admin/'.$ruta;
      }else{
        $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite el producto e ingrese las imagenes con una extensión válida.")</script>';
        header("Location: clases.php");
      }
    }else{
      $ruta_db = $img_calse_ext;
    }
    $query = 'UPDATE clases SET nombre = "'.$nombre_clase.'", image = "'.$ruta_db.'" WHERE id = "'.$id_clase.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Clase editada con exito!")</script>';
      header("Location: clases.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se edito!")</script>';
      header("Location: clases.php");
    }
  }

  #Eliminar una clase
  if(isset($_GET['delete_clase']) && $_GET['delete_clase'] == 'true'){
    $id_clase = $_GET['id'];
    $query = 'DELETE FROM clases WHERE id = "'.$id_clase.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Clase eliminada con exito!")</script>';
      header("Location: clases.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: clases.php");
    }
  }

  /********************************************************************************************/

  ### CURSOS ###
  #Agregar un curso
  if(isset($_POST['add_curso']) && $_POST['add_curso'] == 'add_curso'){
    $nombre_curso = $_POST['nombre_curso'];
    $horario = $_POST['horario'];
    $edad = $_POST['edad'];
    $precio = $_POST['precio'];
    $precio2 = $_POST['precio2'];
    $query = 'INSERT INTO cursos(nombre, horario, edad, precio, precio2) VALUES ("'.$nombre_curso.'", "'.$horario.'", "'.$edad.'", "'.$precio.'", "'.$precio2.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Curso guardado con exito!")</script>';
      header("Location: cursos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: cursos.php");
    }
  }

  #Editar un Curso
  if(isset($_POST['edit_curso']) && $_POST['edit_curso'] == 'edit_curso'){
    $id_curso = $_POST['id_curso'];
    $nombre_curso = $_POST['nombre_curso'];
    $horario = $_POST['horario'];
    $edad = $_POST['edad'];
    $precio = $_POST['precio'];
    $precio2 = $_POST['precio2'];
    $query = 'UPDATE cursos SET nombre = "'.$nombre_curso.'", horario = "'.$horario.'", edad = "'.$edad.'", precio = "'.$precio.'", precio2 = "'.$precio2.'" WHERE id = "'.$id_curso.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Curso editado con exito!")</script>';
      header("Location: cursos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: cursos.php");
    }
  }

  #Eliminar una curso
  if(isset($_GET['delete_curso']) && $_GET['delete_curso'] == 'true'){
    $id_curso = $_GET['id'];
    $query = 'DELETE FROM cursos WHERE id = "'.$id_curso.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Curso eliminado con exito!")</script>';
      header("Location: cursos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: cursos.php");
    }
  }

  /********************************************************************************************/

  ### EDECANES ###
  #Agregar un Edecan
  if(isset($_POST['add_edecan']) && $_POST['add_edecan'] == 'add_edecan'){
    $nombre_edecan = $_POST['nombre_edecan'];
    $descripcion = $_POST['descripcion'];
    $query = 'INSERT INTO edecanes(titulo, descripcion) VALUES ("'.$nombre_edecan.'", "'.$descripcion.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Edecan guardado con exito!")</script>';
      header("Location: edecanes.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: edecanes.php");
    }
  }

  #Editar un Edecan
  if(isset($_POST['edit_edecan']) && $_POST['edit_edecan'] == 'edit_edecan'){
    $id_edecan = $_POST['id_edecan'];
    $nombre_edecan = $_POST['nombre_edecan'];
    $descripcion = $_POST['descripcion'];
    $query = 'UPDATE edecanes SET titulo = "'.$nombre_edecan.'", descripcion = "'.$descripcion.'" WHERE id = "'.$id_edecan.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Edecan editado con exito!")</script>';
      header("Location: edecanes.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: edecanes.php");
    }
  }

  #Eliminar una edecan
  if(isset($_GET['delete_edecan']) && $_GET['delete_edecan'] == 'true'){
    $id_edecan = $_GET['id'];
    $query = 'DELETE FROM edecanes WHERE id = "'.$id_edecan.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Edecan eliminado con exito!")</script>';
      header("Location: edecanes.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: edecanes.php");
    }
  }

  /********************************************************************************************/

  ### EVENTOS ###
  #Agregar una evento
  if(isset($_POST['add_evento']) && $_POST['add_evento'] == 'add_evento'){
    $nombre_evento = $_POST['nombre_evento'];
    $fecha_evento = $_POST['fecha_evento'];
    $descripcion = $_POST['descripcion'];
    $ext = explode('/', $_FILES['imagen_evento']['type'][0]);
    $extencion = $ext[1];
    if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
      $original = $_FILES['imagen_evento']['tmp_name'][0];
      $nombre_tmp = md5(mktime().$original);
      $nombre_file = $nombre_tmp.'.'.$extencion;
      $carpeta = 'images/eventos/'.$_POST['nombre_evento'].'-'.mktime();
      if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
        chmod($carpeta, 0777);
      }
      $ruta = $carpeta.'/'.$nombre_file;
      move_uploaded_file($original, $ruta);
      $ruta_db = URL.'/admin/'.$ruta;
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite la clase e ingrese las imagenes con una extensión válida.")</script>';
      header("Location: eventos.php");
    }
    $query = 'INSERT INTO eventos(nombre, descripcion, fecha, image) VALUES ("'.$nombre_evento.'", "'.$descripcion.'", "'.$fecha_evento.'", "'.$ruta_db.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Evento guardado con exito!")</script>';
      header("Location: eventos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: eventos.php");
    }
  }

  #Editar una Evento
  if(isset($_POST['edit_evento']) && $_POST['edit_evento'] == 'edit_evento'){
    $id_evento = $_POST['id_evento'];
    $nombre_evento = $_POST['nombre_evento'];
    $fecha_evento = $_POST['fecha_evento'];
    $descripcion = $_POST['descripcion'];
    $img_evento_ext = $_POST['img_evento_ext'];

    if($_FILES['imagen_evento']['error'][0] == 0){
      $ext = explode('/', $_FILES['imagen_evento']['type'][0]);
      $extencion = $ext[1];
      if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
        $original = $_FILES['imagen_evento']['tmp_name'][0];
        $nombre_tmp = md5(mktime().$original);
        $nombre_file = $nombre_tmp.'.'.$extencion;
        $aux_carpeta1 = explode('eventos', $img_evento_ext);
        $aux_carpeta2 = explode('/', $aux_carpeta1[1]);
        $carpeta = 'images/eventos/'.$aux_carpeta2[1];
        $ruta = $carpeta.'/'.$nombre_file;
        move_uploaded_file($original, $ruta);
        $ruta_db = URL.'/admin/'.$ruta;
      }else{
        $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite el evento e ingrese las imagenes con una extensión válida.")</script>';
        header("Location: eventos.php");
      }
    }else{
      $ruta_db = $img_evento_ext;
    }
    $query = 'UPDATE eventos SET nombre = "'.$nombre_evento.'", descripcion = "'.$descripcion.'", fecha = "'.$fecha_evento.'", image = "'.$ruta_db.'" WHERE id = "'.$id_evento.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Evento editado con exito!")</script>';
      header("Location: eventos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se edito!")</script>';
      header("Location: eventos.php");
    }
  }

  #Eliminar una Evento
  if(isset($_GET['delete_evento']) && $_GET['delete_evento'] == 'true'){
    $id_evento = $_GET['id'];
    $query = 'DELETE FROM eventos WHERE id = "'.$id_evento.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Evento eliminado con exito!")</script>';
      header("Location: eventos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: eventos.php");
    }
  }

  /********************************************************************************************/

  ### TESTIMONIOS ###
  #Agregar un Testimonio
  if(isset($_POST['add_testimonio']) && $_POST['add_testimonio'] == 'add_testimonio'){
    $nombre_testimonio = $_POST['nombre_testimonio'];
    $descripcion = $_POST['descripcion'];
    $query = 'INSERT INTO testimonios (testigo, descripcion) VALUES ("'.$nombre_testimonio.'", "'.$descripcion.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Testimonio guardado con exito!")</script>';
      header("Location: testimonios.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: testimonios.php");
    }
  }

  #Editar un Testimonio
  if(isset($_POST['edit_testimonio']) && $_POST['edit_testimonio'] == 'edit_testimonio'){
    $id_testimonio = $_POST['id_testimonio'];
    $nombre_testimonio = $_POST['nombre_testimonio'];
    $descripcion = $_POST['descripcion'];
    $query = 'UPDATE testimonios SET testigo = "'.$nombre_testimonio.'", descripcion = "'.$descripcion.'" WHERE id = "'.$id_testimonio.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Testimonio editado con exito!")</script>';
      header("Location: testimonios.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: testimonios.php");
    }
  }

  #Eliminar un Testimonio
  if(isset($_GET['delete_testimonio']) && $_GET['delete_testimonio'] == 'true'){
    $id_testimonio = $_GET['id'];
    $query = 'DELETE FROM testimonios WHERE id = "'.$id_testimonio.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Testimonio eliminado con exito!")</script>';
      header("Location: testimonios.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: testimonios.php");
    }
  }

  /********************************************************************************************/

  ### PROFESORES ###
  #Agregar una profesor
  if(isset($_POST['add_profesor']) && $_POST['add_profesor'] == 'add_profesor'){
    $nombre_profesor = $_POST['nombre_profesor'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ext = explode('/', $_FILES['imagen_prefesor']['type'][0]);
    $extencion = $ext[1];
    if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
      $original = $_FILES['imagen_prefesor']['tmp_name'][0];
      $nombre_tmp = md5(mktime().$original);
      $nombre_file = $nombre_tmp.'.'.$extencion;
      $carpeta = 'images/profesores/'.$_POST['usuario'].'-'.mktime();
      if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
        chmod($carpeta, 0777);
      }
      $ruta = $carpeta.'/'.$nombre_file;
      move_uploaded_file($original, $ruta);
      $ruta_db = URL.'/admin/'.$ruta;
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite la clase e ingrese las imagenes con una extensión válida.")</script>';
      header("Location: profesores.php");
    }
    $query = 'INSERT INTO usuarios(nombre, apellidos, documento, usuario, email, pass, genero, fecha_nacimiento, telefono, direccion, imagen, tipo_usuario) VALUES ("'.$nombre_profesor.'", "'.$apellido.'", "'.$documento.'", "'.$usuario.'", "'.$email.'", "'.$pass.'", "'.$genero.'", "'.$fecha_nacimiento.'", "'.$telefono.'", "'.$direccion.'", "'.$ruta_db.'", 2)';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Profesor guardado con exito!")</script>';
      header("Location: profesores.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: profesores.php");
    }
  }

  #Editar una Profesor
  if(isset($_POST['edit_profesor']) && $_POST['edit_profesor'] == 'edit_profesor'){
    $id_profesor = $_POST['id_profesor'];
    $nombre_profesor = $_POST['nombre_profesor'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    if($_POST['pass'] == ''){
      $pass = $_POST['pass2'];
    }else{
      $pass = $_POST['pass'];
    }
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $img_profesor_ext = $_POST['img_profesor_ext'];

    if($_FILES['imagen_profesor']['error'][0] == 0){
      $ext = explode('/', $_FILES['imagen_profesor']['type'][0]);
      $extencion = $ext[1];
      if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
        $original = $_FILES['imagen_profesor']['tmp_name'][0];
        $nombre_tmp = md5(mktime().$original);
        $nombre_file = $nombre_tmp.'.'.$extencion;
        $aux_carpeta1 = explode('profesores', $img_profesor_ext);
        $aux_carpeta2 = explode('/', $aux_carpeta1[1]);
        $carpeta = 'images/profesores/'.$aux_carpeta2[1];
        $ruta = $carpeta.'/'.$nombre_file;
        move_uploaded_file($original, $ruta);
        $ruta_db = URL.'/admin/'.$ruta;
      }else{
        $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite el evento e ingrese las imagenes con una extensión válida.")</script>';
        header("Location: profesores.php");
      }
    }else{
      $ruta_db = $img_profesor_ext;
    }
    $query = 'UPDATE usuarios SET nombre = "'.$nombre_profesor.'", apellidos = "'.$apellido.'", documento = "'.$documento.'", usuario = "'.$usuario.'", email = "'.$email.'", pass = "'.$pass.'", genero = "'.$genero.'", fecha_nacimiento = "'.$fecha_nacimiento.'", telefono = "'.$telefono.'", direccion = "'.$direccion.'", imagen = "'.$ruta_db.'" WHERE id = "'.$id_profesor.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Profesor editado con exito!")</script>';
      header("Location: profesores.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se edito!")</script>';
      header("Location: profesores.php");
    }
  }

  #Eliminar una Profesor
  if(isset($_GET['delete_profesores']) && $_GET['delete_profesores'] == 'true'){
    $id_profesor = $_GET['id'];
    $query = 'DELETE FROM usuarios WHERE id = "'.$id_profesor.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Profesor eliminado con exito!")</script>';
      header("Location: profesores.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: profesores.php");
    }
  }

  /********************************************************************************************/

  ### ESTUDIANTES  ###
  #Agregar un estudiante
  if(isset($_POST['add_estudiante']) && $_POST['add_estudiante'] == 'add_estudiante'){
    $nombreestudiante = $_POST['nombre_estudiante'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ext = explode('/', $_FILES['imagen_estudiante']['type'][0]);
    $extencion = $ext[1];
    if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
      $original = $_FILES['imagen_estudiante']['tmp_name'][0];
      $nombre_tmp = md5(mktime().$original);
      $nombre_file = $nombre_tmp.'.'.$extencion;
      $carpeta = 'images/estudiantes/'.$_POST['usuario'].'-'.mktime();
      if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
        chmod($carpeta, 0777);
      }
      $ruta = $carpeta.'/'.$nombre_file;
      move_uploaded_file($original, $ruta);
      $ruta_db = URL.'/admin/'.$ruta;
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite la clase e ingrese las imagenes con una extensión válida.")</script>';
      header("Location: estudiantes.php");
    }
    $query = 'INSERT INTO usuarios(nombre, apellidos, documento, usuario, email, pass, genero, fecha_nacimiento, telefono, direccion, imagen, tipo_usuario) VALUES ("'.$nombre_estudiante.'", "'.$apellido.'", "'.$documento.'", "'.$usuario.'", "'.$email.'", "'.$pass.'", "'.$genero.'", "'.$fecha_nacimiento.'", "'.$telefono.'", "'.$direccion.'", "'.$ruta_db.'", 3)';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Estudiante guardado con exito!")</script>';
      header("Location: estudiantes.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: estudiantes.php");
    }
  }

  #Editar un Estudiante
  if(isset($_POST['edit_estudiante']) && $_POST['edit_estudiante'] == 'edit_estudiante'){
    $id_estudiante = $_POST['id_estudiante'];
    $nombre_estudiante = $_POST['nombre_estudiante'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    if($_POST['pass'] == ''){
      $pass = $_POST['pass2'];
    }else{
      $pass = $_POST['pass'];
    }
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $img_estudiante_ext = $_POST['img_estudiante_ext'];

    if($_FILES['imagen_estudiante']['error'][0] == 0){
      $ext = explode('/', $_FILES['imagen_estudiante']['type'][0]);
      $extencion = $ext[1];
      if($extencion == 'jpeg' || $extencion == 'jpg' || $extencion == 'png'){
        $original = $_FILES['imagen_estudiante']['tmp_name'][0];
        $nombre_tmp = md5(mktime().$original);
        $nombre_file = $nombre_tmp.'.'.$extencion;
        $aux_carpeta1 = explode('estudiantes', $img_estudiante_ext);
        $aux_carpeta2 = explode('/', $aux_carpeta1[1]);
        $carpeta = 'images/estudiantes/'.$aux_carpeta2[1];
        $ruta = $carpeta.'/'.$nombre_file;
        move_uploaded_file($original, $ruta);
        $ruta_db = URL.'/admin/'.$ruta;
      }else{
        $_SESSION['mensaje'] = '<script>alert("No se admiten extensiones de otro tipo, por favor edite el evento e ingrese las imagenes con una extensión válida.")</script>';
        header("Location: estudiantes.php");
      }
    }else{
      $ruta_db = $img_estudiante_ext;
    }
    $query = 'UPDATE usuarios SET nombre = "'.$nombre_estudiante.'", apellidos = "'.$apellido.'", documento = "'.$documento.'", usuario = "'.$usuario.'", email = "'.$email.'", pass = "'.$pass.'", genero = "'.$genero.'", fecha_nacimiento = "'.$fecha_nacimiento.'", telefono = "'.$telefono.'", direccion = "'.$direccion.'", imagen = "'.$ruta_db.'" WHERE id = "'.$id_estudiante.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Estudiante editado con exito!")</script>';
      header("Location: estudiantes.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se edito!")</script>';
      header("Location: estudiantes.php");
    }
  }

  #Eliminar una Estudiante
  if(isset($_GET['delete_estudiante']) && $_GET['delete_estudiante'] == 'true'){
    $id_estudiante = $_GET['id'];
    $query = 'DELETE FROM usuarios WHERE id = "'.$id_estudiante.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Estudiante eliminado con exito!")</script>';
      header("Location: profesores.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: profesores.php");
    }
  }

  /********************************************************************************************/

  ### VIDEOS ###
  #Agregar un Video
  if(isset($_POST['add_video']) && $_POST['add_video'] == 'add_video'){
    $nombre_video = $_POST['nombre_video'];
    $link_video = explode('=', $_POST['link_video']);
    $id_usuario = $_POST['id_usuario'];
    $observaciones = $_POST['observaciones'];
    $query = 'INSERT INTO user_video (nombre, observaciones, link_video, id_usuario) VALUES ("'.$nombre_video.'", "'.$observaciones.'", "'.$link_video[1].'", "'.$id_usuario.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Video guardado con exito!")</script>';
      header("Location: videos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: videos.php");
    }
  }

  #Editar un Video
  if(isset($_POST['edit_video']) && $_POST['edit_video'] == 'edit_video'){
    $id_video = $_POST['id_video'];
    $nombre_video = $_POST['nombre_video'];
    $link_video = explode('=', $_POST['link_video']);
    $observaciones = $_POST['observaciones'];
    $query = 'UPDATE user_video SET nombre = "'.$nombre_video.'", observaciones = "'.$observaciones.'", link_video = "'.$link_video[1].'" WHERE id = "'.$id_video.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Video editado con exito!")</script>';
      header("Location: videos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: videos.php");
    }
  }

  #Eliminar un Video
  if(isset($_GET['delete_video']) && $_GET['delete_video'] == 'true'){
    $id_video = $_GET['id'];
    $query = 'DELETE FROM user_video WHERE id = "'.$id_video.'"';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Video eliminado con exito!")</script>';
      header("Location: videos.php");
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se elimino!")</script>';
      header("Location: videos.php");
    }
  }

  /********************************************************************************************/

  ### CALIFICAIONES ###
  #Agregar un Calificaciones
  if(isset($_POST['add_cali']) && $_POST['add_cali'] == 'add_cali'){
    $val_cali = $_POST['val_cali'];
    $tipo = $_POST['tipo'];
    $id_calificador = $_POST['id_calificador'];
    $id_calificado = $_POST['id_calificado'];
    $item = $_POST['id_item'];
    $query = 'INSERT INTO calificaciones (nota, id_usuario_calificando, id_usuario_calificado, id_item) VALUES ("'.$val_cali.'", "'.$id_calificador.'", "'.$id_calificado.'","'.$item.'")';
    if(mysqli_query($conex, $query)){
      $_SESSION['mensaje'] = '<script>alert("Calificación guardada")</script>';
      header("Location: calificaciones/index.php?tipo=".$tipo);
    }else{
      $_SESSION['mensaje'] = '<script>alert("No se guardo!")</script>';
      header("Location: calificaciones/index.php?tipo=".$tipo);
    }
  }