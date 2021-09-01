<?php
/*
Template Name: お問い合わせ各種ページテンプレート
*/
?>
<?php get_header(); ?>
<main class="main-contents">
    <?php if (is_page('contact')) : ?>
        <section class="section_container contactPage">
            <div class="section_inner">
                <header class="section_heading">
                    <h1 class="section_title">お問い合わせ</h1>
                </header>
                <p class="section_text">Wepotは個々に違う強みを持ったクリエイティブチームです。お客様の課題解決に最適なメンバーアサインでスムーズなプロジェクト進行をいたします。制作して終わりではなく、お客様が求める成果に結びつくご提案をさせていただきます。</p>
                <div class="can contactPage-can">
                    <p class="can_text02">まずは、お気軽にご相談ください</p>
                    <ul class="can_list">
                        <li class="can_item"><span>Webサイト<br>制作</span></li>
                        <li class="can_item"><span>Webサイト<br>リニューアル</span></li>
                        <li class="can_item"><span>WordPress<br>導入</span></li>
                        <li class="can_item"><span>Web<br>ディレクション</span></li>
                        <li class="can_item"><span>動画編集<br>動画広告</span></li>
                        <li class="can_item"><span>ロゴ<br>デザイン</span></li>
                        <li class="can_item"><span>イラスト<br>制作</span></li>
                        <li class="can_item"><span>グラフィック<br>デザイン</span></li>
                    </ul>
                </div>
            </div><!-- /.section_inner -->
        </section><!-- /.section_container -->
    <?php endif; ?>

    <section id="contact" class="section_container contactPage-input">
        <div class="section_inner">
            <header class="section_heading">
                <?php if (is_page('contact')) : ?>
                    <h2 class="section_title">入力フォーム</h2>
                <?php elseif (is_page('confirm')) : ?>
                    <h2 class="section_title">入力内容をご確認ください</h2>
                <?php elseif (is_page('thanks')) : ?>
                    <h2 class="section_title">送信完了しました</h2>
                <?php endif; ?>
            </header>
            <div class="contact_wrap">
                <div class="contactForm">
                    <?php the_content(); ?>
                </div><!-- /.contactForm -->
            </div><!-- /.contact_inner -->
        </div><!-- /.section_inner -->
    </section><!-- /.contact -->
</main>
<?php get_footer(); ?>