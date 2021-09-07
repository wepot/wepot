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
// 固定ページにも抜粋欄を設ける
add_post_type_support('page', 'excerpt');

// ブロックエディタ用CSS
add_action( 'after_setup_theme', function(){
	add_theme_support( 'editor-styles' );
	add_editor_style('/css/editor-style.css');
});

// 再利用ブロック表示
function ha_add_reuse_list_admin_menu() {
    add_menu_page( '再利用ブロック', '再利用ブロック', 'manage_options', 'edit.php?post_type=wp_block', '', 'dashicons-screenoptions', 20 );
}
add_action( 'admin_menu', 'ha_add_reuse_list_admin_menu' );

// ブロックパターン登録
register_block_pattern(
	'my-plugin/my-awesome-pattern01',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/border01.json' ), true )
);
register_block_pattern(
	'my-plugin/my-awesome-pattern02',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/border02.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern03',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/border03.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern04',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/red-text.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern05',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/single-blogCard.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern07',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/blockquote.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern08',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/left-talk.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern09',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/right-talk.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern10',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ullist-indent01.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern11',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ullist-indent02.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern12',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ullist-indent03.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern13',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ollist-indent01.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern14',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ollist-indent02.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern15',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/ollist-indent03.json' ), true ),
);

register_block_pattern_category(
    'wepot',
    array( 'label' => __( 'Wepot', 'my-plugin' ) ),
);

// テーブルデザイン
register_block_pattern(
	'my-plugin/my-awesome-pattern001',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/table01.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern002',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/table02.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern003',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/table03.json' ), true ),
);
register_block_pattern(
	'my-plugin/my-awesome-pattern004',
	json_decode( file_get_contents( dirname( __FILE__ ) . '/json/table04.json' ), true ),
);

register_block_pattern_category(
    'wepot02',
    array( 'label' => __( 'Wepot表', 'my-plugin' ) ),
);

// ブログカード
function ltl_get_the_excerpt( $post_id ){
  global $post;
  $post_bu = $post;
  $post = get_post( $post_id );
  setup_postdata( $post_id );
  $post = $post_bu;
  return $output;
}

//ショートコード
function nlink_scode($atts) {
extract(shortcode_atts(array(
'url'=>"",
'title'=>"",
// 'excerpt'=>""
),$atts));

$id = url_to_postid($url);//URLから投稿IDを取得

//タイトルを取得
if(empty($title)){
$title = esc_html(get_the_title($id));
}

//アイキャッチ画像を取得
if(has_post_thumbnail($id)) {
$img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'medium');
$img_tag = "<img src='" . $img[0] . "' alt='{$title}'/>";
}else{
$img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
}
$nlink .='

<article class="single-blogCard">
	<a href="'. $url .'" target="_blank" rel="noopener noreferrer">
		<figure>'. $img_tag .'</figure>
    <div class="single-blogCard_body">
      <p>'. $title .' </p>
    </div>
	</a>
</article>';

return $nlink;
}
add_shortcode("nlink", "nlink_scode");

// 投稿者権限でiframe埋め込み可
add_filter('user_has_cap','allow_unfiltered_html',10,3);
function allow_unfiltered_html($allcaps, $cap, $args ){
	$allcaps['unfiltered_html']=$allcaps['edit_posts'];
	return($allcaps);
}
