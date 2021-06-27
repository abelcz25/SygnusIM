<?php 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $codigo = $_POST['codigo'];

    $header = 'From: ' . $email . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion "\r\n";
    $header .= "Mime-Version 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Mensaje enviado por: " .$nombre . "\r\n";
    $mensaje .= "Su e-mail es: " . $email . "\r\n";
    $mensaje .= "Teléfono de contacto: " . $telefono . "\r\n";
    $mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
    $mensaje .= "Enviado el: " . date('d/m/Y', time());

    $para = 'abelkzrs@gmail.com';
    $asunto = 'Contacto Sygnus';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header("Location:index.html");
?>