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

  $(document).ready(function() {
    if ($(".openFilterMenu").length) {
        $(".openFilterMenu").click(function() {
            var a = $("html");
            a.toggleClass("openFilterMenu");
        });
    }
});

$(document).ready(function() {
  if ($(".grid_button").length) {
      $(".grid_button").click(function() {
          var a = $("html");
          var assive = $(".asivus");
          var for_col_6 = $(".for_col_6");
          var for_col_8 = $(".for_col_8");

          // grid_button_active sınıfının olup olmadığını kontrol edin
          if (a.hasClass("grid_button_active")) {
              a.removeClass("grid_button_active");
              assive.removeClass("col-xl-6").addClass("col-xl-12");
              for_col_6.removeClass("col-lg-6").addClass("col-lg-4");
              for_col_8.removeClass("col-lg-6").addClass("col-lg-8");
          } else {
              a.addClass("grid_button_active");
              assive.removeClass("col-xl-12").addClass("col-xl-6");
              for_col_6.removeClass("col-lg-4").addClass("col-lg-6");
              for_col_8.removeClass("col-lg-8").addClass("col-lg-6");
          }
      });
  }
});

$(document).ready(function() {
  if ($(".openMenu").length) {
      $(".openMenu").click(function() {
          var a = $("html");
          a.toggleClass("openMenu");
      });
  }
});

  AOS.init();
