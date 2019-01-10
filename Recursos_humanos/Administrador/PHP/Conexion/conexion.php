<?php
   $conexion = new mysqli("mysql.gestionrecursoshumanos.org","user_recursos","Recursos2018","db_recursoshumanos");
    
    if ($conexion)
    {
    	echo "";
    }
     else
     {
     	echo "Conexion fallida";
     }
?>