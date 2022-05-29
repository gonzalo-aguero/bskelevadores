<?php
$n = $_POST['nombre'];
$c = $_POST['correo'];
$m = $_POST['mensaje'];
if(!empty($n) && !empty($c) && !empty($m)) {
    $msg = "Ha recibido un nuevo mensaje:\n"
        ."Nombre: ".$n."\n"
        ."Correo: ".$c."\n"
        ."Mensaje: ".$m."\n\n\n\n\n"
        ."Este es un correo enviado automáticamente, no responder.";
    $asunto = "Mensaje de consulta";
    $emailReceptor = "gonzaloaguerodev@gmail.com";
    $emailEmisor = "notificaciones@bskelevadores.com";

    $header = "From: ".$emailEmisor. "\r\n";
    $header .= "Reply-To: ".$emailEmisor. "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    $mail = mail($emailReceptor,$asunto,$msg,$header);
    if($mail){
        $asunto = "Consultas BSK Elevadores residenciales";
        $msg = "Hemos recibido su consulta con éxito. La misma será respondida a la brevedad."."\r\n"
            ."\nEste es un correo enviado automáticamente, no responder.";
        $emailReceptor = $c;
        $emailEmisor = "notificaciones@bskelevadores.com";
        $header = "From: ".$emailEmisor. "\r\n";
        $header .= "Reply-To: ".$emailEmisor. "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        $mail = mail($emailReceptor,$asunto,$msg,$header);
        echo 1;
    }else {
        echo 'error';
    }
}else{
    echo 0;
}
?>