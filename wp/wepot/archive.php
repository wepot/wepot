<?php get_header(); ?>
<main class="main-contents">

    <?php if (is_category('webdesign')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">Webデザインの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('wordpress')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">WordPressの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('marketing')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">マーケティングの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('direction')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">ディレクションの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('coding')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">コーディングの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('illust')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">イラストの記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('video')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">動画編集の記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_category('others')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">その他の記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('honma')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">本間の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('ayaka')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">鈴木の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('sato')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">佐藤の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('yukix')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">ユキックス（黒羽）の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('tomoni')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">奥田の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('saito')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">齋藤の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_author('maruo')) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">丸尾の執筆記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_year()) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title"><?php the_time("Y年"); ?>の記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php elseif (is_month()) : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title"><?php the_time("Y年M"); ?>の記事一覧</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php else : ?>
        <section class="pageVisual bg01">
            <header class="pageVisual_heading">
                <h1 class="pageVisual_title">BLOG</h1>
            </header>
        </section><!-- /.pageVisual -->
    <?php endif; ?>

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