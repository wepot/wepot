<?php get_header(); ?>
<main class="main-contents">

    <section class="section_container">
        <div class="section_inner">
            <article class="profilePage">
                <section class="profilePage-sec01">
                    <figure class="profilePage_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member/honma.jpg" alt="ホンマ ヒロミツ">
                    </figure><!-- /.img -->
                    <h1 class="name"><span>プロジェクトマネージャー/<br class="br-sp02">ディレクター</span><br>ホンマ ヒロミツ</h1>
                    <ul class="profilePage-sns">
                        <li class="profilePage-sns_item profilePage-sns_item01">
                            <a href="https://hirohom.jp/" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-website.png" alt="アイコン">Web
                                Site</a>
                        </li>
                        <li class="profilePage-sns_item profilePage-sns_item02">
                            <a href="https://twitter.com/hirohom2" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="アイコン">Twitter</a>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec01 -->

                <section class="profilePage-sec02">
                    <header class="section_heading">
                        <h2 class="section_title">プロフィール</h2>
                    </header>
                    <p class="section_text">
                        引越屋からグラフィックデザイナーを目指したものの、Webの面白さに触れてHTML/CSSを習得。フロントエンドエンジニアでの就職を希望していたものの、BAでの面談で「フロントエンドよりもPMの方が向いていそうなので、それならば採用する」という一言で人生が変わったと思っています。<br>これまで、主にBtoBやBtoBtoC向けサービスや、サイトの制作・システム開発に多くコミットしてきましたが、クライアントを含めたチーム作りを常に考えています。<br>2018年8月hirohomの屋号で独立。<br>2020年12月Wepotのメンバーと制作チームを立ち上げる。
                    </p>
                </section><!-- /.profilePage-sec02 -->
                <section class="profilePage-sec03">
                    <header class="section_heading">
                        <h2 class="section_title">マインドセット</h2>
                    </header>
                    <p class="section_text">
                        「仕事を作る仕事をする」を目指しています。これは自分たちの仕事のことではなく、クライアントの仕事のことを指しています。要望に応えられる仕事をすることで、クライアントは新たな事業やビジネスを展開させることができ、新たな仕事が生まれていくと考えています。<br>仕事を作る仕事をすることで、少しでも世の中に貢献できるようになることを目指しています。
                    </p>
                </section><!-- /.profilePage-sec03 -->
                <section class="profilePage-sec04">
                    <header class="section_heading">
                        <h2 class="section_title">できること</h2>
                    </header>
                    <p class="section_text">プロジェクトマネジメント／プロダクトマネジメント／webディレクション／テクニカルディレクション／HTML/CSS</p>
                </section><!-- /.profilePage-sec04 -->
                <section class="profilePage-sec05">
                    <header class="section_heading">
                        <h2 class="section_title">沿革</h2>
                    </header>
                    <p class="section_text"></p>
                    <ul class="history">
                        <li class="history_item">
                            <div class="year">1982/01</div>
                            <div class="event">秋田県由利本荘市生まれ（生まれたときの記憶がある）</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2000/03</div>
                            <div class="event">大学進学のため上京</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2015/01</div>
                            <div class="event">職業訓練校でHTML/CSSの講師として従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2016/02</div>
                            <div class="event">株式会社ビジネスアーキテクツにプロジェクトマネージャーとして入社</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2018/08</div>
                            <div class="event">個人事業主hirohomの屋号で独立</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2020/12</div>
                            <div class="event">Wepot立ち上げ</div>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec03 -->
            </article><!-- /.profilePage -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->

    <section class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">ホンマ ヒロミツが最近書いた記事</h2>
            </header>
            <div class="swiper-container">
                <article class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'author__in' => array(2),
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
                <a href="<?php echo home_url(); ?>/author/honma/" class="button03">ホンマ ヒロミツの執筆記事一覧</a>
            </div><!-- /.more -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>