new Swiper(".bannerAutoLoop", {
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
    1280: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
  allowTouchMove: false,
});

new Swiper(".bannerBestSellers", {
  slidesPerView: 4, 
  spaceBetween: 10, 
  allowTouchMove: true,
  loop: true,
  navigation: {
    nextEl: ".nextBannerBestSellers",
    prevEl: ".prevBannerBestSellers",
  },
  breakpoints: {
    0: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
  },
});
