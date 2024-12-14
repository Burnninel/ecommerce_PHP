function exibirElemento($b, $e, elementos) {
  const btn = document.getElementById($b);
  const element = document.getElementById($e);

  btn.addEventListener("click", function () {
    if (element.classList.contains("none")) {
      element.classList.add("hidden");
      element.classList.remove("none");
    } else {
      elementos.forEach(function (el) {
        const elElement = document.getElementById(el);
        elElement.classList.add("hidden");
        elElement.classList.remove("none");
      });

      element.classList.remove("hidden");
      element.classList.add("none");
    }
  });
}

exibirElemento("medidas", "medidasProduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);
exibirElemento("composicao", "composicaoPorduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);
exibirElemento("lavagem", "lavagemProduto", [
  "medidasProduto",
  "composicaoPorduto",
  "lavagemProduto",
]);

var swiper = new Swiper(".bannerProductImg", {
  direction: "horizontal",
  slidesPerView: 1,
  mousewheel: true,
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  breakpoints: {
    1024: {
      direction: "vertical",
      slidesPerView: 1.08,
    },
  },
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
