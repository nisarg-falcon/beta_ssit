$(document).ready(function(){
    
    var w = window.innerWidth;
    var c = 0;
    $('.department-facilities').click(function(){
            $('.department-content').css('transform','translateY(-600px)');
            // $('.content-wrapper').css('overflow','hidden');
        // console.log("hello");
    });
    $('.department-staff').click(function(){
        $('.department-content').css('transform','translateY(0%)');
        // $('.content-wrapper').css('overflow','hidden');
    });
    $('.department-events').click(function(){
            $('.department-content').css('transform','translateY(-1200px)');
            // $('.content-wrapper').css('overflow','inherit');
    });

    $('.event-btn1').click(function(){
        $('.event-group').css('transform','translateX(-33.33%)');
    });
    $('.event-btn2').click(function(){
        $('.event-group').css('transform','translateX(-66.66%)');
    });
    $('.event-btn3').click(function(){
        $('.event-group').css('transform','translateX(0%)');
    });


   
    

});