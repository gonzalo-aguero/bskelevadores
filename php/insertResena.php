<?php
require("connection.php");
//Se obtiene la cantidad de registros para asignarle un valor a la id.
$sql = "SELECT * FROM `reseñas`";
$respuesta = mysqli_query($connection,$sql);
$numRows = mysqli_num_rows($respuesta);
$id = $numRows +1;
//Se controla que dicho valor no esté ya registrado.
$sql = "SELECT * FROM `reseñas` WHERE idReseña = '$id'";
$respuesta = mysqli_query($connection,$sql);
$numRows = mysqli_num_rows($respuesta);
if($numRows > 0){
    $id = 0;
    while (mysqli_num_rows($respuesta) > 0) {
        $id++;
        $sql = "SELECT * FROM `reseñas` WHERE idReseña = '$id'";
        $respuesta = mysqli_query($connection,$sql);
    }
}
$anonimo = $_POST['anonimo'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$reseña = $_POST['reseña'];
$puntuacion = $_POST['puntuacion'];
if($anonimo == 1 ){
    $nombre = "Anónimo";
    $correo = "Sin correo";
}
$sql = "INSERT INTO reseñas VALUES ($id,'$nombre','$correo','$reseña',$puntuacion)";
mysqli_query($connection,$sql);
$msg = "Nombre: ".$nombre."\n"
    ."Correo: ".$correo."\n"
    ."Reseña: ".$reseña."\n"
    ."Puntuacion: ".$puntuacion." estrellas\n\n\n\n\n"
    ."Este es un correo enviado automáticamente, no responder.";
    $asunto = "¡Una persona ha dejado una reseña!";
    $emailReceptor = "bskelevadores@gmail.com";
    $emailEmisor = "notificaciones@bskelevadores.com";

    $header = "From: ".$emailEmisor. "\r\n";
    $header .= "Reply-To: ".$emailEmisor. "\r\n";
    $header .= "X-Mailer: PHP/". phpversion();
    $mail = mail($emailReceptor,$asunto,$msg,$header);
echo 1;
?>