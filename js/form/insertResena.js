$('#btnEnviar2').click(()=>{
    var anonimo = 1;
    $('#btnEnviar2').css('display','none');
    $('#cargandoGif2').css('display','block');
    if( $('#anonimo').prop('checked') == true ) {
        anonimo = 1;
    }else{
        anonimo = 0;
    }
    $.ajax({
        type: "POST",
        url: "php/insertResena.php",
        data: { 
            anonimo: anonimo,
            nombre: $('#nombre2').val(),
            correo: $('#email2').val(),
            reseña: $('#reseña').val(),
            puntuacion: $('#puntuacion').val()
        },
        success: function (response){
            if(response==1){
                $('#cargandoGif2').css('display','none');
                $('#btnEnviar2').css('display','inline-block');
                alert('Reseña publicada exitosamente!');
                window.location.href="";
            }else {
                $('#cargandoGif2').css('display','none');
                $('#btnEnviar2').css('display','inline-block');
                alert("Ha ocurrido un error.\n"+response);
            }             
        }
    })
    return false;
})
