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
                Wepotは、強みが違う自立した個人事業主で構成されるクリエイティブチームです。それぞれに経験してきた分野が違うからこそ、お互いにリスペクトしています。ちょっとキャラが濃い・個性的。でも共通しているのはみんな創ることに情熱を注いでいる。そんなメンバーを紹介しているので、よかったらご覧ください。
            </p>
            <div class="member">
                <ul class="member_list">
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/honma/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/honma.jpg" alt="ホンマ ヒロミツ">
                            </figure>
                            <p class="name">ホンマ ヒロミツ</p>
                            <p class="position">プロジェクトマネージャー/<br>ディレクター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/ayaka/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/ayaka.jpg" alt="あやか">
                            </figure>
                            <p class="name">あやか</p>
                            <p class="position">動画・映像編集者/<br>Webデザイナー/<br>ディレクター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/sato/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/yosuke.jpg" alt="よーすけ">
                            </figure>
                            <p class="name">よーすけ</p>
                            <p class="position">グロースハッカー/<br>デザイナー/<br>ディレクター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/yukix/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/yukix.jpg" alt="ユキックス">
                            </figure>
                            <p class="name">ユキックス</p>
                            <p class="position">デザイナー/<br>アートディレクター/<br>Web制作クリエイター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/tomoni/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/tomo.jpg" alt="とも">
                            </figure>
                            <p class="name">とも</p>
                            <p class="position">グラフィックデザイナー/<br>イラストレーター/<br>Webデザイナー/<br>動画クリエイター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/saito/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/saito.jpg" alt="さいとぅ">
                            </figure>
                            <p class="name">さいとぅ</p>
                            <p class="position">デザイナー</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/maruo/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/maruo.jpg" alt="まるこ">
                            </figure>
                            <p class="name">まるこ</p>
                            <p class="position">マークアップエンジニア</p>
                        </a>
                    </li>
                </ul>
            </div><!-- /.member_wrap -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>