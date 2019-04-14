<?php
// include_once 'php/login.php';
session_start();
// var_dump($_SESSION['user']);
if(!isset($_SESSION['user']) || $_SESSION == null){
    header('Location: index.php');
    exit(); 
}


echo 'Hola si hay session de: '.$_SESSION['user'];


?>