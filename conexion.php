<?php

function conexion() {

    $hostname_db = "mysql.hostinger.es";
    $database_db = "u380436206_encdo";
    $username_db = "u380436206_user";
    $password_db = "123456";

    $conexion = mysqli_connect($hostname_db,$username_db, $password_db);	

    /*
    if (!$conexion)
	die("Falló la conexión a MySQL: " . mysql_error());
	else
	echo "Conexión exitosa!";
    */
    
    mysqli_select_db($conexion, $database_db)
    or die ("Ninguna DB seleccionada" . mysql_error());

    return $conexion;
}

