<?php

    require ('phpmailer/Exception.php');
    require ('phpmailer/PHPMailer.php');
    require ('phpmailer/SMTP.php');

    $host = "localhost";
    $user = "confia_userR";
    $db = "confia";
    $pass = "v-rsD^DN}sbe";

    //  $host = "localhost";
    // $user = "root";
    // $db = "confia";
    // $pass = "root";

    // Conectar a la base
    //  la variable $myslqi contendrá el objeto con la conexión
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    if (mysqli_connect_errno($mysqli)) {
        die( "Error al conectar a MySQL: " . mysqli_connect_error() );
    }

    // if(isset($_POST['nombre_fiador']) && isset($_POST['rfc']) &&
    // isset($_POST['email']) && isset($_POST['colonia']) &&
    // isset($_POST['municipio']) && isset($_POST['celular']) &&
    // isset($_POST['afianzadora'])){

        $afianzado = $_POST['afianzado'];
        $afianzadora = $_POST['afianzadora'];
        $nombre_fiador = $_POST['nombre_fiador'];
        $parentezco_fiador = $_POST['parentezco_fiador'];
        $estado_civil_fiador = $_POST['estado_civil_fiador'];
        $municipio_fiador = $_POST['municipio_fiador'];
        $colonia_fiador = $_POST['colonia_fiador'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $razon_social = $_POST['razon_social'];
        $rfc = $_POST['rfc'];
        $domicilio_moral = $_POST['domicilio_moral'];
        $colonia_fiadorM = $_POST['colonia_fiadorM'];
        $municipop_fiadorM = $_POST['municipop_fiadorM'];
        $telefono_fiadorM = $_POST['telefono_fiadorM'];
        $giro_empresa = $_POST['giro_empresa'];
        $paginaweb = $_POST['paginaweb'];
        $representante_legal = $_POST['representante_legal'];
        $puesto = $_POST['puesto'];
        $acta_constitutiva = $_POST['acta_constitutiva'];
        $poder_representante = $_POST['poder_representante'];
        $domicilio_representante = $_POST['domicilio_representante'];
        $colonia_representante = $_POST['colonia_representante'];
        $municipio_representante = $_POST['municipio_representante'];
        $telefono_particular = $_POST['telefono_particular'];
        $celular_representante = $_POST['celular_representante'];
        $email_representante = $_POST['email_representante'];
        $domicilio_garantia = $_POST['domicilio_garantia'];
        $colonia_garantia = $_POST['colonia_garantia'];
        $mun_garantia = $_POST['mun_garantia'];

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
        <p style=" color: #0D3156; font-size: 28px; font-family: Arial; float:right;">Hola, '.$nombre_fiador.' </p>
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

        $query = "INSERT INTO `fiador`(`id`, `afianzado`, `afianzadora`, `nombre_fiador`, `parentezco_fiador`, `estado_civil_fiador`, `municipio`,
                                            `colonia`, `telefono`, `celular`, `email`, `razon_social`, `rfc`, `domicilio`,
                                            `colonia_moral`, `municipio_moral`, `telefono_moral`, `giro_empresa`, `pagina_web`, `representante_legal`,
                                            `puesto_representante_legal`, `acta_constitutiva`, `poder_representante_legal`,  `domicilio_representante`,
                                            `colonia_representante`, `municipio_representante`, `telefono_representante`, `celular_representante`,
                                            `email_representante`, `domicilio_inmueble_garantia`, `colonia_inmueble_garantia`, `municipio_inmueble_garantia`) VALUES (0, '".$afianzado."',
                                            '".$afianzadora."', '".$nombre_fiador."', '".$parentezco_fiador."',
                                            '".$estado_civil_fiador."', '".$municipio_fiador."', '".$colonia_fiador."', '".$telefono."', '".$celular."', '".$email."', '".$razon_social."',
                                            '".$rfc."', '".$domicilio_moral."', '".$colonia_fiadorM."', '".$municipop_fiadorM."', '".$telefono_fiadorM."', '".$giro_empresa."',
                                            '".$paginaweb."', '".$representante_legal."', '".$puesto."', '".$acta_constitutiva."', '".$poder_representante."',
                                            '".$domicilio_representante."', '".$colonia_representante."', '".$municipio_representante."', '".$telefono_particular."',
                                            '".$celular_representante."', '".$email_representante."', '".$domicilio_garantia."', '".$colonia_garantia."', '".$mun_garantia."')";

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
            $mailToSend = $email;
            $mail->SetFrom("contacto@confia.com");
            $mail->Subject = "Registro exitoso - Confia";
            $mail->Body = $html;
            $mail->AddAddress($mailToSend);

            $mail->Send();
            echo 'registrado';
        }else{
            echo 'algo ha salido mal';
        }

?>