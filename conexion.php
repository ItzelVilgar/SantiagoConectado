<?php
 $servidor="174.136.25.123";
 $usuario="digitalk_Santiago";
 $clave="Santiago2023";
 $baseDeDatos="digitalk_SantiagoConectado";
 $enlace = mysqli_connect($servidor, $usuario, $clave, 
$baseDeDatos);
 if(!$enlace){
 echo"Error en la conexion con el servidor";
 }
?>
