<?php if (is_page('contact') || is_404()) : ?>

<?php elseif (is_page('works')) : ?>
    <?php get_template_part('contactBox'); ?>
<?php elseif (is_page('policy')) : ?>
    <?php get_template_part('selectionBox'); ?>
<?php else : ?>
    <?php get_template_part('contactBox'); ?>
    <?php get_template_part('selectionBox'); ?>
<?php endif; ?>

</main>

<footer class="footer">
    <div id="js-scroll-fadein" class="js-scroll-fadein arrow"></div>
    <div class="footer_inner">
        <?php if (is_404()) : ?>
            <div class="copyright">
                <p><small>&copy; Wepot</small></p>
            </div><!-- /.copyright -->
        <?php else : ?>
            <div class="footer-menu_wrap">
                <ul class="link">
                    <li class="link_wrap none">
                        <div class="footer_logo">
                            <a href="<?php echo home_url(); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 304.77 97.22" class="wepot">
                                    <g>
                                        <g>
                                            <path d="M191.26 34.06c-11.65 1.55-21.1 12.89-21.1 24.63v37.55a1 1 0 001 1H176a1 1 0 001-1V77.49a1 1 0 011.63-.72 24.43 24.43 0 0021.41 5.36 24.18 24.18 0 0018.31-18 24.5 24.5 0 00-27.09-30.07zm7.16 41.4a17.63 17.63 0 01-21-21 17.42 17.42 0 0113.36-13.36 17.63 17.63 0 0121 21 17.42 17.42 0 01-13.36 13.36zM250.86 33.83a24.45 24.45 0 1024.44 24.45 24.47 24.47 0 00-24.44-24.45zm0 42a17.59 17.59 0 1117.59-17.59 17.6 17.6 0 01-17.59 17.63zM303.79 33.83H297a.49.49 0 01-.5-.49V19.56a1 1 0 00-1-1h-4.89a1 1 0 00-1 1v13.78a.49.49 0 01-.49.49h-6.75a1 1 0 00-1 1v4.89a1 1 0 001 1h6.75a.48.48 0 01.49.49v38.5a1 1 0 001 1h4.89a1 1 0 001-1V41.18a.49.49 0 01.49-.49h6.76a1 1 0 001-1v-4.87a1 1 0 00-.96-.99zM151 70a1.58 1.58 0 00-1.14.5A17.6 17.6 0 01120 62.31a.5.5 0 01.49-.6h37.65a3.43 3.43 0 003.43-3.4 24.45 24.45 0 10-24.45 24.41 24.23 24.23 0 0020.56-11.24 1 1 0 00-.83-1.52zm-13.88-29.31a17.63 17.63 0 0117.12 13.55.5.5 0 01-.49.61h-33.26a.5.5 0 01-.49-.61 17.63 17.63 0 0117.12-13.55z" fill="#fff" />
                                            <path d="M64.49 37.23a16.25 16.25 0 00-8.55 8.55 2.42 2.42 0 01-4.35 0 16.26 16.26 0 00-8.54-8.55 2.42 2.42 0 010-4.35 16.28 16.28 0 008.54-8.54 2.42 2.42 0 014.35 0 16.26 16.26 0 008.55 8.54 2.42 2.42 0 010 4.35z" fill="#00b4aa" />
                                            <path d="M0 1.78l1 6.64a1.56 1.56 0 001.54 1.33h4.88A1.56 1.56 0 009 8L8 1.33A1.54 1.54 0 006.44 0H1.56A1.55 1.55 0 000 1.78zM99.56 1.33L98.58 8a1.55 1.55 0 001.53 1.78H105a1.55 1.55 0 001.54-1.33l1-6.64A1.55 1.55 0 00106 0h-4.9a1.55 1.55 0 00-1.54 1.33zM19.73 82.72a1.57 1.57 0 001.27-.67c5.51-7.73 18.73-13 32.93-13 14.44 0 27.42 5.19 33 13a1.58 1.58 0 001.28.68h6a1.56 1.56 0 001.54-1.32l9.55-64.56a1.56 1.56 0 00-1.54-1.79h-4.89a1.56 1.56 0 00-1.54 1.33l-7.92 53.52a1.56 1.56 0 01-2.5 1c-8.2-6.22-20.15-9.83-33-9.83-13 0-25.1 3.68-33.28 10a1.56 1.56 0 01-2.51-1l-7.92-53.7a1.56 1.56 0 00-1.54-1.33H3.78a1.57 1.57 0 00-1.54 1.79l9.55 64.56a1.56 1.56 0 001.54 1.32z" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="contact_btn">
                            <a href="<?php echo home_url(); ?>/contact/" class="button01"><span>お問い合わせ</spa></a>
                        </div><!-- /.contact_btn -->
                    </li>
                    <li class="link_wrap none">
                        <p>What Wepot?</p>
                        <ul class="link_list">
                            <li class="link_item"><a href="<?php echo home_url(); ?>/about/">Wepotについて</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/works/">実績一覧</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/about/member/">メンバー紹介</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/policy/">プライバシーポリシー</a></li>
                        </ul>
                    </li><!-- /.link_wrap -->
                    <li class="link_wrap none">
                        <p><a href="/blog/">BLOG</a></p>
                        <ul class="link_list link_list03">
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/webdesign">Webデザイン</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/wordpress">WordPress</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/marketing">マーケティング</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/direction">ディレクション</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/coding">コーディング</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/illust">イラスト</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/video">動画編集</a></li>
                            <li class="link_item"><a href="<?php echo home_url(); ?>/blog/others">その他</a></li>
                        </ul>
                    </li><!-- /.link_wrap -->
                    <li class="link_wrap">
                        <p>Follow US</p>
                        <ul class="link-sns">
                            <li class="link-sns_item"><a href="https://twitter.com/wepot_media" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/twitter.png" alt=""></a>
                            </li>
                            <li class="link-sns_item"><a href="https://www.facebook.com/Wepot-102609692133115" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/facebook.png" alt=""></a>
                            </li>
                            <li class="link-sns_item"><a href="https://www.linkedin.com/in/wepot/" target="_blank" rel=“noopener”><img src="<?php echo get_template_directory_uri(); ?>/img/icon/linkedin.png" alt=""></a>
                            </li>
                        </ul>
                    </li><!-- /.link_wrap -->
                </ul><!-- /.link -->
            </div><!-- /.menu-wrap -->
            <div class="copyright">
                <p><small>&copy; Wepot</small></p>
            </div><!-- /.copyright -->
        <?php endif; ?>
    </div><!-- /.footer_inner -->
</footer>
</div><!-- /.container -->
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>

</html>