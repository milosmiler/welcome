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
            echo 'registrado';
        }else{
            echo 'algo ha salido mal';
        }

?>