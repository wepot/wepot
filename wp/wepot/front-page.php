<?php get_header(); ?>
<main class="main-contents">
    <section class="mainVisual">
        <div class="mainVisual_wrap">
            <div class="mainVisual_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg/top-img.png" alt="">
            </div>
            <header class="mainVisual_heading">
                <h1 class="mainVisual_title">理想の未来を創る、すべてがここに</h1>
            </header>
            <p class="mainVisual_text">ビジネスのあらゆる課題解決に必要な「すべて」が揃った、クリエイティブのスペシャリスト集団によるメディア</p>
        </div>
    </section><!-- /.mainVisual -->

    <section class="section_container topPage">
        <header class="section_heading">
            <h2 class="section_title">新着記事</h2>
        </header>
        <div class="topArticle">
            <div class="topArticle_wrap">
                <article class="topArticle_list">

                    <?php
                    global $max_num_page;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 9,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>

                        <article class="topArticle_item">
                            <a class="topArticle_link" href="<?php the_permalink(); ?>">
                                <figure class="topArticle_img">
                                    <?php the_post_thumbnail('large'); ?>
                                </figure>
                                <div class="topArticle_body">
                                    <time class="topArticle_time" datetime="<?php echo get_the_date(); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <?php if (has_category()) { ?>
                                        <div class="topArticle_tag">
                                            <?php $postcat = get_the_category();
                                            echo $postcat[0]->name; ?>
                                        </div>
                                    <?php } ?>
                                    <h2 class="topArticle_title"><?php the_title(); ?></h2>
                                    <div class="topArticle_author">
                                        <?php echo get_avatar(get_the_author_id(), 120); ?>
                                        <p><?php the_author(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </article><!-- /.topArticle_item -->

                    <?php endwhile;
                    wp_reset_postdata(); ?>

                </article><!-- /.topArticle_list -->
                <div class="more">
                    <a href="<?php echo home_url(); ?>/blog/" class="button03">記事一覧をみる</a>
                </div><!-- /.more -->
            </div>

            <?php get_sidebar(); ?>
        </div>
    </section><!-- /.blog -->
    <section class="topCategory-sp">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">カテゴリー</h2>
            </header>
            <ul class="category_list">
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/webdesign/" class="button03">Webデザイン</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/wordpress/" class="button03">WordPress</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/marketing/" class="button03">マーケティング</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/direction/" class="button03">ディレクション</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/coding/" class="button03">コーディング</a>
                </li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/illust/" class="button03">イラスト</a>
                </li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/video/" class="button03">動画編集</a></li>
                <!-- <li class="category_item"><a href="<?php echo home_url(); ?>/blog/others/" class="button03">その他</a></li> -->
            </ul><!-- /.more -->
            <div id="searchSp">
                <?php get_template_part('searchformSp'); ?>
            </div>
        </div>
    </section><!-- /.topCategory-sp -->
    <?php get_footer(); ?>