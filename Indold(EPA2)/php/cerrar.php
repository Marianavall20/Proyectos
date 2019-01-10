<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
    session_start();
    session_destroy();
    include("salir.php");
	print "<script>alert(\"Cerraste sesión.\");window.location='login.php';</script>";
	?>
<script language="javascript">location.href ="login.php";</script>
</body>
</html>
