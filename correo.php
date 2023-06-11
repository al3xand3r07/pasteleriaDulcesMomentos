<?php
//Pagína para solicitar un pedido
    $destinatario = 'yosafataguirrehernandez3773@gmail.com';
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $TelefonoCelular = $_POST['TelefonoCelular'];
    $DescripciondelPedido = $_POST['DescripciondelPedido'];

    $header = "Enahorabuena, un cliente desea ponerse en contacto desde el Sitio Web Oficial: 'Creaciones Andrea ' \n";
    $mensajeCompleto =  $Nombre . $Apellidos;
    $Datosimportantes = "Numero Celular: " . $TelefonoCelular . "\n El Cliente dice: \n " .$DescripciondelPedido;

    mail( $destinatario, $mensajeCompleto, $Datosimportantes, $header);
    echo "<script>alert('Solicitud de Pedido Enviada con éxito, ¡Espera nuestra llamada...!')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>