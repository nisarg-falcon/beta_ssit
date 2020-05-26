// index page
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
          slidesPerView: 1,
          spaceBetween: 10,
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 10,
        }
    }
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    320: {
        slidesPerView: 3,
        spaceBetween: 20,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 10,
    }
  }
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  slidesPerView: 1,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  thumbs: {
      swiper: galleryThumbs
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
      slidesPerView: 1,
      spaceBetween: 10,
    },
  }
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

// facilities
var civilSwiper = new Swiper('.civil-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});
var compSwiper = new Swiper('.comp-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});
var elecSwiper = new Swiper('.elec-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});
var mechswiper = new Swiper('.mech-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});
var ecswiper = new Swiper('.ec-swiper-container',{
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});
var mcaswiper = new Swiper('.mca-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
    }
});