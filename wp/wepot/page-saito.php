<?php get_header(); ?>
<main class="main-contents">

    <section class="section_container">
        <div class="section_inner">
            <article class="profilePage">
                <section class="profilePage-sec01">
                    <figure class="profilePage_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member/saito.jpg" alt="さいとぅ">
                    </figure><!-- /.img -->
                    <h1 class="name"><span>デザイナー</span><br>さいとぅ</h1>
                    <ul class="profilePage-sns">
                        <li class="profilePage-sns_item profilePage-sns_item02"><a href="https://twitter.com/sa__i__to" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="アイコン">Twitter</a></li>
                    </ul>
                </section><!-- /.profilePage-sec01 -->

                <section class="profilePage-sec02">
                    <header class="section_heading">
                        <h2 class="section_title">プロフィール</h2>
                    </header>
                    <p class="section_text">
                        学生時代の研究活動を通じて分析力や物事を組み立てる力を身につける。また、学会発表のプレゼンテーション資料や論文の作図において人に伝えるデザインの重要性に気づく。<br>就職後に独学でデザインを学び、学生時代に専攻した情報工学分野を生かせる
                        Web 業界を目指す。HTML/CSSの構造を理解しつつ、よりデザインに力を入れたいという思いが強くなる。<br>現在は
                        Webデザインをはじめ、アプリケーションデザインやUIデザイン、ロゴデザインにも制作範囲を広げ活動中。</p>
                </section><!-- /.profilePage-sec02 -->
                <section class="profilePage-sec03">
                    <header class="section_heading">
                        <h2 class="section_title">マインドセット</h2>
                    </header>
                    <p class="section_text">
                        「想いをひろげるデザイン」を強く意識しています。<br>人の想いが点在する社会において、デザインは波打つようにひろがり、新たな想いと価値を生み出す役割を担うと考えています。その共鳴の波をより遠くまでひろげるために、背景にある想いの本質まで分解し、より純度の高い要素を掛け合わせてビジュアルを生み出していきます。<br>社会に課題がある限り、人に想いがある限り、デザインができることは無くなりません。ストーリーのある生きたデザインで、想いをひろげていきます。
                    </p>
                </section><!-- /.profilePage-sec03 -->
                <section class="profilePage-sec04">
                    <header class="section_heading">
                        <h2 class="section_title">できること</h2>
                    </header>
                    <p class="section_text">デザイン各種（Web／アプリケーション／ロゴ／インフォグラフィック／プレゼンテーション資料）</p>
                </section><!-- /.profilePage-sec04 -->
                <section class="profilePage-sec05">
                    <header class="section_heading">
                        <h2 class="section_title">沿革</h2>
                    </header>
                    <p class="section_text"></p>
                    <ul class="history">
                        <li class="history_item">
                            <div class="year">1996/11</div>
                            <div class="event">見渡しのいい米所に生まれる</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2014/04</div>
                            <div class="event">鶴岡高専に入学、5年間の監獄寮生活が始まる</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2017/03</div>
                            <div class="event">制御情報工学科を無事卒業するも、高専生活を延長する</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2017/04</div>
                            <div class="event">通学時間が惜しくなり、研究室に住み始める</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2019/03</div>
                            <div class="event">鶴岡工業高等専門学校 生産システム工学専攻<br>電気電子・情報コース（名前長すぎる）なんとか修了</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2019/04</div>
                            <div class="event">イベント関係の電気施工管理に従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2019/11</div>
                            <div class="event">デザイナーになるべく退職</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2020/01</div>
                            <div class="event">事務職に従事しつつデザインを始める。日々制作を重ね、現在に至る</div>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec03 -->
            </article><!-- /.profilePage -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->

    <section class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">さいとぅが最近書いた記事</h2>
            </header>
            <div class="swiper-container">
                <article class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'author__in' => array(7),
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

            <div class="more">
                <a href="<?php echo home_url(); ?>/author/saito" class="button03">さいとぅの執筆記事一覧</a>
            </div><!-- /.more -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>