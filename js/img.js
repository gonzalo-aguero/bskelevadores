var w1 = 1;
var w2 = 1;
function cambiarImagen(w){
    if(w == "w1"){
        if(w1 == 1){
            w1 = 2;
            $('#w1_1').removeClass("animate__fadeIn").addClass("animate__fadeOut");
            setTimeout(() => {
                $('#w1_1').css('display','none')
                $('#w1_2').css('display','block')
                $('#w1_2').removeClass("animate__fadeOut").addClass("animate__fadeIn");
            }, 750);
        }else{
            w1 = 1;
            $('#w1_2').removeClass("animate__fadeIn").addClass("animate__fadeOut");
            setTimeout(() => {
                $('#w1_2').css('display','none')
                $('#w1_1').css('display','block')
                $('#w1_1').removeClass("animate__fadeOut").addClass("animate__fadeIn");
            }, 750);
        }
    }else if(w == "w2"){
        if(w2 == 1){
            w2 = 2;
            $('#w2_1').removeClass("animate__fadeIn").addClass("animate__fadeOut");
            setTimeout(() => {
                $('#w2_1').css('display','none')
                $('#w2_2').css('display','block')
                $('#w2_2').removeClass("animate__fadeOut").addClass("animate__fadeIn");
            }, 750);
        }else{
            w2 = 1;
            $('#w2_2').removeClass("animate__fadeIn").addClass("animate__fadeOut");
            setTimeout(() => {
                $('#w2_2').css('display','none')
                $('#w2_1').css('display','block')
                $('#w2_1').removeClass("animate__fadeOut").addClass("animate__fadeIn");
            }, 750);
        }
    }
}
