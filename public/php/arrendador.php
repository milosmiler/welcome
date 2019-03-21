<?php
     require ('phpmailer/Exception.php');
     require ('phpmailer/PHPMailer.php');
     require ('phpmailer/SMTP.php');

    $host = "localhost";
    $user = "confia_userR";
    $db = "confia";
    $pass = "v-rsD^DN}sbe";

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

        $tipo_poliza = $_POST['tipo_poliza'];
        $nombre_compania = $_POST['nombre_compania'];
        $persona_solicita = $_POST['persona_solicita'];
        $telefono_compania = $_POST['telefono_compania'];
        $celular_compania = $_POST['celular_compania'];
        $email_compania = $_POST['email_compania'];
        $fecha_solicitud = $_POST['fecha_solicitud'];
        $fecha_firma = $_POST['fecha_firma'];
        $hora_firma = $_POST['hora_firma'];
        $lugar_firma = $_POST['lugar_firma'];
        $administra_inmueble = $_POST['administra_inmueble'];
        $administrador_inmueble = $_POST['administrador_inmueble'];
        $nombre = $_POST['nombre'];
        $domicilio = $_POST['domicilio'];
        $cp = $_POST['cp'];
        $colonia = $_POST['colonia'];
        $municipio = $_POST['municipio'];
        $estado = $_POST['estado'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $tipo_pago_rentas = $_POST['tipo_pago_rentas'];
        $titular_cuenta = $_POST['titular_cuenta'];
        $banco = $_POST['banco'];
        $no_cuenta = $_POST['no_cuenta'];
        $cuenta_clabe = $_POST['cuenta_clabe'];
        $importe_mensual_renta = $_POST['importe_mensual_renta'];
        $cuota_mantenimiento = $_POST['cuota_mantenimiento'];
        $cuota_incluida_renta = $_POST['cuota_incluida_renta'];
        $deposito_garantia = $_POST['deposito_garantia'];
        $vigencia_contrato = $_POST['vigencia_contrato'];
        $contrato_de = $_POST['contrato_de'];
        $contrato_hasta = $_POST['contrato_hasta'];
        $tipo_inmueble = $_POST['tipo_inmueble'];
        $nombre_de_recibo_poliza = $_POST['nombre_de_recibo_poliza'];
        $otro_nombre_recibo_poliza = $_POST['otro_nombre_recibo_poliza'];
        $observaciones = $_POST['observaciones'];


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
        <p style=" color: #0D3156; font-size: 28px; font-family: Arial; float:right;">Hola, '.$persona_solicita.' </p>
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



        $query = "INSERT INTO `arrendador`(`id`, `tipo_poliza`, `nombre_compania`, `persona_solicita`, `telefono_compania`, `celular_compania`, `email_compania`,
                                            `fecha_solicitud`, `fecha_firma`, `hora_firma`, `lugar_firma`, `administra_inmueble`, `administrador_inmueble`, `nombre`,
                                            `domicilio`, `cp`, `colonia`, `municipio`, `estado`, `telefono`, `celular`, `email`, `tipo_pago_rentas`, `titular_cuenta`,
                                            `banco`, `no_cuenta`, `cuenta_clabe`,  `importe_mensual_renta`, `cuota_mantenimiento`, `cuota_incluida_renta`, 
                                            `deposito_garantia`, `vigencia_contrato`, `contrato_de`, `contrato_hasta`, `tipo_inmueble`, `nombre_de_recibo_poliza`, `otro_nombre_recibo_poliza`,
                                            `observaciones`) VALUES (0, '".$tipo_poliza."',
                                            '".$nombre_compania."', '".$persona_solicita."', '".$telefono_compania."',
                                            '".$celular_compania."', '".$email_compania."', '".$fecha_solicitud."', '".$fecha_firma."', '".$hora_firma."', '".$lugar_firma."', '".$administra_inmueble."',
                                            '".$administrador_inmueble."', '".$nombre."', '".$domicilio."', '".$cp."', '".$colonia."', '".$municipio."',
                                            '".$estado."', '".$telefono."', '".$celular."', '".$email."', '".$tipo_pago_rentas."',
                                            '".$titular_cuenta."', '".$banco."', '".$no_cuenta."', '".$cuenta_clabe."','".$importe_mensual_renta."', '".$cuota_mantenimiento."',
                                            '".$cuota_incluida_renta."', '".$deposito_garantia."', '".$vigencia_contrato."', '".$contrato_de."', '".$contrato_hasta."',
                                            '".$tipo_inmueble."', '".$nombre_de_recibo_poliza."', '".$otro_nombre_recibo_poliza."', '".$observaciones."')";

        
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
            $mail->Subject = "¡Registro exitoso! - Confia";
            $mail->Body = $html;
            $mail->AddAddress($mailToSend);

            $mail->Send();
            echo 'registrado';
        }else{
            echo 'algo ha salido mal';
        }

?>