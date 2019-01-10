<?php
   $conexion = new mysqli("mysql.gestionrecursoshumanios.org","user_recursos","Recursos2018","db_recursoshumanos");
    
    if ($conexion)
    {
    	echo "";
    }
     else
     {
     	echo "Conexion fallida";
     }
?>