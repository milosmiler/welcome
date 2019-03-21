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


    if(isset($_POST['nombre_asesor']) && isset($_POST['tipo_asesor']) &&
    isset($_POST['telefono_asesor']) && isset($_POST['email_asesor'])){

        $nombre_asesor = $_POST['nombre_asesor'];
        $tipo_asesor = $_POST['tipo_asesor'];
        $telefono_asesor = $_POST['telefono_asesor'];
        $email_asesor = $_POST['email_asesor'];
        



        $query = "INSERT INTO `asesor`(`id`, `nombre`, `tipo`, `telefono`, `email`) VALUES (0, '".$nombre_asesor."', '".$tipo_asesor."', '".$telefono_asesor."', '".$email_asesor."')";
         if(mysqli_query($mysqli, $query)){
            echo 'registrados';
         }else{
             echo 'no se inserto';
         }

    }


?>