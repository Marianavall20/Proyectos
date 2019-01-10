<?php
if (isset($_POST ['registrar'])) {
  include ("../conexion/conexion.php");
  $usuario= $_POST ['usuario'];
  $correo= $_POST ['correo'];
  $contrasena= $_POST ['contrasena'];
  mysqli_query($cone, "INSERT INTO registro_admi (usuario,correo,contrasena) VALUES
  ('$usuario','$correo','$contrasena')");
    print "<script>alert(\"Guardado exitosamente.\");window.location='login.php';</script>";
}
?>