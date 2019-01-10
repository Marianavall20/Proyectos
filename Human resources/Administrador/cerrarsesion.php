<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();
session_destroy();
print "<script>  window.location='../index.php';</script>";
?>