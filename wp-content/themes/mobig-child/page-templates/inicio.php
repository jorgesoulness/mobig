<?php
/**
 * Template name: Inicio
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>

  <article class="bg-gen">
    <section class="hero-sec">
      <div class="slideCt">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="slideCt__slide">

                <div>
                  <figure class="slideCt__box">
                    <img class="imgFig" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" alt="">
                    <figcaption class="slideCt__cap">
                      <h2 class="title-hero">Somos el proveedor de soluciones en comunicaciones que necesitas.</h2>
                      <div class="desc-hero">
                        <p>Te ofrecemos alternativas para todos los sectores con tecnología 4.5G</p>
                      </div>
                      <div class="slideCt__btn">
                        <a href="<?php echo site_url(''); ?>" class="btnGen btnGen__item btnGen__item--yellow">Portabilidad</a>
                      </div><!-- end.slideCt__btn -->
                    </figcaption><!-- end.slideCt__cap -->
                  </figure><!--  end.slideCt__box -->
                </div><!-- end.item_slide -->
                <div>
                  <figure class="slideCt__box">
                    <img class="imgFig" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" alt="">
                    <figcaption class="slideCt__cap">
                      <h2 class="title-hero">Somos el proveedor de soluciones en comunicaciones que necesitas.</h2>
                      <div class="desc-hero">
                        <p>Te ofrecemos alternativas para todos los sectores con tecnología 4.5G</p>
                      </div>
                      <div class="slideCt__btn">
                        <a href="<?php echo site_url(''); ?>" class="btnGen btnGen__item btnGen__item--yellow">Portabilidad</a>
                      </div><!-- end.slideCt__btn -->
                    </figcaption><!-- end.slideCt__cap -->
                  </figure><!--  end.slideCt__box -->
                </div><!-- end.item_slide -->

              </div><!-- end.slideCt__slide -->
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
        <button class="btnSlideProd bLeftP" id="prevslideHomeMain"></button>
        <button class="btnSlideProd nRightP" id="nextslideHomeMain"></button>
      </div><!-- end.slideCt -->
      <img class="imgDots" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/dots.svg" alt="Dots">
      <img class="circleAbs" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/circulo-03.svg" alt="Circulo">
      <img class="triangleAbs" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/flecha amarillas-02.svg" alt="Triangulo">
      <img class="imgHeroAbs" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/header3b2.png" alt="Header">
    </section><!-- end.hero-sec -->

    <section class="cobertura-sec">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="boxCober">
              <h2>En moBig conectamos en grande.</h2>
              <a href="<?php echo site_url(''); ?>/cobertura" class="btnGen btnGen__item btnGen__item--pink">Cobertura</a>
            </div>
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->

    <section class="zonawifi-sec">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="boxZonaDesc wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="1s">
              <h3>TELEFONÍA CELULAR</h3>
              <h2>¡Quédate con tu número de siempre!</h2>
              <p>Haz tu portabilidad de manera rápida y fácil. Recuerda, es el derecho que tienes como usuario de telefonía fija o móvil a conservar tu número telefónico cuando decides cambiar de operador.</p>
              <div class="boxZonaDesc__btns">
                <a href="#" class="btnGen btnGen__item btnGen__item--pink">Ver planes Prepago</a>
                <a href="#" class="btnGen btnGen__item btnGen__item--gray">Ver planes pospago</a>
              </div><!-- end.boxZonaDesc__btns -->
            </div><!-- end.boxZonaDesc -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-4 col-lg">
            <div class="boxZona wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
              <h5 class="boxZona__title">Prepago</h5>
              <div class="boxZona__desc">
                <p>Realiza recargas por medio de la página de internet, call center o en los más 4,000 puntos que tenemos para atenderte.</p>
                <div class="boxZona__btn">
                  <a href="#" class="btnGen btnGen__item btnGen__item--yellow-outline">Conocer más</a>
                </div>
              </div>
            </div><!-- end.boxZona -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-4 col-lg">
            <div class="boxZona wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s">
              <h5 class="boxZona__title">Pospago</h5>
              <div class="boxZona__desc">
                <p>Los planes de pospago son con un cargo mensual a tu tarjeta de crédito o débito.</p>
                <div class="boxZona__btn">
                  <a href="#" class="btnGen btnGen__item btnGen__item--yellow-outline">Conocer más</a>
                </div>
              </div>
            </div><!-- end.boxZona -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-4 col-lg">
            <div class="boxZona wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
              <h5 class="boxZona__title">Contrata 7 y obtén 12</h5>
              <div class="boxZona__desc">
                <p>Con nuestro plan anualizado pagas 7 y obtienes 12 meses de servicio.</p>
                <div class="boxZona__btn">
                  <a href="#" class="btnGen btnGen__item btnGen__item--yellow-outline">Conocer más</a>
                </div>
              </div>
            </div><!-- end.boxZona -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.zonawifi-sec -->

    <section class="beneficios-sec" style="background-image: url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/4571203.png);">
      <div class="benefitsCt">
        <div class="container">
          <div class="row justify-content-md-end">
            <div class="col-12 col-md-7 col-lg-6">
              <div class="benefitsCt__box wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.8s">
                <h3>Disfruta de tu propia zona wifi</h3>
                <p>Sin importar donde vayas con moBig Mifi comparte tu internet con tus amigos y clientes en tu casa, establecimiento, oficina o en cualquier parte.</p>
                <div class="benefitsCt__btn">
                  <a href="#" class="btnGen btnGen__item btnGen__item--yellow">Conoce más</a>
                </div>
              </div>
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div><!-- end.benefitsCt -->
      <img class="circleBen" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/circulo-03.svg" alt="Circulo">
    </section><!-- end.beneficios-sec -->

    <section class="beneficiosct">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="beneficiosct__title wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="1s">Los beneficios de estar con moBig</h2>
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--gray wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/iconos-04.svg" class="beneficiosct__img" alt="Beneficios-planes">
              <figcaption class="beneficiosct__cap">
                <p>Te ofrecemos planes de prepago desde $30, planes de pospago desde $115 y la posibilidad de tener un plan actualizado pagando 7 meses y recibiendo 12.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--pink wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/iconos-04.svg" class="beneficiosct__img" alt="beneficios-linea">
              <figcaption class="beneficiosct__cap">
                <p>Porta tu línea y quédate con tu número de toda la vida.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--gray wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/iconos-06.svg" class="beneficiosct__img" alt="beneficios-velocidad">
              <figcaption class="beneficiosct__cap">
                <p>Disfruta la mayo velocidad para navegar con la nueva red 4.5G y 5G.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--pink wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/iconos-07.svg" class="beneficiosct__img" alt="beneficios-cobertura">
              <figcaption class="beneficiosct__cap">
                <p>Mantente conectado en cualquier parte del mundo, con nuestra cobertura nacional e internacional.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.beneficiosct -->

  </article><!-- end.article inicio -->

<?php
get_footer();