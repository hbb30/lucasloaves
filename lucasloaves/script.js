document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new mySwiper('.swiper-container', {
    loop: true,
    autoplay: {
      delay: 2000, // Set the autoplay delay in milliseconds
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});
