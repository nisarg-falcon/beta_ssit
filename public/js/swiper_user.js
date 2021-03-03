
var swiper = new Swiper('.swiper-container', {
    
    slidesPerView: 2,
    spaceBetween: 10, 
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    }
});
var swiper = new Swiper('.placement-swiper-container', {
    
    slidesPerView: 5,
    spaceBetween: 20, 
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
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