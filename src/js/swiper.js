const swiper = new Swiper(".swiper-container", {
  speed: 800, // スライドが切り替わる時の速さ
  slidesPerView: "1", // スライド表示数
  loop: true, // ループさせる
  spaceBetween: 20,
  autoplay: {
    // 自動再生 ON
    delay: 5000, // 次のスライドまでの秒数
    disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    450: {
      slidesPerView: "2",
      spaceBetween: 30,
    },
    991: {
      slidesPerView: "3",
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: "3",
      spaceBetween: 50,
    },
  },
});

