<?php get_header(); ?>
  <main class="main-contents">
    <section class="notFound">
      <div class="notFound_inner">
        <picture class="notFound_img">
          <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/img/bg/404.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bg/sp/404.png" alt="" width="352" height="208">
        </picture>
        <div class="notFound_btn">
          <a href="<?php echo home_url(); ?>" class="button04">トップページへ戻る</a>
        </div><!-- /.notFound_btn -->
      </div>
    </section>
<?php get_footer(); ?>