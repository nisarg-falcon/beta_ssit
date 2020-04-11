
var scrlcontroller = new ScrollMagic.Controller();
var theadertxt = new TimelineMax();
var hdtxt = $('.txt-container').children(); 
theadertxt.from(hdtxt,2,{x: -500, opacity: 0});

var triggerdown = $('body')[0].clientHeight / $('#upper-header3')[0].clientHeight;

for(var i=1; i<=$('.nav3').children().length ;i++){
    var dur = $('.scroll-start'+i)[0].clientHeight;
    new ScrollMagic.Scene({
        triggerElement: ".scroll-start"+i,
        triggerHook: triggerdown/100,
        duration: dur
    })
    .setClassToggle('.nav3-item:nth-child('+i+')','nav3-active')
    .addTo(scrlcontroller);
}


$(document).ready(function(){
    var header = $('#upper-header1');
    $("#myBtn").click(function(){
        $('html,body').animate({
            scrollTop: 0
        },800);
    });
    $("a").on('click',function(event){
        $(".inner-nav").removeClass("show");
        if(this.hash !== ""){
            event.preventDefault();
            
            var hash = this.hash;
            if(hash == '#gallery'){
                var scroll = $(hash).offset().top - 70 ;
            }
            else{
                var scroll = $(hash).offset().top - $('#upper-header3')[0].clientHeight ;
            }
            $('html,body').animate({
                scrollTop: scroll
            },800);
        }
    });
});