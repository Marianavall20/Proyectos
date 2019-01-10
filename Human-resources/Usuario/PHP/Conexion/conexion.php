<?php
   $conexion = new mysqli("localhost","root","","recursos_humanos");
    
    if ($conexion)
    {
    	echo "";
    }
     else
     {
     	echo "Conexion fallida";
     }
?>