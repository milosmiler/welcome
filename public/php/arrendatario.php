<?php

$host = "localhost";
$user = "root";
$db = "confia";
$pass = "root";

// Conectar a la base
//  la variable $myslqi contendrá el objeto con la conexión
$mysqli = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno($mysqli)) {
    die( "Error al conectar a MySQL: " . mysqli_connect_error() );
}

?>