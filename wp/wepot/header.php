<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="x-ua-compatible" content="IE=edge"><!-- IE対策 -->
    <meta name="format-detection" content="telephone=no">

    <!-- OGP設定 -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Wepot" />
    <meta property="og:url" content="http://wepot.jp/" />
    <meta property="og:description" content="Wepotはデジタルクリエイティブの課題を解決し、クライアントと消費者の理想の未来を創ります。個々に違う強みを持ったフリーランスで構成されたWepotだからこそ、実現できるミッションです。" />
    <meta property="og:site_name" content="Wepot" />
    <meta property="og:image" content="【※※サムネイル画像URL/ドメインを含めた絶対パス※※】" />
    <meta property="og:locale" content="ja_JP">

    <!-- twitter card設定 -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@【※※TwitterのID※※】">

    <!-- favicon／Web Clipアイコン設定 -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/icon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icon/apple-touch-icon.png" sizes="180x180">

    <!-- style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <header id="header" class="header">
            <div class="header_inner">
                <div class="menu_wrap">
                    <div class="header_logo">
                        <a href="<?php echo home_url(); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 304.77 97.22" class="wepot">
                                <g>
                                    <g>
                                        <path d="M191.26 34.06c-11.65 1.55-21.1 12.89-21.1 24.63v37.55a1 1 0 001 1H176a1 1 0 001-1V77.49a1 1 0 011.63-.72 24.43 24.43 0 0021.41 5.36 24.18 24.18 0 0018.31-18 24.5 24.5 0 00-27.09-30.07zm7.16 41.4a17.63 17.63 0 01-21-21 17.42 17.42 0 0113.36-13.36 17.63 17.63 0 0121 21 17.42 17.42 0 01-13.36 13.36zM250.86 33.83a24.45 24.45 0 1024.44 24.45 24.47 24.47 0 00-24.44-24.45zm0 42a17.59 17.59 0 1117.59-17.59 17.6 17.6 0 01-17.59 17.63zM303.79 33.83H297a.49.49 0 01-.5-.49V19.56a1 1 0 00-1-1h-4.89a1 1 0 00-1 1v13.78a.49.49 0 01-.49.49h-6.75a1 1 0 00-1 1v4.89a1 1 0 001 1h6.75a.48.48 0 01.49.49v38.5a1 1 0 001 1h4.89a1 1 0 001-1V41.18a.49.49 0 01.49-.49h6.76a1 1 0 001-1v-4.87a1 1 0 00-.96-.99zM151 70a1.58 1.58 0 00-1.14.5A17.6 17.6 0 01120 62.31a.5.5 0 01.49-.6h37.65a3.43 3.43 0 003.43-3.4 24.45 24.45 0 10-24.45 24.41 24.23 24.23 0 0020.56-11.24 1 1 0 00-.83-1.52zm-13.88-29.31a17.63 17.63 0 0117.12 13.55.5.5 0 01-.49.61h-33.26a.5.5 0 01-.49-.61 17.63 17.63 0 0117.12-13.55z" fill="#fff" />
                                        <path d="M64.49 37.23a16.25 16.25 0 00-8.55 8.55 2.42 2.42 0 01-4.35 0 16.26 16.26 0 00-8.54-8.55 2.42 2.42 0 010-4.35 16.28 16.28 0 008.54-8.54 2.42 2.42 0 014.35 0 16.26 16.26 0 008.55 8.54 2.42 2.42 0 010 4.35z" fill="#00b4aa" />
                                        <path d="M0 1.78l1 6.64a1.56 1.56 0 001.54 1.33h4.88A1.56 1.56 0 009 8L8 1.33A1.54 1.54 0 006.44 0H1.56A1.55 1.55 0 000 1.78zM99.56 1.33L98.58 8a1.55 1.55 0 001.53 1.78H105a1.55 1.55 0 001.54-1.33l1-6.64A1.55 1.55 0 00106 0h-4.9a1.55 1.55 0 00-1.54 1.33zM19.73 82.72a1.57 1.57 0 001.27-.67c5.51-7.73 18.73-13 32.93-13 14.44 0 27.42 5.19 33 13a1.58 1.58 0 001.28.68h6a1.56 1.56 0 001.54-1.32l9.55-64.56a1.56 1.56 0 00-1.54-1.79h-4.89a1.56 1.56 0 00-1.54 1.33l-7.92 53.52a1.56 1.56 0 01-2.5 1c-8.2-6.22-20.15-9.83-33-9.83-13 0-25.1 3.68-33.28 10a1.56 1.56 0 01-2.51-1l-7.92-53.7a1.56 1.56 0 00-1.54-1.33H3.78a1.57 1.57 0 00-1.54 1.79l9.55 64.56a1.56 1.56 0 001.54 1.32z" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- ハンバーガーボタン -->
                    <button class="spMenu_btn" id="btn01" type="button">
                        <span class="spMenu_btn-bar1"></span>
                        <span class="spMenu_btn-bar2"></span>
                        <span class="spMenu_btn-bar3"></span>
                    </button>
                    <!-- menu -->
                    <nav class="mainMenu" aria-label="サイト内メニュー">
                        <ul class="mainMenu_list">
                            <li class="mainMenu_item">
                                <a href="<?php echo home_url(); ?>/about/">Wepotとは</a>
                            </li>
                            <li class="mainMenu_item">
                                <a href="<?php echo home_url(); ?>/blog/">BLOG</a>
                            </li>
                            <li class="mainMenu_item">
                                <a href="<?php echo home_url(); ?>/works/">実績一覧</a>
                            </li>
                            <li class="mainMenu-contact_btn">
                                <a href="<?php echo home_url(); ?>/contact/" class="button02"><span>お問い合わせ</span></a>
                            </li>
                        </ul>
                    </nav><!-- /.mainMenu -->

                    <div class="open-btn1"></div>
                    <div id="search-wrap">
                        <?php get_search_form(); ?>
                    </div>
                    <!--/search-wrap-->

                </div><!-- /.menu-wrap -->

                <div class="blogCategory">
                    <ul class="blogCategory_list">
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/webdesign">Webデザイン</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/wordpress">WordPress</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/marketing">マーケティング</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/direction">ディレクション</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/coding">コーディング</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/illust">イラスト</a>
                        </li>
                        <li class="blogCategory_item">
                            <a href="<?php echo home_url(); ?>/blog/video">動画編集</a>
                        </li>
                    </ul>
                </div>
                <!--/.blogCategory-->

                <!-- SPグローバルナビゲーション -->
                <nav id="spMenu" class="spMenu" aria-label="サイト内メニュー">
                    <ul class="spMenu_list">
                        <li class="spMenu_item">
                            <a href="<?php echo home_url(); ?>/about/" class="spMenu-link">Wepotとは</a>
                        </li>
                        <li class="spMenu_item">
                            <a href="<?php echo home_url(); ?>/blog/" class="spMenu-link">BLOG</a>
                            <ul class="category_list spMenu_category">
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/webdesign" class="button03">Webデザイン</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/wordpress" class="button03">WordPress</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/marketing" class="button03">マーケティング</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/direction" class="button03">ディレクション</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/coding" class="button03">コーディング</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/illust" class="button03">イラスト</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/video" class="button03">動画編集</a></li>
                                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/others" class="button03">その他</a></li>
                            </ul>
                        </li>
                        <li id="searchSp">
                            <?php get_template_part('searchformSp'); ?>
                        </li>
                        <li class="spMenu_item">
                            <a href="<?php echo home_url(); ?>/works/" class="spMenu-link">実績一覧</a>
                        </li>
                        <li class="spMenu_item spMenu_item-policy">
                            <a href="<?php echo home_url(); ?>/policy/" class="spMenu-link">プライバシーポリシー</a>
                        </li>
                        <li class="spMenu-contact_btn">
                            <a href="<?php echo home_url(); ?>/contact/" class="button01"><span>お問い合わせ</spa></a>
                        </li><!-- /.contact_btn -->
                    </ul>
                </nav>
            </div><!-- /.header_inner -->
        </header>