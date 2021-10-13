<?php if (is_page('works')) : ?>
    <section class="contactBox mb0">
        <div class="contactBox_wrap">
            <ul class="contactBox_list01">
                <li class="contactBox_item">
                    <h3 class="contactBox_title">Wepotについて</h3>
                    <div class="contactBox_img01">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/wepot.png" alt="アイコン" width="117" height="90">
                    </div>
                    <p class="contactBox_text">Wepotはデジタルクリエイティブで課題を抱えるすべての人への解決策を提示できます。</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/about/" class="button02"><span>詳細はこちら</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
                <li class="contactBox_item">
                    <h3 class="contactBox_title">メンバー紹介</h3>
                    <div class="contactBox_img02">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/member.png" alt="アイコン" width="120" height="91">
                    </div><!-- /.contactBox_img -->
                    <p class="contactBox_text">それぞれ強みが違う自立した個人事業主で構成されるクリエイティブ集団です。</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/about/member" class="button02"><span>詳細はこちら</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
                <li class="contactBox_item">
                    <h3 class="contactBox_title">制作のご相談</h3>
                    <div class="contactBox_img03">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/balloon.png" alt="アイコン" width="135" height="90">
                    </div><!-- /.contactBox_img -->
                    <p class="contactBox_text">現在抱えている課題を教えてください！あなただけのクリエイティブチームで解決に導きます！</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/contact/" class="button02"><span>相談してみる</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
            </ul><!-- /.contactBox_list01 -->

            <ul class="contactBox_list02">
                <li class="contactBox_item-sp contactBox_item-sp01">
                    <a href="<?php echo home_url(); ?>/about/">
                        <div class="contactBox_img01">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/wepot.png" alt="アイコン" width="85" height="65">
                        </div>
                        <h3 class="contactBox_title">Wepotについて</h3>
                    </a>
                </li><!-- /.contactBox_item -->
                <li class="contactBox_item-sp contactBox_item-sp01">
                    <a href="<?php echo home_url(); ?>/about/member/">
                        <div class="contactBox_img02">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/member.png" alt="アイコン" width="85" height="64">
                        </div>
                        <h3 class="contactBox_title">メンバー紹介</h3>
                    </a>
                </li><!-- /.contactBox_item -->
                <li class="contactBox_item-sp contactBox_item-sp02">
                    <h3 class="contactBox_title contactBox_title01">制作のご相談</h3>
                    <div class="contactBox_img03">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/balloon.png" alt="アイコン" width="84" height="56">
                    </div>
                    <p class="contactBox_text">現在抱えている課題を教えてください！あなただけのクリエイティブチームで解決に導きます！</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/contact/" class="button02"><span>相談してみる</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
            </ul><!-- /.contactBox_list01 -->
        </div><!-- /.contactBox_wrap -->
    </section><!-- /.contactBox -->
<?php else : ?>
    <section class="contactBox">
        <div class="contactBox_wrap">
            <ul class="contactBox_list01">
                <?php if (is_page('about')) : ?>
                    <li class="contactBox_item">
                        <h3 class="contactBox_title">実績一覧</h3>
                        <div class="contactBox_img04">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/works.png" alt="アイコン" width="153" height="90">
                        </div>
                        <p class="contactBox_text">Wepotには多種多様な実績があります。メンバーの強みが生きた実績をご覧ください</p>
                        <div class="contactBox_btn">
                            <a href="<?php echo home_url(); ?>/works/" class="button02"><span>実績一覧をみる</span></a>
                        </div>
                    </li><!-- /.contactBox_item -->
                <?php else : ?>
                    <li class="contactBox_item">
                        <h3 class="contactBox_title">Wepotについて</h3>
                        <div class="contactBox_img01">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/wepot.png" alt="アイコン" width="117" height="90">
                        </div>
                        <p class="contactBox_text">Wepotはデジタルクリエイティブで課題を抱えるすべての人への解決策を提示できます。</p>
                        <div class="contactBox_btn">
                            <a href="<?php echo home_url(); ?>/about/" class="button02"><span>詳細はこちら</span></a>
                        </div>
                    </li><!-- /.contactBox_item -->
                <?php endif; ?>

                <?php if (is_page(array('member', 'honma', 'ayaka', 'sato', 'yukix', 'tomoni', 'saito', 'maruo')) || is_archive() || is_single()) : ?>
                    <li class="contactBox_item">
                        <h3 class="contactBox_title">実績一覧</h3>
                        <div class="contactBox_img04">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/works.png" alt="アイコン" width="153" height="90">
                        </div>
                        <p class="contactBox_text">Wepotには多種多様な実績があります。メンバーの強みが生きた実績をご覧ください。</p>
                        <div class="contactBox_btn">
                            <a href="<?php echo home_url(); ?>/works/" class="button02"><span>実績一覧をみる</span></a>
                        </div>
                    </li><!-- /.contactBox_item -->
                <?php else : ?>
                    <li class="contactBox_item">
                        <h3 class="contactBox_title">メンバー紹介</h3>
                        <div class="contactBox_img02">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/member.png" alt="アイコン" width="120" height="91">
                        </div><!-- /.contactBox_img -->
                        <p class="contactBox_text">それぞれ強みが違う自立した個人事業主で構成されるクリエイティブ集団です。</p>
                        <div class="contactBox_btn">
                            <a href="<?php echo home_url(); ?>/about/member" class="button02"><span>詳細はこちら</span></a>
                        </div>
                    </li><!-- /.contactBox_item -->
                <?php endif; ?>

                <li class="contactBox_item">
                    <h3 class="contactBox_title">制作のご相談</h3>
                    <div class="contactBox_img03">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/balloon.png" alt="アイコン" width="135" height="90">
                    </div><!-- /.contactBox_img -->
                    <p class="contactBox_text">現在抱えている課題を教えてください！あなただけのクリエイティブチームで解決に導きます！</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/contact/" class="button02"><span>相談してみる</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
            </ul><!-- /.contactBox_list01 -->

            <ul class="contactBox_list02">
                <?php if (is_page('about')) : ?>
                    <li class="contactBox_item-sp contactBox_item-sp01">
                        <a href="<?php echo home_url(); ?>/works/">
                            <div class="contactBox_img04">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/works.png" alt="アイコン" width="96" height="56">
                            </div>
                            <h3 class="contactBox_title">実績一覧</h3>
                        </a>
                    </li><!-- /.contactBox_item -->
                <?php else : ?>
                    <li class="contactBox_item-sp contactBox_item-sp01">
                        <a href="<?php echo home_url(); ?>/about/">
                            <div class="contactBox_img01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/wepot.png" alt="アイコン" width="85" height="65">
                            </div>
                            <h3 class="contactBox_title">Wepotについて</h3>
                        </a>
                    </li><!-- /.contactBox_item -->
                <?php endif; ?>

                <?php if (is_page(array('member', 'honma', 'ayaka', 'sato', 'yukix', 'tomoni', 'saito', 'maruo')) || is_archive() || is_single()) : ?>
                    <li class="contactBox_item-sp contactBox_item-sp01">
                        <a href="<?php echo home_url(); ?>/works/">
                            <div class="contactBox_img04">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/works.png" alt="アイコン" width="96" height="56">
                            </div>
                            <h3 class="contactBox_title">実績一覧</h3>
                        </a>
                    </li><!-- /.contactBox_item -->
                <?php else : ?>
                    <li class="contactBox_item-sp contactBox_item-sp01">
                        <a href="<?php echo home_url(); ?>/about/member/">
                            <div class="contactBox_img02">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/member.png" alt="アイコン" width="85" height="64">
                            </div>
                            <h3 class="contactBox_title">メンバー紹介</h3>
                        </a>
                    </li><!-- /.contactBox_item -->
                <?php endif; ?>

                <li class="contactBox_item-sp contactBox_item-sp02">
                    <h3 class="contactBox_title contactBox_title01">制作のご相談</h3>
                    <div class="contactBox_img03">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/balloon.png" alt="アイコン" width="84" height="56">
                    </div>
                    <p class="contactBox_text">現在抱えている課題を教えてください！あなただけのクリエイティブチームで解決に導きます！</p>
                    <div class="contactBox_btn">
                        <a href="<?php echo home_url(); ?>/contact/" class="button02"><span>相談してみる</span></a>
                    </div>
                </li><!-- /.contactBox_item -->
            </ul><!-- /.contactBox_list01 -->
        </div><!-- /.contactBox_wrap -->
    </section><!-- /.contactBox -->
<?php endif; ?>