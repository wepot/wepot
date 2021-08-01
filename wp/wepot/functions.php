<?php
//テーマのセットアップ
//HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
//Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');
//検索結果に固定ページを含めない
function search_page($search)
{
    if (is_search()) {
        $search .= " AND post_type = 'post' ";
    }
    return $search;
}
add_filter('posts_search', 'search_page');
//サイドバーにウィジェット追加
function widgetarea_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'side-widget',
        'before_widget' => '<div class="sideMenu_wrap"><div class="sideMenu_list">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="sideMenu_title">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'widgetarea_init');
// ユーザープロフィールの項目のカスタマイズ
function my_user_meta($wb)
{
    //項目の追加
    $wb['twitter'] = 'Twitter';
    $wb['facebook'] = 'Facebook';
    $wb['instagram'] = 'Instagram';
    $wb['youtube'] = 'YouTube';
    $wb['position'] = '役職';

    return $wb;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);
// 投稿ページの最初のh2直前に目次を表示
function toc_in($the_content)
{
    if (is_single()) {
        $toc = "<div id=\"toc\"></div>";

        $h2 = '/<h2.*?>/i'; //H2見出し
        if (preg_match($h2, $the_content, $h2s)) {
            $the_content  = preg_replace($h2, $toc . $h2s[0], $the_content, 1);
        }
    }
    return $the_content;
}
add_filter('the_content', 'toc_in');
