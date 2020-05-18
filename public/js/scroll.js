
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
    console.log($('#upper-header3')[0].clientHeight);
    $(".nav3-item>a").on('click',function(event){
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
var swiper = new Swiper('.swiper-container', {    
    slidesPerView: 2,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
    }
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  loop:true,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

var swiper = new Swiper('.placement-swiper-container', {
    
    slidesPerView: 5,
    spaceBetween: 20, 
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 20,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    }
});
var swiper = new Swiper('.labs-swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
    //   autoplay: {
    //     delay: 1500,
    //     disableOnInteraction: false,
    // }
});