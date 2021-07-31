<?php get_header(); ?>
<main class="main-contents">
    <section class="pageVisual bg01">
        <header class="pageVisual_heading">
            <h1 class="pageVisual_title">「<?php the_search_query(); ?>」の検索結果</h1>
        </header>
    </section><!-- /.pageVisual -->

    <section class="section_container blogPage">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">記事一覧</h2>
            </header>
            <?php get_template_part('loop-content'); ?>

        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->

    <section class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">カテゴリーから探す</h2>
            </header>
            <ul class="category_list">
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/webdesign" class="button03">Webデザイン</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/wordpress" class="button03">WordPress</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/marketing" class="button03">マーケティング</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/direction" class="button03">ディレクション</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/coding" class="button03">コーディング</a>
                </li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/illust" class="button03">イラスト</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/video" class="button03">動画編集</a></li>
                <li class="category_item"><a href="<?php echo home_url(); ?>/blog/others" class="button03">その他</a></li>
            </ul><!-- /.more -->
        </div><!-- /.section_inner -->
    </section><!-- /.section_container -->
    <?php get_footer(); ?>