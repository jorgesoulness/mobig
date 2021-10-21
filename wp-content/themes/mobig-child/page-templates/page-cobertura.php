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

    <section class="telPre-sec--planSieteDoceLeft"   style="background-image: url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/cobertura/back.png);">
      <div class="container pb-5">
        <div class="row text-left justify-content-end">
          <div class="row d-flex justify-content-end text-left mt-5 mb-5">
            <div class="col-md-7">
              <h3 class="telPre-sec__title--black">Conoce nuestros planes de telefonía que responden a tus necesidades.</h3>
              <p class="telPre-sec__desc--pink">Elije el que mejor se adapte a ti y recibe tu<br /> <italic class="telPre-sec__desc--pink--italic">SIM</italic> en tu domicilio.</p>
            </div>  
            <div class="col-md-2 d-flex text-center justify-content-center">
              <div class="row">
                <a href="#" class="btn btn-primary btnyellow">Planes</a>
              </div>
            </div>  
          </div> 
        </div>    
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->

  </article><!-- end.article inicio -->

<?php
get_footer();