<?php 
/*
function cargarImg($idEImg){
    require('php/connection.php'); 
    //$idEImg = $_POST['idEImg'];
    $sql = "SELECT * FROM eimg WHERE idEImg = '$idEImg'";
    $resultado = mysqli_query($connection,$sql);
    $consulta = mysqli_fetch_array($resultado);
        $idEImg = $consulta[0];
        $idImg = $consulta[1];
    //Se obtiene la imagen
    $sql = "SELECT * FROM imagenes WHERE idImg = '$idImg'";
    $resultado = mysqli_query($connection,$sql);
    $numRegistros = mysqli_num_rows($resultado);
    if($numRegistros >= 1){
        $consulta = mysqli_fetch_array($resultado);
        $idImg = $consulta[0];
        $imagen = $consulta[1];
        $categoria = $consulta[2];
        $anchoimg = $consulta[3];
        $altoimg = $consulta[4];
        $imagen = array(
            'idImg'=>$consulta[0],//id
            'img'=>$consulta[1],//imagen
            'cat'=>$consulta[2],//categoria
            'anchoImg'=>$consulta[3],//width
            'altoImg'=>$consulta[4]//height
        );
        return $imagen ;
    }else{
        return '';
    }
}
require('php/connection.php'); 
$sql = "SELECT * FROM eimg";
$resultado = mysqli_query($connection,$sql);
$x = 0;
$imagenes = array();
while (mysqli_fetch_array($resultado)) {
    $x++;
    $imagenes[$x-1] = cargarImg($x);   
}
echo $imagenes[0][1];
echo '<img id="imagen'.$idEImg.'" src="data:image/jpg;base64,'.base64_encode($imagen).'"'.
'style=" width:'.$anchoimg.'; height:'.$altoimg.' ">'
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>BSK Elevadores residenciales - Inicio</title>
    <meta charset="UTF-8">
    <meta name="keywords"
        content="BSK elevadores residenciales,bsk,elevadores,elevadores residenciales,ascensores,ascensores residenciales,bsk ascensores" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <meta name="description" content=" " />
    <meta name="author" content="GMA Desarrollo web" />
            <meta http-equiv='cache-control' content='no-cache'>
            <meta http-equiv='expires' content='43200'>
            <meta http-equiv='pragma' content='no-cache'>
    <link class="icono" rel="icon" type="image/png" href="img/logo/logo_resX4_png.png" />
    <link rel="stylesheet" href="css/fuenteMontserrat.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cargando.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="iconos/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/portada.css">
    <link rel="stylesheet" href="css/tarj.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVXSWLMZXB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-PVXSWLMZXB');
    </script>
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
    <header>
        <nav>
            <div id="logoANDtitulo" class="div-nav">
                <img src="img/logo/logo_resX4_y_nombre_resX2_png.png"
                    class="animate__animated animate__fadeIn animate__slow" alt="" srcset="">
            </div>
            <div class="div2-nav">
                <div id="btnAbrirMenu"><img src="iconosMaterial.io/menu-white-18dp.svg" alt="" srcset=""></div>
                <div id="btnPresupuesto">PRESUPUESTO</div>
            </div>
            <div id="div-menu" class="animate__animated animate__fadeIn">
                <div></div>
                <ul class="animate__animated animate__fadeInRightBig">
                    <img id="btnCerrarMenu" src="iconosMaterial.io/clear-white-18dp.svg" alt="Cerrar">
                    <li id="btnIrInicio" class="btnIrInicio" style="color:#f19253">Inicio</li>
                    <li class="btnIrNosotros">Nosotros</li>
                    <li class="btnIrNuestoProducto">Nuestro producto</li>
                    <li class="btnIrReseñas">Reseñas</li>
                    <li class="btnIrContacto">Contacto</li>
                    <div id="btnPresupuesto_menu">PRESUPUESTO</div>
                </ul>
            </div>
        </nav>
    </header>
    <div id="div-cargando" class="animate__animated animate__faster">
        <div id="div-izq" class="animate__animated animate__slow"></div>
        <div id="div-imgCargando">
            <img src="img/logo/logo_resX4_png.png" class="animate__animated animate__slow animate__fadeIn"
                alt="Cargando...">
        </div>
        <div id="div-der" class="animate__animated animate__slow"></div>
    </div>
    <section class="portada">
        <div class="slider">
            <div id="div-portada1" class="div-portada" style="background-image: url(img/portada/1.jpg);">
                <div>
                    <h1>Diseño y versatilidad</h1>
                </div>
                <div>
                    <h3>¡Instalación rápida en 72 horas!</h3>
                </div>
                <div class="btnPortada btnIrContacto">CONTACTANOS</div>
            </div>
            <div id="div-portada2" class="div-portada" style="background-image: url(img/portada/2.jpg);">
                <div>
                    <h1>Hacemos su vida más fácil</h1>
                </div>
                <div>
                    <h3>Llegar a planta alta no es más un problema.</h3>
                </div>
                <div class="btnPortada btnIrContacto">CONTACTANOS</div>
            </div>
            <div id="div-portada3" class="div-portada" style="background-image: url(img/portada/3.jpg);">
                <div>
                    <h1>Seguridad y confort</h1>
                </div>
                <div>
                    <h3>Trasladate verticalmente con seguridad y comodidad.</h3>
                </div>
                <div class="btnPortada btnIrContacto">CONTACTANOS</div>
            </div>
        </div>
    </section>
    <img id="fondo1" src="img/fondo2.jpg" alt="">
    <section id="section-porqueElegirnos">
        <div class="div-section-title">
            <h1 style="color:#f19253">Ventajas del sistema</h1>
        </div>
        <div class="div-section-txt">
            <h1>- Diseño panorámico</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Visión a 360º</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Perfecto para ambientes interiores como exteriores </h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Sin sobrerrecorrido ni bajo recorrido</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Instalación rápida y limpia</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- No requiere obra civil complementaria</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Es autoportante, se apoya en el piso existente</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Ingeniería simple en el sistema con casi inexistente mantenimiento</h1>
            <p></p>
        </div>
        <div class="div-section-txt">
            <h1>- Bajo costo</h1>
            <p></p>
        </div>
        <div id="btnPorqueElegirnos" class="btnMasInformacion">Más información</div>
    </section>
    <section id="section-caracteristicas">
        <article class="tarjeta_T2 tarjetaEditable">
            <div id="w1" onclick="cambiarImagen(id)" class="divImgTarj">
                <img id="w1_1" class="animate__animated animate__fadeIn" src="img/w/w1_1.jpg">
                <img id="w1_2" class="animate__animated animate__fadeOut" src="img/w/w1_2.jpeg" style="display:none">
            </div>
            <div class="divTxtTarj">
                <h2 id="" style="color:''; display:block">Máximo aprovechamiento del espacio</h2>
                <p id="" style="color:''; display:block">No necesita disponer de demasiado espacio. Puede elegir entre
                    nuestros cuatro tamaños.</p>
            </div>
        </article>
        <article class="tarjeta_T4 tarjetaEditable">
            <div id="w2" onclick="cambiarImagen(id)" class="divImgTarj">
                <img id="w2_1" class="animate__animated animate__fadeIn" src="img/w/w2_1.jpg">
                <img id="w2_2" class="animate__animated animate__fadeOut" src="img/w/w2_2.jpg" style="display:none">
            </div>
            <div class="divTxtTarj">
                <h2 id="" style="color:''; display:block">Sin bajo recorrido ni cuartos de máquinas</h2>
                <p id="" style="color:''; display:block">Los ascensores BSK están desarrollados para viviendas y
                    departamentos.<br> Especialmente útil para personas
                    con escasa movilidad.</p>
            </div>
        </article>
        <div id="blq-medidas">
            <h1>MEDIDAS</h1>
            <div id="blq-tarjetasMedidas">
                <div class="tarjeta_T3">
                    <img src="img/nuestroProducto/miniA.jpg" alt="" srcset="">
                    <h2 id="" style="color:''; display:block">MINI</h2>
                    <p id="" style="color:''; display:block">
                        Medida exterior: 100cm x 100cm<br>
                        Cabina: 80cm x 85cm<br>
                        Capacidad: 2 personas
                    </p>
                </div>
                <div class="tarjeta_T3">
                    <img src="img/nuestroProducto/midiA.jpg" alt="" srcset="">
                    <h2 id="" style="color:''; display:block">MEDIO A</h2>
                    <p id="" style="color:''; display:block">
                        Medida exterior: 100cm x 135cm<br>
                        Cabina: 115cm x 85cm<br>
                        Capacidad: 3 personas o 1 silla de ruedas
                    </p>
                </div>
                <div class="tarjeta_T3">
                    <img src="img/nuestroProducto/midiB.jpg" alt="" srcset="">
                    <h2 id="" style="color:''; display:block">MEDIO B</h2>
                    <p id="" style="color:''; display:block">
                        Medida exterior: 110cm x 125cm<br>
                        Cabina: 115cm x 90cm<br>
                        Capacidad: 3 personas o 1 silla de ruedas
                    </p>
                </div>
                <div class="tarjeta_T3">
                    <img src="img/nuestroProducto/amedida.jpg" alt="" srcset="">
                    <h2 id="" style="color:''; display:block">Fuera de estándar</h2>
                    <p id="" style="color:''; display:block">
                        Hecho a medida según las necesidades del cliente.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="section-pediPresupuesto">
        <div>
            <h1 id="tituloPediPresupuesto">¡Pedí tu presupuesto!</h1>
        </div>
        <div>
            <h3>Contactanos hoy mismo y conocé todo sobre nuestros productos.</h3>
        </div>
        <div id="btnContactanos" class="btnPortada btnIrContacto animate__animated">CONTACTANOS</div>
    </section>
    <div id="separador"></div>
    <footer style="background-image: url(img/cliente.jpg);">
        <div>
            <h1>Información de contacto</h1>
            <p>
                Dirección comercial:<br>
                San Lorenzo 1112,<br>
                María Grande, Entre Ríos<br>
                <br>
                Tel: 343 4549329<br>
                consultas@bskelevadores.com<br>
                <br>
                Redes sociales:
            </p>
            <span class="icon-facebook"></span>
            <span class="icon-instagram"></span>
            <span class="icon-youtube"></span>
        </div>
        <div>
            <h1>Índice</h1>
            <p>
                <span class="btnIrInicio">Inicio</span>
                <span class="btnIrNosotros">Nosotros</span>
                <span class="btnIrNuestoProducto">Nuesto producto</span>
                <span class="btnIrContacto">Contacto</span>
                <span class="btnIrReseñas">Reseñas</span>
            </p>
        </div>
        <div class="div-formConsultas">
            <form action="" class="formConsultas">
                <h1>Consultas</h1>
                <input type="text" name="nombre1" id="nombre1" placeholder="Nombre">
                <input type="email" name="email1" id="email1" placeholder="Email">
                <textarea name="mensaje1" id="mensaje1" placeholder="Mensaje"></textarea>
                <input type="submit" id="btnEnviar1" class="btnEnviar" value="Enviar">
                <img id="cargandoGif1" class="cargandoGif" src="gif/cargandoGif.gif" alt="">
            </form>
        </div>
    </footer>
    <script src="js/index.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/enlaces.js"></script>
    <script src="js/img.js"></script>
    <script src="js/form/mail1.js"></script>
</body>

</html>