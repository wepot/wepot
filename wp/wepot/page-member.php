<?php get_header(); ?>
<main class="main-contents">
    <section class="pageVisual bg01">
        <header class="pageVisual_heading">
            <h1 class="pageVisual_title">メンバー</h1>
        </header>
    </section><!-- /.pageVisual -->

    <section class="section_container memberPage">
        <div class="section_inner">
            <p class="section_text">Wepotを運営するメンバーはそれぞれに得意分野があり、経験やスキルも異なります。だからこそ、お互いにリスペクトしながら、補強し合い制作活動をしています。<br>ちょっとキャラが濃い・個性的。でも共通しているのは「クリエイティブなことが大好き」そんな個性溢れるメンバーのキャリアやプロフィールなどを覗いてみてください。また、SNSでも気軽にお声掛けください！</p>
            <div class="member">
                <ul class="member_list">
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/honma/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/honma.jpg" alt="ホンマ ヒロミツ" width="260" height="260">
                            </figure>
                            <p class="name">ホンマ ヒロミツ</p>
                            <p class="position">IA/<br>プロジェクトマネージャー</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/ayaka/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/ayaka.jpg" alt="あやか" width="260" height="260">
                            </figure>
                            <p class="name">あやか</p>
                            <p class="position">動画・映像編集者/<br>Webデザイナー/<br>ディレクター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/sato/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/yosuke.jpg" alt="よーすけ" width="260" height="260">
                            </figure>
                            <p class="name">よーすけ</p>
                            <p class="position">グロースハッカー/<br>デザイナー/<br>ディレクター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/tomoni/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/tomo.jpg" alt="とも" width="260" height="260">
                            </figure>
                            <p class="name">とも</p>
                            <p class="position">グラフィックデザイナー/<br>イラストレーター/<br>Webデザイナー/<br>動画クリエイター</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/saito/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/saito.jpg" alt="さいとぅ" width="260" height="260">
                            </figure>
                            <p class="name">さいとぅ</p>
                            <p class="position">デザイナー</p>
                        </a>
                    </li>
                    <li class="member_item">
                        <a href="<?php echo home_url(); ?>/about/member/maruo/" class="member_link">
                            <figure class="member_img"><img src="<?php echo get_template_directory_uri(); ?>/img/member/maruo.jpg" alt="まるこ" width="260" height="260">
                            </figure>
                            <p class="name">まるこ</p>
                            <p class="position">コーダー</p>
                        </a>
                    </li>
                </ul>
            </div><!-- /.member_wrap -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>