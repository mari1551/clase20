<?php

// Conexión a la base de datos
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bd_clase20';
$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn->connect_error){
    die("conexion fallida: ".$conn->connect_error);
}

?>
