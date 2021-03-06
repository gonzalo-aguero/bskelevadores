<?php 
require("php/cargarComentarios.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>BSK - Reseñas</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="BSK elevadores residenciales,bsk,elevadores,elevadores residenciales,ascensores,ascensores residenciales,bsk ascensores"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-sclae=1.0">
    <meta name="description" content=" "/>
    <meta name="author" content="GMA Desarrollo web" />
    <meta http-equiv="expires" content="43200" />
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
    <link rel="stylesheet" href="css/paginas/resenas.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="js/jquery.bxslider.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <div id="logoANDtitulo" class="div-nav">
                <img src="img/logo/logo_resX4_y_nombre_resX2_png.png" class="animate__animated animate__fadeIn animate__slow" alt="" srcset="">
            </div>
            <div class="div2-nav">
                <div id="btnAbrirMenu"><img src="iconosMaterial.io/menu-white-18dp.svg" alt="" srcset=""></div>
                <div id="btnPresupuesto">PRESUPUESTO</div>
            </div>
            <div id="div-menu" class="animate__animated animate__fadeIn">
                <div></div>
                <ul class="animate__animated animate__fadeInRightBig">
                    <img id="btnCerrarMenu" src="iconosMaterial.io/clear-white-18dp.svg" alt="Cerrar">
                    <li id="btnIrInicio" class="btnIrInicio">Inicio</li>
                    <li class="btnIrNosotros">Nosotros</li>
                    <li class="btnIrNuestoProducto">Nuestro producto</li>
                    <li class="btnIrReseñas" style="color:#f19253">Reseñas</li>
                    <li class="btnIrContacto">Contacto</li>
                    <div id="btnPresupuesto_menu">PRESUPUESTO</div>
                </ul>
            </div>
        </nav>
    </header>
    <div id="div-cargando" class="animate__animated animate__faster">
        <div id="div-izq" class="animate__animated animate__slow" ></div>
        <div id="div-imgCargando" ><img src="img/logo/logo_resX4_png.png" class="animate__animated animate__slow animate__fadeIn" alt="Cargando..."></div>
        <div id="div-der" class="animate__animated animate__slow" ></div>
    </div>
    <section class="portadaM2" style="background-image: url(img/resenas/puntuacion.jpg);">
        <div>
            <h1>Danos tu opinión</h1>
        </div>
        <div>
            <h3>Dejando una pequeña reseña sobre tu experiencia nos ayudás a que podamos ofrecer el mejor servicio posible.</h3>
        </div>
    </section>
    <section id="section-reseñas">
        <article id="blq-estrellasTotal">
            <?php
                printEstrellasTotal();
            ?>
        </article>
        <div id="bloqueReseñas">
            <div id="div-formReseña">
                <h1>Tu reseña</h1>
                <p>Comparte tu experiencia,<br> te lo agradeceríamos un montón.</p>
                <form id="formReseña" action="">
                    <label for="anonimo">Anónimo</label>
                    <input type="checkbox" name="anonimo" id="anonimo" value="true">
                    <label for="nombre2">Nombre</label>
                    <input type="text" name="nombre2" id="nombre2" placeholder="Nombre">
                    <label for="email2">e-mail</label>
                    <input type="email" name="email2" id="email2" placeholder="Correo electrónico">
                    <label for="reseña">Comentarios</label>
                    <textarea name="reseña" id="reseña" placeholder="Describe tu experiencia"></textarea>
                    <select name="puntuacion" id="puntuacion">
                        <option value="3">Seleccionar puntuacion</option>
                        <option value="1">1 estrella</option>
                        <option value="2">2 estrellas</option>
                        <option value="3">3 estrellas</option>
                        <option value="4">4 estrellas</option>
                        <option value="5">5 estrellas</option>
                    </select>
                    <input type="submit" id="btnEnviar2" class="btnEnviar2" value="Publicar">
                    <img id="cargandoGif2" class="cargandoGif" src="gif/cargandoGif.gif" alt="">
                </form>
            </div>
            <div id="div-reseñas">
                <h1>Experiencias de otros clientes</h1>
                <?php 
                    loadReseñas();
                ?>
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
    <script src="js/form/insertResena.js"></script>
    <script src="js/form/mail1.js"></script>
</body>
</html>