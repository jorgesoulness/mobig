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


 <section class="bannerInt bannerIntTel">
      <div class="titleInt">
        <div class="container">
          <div class="row">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" class="bannerIntTel__imgFig" alt="logoMoBig" />
            <h1 class="bannerIntTel__title">COBERTURA</h1>
            <p class="bannerIntTel__desc">Ofrecemos soluciones en comunicaciones para todos los sectores con tecnología 4.5G</p>
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/header.png" alt="bannerIntTel__Bgs" class=" bannerIntTel__Bgs" />
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div>
    </section><!-- end.hero-sec --> 

    <section class="cobertura-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-10">
            <article id="mapa" class="maps">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/MAPA.png" alt="header-section" class="" />
            </article>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->

    <section class="cober-sec" style="background-image: url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/back.png);">
      <div class="coberCt">
        <div class="container">
          <div class="row justify-content-md-end">
            <div class="col-12 col-md-7 col-lg-6">
              <div class="coberCt__box wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.8s">
                <h3>Conoce nuestros planes de telefonía que responden a tus necesidades.</h3>
                <p>Elije el que mejor se adapte a ti y recibe tu SIM en tu domicilio.<br/> podrás seguir navegando y disfrutar de tus redes sociales favoritas, mientras te mantienes en contacto <br/> con tus seres queridos, sin importat a qué parte viajes.</p>
                <div class="coberCt__btn">
                  <a href="<?php echo site_url(''); ?>" class="btnGen btnGen__item btnGen__item--yellow">Conoce más</a>
                </div>
              </div>
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div><!-- end.benefitsCt -->
      <img class="circleBen" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/circulo-03.svg" alt="Circulo">
    </section><!-- end.beneficios-sec -->

  </article><!-- end.article inicio -->

<?php
get_footer();