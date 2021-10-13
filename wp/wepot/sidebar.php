<aside class="sideMenu">
    <div class="sideMenu_wrap">
        <div class="sideMenu_list">
            <h3 class="sideMenu_title">カテゴリー</h3>
            <ul>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/webdesign">Webデザイン</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/wordpress">WordPress</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/marketing">マーケティング</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/direction">ディレクション</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/coding">コーディング</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/illust">イラスト</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/blog/video">動画編集</a></li>
            </ul>
        </div><!-- /.sideMenu_list -->
    </div><!-- /.sideMenu_wrap -->
    <div class="sideMenu_wrap">
        <div class="sideMenu_list">
            <h3 class="sideMenu_title">Wepot</h3>
            <ul>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/about/">Wepotについて</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/about/member/">メンバー紹介</a></li>
                <li class="sideMenu_item"><a href="<?php echo home_url(); ?>/works/">実績一覧</a></li>
            </ul>
        </div><!-- /.sideMenu_list -->
    </div><!-- /.sideMenu_wrap -->
    <?php dynamic_sidebar('side-widget'); ?>
</aside>