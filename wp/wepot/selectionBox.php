<section class="section_container">
    <div class="section_inner">
        <header class="section_heading">
            <h2 class="section_title">おすすめ記事</h2>
        </header>
        <div class="swiper-container">
            <article class="swiper-wrapper">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'post__in' => array(216, 391, 388, 189, 274, 282),
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

                    <article class="swiper-slide">
                        <a class="swiperCard" href="<?php the_permalink(); ?>">
                            <figure class="swiperCard_img">
                                <?php the_post_thumbnail(array(384, 216)); ?>
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
                                <p class="swiperCard_title"><?php the_title(); ?></p>
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

        <?php if (is_archive()) : ?>
        <?php else : ?>
            <div class="more">
                <a href="<?php echo home_url(); ?>/blog/" class="button03">記事一覧をみる</a>
            </div><!-- /.more -->
        <?php endif; ?>
    </div><!-- /.section_inner -->
</section><!-- /.section_container -->