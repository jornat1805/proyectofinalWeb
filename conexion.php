<?php

$host = "mysql-jornat.alwaysdata.net";
$usuario = "jornat_user";
$clave = "jnm298910";
$nombre_bd = "jornat_db";

 $conection = mysqli_connect($host, $usuario, $clave, $nombre_bd);


 	if(!conection){
 		die("Error de Conexion con la Base de Datos :" . mysqli_connect_error());
 	}
 



?>





