<?php
$servername="68.183.213.14:3306";
$username="usuario";
$password="1920";
$bd="sif_tfp";
// Creamos la conexión pasándole el servidor, nombre de user, y clave. Si no se establece conexión muestra un error.
$conexion = mysqli_connect( $servername, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

//Seleccionamos la base de datos, que ya está declarada arriba.
$db = mysqli_select_db( $conexion, $bd ) or die ("No se ha podido conectar a la Base de datos");
?>
