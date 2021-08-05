<?php get_header(); ?>
<main class="main-contents">
    <section class="pageVisual bg01">
        <header class="pageVisual_heading">
            <h1 class="pageVisual_title">メンバー</h1>
        </header>
    </section><!-- /.pageVisual -->

    <section class="section_container memberPage">
        <div class="section_inner">
            <p class="section_text">
                Wepotは、強みが違う自立したフリーランスで構成されるクリエイティブチームで構成されています。それぞれに経験してきた分野が違うからこそ、お互いにリスペクトしています。ちょっとキャラが濃い・個性的。でも共通しているのはみんな創ることに情熱を注いでいる。そんなメンバーを紹介しているので、よかったらご覧ください。
            </p>
            <div class="member">
                <ul class="member_list">
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/honma/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/honma.jpg" alt="本間大光">
                            </figure>
                            <p class="position">プロジェクトマネージャー/<br>ディレクター</p>
                            <p class="name">本間&nbsp;大光</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/ayaka/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/ayaka.jpg" alt="鈴木綾加">
                            </figure>
                            <p class="position">動画・映像編集者/<br>Webデザイナー/<br>ディレクター</p>
                            <p class="name">鈴木&nbsp;綾加</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/sato/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/yosuke.jpg" alt="佐藤陽介">
                            </figure>
                            <p class="position">グロースハッカー/<br>デザイナー/<br>ディレクター</p>
                            <p class="name">佐藤&nbsp;陽介</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/yukix/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/yukix.jpg" alt="黒羽裕子">
                            </figure>
                            <p class="position">デザイナー/<br>アートディレクター/<br>Web制作クリエイター</p>
                            <p class="name">黒羽&nbsp;裕子</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/tomoni/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/tomo.jpg" alt="奥田朋美">
                            </figure>
                            <p class="position">グラフィックデザイナー/<br>イラストレーター/<br>Webデザイナー/<br>動画クリエイター</p>
                            <p class="name">奥田&nbsp;朋美</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/saito/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/saito.jpg" alt="齋藤広大">
                            </figure>
                            <p class="position">デザイナー</p>
                            <p class="name">齋藤&nbsp;広大</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/maruo/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/maruo.jpg" alt="丸尾麻紀子">
                            </figure>
                            <p class="position">マークアップエンジニア</p>
                            <p class="name">丸尾&nbsp;麻紀子</p>
                        </a>
                    </li>
                </ul>
            </div><!-- /.member_wrap -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>