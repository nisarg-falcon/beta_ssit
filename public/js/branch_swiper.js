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