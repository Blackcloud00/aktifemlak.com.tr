var swiper = new Swiper(".main_slider", {
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".one_cikanlar", {
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1100: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1530: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  var swiper = new Swiper(".customer_comments_slider", {
    slidesPerView: 'auto',
    spaceBetween: 15,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },

  });

  AOS.init();
