<?php 

function loadReseñas(){
    require("connection.php");
    $contador = 0;
    $sql = "SELECT * FROM `reseñas` ORDER BY `reseñas`.`idReseña` DESC ";
    $respuesta = mysqli_query($connection,$sql);
    while ($resultado = mysqli_fetch_array($respuesta)) {
        $contador++;
        $reseña = array(
            '0' => $resultado[0],//id
            '1' => $resultado[1],//nombre
            '2' => $resultado[2],//correo
            '3' => $resultado[3],//reseña
            '4' => $resultado[4]//puntuacion
        );
        printReseñas($reseña);
    }
    $totalReseñas = $contador;
    if($totalReseñas < 1){
        echo "Aún no hay ninguna reseña<br>¡Sé el primero en dejar una!";
    }else{
        echo "Número de reseñas: ".$totalReseñas;
    }
}
function printReseñas($reseña){
    ?>
    <div class="reseña" id="reseña<?php echo $reseña[0]?>">
        <img src="img/resenas/usuario.svg" alt="">
        <div>
            <div><span><?php echo $reseña[1]." || ";?></span><a href="mailto:<?php echo $reseña[2]?>"><?php echo $reseña[2]?></a></div>
            <p><?php echo $reseña[3]?></p>
        </div>
    </div>
    <?php
}
function printEstrellasTotal(){
    require("connection.php");
    $puntuacionTotal= 0;
    $contador = 0;
    $sql = "SELECT `puntuación` FROM `reseñas`";
    $respuesta = mysqli_query($connection,$sql);
    while ($resultado = mysqli_fetch_array($respuesta)) {
        $contador++;
        $puntuacionTotal = $puntuacionTotal + $resultado[0];
    }
    $estrellas = round(($puntuacionTotal / $contador), 0);
    //Si no hay puntuaciones se imprimen 5 estrellas vacías.
    if($puntuacionTotal == 0){
        for ($i=1; $i <= 5; $i++) { 
            ?>
                <img class="starVacia" src="img/resenas/estrellaVacia.svg" alt="" srcset="">
            <?php
        }
    }else{
        //Se imprimen la cantidad de estrellas rellenas
        for ($i=1; $i <= $estrellas; $i++) { 
            ?>
                <img class="star" src="img/resenas/estrella.svg" alt="" srcset="">
            <?php
        }
        //Se imprimen la cantidad de estrellas vacías
        for ($i=1; $i <= 5-$estrellas; $i++) { 
            ?>
                <img class="starVacia" src="img/resenas/estrellaVacia.svg" alt="" srcset="">
            <?php
        }
    }
}
?>