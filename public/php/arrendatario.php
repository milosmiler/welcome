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

    if(isset($_POST['nombre']) && isset($_POST['rfc']) &&
    isset($_POST['domicilio']) && isset($_POST['colonia']) &&
    isset($_POST['municipio']) && isset($_POST['celular']) &&
    isset($_POST['email'])){


        $nombre = $_POST['nombre'];
        $rfc = $_POST['rfc'];
        $domicilio = $_POST['domicilio'];
        $colonia = $_POST['colonia'];
        $municipio = $_POST['municipio'];
        $telefono = $_POST['telefono'];
        $celular = $_POST['celular'];
        $estado_civil = $_POST['estado_civil'];
        $email = $_POST['email'];
        $profesion = $_POST['profesion'];
        $ig_mensual = $_POST['ig_mensual'];
        $empresa = $_POST['empresa'];
        $antiguedad = $_POST['antiguedad'];
        $puestos = $_POST['puestos'];
        $horario = $_POST['horario'];
        $jefe_inmediato = $_POST['jefe_inmediato'];
        $puesto = $_POST['puesto'];
        $email_trabajo = $_POST['email_trabajo'];
        $colonia_trabajo = $_POST['colonia_trabajo'];
        $municipio_trabajo = $_POST['municipio_trabajo'];
        $giro_empresa = $_POST['giro_empresa'];
        $domicilio_trabajo = $_POST['domicilio_trabajo'];
        $factura = $_POST['factura'];
        $arrendador = $_POST['arrendador'];
        $telefono_arrendador = $_POST['telefono_arrendador'];
        $monto_renta = $_POST['monto_renta'];
        $domicilio_inmueble = $_POST['domicilio_inmueble'];
        $motivo_cambio = $_POST['motivo_cambio'];




        $fam1 = $_POST['fam1'];
        $tel_fam1 = $_POST['tel_fam1'];
        $fam2 = $_POST['fam2'];
        $tel_fam2 = $_POST['tel_fam2'];

        $fam3 = $_POST['fam3'];
        $tel_fam3 = $_POST['tel_fam3'];

        $fam4 = $_POST['fam4'];
        $tel_fam4 = $_POST['tel_fam4'];

        $fam5 = $_POST['fam5'];
        $tel_fam5 = $_POST['tel_fam5'];

        $fam6 = $_POST['fam6'];
        $tel_fam6 = $_POST['tel_fam6'];

        $fam7 = $_POST['fam7'];
        $tel_fam7 = $_POST['tel_fam7'];

        $fam8 = $_POST['fam8'];
        $tel_fam8 = $_POST['tel_fam8'];

        $fam9 = $_POST['fam9'];
        $tel_fam9 = $_POST['tel_fam9'];

        $fam10 = $_POST['fam10'];
        $tel_fam10 = $_POST['tel_fam10'];

        $fam11 = $_POST['fam11'];
        $tel_fam11 = $_POST['tel_fam11'];

        $fam12 = $_POST['fam12'];
        $tel_fam12 = $_POST['tel_fam12'];

        $fam13 = $_POST['fam13'];
        $tel_fam13 = $_POST['tel_fam13'];

        $fam14 = $_POST['fam14'];
        $tel_fam14 = $_POST['tel_fam14'];

        $fam15 = $_POST['fam15'];
        $tel_fam15 = $_POST['tel_fam15'];


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
        <p style=" color: #0D3156; font-size: 28px; font-family: Arial; float:right;">Hola, '.$nombre.' </p>
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

        $query = "INSERT INTO `arrendatario`(`id`, `nombre`, `rfc`, `estadoCivil`, `domicilio`, `municipio`, `telefono`,
                                            `celular`, `email`, `profesion`, `ingresoMensual`, `nombreEmpresa`, `antiguedad`, `puestos`,
                                            `horario`, `jefeInmediato`, `puesto`, `emailEmpresa`, `coloniaTrabajo`, `municipioTrabajo`,
                                            `giroEmpresa`, `direccionTrabajo`, `nombreArrendador`, `montoRenta`, `DomicilioArrendado`,
                                            `causasCambio`, `telfonoArrendador`) VALUES (0, '".$nombre."', '".$rfc."', '".$estado_civil."', '".$domicilio."',
                                            '".$municipio."', '".$telefono."', '".$celular."', '".$email."', '".$profesion."', '".$ig_mensual."',
                                            '".$empresa."', '".$antiguedad."', '".$puestos."', '".$horario."', '".$jefe_inmediato."', '".$puesto."',
                                            '".$email_trabajo."', '".$colonia_trabajo."', '".$municipio_trabajo."', '".$giro_empresa."', '".$domicilio_trabajo."',
                                            '".$arrendador."', '".$monto_renta."', '".$domicilio_inmueble."', '".$motivo_cambio."', '".$telefono_arrendador."')";
        
        if(mysqli_query($mysqli, $query)){
            $last_id = mysqli_insert_id($mysqli);

            if(isset($fam1) && isset($tel_fam1) && $fam1 != "" && $tel_fam1 != ""){
                $query1 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam1."', '".$tel_fam1."', '".$last_id."')";
                mysqli_query($mysqli, $query1);
            }

            if(isset($fam2) && isset($tel_fam2) && $fam2 != "" && $tel_fam2 != "" ){
                $query2 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam2."', '".$tel_fam2."', '".$last_id."')";
                mysqli_query($mysqli, $query2);
            }

            if(isset($fam3) && isset($tel_fam3) && $fam3 != "" && $tel_fam3 != ""){
                $query3 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam3."', '".$tel_fam3."', '".$last_id."')";
                mysqli_query($mysqli, $query3);
            }

            if(isset($fam4) && isset($tel_fam4) && $fam4 != "" && $tel_fam4 != ""){
                $query4 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam4."', '".$tel_fam4."', '".$last_id."')";
                mysqli_query($mysqli, $query4);
            }

            if(isset($fam5) && isset($tel_fam5) && $fam5 != "" && $tel_fam5 != ""){
                $query5 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam5."', '".$tel_fam5."', '".$last_id."')";
                mysqli_query($mysqli, $query5);
            }

            if(isset($fam6) && isset($tel_fam6) && $fam6 != "" && $tel_fam6 != ""){
                $query6 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam6."', '".$tel_fam6."', '".$last_id."')";
                mysqli_query($mysqli, $query6);
            }

            if(isset($fam7) && isset($tel_fam7) && $fam7 != "" && $tel_fam7 != ""){
                $query7 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam7."', '".$tel_fam7."', '".$last_id."')";
                mysqli_query($mysqli, $query7);
            }

            if(isset($fam8) && isset($tel_fam8) && $fam8 != "" && $tel_fam8 != ""){
                $query8 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam8."', '".$tel_fam8."', '".$last_id."')";
                mysqli_query($mysqli, $query8);
            }

            if(isset($fam9) && isset($tel_fam9) && $fam9 != "" && $tel_fam9 != "" ){
                $query9 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam9."', '".$tel_fam9."', '".$last_id."')";
                mysqli_query($mysqli, $query9);
            }

            if(isset($fam10) && isset($tel_fam10) && $fam10 != "" && $tel_fam10 != ""){
                $query10 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam10."', '".$tel_fam10."', '".$last_id."')";
                mysqli_query($mysqli, $query10);
            }

            if(isset($fam11) && isset($tel_fam11)&& $fam11 != "" && $tel_fam11 != ""){
                $query11 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam11."', '".$tel_fam11."', '".$last_id."')";
                mysqli_query($mysqli, $query11);
            }

            if(isset($fam12) && isset($tel_fam12) && $fam12 != "" && $tel_fam12 != ""){
                $query12 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam12."', '".$tel_fam12."', '".$last_id."')";
                mysqli_query($mysqli, $query12);
            }

            if(isset($fam13) && isset($tel_fam13) && $fam13 != "" && $tel_fam13 != ""){
                $query13 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam13."', '".$tel_fam13."', '".$last_id."')";
                mysqli_query($mysqli, $query13);
            }

            if(isset($fam14) && isset($tel_fam14) && $fam14 != "" && $tel_fam14 != ""){
                $query14 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam14."', '".$tel_fam14."', '".$last_id."')";
                mysqli_query($mysqli, $query14);
            }

            if(isset($fam15) && isset($tel_fam15) && $fam15 != "" && $tel_fam15 != ""){
                $query15 = "INSERT INTO `referencia_arrendatario`(`id`, `nombre`, `telefono`, `id_arrendatario`) VALUES (0, '".$fam15."', '".$tel_fam15."', '".$last_id."')";
                mysqli_query($mysqli, $query15);
            }

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

            echo 'registrados';
        }else{
            echo 'algo ha salido mal';
        }
        
        


    }

?>