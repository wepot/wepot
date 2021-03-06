"use strict";var swiper = new Swiper(".swiper-container", {
  speed: 800,
  slidesPerView: "1",
  loop: !0,
  spaceBetween: 20,
  autoplay: { delay: 5e3, disableOnInteraction: !1 },
  pagination: { el: ".swiper-pagination" },
  breakpoints: {
    450: { slidesPerView: "2", spaceBetween: 20 },
    700: { slidesPerView: "2", spaceBetween: 54 },
    876: { slidesPerView: "3", spaceBetween: 54 },
  },
});