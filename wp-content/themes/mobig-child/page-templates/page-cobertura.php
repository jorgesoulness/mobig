<?php
/**
 * Template name: Cobertura
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>

 <article class="bg-gen">
    <section class="hero-sec">
      <div class="container">
        <div class="row">
            <img src=""<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos o moBig.svg" class="w-50" alt="logoMoBig" />
            <p>Ofrecemos soluciones en comunicaciones para todos los sectores con tecnología 4.5G</p>
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/header.png" alt="header-section" class="w-50" />
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.hero-sec -->




    <section class="cobertura-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-10">
            <article id="mapa" class="maps"></article>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->

    <section class="beneficios-sec">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/back.png" alt="header-section" class="w-50" />
          <div class="col-4">
            <h2>Conoce nuestros planes de telefonía que responden a tus necesidades.</h2>
            <p>Elije el que mejor se adapte a ti y recibe tu SIM en tu domicilio.</p>
          </div>
          <div class="col-4">
            <a href="<?php echo site_url(); ?>/planes">Planes</a>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.beneficios-sec -->
  </article><!-- end.article inicio -->

<?php
get_footer();