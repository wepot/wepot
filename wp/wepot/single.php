<?php get_header(); ?>
<main class="main-contents">
    <section class="singlePage">
        <div class="singlePage_inner">
            <?php if (have_posts()) : the_post(); ?>
                <div class="singlePage_wrap">
                    <article class="blog">
                        <div class="header_wrap">
                            <header>
                                <h1><?php the_title(); ?></h1>
                                <div class="blogMeta_wrap">
                                    <div class="infoLeft">
                                        <time class="time" datetime="<?php echo get_the_date(); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                        <?php if (has_category()) { ?>
                                            <div class="tag">
                                                <?php $postcat = get_the_category();
                                                echo $postcat[0]->name; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="infoRight">
                                        <?php echo get_avatar(get_the_author_id(), 80); ?>
                                        <figcaption><?php the_author(); ?></figcaption>

                                    </div>
                                </div>
                            </header><!-- /.blog_header -->
                            <figure class="blog_img">
                                <?php the_post_thumbnail('large'); ?>
                            </figure><!-- /.thumbnail -->
                        </div><!-- /.wrap -->

                        <?php the_content(); ?>
                    </article><!-- /.blog -->

                    <section class="ctaBox">
                        <div class="ctaBox_wrap">
                            <p class="ctaBox_title">ご依頼・ご相談はこちら</p>
                            <p class="ctaBox_text">お客様の課題解決に最適なメンバーアサインでスムーズなプロジェクト進行をいたします。制作して終わりではなく、お客様が求める成果に結びつくご提案をさせていただきます。</p>
                            <div class="ctaBox_btn">
                                <a href="<?php echo home_url(); ?>/contact/" class="button01"><span>お問い合わせ</span></a>
                            </div>
                        </div><!-- /.ctaBox_wrap -->
                    </section><!-- /.ctaBox -->

                    <?php if (has_category()) {
                        $cats = get_the_category();
                        $catkwds = array();
                        foreach ($cats as $cat) {
                            $catkwds[] = $cat->term_id;
                        }
                    } ?>
                    <?php $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '1',
                        'post__not_in' => array($post->ID),
                        'category__in' => $catkwds,
                        'orderby' => 'rand'
                    );
                    $my_query = new WP_Query($args); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <article class="relatedPost">
                            <a href="<?php the_permalink(); ?>">
                                <div class="relatedPost_wrap">
                                    <figure class="relatedPost_img">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </figure><!-- /.relatedPost_img -->
                                    <div class="relatedPost_body">
                                        <div class="relatedPost_tag">関連記事</div>
                                        <p class="relatedPost_title"><?php the_title(); ?></p>
                                        <time class="relatedPost_time" datetime="<?php echo get_the_date(); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                    </div>
                                </div><!-- /.relatedPost_wrap -->
                            </a>
                        </article><!-- /.related_post -->

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>


                    <div class="blogShare">
                        <p>この記事がシェアできます</p>
                        <ul>
                            <li>
                                <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-facebook.png" alt="シェアボタン" width="48" height="48">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&via=wepot_media&related=wepot_media&hashtags=Wepot&text=<?php echo get_the_title(); ?>" rel="nofollow" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="シェアボタン" width="48" height="39">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo get_the_title(); ?>" rel="nofollow" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-linkedin.png" alt="シェアボタン" width="56" height="48">
                                </a>
                            </li>
                            <li>
                                <a href="https://line.me/R/msg/text/?<?php the_permalink(); ?>" rel="nofollow" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-line.png" alt="シェアボタン" width="48" height="48">
                                </a>
                            </li>
                            <li>
                                <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-hatena.png" alt="シェアボタン" width="48" height="48">
                                </a>
                            </li>
                            <li>
                                <a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>&title=<?php echo get_the_title(); ?>" rel="nofollow" rel="nofollow" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-pocket.png" alt="シェアボタン" width="48" height="44">
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.blogShare -->
                    <section class="blogAuthor">
                        <span class="blogAuthor_heading">この記事を書いた人</span>
                        <div class="blogAuthor_wrap">
                            <figure class="blogAuthor_img">
                                <?php echo get_avatar(get_the_author_id(), 200); ?>
                                <p class="name pc-none"><?php the_author(); ?><br><span class="position"><?php the_author_meta('position'); ?></span></p>
                            </figure><!-- /.img -->
                            <div class="blogAuthor_body">
                                <p class="name sp-none"><?php the_author(); ?><br><span class="position"><?php the_author_meta('position'); ?></span></p>
                                <p class="description"><?php the_author_meta('user_description'); ?></p>
                                <ul class="blogAuthor-sns">
                                    <?php if (get_the_author_meta('user_url') != "") : ?>
                                        <li class="blogAuthor-sns_item blogAuthor-sns_item01">
                                            <a href="<?php the_author_meta('user_url'); ?>" target="_blank" rel=“noopener”>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-website.png" alt="アイコン" width="20" height="20">Web Site
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_the_author_meta('twitter') != "") : ?>
                                        <li class="blogAuthor-sns_item blogAuthor-sns_item02">
                                            <a href="<?php the_author_meta('twitter'); ?>" target="_blank" rel=“noopener”>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-twitter.png" alt="アイコン" width="24" height="20">Twitter
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_the_author_meta('facebook') != "") : ?>
                                        <li class="blogAuthor-sns_item blogAuthor-sns_item03">
                                            <a href="<?php the_author_meta('facebook'); ?>" target="_blank" rel=“noopener”>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-facebook.png" alt="アイコン" width="20" height="20">Facebook
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_the_author_meta('instagram') != "") : ?>
                                        <li class="blogAuthor-sns_item blogAuthor-sns_item04">
                                            <a href="<?php the_author_meta('instagram'); ?>" target="_blank" rel=“noopener”>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-instagrum.png" alt="アイコン" width="20" height="20">Instagram
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_the_author_meta('youtube') != "") : ?>
                                        <li class="blogAuthor-sns_item blogAuthor-sns_item05">
                                            <a href="<?php the_author_meta('youtube'); ?>" target="_blank" rel=“noopener”>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/s-youtube.png" alt="アイコン" width="29" height="20">YouTube
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div><!-- /.body -->
                        </div><!-- /.blogAuthor_wrap -->
                    </section><!-- /.blog-author -->
                </div><!-- /.singlePage_wrap -->
            <?php endif; ?>

            <?php get_sidebar(); ?>

        </div><!-- /.singlePage_inner -->
    </section><!-- /.singlePage -->
    <?php get_footer(); ?>