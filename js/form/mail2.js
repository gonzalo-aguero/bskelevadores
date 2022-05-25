$('#btnEnviar2').click(()=>{
    $('#nombre2').css('border-bottom-color','#d8d8d8')
    $('#apellido2').css('border-bottom-color','#d8d8d8')
    $('#email2').css('border-bottom-color','#d8d8d8')
    $('#telefono2').css('border-bottom-color','#d8d8d8')
    var nombre = $('#nombre2').val();
    var apellido = $('#apellido2').val();
    var correo = $('#email2').val();
    var telefono = $('#telefono2').val();
    var mensaje = $('#mensaje2').val();
    if(nombre!=""&&apellido!=""&&correo!=""&&telefono!=""){
        sendMail2(nombre,apellido,correo,telefono,mensaje)
    }else{
        if(nombre == ""){
            $('#nombre2').css('border-bottom-color','red')
        }
        if(apellido == ""){
            $('#apellido2').css('border-bottom-color','red')
        }
        if(correo == ""){
            $('#email2').css('border-bottom-color','red')
        }
        if(telefono == ""){
            $('#telefono2').css('border-bottom-color','red')
        }
        alert("Debe llenar todos los campos con asterisco (*)")
    }
    return false;
})
function sendMail2(nombre,apellido,correo,telefono,mensaje) {
    $('#btnEnviar2').css('display','none');
        $('#cargandoGif2').css('display','block');
        $.ajax({
            type: "POST",
            url: "php/mail2.php",
            data: { 
                nombre: nombre,
                apellido: apellido,
                correo: correo,
                telefono: telefono,
                mensaje: mensaje
            },
            success: function (response){
                if(response==1){
                    $('#cargandoGif2').css('display','none');
                    $('#btnEnviar2').css('display','inline-block');
                    alert('Correo enviado correctamente!');
                    $('#nombre2').css('border-bottom-color','green').val("")
                    $('#apellido2').css('border-bottom-color','green').val("")
                    $('#email2').css('border-bottom-color','green').val("")
                    $('#telefono2').css('border-bottom-color','green').val("")
                }else if(response == 0){
                    $('#cargandoGif2').css('display','none');
                    $('#btnEnviar2').css('display','inline-block');
                    alert("Debe completar todos los campos.")
                }else{
                    $('#cargandoGif2').css('display','none');
                    $('#btnEnviar2').css('display','inline-block');
                    alert("Ha ocurrido un error.");
                }             
            }
        })
}