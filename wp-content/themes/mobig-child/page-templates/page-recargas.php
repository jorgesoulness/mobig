<?php
/**
 * Template name: Recargas
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>
<?php while(have_posts()) : the_post(); ?>

  <article class="bg-gen">
    <section class="bannerInt bannerIntTel">
        <div class="titleInt">
          <div class="container">
            <div class="row">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" class="bannerIntTel__imgFig" alt="logoMoBig" />
              <h1 class="bannerIntTel__title">RECARGAS</h1>
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/header.png" alt="bannerIntTel__Bgs" class=" bannerIntTel__Bgs" />
            </div><!-- end.row -->
          </div><!-- end.container -->
        </div>
    </section>

    <section class="iframeCrm">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php the_content(); ?>
          </div><!-- col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="circleCrm circleCrm__left">
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="circleCrm circleCrm__right">
    </section><!-- end.iframeCrm -->
  </article><!-- end.article inicio -->

<?php endwhile; ?>
<?php
get_footer();