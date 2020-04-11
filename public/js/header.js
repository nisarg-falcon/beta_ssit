$(document).ready(function(){
    $('.nav3-item').click(function(){
        $(this).addClass('nav3-active');
        var nv_index = $(this).index();
        for(var i=0; i<$('.nav3').children().length;i++){
           if( i != nv_index){
               if($('.nav3-item:nth-child('+(i+1)+')').hasClass('nav3-active')){
                   $('.nav3-item:nth-child('+(i+1)+')').removeClass('nav3-active');
                };
            }
            else if( i == nv_index){
                continue;
            }
        }
    });
});