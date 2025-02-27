jQuery(document).ready(function ($) {
  //   var swiper = new Swiper(".rendSwiper", {
  //     slidesPerView: 4,
  //     // centeredSlides: false,
  //     // centeredSlidesBounds: false,
  //     spaceBetween: 40,
  //     slidesPerGroup: 4,
  //     loop: true,
  //     loopAddBlankSlides: true,
  //     navigation: {
  //       nextEl: ".swiper-button-next",
  //       prevEl: ".swiper-button-prev",
  //     },
  //     breakpoints: {
  //       992: {
  //         slidesPerView: 4,
  //         slidesPerGroup: 4,
  //       },
  //       768: {
  //         slidesPerView: 2,
  //         slidesPerGroup: 2,
  //       },
  //       320: {
  //         slidesPerView: 1,
  //         slidesPerGroup: 1,
  //       }
  //     },
  //   });
  // });


  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 0,
    loop: true,
    loopedSlides: 2,
    watchOverflow: true,
    navigation: {
      nextEl: ".flex-next",
      prevEl: ".flex-prev",
    },
    autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false
    },
  });

  var swiper = new Swiper(".mySwiper_reviuse", {
    slidesPerView: 2,
    // centeredSlides: true,
    centeredSlides: false,
    spaceBetween: 20,
    loop: true,
    loopedSlides: 2,
    watchOverflow: true,
    navigation: {
      nextEl: ".flex-next_reviuse",
      prevEl: ".flex-prev_reviuse",
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
      },
      320: {
        slidesPerView: 1,
      },
    },
    // autoplay: {
    //   delay: 3000,
    //   stopOnLastSlide: false,
    //   disableOnInteraction: false
    // },
  });


  $(".callback-block-btn").on('click', function(e) {
    $('#popup_iframe_wrapper').addClass('popup_iframe_wrapper_open');
  });
  $("#popup_iframe_wrapper .jqmOverlay, .jqmClose.top-close.fa.fa-close").on('click', function(e) {
    $('#popup_iframe_wrapper').removeClass('popup_iframe_wrapper_open');
  });


  $("#mobilemenu-overlay").on('click', function(e) {
    $('#mobilemenu.leftside').attr('style', '');
    $("#mobilemenu-overlay").attr('style', 'display: none;');
  });
  
  $(".burger.pull-left").on('click', function(e) {
    console.log('test');
    $('#mobilemenu.leftside').attr('style', 'left: 0;');
    $("#mobilemenu-overlay").attr('style', 'display: block;');
  });
});