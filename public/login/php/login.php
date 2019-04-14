<?php

// $host = "localhost";
// $user = "confia_userR";
// $db = "confia";
// $pass = "v-rsD^DN}sbe";

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

if(isset($_SESSION["user"])){
    header("Location: ../inindex.php");
}

if(isset($_POST['email']) || $_POST['email'] != null &&
   isset($_POST['password']) || $_POST['password'] != null){

    $md5pass = md5($_POST['password']);
    $email = $_POST['email'];

    $query = "SELECT * FROM usuarios WHERE `email` = '".$email."' AND `password` = '".$md5pass."'";
    $result = mysqli_query($mysqli, $query);
    // var_dump($result);
    if($result){ 
        session_start();
        $user2 = $result->fetch_assoc();
        $_SESSION['user'] = $user2['nombre'];
        var_dump($_SESSION);
        header('Location: ../inindex.php');
    }else{
        echo 'no se encontró ningun resultado';
    }


   }else{
       echo 'No enviaste nadaaaaa';
   }

?>