<article class="blogCards">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="blogCards_item">
                <a class="blogCard" href="<?php the_permalink(); ?>">
                    <figure class="blogCard_img">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <div class="blogCard_body">
                        <?php if (has_category()) { ?>
                            <div class="blogCard_tag">
                                <?php $postcat = get_the_category();
                                echo $postcat[0]->name; ?>
                            </div>
                        <?php } ?>
                        <time class="blogCard_time" datetime="<?php echo get_the_date(); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                        <h2 class="blogCard_title"><?php the_title(); ?></h2>
                        <div class="blogCard_author">
                            <?php echo get_avatar(get_the_author_id(), 120); ?>
                            <p><?php the_author(); ?></p>
                        </div>
                    </div>
                </a>
            </article><!-- /.blogCards_item -->
        <?php endwhile; ?>
</article><!-- /.blogCards -->
<!------- ページャー ------->
<div class="pager">
    <div class="pager_inner">
        <?php echo paginate_links(array(
            'type' => 'plain',
            'mid_size' => '2',
            'prev_text' => '',
            'next_text' => ''
        )); ?>
    </div><!-- /.pager_inner -->
</div><!-- /.pager -->
<!--検索に該当するページがなかった場合に表示-->
<?php else : ?>
    <p class="notArticle">申し訳ございません、該当記事が見つかりませんでした。<br>かわりにオススメの記事をご紹介しますので、よろしければご覧ください。</p>
    <article class="blogCards">
        <?php
        $args = array(
            'post_type' => 'post',
            'post__in' => array(216, 391, 388, 189, 274, 282),
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post();
        ?>

            <article class="blogCards_item">
                <a class="blogCard" href="<?php the_permalink(); ?>">
                    <figure class="blogCard_img">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <div class="blogCard_body">
                        <?php if (has_category()) { ?>
                            <div class="blogCard_tag">
                                <?php $postcat = get_the_category();
                                echo $postcat[0]->name; ?>
                            </div>
                        <?php } ?>
                        <time class="blogCard_time" datetime="<?php echo get_the_date(); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                        <h2 class="blogCard_title"><?php the_title(); ?></h2>
                        <div class="blogCard_author">
                            <?php echo get_avatar(get_the_author_id(), 120); ?>
                            <p><?php the_author(); ?></p>
                        </div>
                    </div>
                </a>
            </article><!-- /.blogCards_item -->
        <?php endwhile;
        wp_reset_postdata(); ?>
    </article><!-- /.blogCards -->

<?php endif; ?>