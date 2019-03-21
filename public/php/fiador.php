<?php

require ('sendMail.php');

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

        $mail = new SendMail();
        if(mysqli_query($mysqli, $query)){
            echo 'registrado';
            $mail->sendMail();
        }else{
            echo 'algo ha salido mal';
        }

?>