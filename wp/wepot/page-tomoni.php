<?php get_header(); ?>
<main class="main-contents">

    <section class="section_container">
        <div class="section_inner">
            <article class="profilePage">
                <section class="profilePage-sec01">
                    <figure class="profilePage_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member/tomo.jpg" alt="とも">
                    </figure><!-- /.img -->
                    <h1 class="name"><span>グラフィックデザイナー/<br class="br-sp02">イラストレーター/<br class="br-sp02">Webデザイナー/動画クリエイター</span><br>とも</h1>
                    <ul class="profilePage-sns">
                        <li class="profilePage-sns_item profilePage-sns_item01">
                            <a href="https://tomoni-design.com/" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-website.png" alt="アイコン">Web
                                Site</a>
                        </li>
                        <li class="profilePage-sns_item profilePage-sns_item02">
                            <a href="https://twitter.com/12designNeko" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="アイコン">Twitter</a>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec01 -->

                <section class="profilePage-sec02">
                    <header class="section_heading">
                        <h2 class="section_title">プロフィール</h2>
                    </header>
                    <p class="section_text">
                        ともに寄り添い、挑み続ける。をミッションとし、デザイナー・イラストレーターとして活動しています。<br>ノベルティや店頭POP・什器等の制作会社で約5年勤め、2020年11月独立。在職中はノベルティのデザインや新サービスのロゴ制作、自社商品の企画・ブランディングを行なう。販促物のデザインの経験を活かした、サービスと人を繋ぐデザインやグッズの作成・提案が得意です。
                    </p>
                </section><!-- /.profilePage-sec02 -->
                <section class="profilePage-sec03">
                    <header class="section_heading">
                        <h2 class="section_title">マインドセット</h2>
                    </header>
                    <p class="section_text">
                        お客さんと一緒にクリエイティブを作り上げることを大切にしています。3つのデザインの提供を心がけております。<br>1つ目は「わかりやすいデザイン」です。情報を整理し伝わりやすいデザインのご提供をいたします。<br>2つ目は「親しみやすいデザイン」です。共感から、興味へ繋げるデザインをご提案いたします。<br>3つ目は「あたたかいデザイン」です。サービスや商品、会社の生い立ちをヒアリングさせていただきます。お客様の熱意や想いを落とし込んだデザインをご提供いたします。<br>お客様が必要と感じるPR媒体で魅力を伝えるお手伝いをいたします。
                    </p>
                </section><!-- /.profilePage-sec03 -->
                <section class="profilePage-sec04">
                    <header class="section_heading">
                        <h2 class="section_title">できること</h2>
                    </header>
                    <p class="section_text">グラフィックデザイン／ロゴデザイン／Webデザイン／キャラクターデザイン／イラスト作成</p>
                </section><!-- /.profilePage-sec04 -->
                <section class="profilePage-sec05">
                    <header class="section_heading">
                        <h2 class="section_title">沿革</h2>
                    </header>
                    <p class="section_text"></p>
                    <ul class="history">
                        <li class="history_item">
                            <div class="year">1992/12</div>
                            <div class="event">京都の地で生まれる</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2002/10</div>
                            <div class="event">シートン動物記を読んで動物の絵を毎日書き始める</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2007/12</div>
                            <div class="event">憧れの銅駝美術工芸高校に入学&ensp;<br class="br-sp02">デザインを学ぶ</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2011/04</div>
                            <div class="event">尾道市立大学芸術文化学部に入学&ensp;<br class="br-sp02">4年間立体造形や工芸を学ぶ</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2015/04</div>
                            <div class="event">大阪の制作会社にインハウスデザイナーとして新卒入社</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2019/12</div>
                            <div class="event">退職</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2020/11</div>
                            <div class="event">TOMONi design worksを開業</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2021/08</div>
                            <div class="event">今に至る</div>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec03 -->
            </article><!-- /.profilePage -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->

    <section class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">ともが最近書いた記事</h2>
            </header>
            <div class="swiper-container">
                <article class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'author__in' => array(6),
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>

                        <article class="swiper-slide">
                            <a class="swiperCard" href="<?php the_permalink(); ?>">
                                <figure class="swiperCard_img">
                                    <?php the_post_thumbnail('large'); ?>
                                </figure>
                                <div class="swiperCard_body">
                                    <?php if (has_category()) { ?>
                                        <div class="swiperCard_tag">
                                            <?php $postcat = get_the_category();
                                            echo $postcat[0]->name; ?>
                                        </div>
                                    <?php } ?>
                                    <time class="swiperCard_time" datetime="<?php echo get_the_date(); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <h2 class="swiperCard_title"><?php the_title(); ?></h2>
                                    <div class="swiperCard_author">
                                        <?php echo get_avatar(get_the_author_id(), 120); ?>
                                        <p><?php the_author(); ?></p>
                                    </div><!-- /.author -->
                                </div>
                            </a>
                        </article><!-- /.swiper-slide -->

                    <?php endwhile;
                    wp_reset_postdata(); ?>

                </article><!-- /.swiper-wrapper -->
                <div class="swiper-pagination"></div>
            </div><!-- /.swiper-container -->

            <div class="more-member">
                <a href="<?php echo home_url(); ?>/author/tomoni" class="button03">ともの執筆記事一覧</a>
            </div><!-- /.more -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>