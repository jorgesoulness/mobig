<?php
/**
 * Template name: PageGeneric
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>
<?php
		while ( have_posts() ) : the_post(); ?>
  <article class="bg-gen">

    <section class="bannerInt bannerIntTel">
      <div class="titleInt">
        <div class="container">
          <div class="row justify-content-end d-flex">
            <div class="col-sm-8">
            <h3 class="bannerIntTel__title"><?php the_title(); ?></h3>
            </div>
            <!--<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" class="bannerIntTel__imgFig" alt="logoMoBig" />-->
            
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/4571203.png" alt="bannerIntTel__Bgs" class=" bannerIntTel__BgsLeft" />
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/flechas-02.svg" alt="header-section" class="mask--FlechasProc" />
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div>
    </section><!-- end.hero-sec -->

    <section class="generic-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          
          <div class="col-12 col-md-10">
            <div class="rte-desc">
              <?php the_content(); ?>
            </div><!-- end.rte-desc -->
          </div><!-- end.col-* -->

        </div><!-- end.row -->
      </div><!-- end.container -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="genCircle genCircle__left">
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="genCircle genCircle__right">
    </section><!-- end.cobertura-sec -->
  </article><!-- end.article inicio -->

  <?php endwhile; ?>

<?php
get_footer();