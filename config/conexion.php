<?php
//ESTOS SON LOS PARAMETROS DE LA CONEXION
$hostname = "localhost";
$database = "proyecto_ds7";
$user = "root";
$pass = "";

//ESTA LINEA ES LA QUE PERMTE REALIZAR LA CONEXION
$pdo = new mysqli($hostname, $user, $pass, $database);

//ESTA LINEA VALIDA ERRORES QUE PUEDEN EXISTIR AL CONECTARNOS
if ($pdo->connect_errno) {
    echo 'Error al conectar con la base de datos';
}
