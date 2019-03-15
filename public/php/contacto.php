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


    if(isset($_POST['empresa']) && isset($_POST['nombreContacto']) &&
    isset($_POST['telefonoContacto']) && isset($_POST['email']) &&
    isset($_POST['comentarios'])){

        $empresa = $_POST['empresa'];
        $nombreContacto = $_POST['nombreContacto'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $email = $_POST['email'];
        $comentarios = $_POST['comentarios'];



        $query = "INSERT INTO `contacto`(`id`, `empresa`, `nombreContacto`, `telefonoContacto`, `email`, `comentarios`) VALUES (0, '".$empresa."', '".$nombreContacto."', '".$telefonoContacto."', '".$email."', '".$comentarios."')";
         if(mysqli_query($mysqli, $query)){
            echo 'se inserto';
         }else{
             echo 'no se inserto';
         }

    }


?>