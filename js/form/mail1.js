$('#btnEnviar1').click(()=>{
    var nombre = $('#nombre1').val();
    var correo = $('#email1').val();
    var mensaje = $('#mensaje1').val();
    if(nombre != "" && correo != "" && mensaje != ""){
        sendMail1(nombre,correo,mensaje)
    }else{
        if(nombre == ""){
            $('#nombre1').css('border-bottom-color','red')
        }
        if(correo == ""){
            $('#email1').css('border-bottom-color','red')
        }
        if(mensaje == ""){
            $('#mensaje1').css('border-bottom-color','red')
        }
        alert("Debe completar todos los campos.")
    }
    return false;
})
function sendMail1(nombre,correo,mensaje) {
    $('#btnEnviar1').css('display','none');
        $('#cargandoGif1').css('display','block');
        $.ajax({
            type: "POST",
            url: "php/mail1.php",
            data: { 
                nombre: nombre,
                correo: correo,
                mensaje: mensaje
            },
            success: function (response){
                if(response==1){
                    $('#cargandoGif1').css('display','none');
                    $('#btnEnviar1').css('display','inline-block');
                    alert('Correo enviado correctamente!');
                    $('#nombre1').css('border-bottom-color','green').val("")
                    $('#email1').css('border-bottom-color','green').val("")
                    $('#mensaje1').css('border-bottom-color','green').val("")
                }else if(response == 0){
                    $('#cargandoGif1').css('display','none');
                    $('#btnEnviar1').css('display','inline-block');
                    alert("Debe completar todos los campos.")
                }else{
                    $('#cargandoGif1').css('display','none');
                    $('#btnEnviar1').css('display','inline-block');
                    alert("Ha ocurrido un error.");
                }             
            }
        })
}