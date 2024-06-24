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
  });

  var swiper = new Swiper(".customer_comments_slider", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 15,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  }
  });