"use strict"; function getScrolled() { return void 0 !== window.pageYOffset ? window.pageYOffset : document.documentElement.scrollTop } $(function () { $(".spMenu_btn").on("click", function () { $(this).toggleClass("open"), $(this).hasClass("open") ? ($("body").addClass("is-fixed"), $(".spMenu").addClass("open")) : ($("body").removeClass("is-fixed"), $(".spMenu").removeClass("open")) }), $(".spMenu_item").click(function () { $("body").removeClass("is-fixed"), $(".spMenu, .spMenu_btn").removeClass("open") }), $(".spMenu_list a[href]").on("click", function (o) { $(".spMenu_btn").trigger("click") }) }), $(".open-btn1").click(function () { $(this).toggleClass("btn-active"), $("#search-wrap").toggleClass("panel-active"), $("#search-text").focus() }); var topButton = document.getElementById("js-scroll-fadein"); function scrollToTop() { var o = getScrolled(); window.scrollTo(0, Math.floor(o / 2)), 0 < o && window.setTimeout(scrollToTop, 30) } window.onscroll = function () { 300 < getScrolled() ? topButton.classList.add("is-fadein") : topButton.classList.remove("is-fadein") }, topButton.onclick = function () { scrollToTop() };
jQuery(function ($) {
  var headerHeight = $("header").outerHeight();
  var urlHash = location.hash;
  if (urlHash) {
    $("body,html").stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $("body,html").stop().animate({ scrollTop: position }, 500);
    }, 100);
  }
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $("body,html").stop().animate({ scrollTop: position }, 500);
    return false;
  });
});