<?php get_header(); ?>
<main class="main-contents">

    <section class="section_container contactPage">
        <div class="section_inner">
            <header class="section_heading">
                <h1 class="section_title">お問い合わせ</h1>
            </header>
            <p class="section_text">
                私たちは、お客様の課題解決となるクリエイティブ制作に長けたクリエイター集団です。さまざまなご要望にお答えすることが可能です。最適な人員をアサインし、プロジェクトを遂行します。<br><span class="pcnone">まずは、お気軽にご相談ください。</span></p>
            <div class="can contactPage-can">
                <p class="can_text02">まずは、お気軽にご相談ください</p>
                <ul class="can_list">
                    <li class="can_item"><span>Webサイト<br>作成</span></li>
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

    <section id="contact" class="section_container">
        <div class="section_inner">
            <header class="section_heading">
                <h2 class="section_title">入力フォーム</h2>
            </header>
            <div class="contact_wrap">
                <div class="contactForm">
                    <?php echo do_shortcode('[contact-form-7 id="52" title="お問い合わせ"]'); ?>
                </div><!-- /.contactForm -->
            </div><!-- /.contact_inner -->
        </div><!-- /.section_inner -->
    </section><!-- /.contact -->
</main>
<?php get_footer(); ?>