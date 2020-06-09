var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
  var swiper = new Swiper('.labs-swiper', {
    pagination: {
      el: '.labs-swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.labs-swiper-next',
      prevEl: '.labs-swiper-prev',
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
        slidesPerView: 4,
        spaceBetween: 10,
      },
      992: {
          slidesPerView: 5,
          spaceBetween: 20,
      }
    }
  });
  var swiper = new Swiper('.event-swiper-container', {    
    slidesPerView: 2,
    spaceBetween: 10, 
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
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
          slidesPerView: 1,
          spaceBetween: 10,
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 10,
        }
    }
  });
  