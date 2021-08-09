$(function () {
    $('div[id*="biziqrecentreviews-"]').css("visibility", "visible").addClass('swiper-wrapper').wrap('<div class="swiper-container"></div>').after('<div class="swiper-pagination"></div><div class="swiper-button-next"></div><div class="swiper-button-prev"></div>');
    $('.biziq-review').addClass('swiper-slide');
  });
  
  $(function () {
    var time = 8000;
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0, // this changes the width between the slides
        centeredSlides: true,
        loop: true,
        effect: 'slide', // this sets animation type: "slide", "fade", "cube", "coverflow" or "flip"
        autoplay: {
          delay: time,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      }); 
  });
  