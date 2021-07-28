//--------------------------------
// ハンバーガーメニュー開閉
//--------------------------------
$(function () {
  $(".spMenu_btn").on("click", function () {
    $(this).toggleClass("open");

    if ($(this).hasClass("open")) {
      $("body").addClass("is-fixed");
      $(".spMenu").addClass("open");
    } else {
      $("body").removeClass("is-fixed");
      $(".spMenu").removeClass("open");
    }
  });

  $(".spMenu_item").click(function () {
    $("body").removeClass("is-fixed");
    $(".spMenu, .spMenu_btn").removeClass("open");
  });

  $(".spMenu_list a[href]").on("click", function (event) {
    $(".spMenu_btn").trigger("click");
  });
});

//--------------------------------
// 検索ボックス
//--------------------------------
$(".open-btn1").click(function () {
  $(this).toggleClass("btn-active"); //.open-btnは、クリックごとにbtnactiveクラスを付与＆除去。1回目のクリック時は付与
  $("#search-wrap").toggleClass("panel-active"); //#search-wrapへpanelactiveクラスを付与
  $("#search-text").focus(); //テキスト入力のinputにフォーカス
});


//--------------------------------
// トップへ戻るボタン
//--------------------------------
function getScrolled() {
  return ( window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
}

var topButton = document.getElementById( 'js-scroll-fadein' );

window.onscroll = function() {
  ( getScrolled() > 300 ) ? topButton.classList.add( 'is-fadein' ): topButton.classList.remove( 'is-fadein' );
};

function scrollToTop() {
  var scrolled = getScrolled();
  window.scrollTo( 0, Math.floor( scrolled / 2 ) );
  if ( scrolled > 0 ) {
    window.setTimeout( scrollToTop, 30 );
  }
};

topButton.onclick = function() {
  scrollToTop();
};

//--------------------------------
// 
//--------------------------------