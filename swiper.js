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


const bannerAutoLoop = new Swiper('.bannerAutoLoop', {
  loop: true, 
  speed: 10000, 
  spaceBetween: 0,
  autoplay: {
    delay: 0, 
    disableOnInteraction: false,
  },
  slidesPerView: 'auto',
  allowTouchMove: false,
});