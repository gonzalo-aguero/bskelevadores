<?php
$n = $_POST['nombre'];
$a = $_POST['apellido'];
$c = $_POST['correo'];
$t = $_POST['telefono'];
$m = $_POST['mensaje'];
if(!empty($n) && !empty($a) && !empty($c) && !empty($t)) {
    $msg = "Ha recibido un nuevo mensaje desde el formulario de contacto:\n"
        ."Nombre: ".$n."\n"
        ."Apellido: ".$a."\n"
        ."Correo: ".$c."\n"
        ."Teléfono: ".$t."\n"
        ."Comentarios, detalles, especificaciones, etc: \n".$m."\n\n\n\n\n"
        ."Este es un correo enviado automáticamente, no responder.";
    $asunto = "Formulario de contacto";
    $emailReceptor = "gonzaloaguerodev@gmail.com";
    $emailEmisor = "notificaciones@bskelevadores.com";

    $header = "From: ".$emailEmisor. "\r\n";
    $header .= "Reply-To: ".$emailEmisor. "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    $mail = mail($emailReceptor,$asunto,$msg,$header);
    if($mail){
        $asunto = "Contacto BSK Elevadores residenciales";
        $msg = "Hemos recibido su mensaje con éxito. El mismo será respondido a la brevedad."."\r\n"
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