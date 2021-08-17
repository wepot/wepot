<?php get_header(); ?>
<main class="main-contents">

    <section class="section_container">
        <div class="section_inner">
            <article class="profilePage">
                <section class="profilePage-sec01">
                    <figure class="profilePage_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/member/maruo.jpg" alt="まるこ">
                    </figure><!-- /.img -->
                    <h1 class="name"><span>マークアップエンジニア</span><br>まるこ</h1>
                    <ul class="profilePage-sns">
                        <li class="profilePage-sns_item profilePage-sns_item02"><a href="https://twitter.com/malco_trico" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="">Twitter</a></li>
                    </ul>
                </section><!-- /.profilePage-sec01 -->

                <section class="profilePage-sec02">
                    <header class="section_heading">
                        <h2 class="section_title">プロフィール</h2>
                    </header>
                    <p class="section_text">
                        社会人になって約20年、保険代理店・住宅機器メーカー・総合人材会社では営業事務、惣菜店・リラクゼーションサロンでの接客業に従事。<br>夫の仕事の関係で転勤が想定されるため、一つの会社に勤務し続けることは叶わなかったが、代わりに様々な業種や地域での就業を経験し、環境への変化など臨機応変に対応する力を養う。<br>まもなく40代という年齢を考え、就業場所にとらわれずに働ける環境を模索。2020年夏にWeb業界へ進むことを決意し、同年11月にマークアップエンジニアとしての仕事を開始。
                    </p>
                </section><!-- /.profilePage-sec02 -->
                <section class="profilePage-sec03">
                    <header class="section_heading">
                        <h2 class="section_title">マインドセット</h2>
                    </header>
                    <p class="section_text">仕事をする上で大切にしていることは、「本質を見失わないこと」です。
                        作業にあたる人が多くなると、個人個人の思いが強くなり、物事の本質が見えにくくなることがありますが、それではお客様が望んでいる目的の達成は困難になります。<br>自分は「誰」のために「何」をすべきかを常に念頭におき、作業に追われて心に余裕を持ちにくいときでも、「本質を見失わない」ように心掛けています。
                    </p>
                </section><!-- /.profilePage-sec03 -->
                <section class="profilePage-sec04">
                    <header class="section_heading">
                        <h2 class="section_title">できること</h2>
                    </header>
                    <p class="section_text">HTML／CSS設計に基づき、お客様の目標達成のために作成されたデザインを再現します。</p>
                </section><!-- /.profilePage-sec04 -->
                <section class="profilePage-sec05">
                    <header class="section_heading">
                        <h2 class="section_title">沿革</h2>
                    </header>
                    <p class="section_text"></p>
                    <ul class="history">
                        <li class="history_item">
                            <div class="year">1983/02</div>
                            <div class="event">東京都板橋区で生まれる</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2001/04</div>
                            <div class="event">ライブスタッフに憧れ専門学校でイベント照明を学ぶ</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2006/06</div>
                            <div class="event">フリーター・介護を経て、保険代理店で営業事務として従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2009/10</div>
                            <div class="event">結婚を機に夫の転勤先である石川県金沢市に引越し</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2010/02</div>
                            <div class="event">住宅機器メーカーで営業事務として従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2012/04</div>
                            <div class="event">転勤に伴い愛知県名古屋市に引越し</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2012/11</div>
                            <div class="event">リラクゼーションサロンでセラピストとして従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2015/04</div>
                            <div class="event">3度目の転勤で6年ぶりに地元横浜へ帰る</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2016/04</div>
                            <div class="event">1年間の専業主婦を満喫し、総合人材会社で3度目の営業事務に従事</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2018/05</div>
                            <div class="event">業務縮小により総合人材会社を退職</div>
                        </li>
                        <li class="history_item">
                            <div class="year">2020/06</div>
                            <div class="event">Web制作の道へ進むことを決意、現在に至る</div>
                        </li>
                    </ul>
                </section><!-- /.profilePage-sec03 -->
            </article><!-- /.profilePage -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->

    <section class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">まるこが最近書いた記事</h2>
            </header>
            <div class="swiper-container">
                <article class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'author__in' => array(8),
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
                <a href="<?php echo home_url(); ?>/author/maruo" class="button03">まるこの執筆記事一覧</a>
            </div><!-- /.more -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>