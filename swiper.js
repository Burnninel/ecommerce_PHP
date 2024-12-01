var bannerInitial = new Swiper(".bannerInitial", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

new Swiper('.bannerAutoLoop', {
  slidesPerView: 3, 
  speed: 3000,
  autoplay: {
    delay: 0, 
    disableOnInteraction: false, 
  },
  loop: true, 
  breakpoints: {
    0: {
      slidesPerView: 1, 
      spaceBetween: 10,
      speed: 4000,
    },
    640: {
      slidesPerView: 2, 
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3, 
      spaceBetween: 20,
    },
  },
  allowTouchMove: false,
});