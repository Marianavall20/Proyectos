<?php
   $conexion = new mysqli("localhost","root","","pidb");
    
    if ($conexion)
    {
    	echo "";
    }
     else
     {
     	echo "Conexion fallida";
     }
?>