<?php
        require ('phpmailer/Exception.php');
        require ('phpmailer/PHPMailer.php');
        require ('phpmailer/SMTP.php');
        $host = "localhost";
        $user = "confia_userR";
        $db = "confia";
        $pass = "v-rsD^DN}sbe";

        // $host = "localhost";
        // $user = "root";
        // $db = "confia";
        // $pass = "root";

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
        
        $html = '<!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="utf-8">
          <title>confia</title>
        </head>
        <body>
        
        <!--Copia desde aquí-->
        <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse; background: #fff;">
          <tr style="border-top: 5px solid #0D3156; border-bottom: 1px solid #ccc; margin-bottom: 20px;">
            <td colspan="1">
              <a href="">
                <img width="175px" style="display:block; margin: 1.5% 3%" src="http://polizaconfia.com/public/mail/logo.png">
              </a>
            </td>
            <td colspan="1">
            <p style=" color: #0D3156; font-size: 28px; font-family: Arial; float:right;">Hola, '.$nombre_asesor.' </p>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="padding-bottom: 20px; padding-top: 20px;">
              <center>
                <img src="http://polizaconfia.com/public/mail/fondo2.png">
              </center>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(112, 112, 112, 0.18); ">
              <td colspan="2">
                  <h2 style="text-align: center; color: #0D3156; font-size: 35px; font-family: Arial;">SOLICITUD RECIBÍDA </h2>
                  <h3 style="text-align: center; color: #575757; font-size: 29px; font-family: Arial;">A la brevedad nos pondremos en contacto con usted. </h3>
              </td>
          </tr>
          <tr>
              <td colspan="2">
                  <p style="color: #0D3156;font-family: Arial;text-align: center; font-size: 23px;">Copyright © 2019, Confía </p>
              </td>
              <td>
                  <a href=""> </a>
                  <a href=""> </a>
                  <a href=""> </a>
                  <a href=""> </a>
              </td>
          </tr>
        </table>
        <!--hasta aquí-->
        </body>
        ';


        $query = "INSERT INTO `asesor`(`id`, `nombre`, `tipo`, `telefono`, `email`) VALUES (0, '".$nombre_asesor."', '".$tipo_asesor."', '".$telefono_asesor."', '".$email_asesor."')";
         if(mysqli_query($mysqli, $query)){
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "gotiel.orm@gmail.com";
            $mail->Password = "RaKman1493";
            $mailToSend =  $email_asesor;
            $mail->SetFrom("contacto@confia.com");
            $mail->Subject = "¡Registro exitoso! - Confia";
            $mail->Body = $html;
            $mail->AddAddress($mailToSend);

            $mail->Send();
            $returnArray = array('success'=>"true");
            echo json_encode($returnArray, JSON_FORCE_OBJECT);
             
         }else{
             echo 'no se inserto';
         }

    }


?>