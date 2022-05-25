animCargando();
function animCargando() {
    $('#div-imgCargando > img').css('display', 'block')
    var animCargando = setInterval(() => {
        $('#div-imgCargando > img').removeClass("animate__fadeIn").addClass("animate__fadeOut");
        setTimeout(() => {
            $('#div-imgCargando > img').removeClass("animate__fadeOut").addClass("animate__fadeIn");
        }, 2000);
    }, 4000);
}
function endAnimCargando() {
    clearInterval(animCargando);
    $('#div-imgCargando > img').removeClass("animate__fadeIn")
        .removeClass("animate__slow")
        .addClass("animate__fast")
        .addClass("animate__fadeOut");
    setTimeout(() => {
        $('#div-izq').addClass("animate__fadeOutLeftBig");
        $('#div-der').addClass("animate__fadeOutRightBig");
        $('body').css('overflow-y', 'auto');
        setTimeout(() => {
            $('#div-cargando').css('display', 'none');
        }, 1000);
    }, 500);
}
$(document).ready(() => {
    endAnimCargando();
    $('.slider').bxSlider({
        auto: false,
        speed: 1000,
        pause: 5000
    });
    setTimeout(() => {
        $('.div-nav > img').css('display', 'block')
    }, 1000);
    //eventos al hacer scroll
    var cercania = 450;
    $(document).on("scroll", function () {
        var position_pediPresupuesto = document.getElementById('tituloPediPresupuesto').getBoundingClientRect().top;
        if (position_pediPresupuesto < cercania) {
            $('#btnContactanos').addClass("animate__bounce");
        } else {
            $('#btnContactanos').removeClass("animate__bounce");
        }
    })
})