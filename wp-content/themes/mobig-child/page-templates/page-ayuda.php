<?php
/**
 * Template name: Ayuda
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>
<?php while(have_posts()) : the_post(); ?>

  <article class="bg-gen">
    <section class="bannerInt">
      <div class="titleInt">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-10 col-lg-10">
              <h1>AYUDA</h1>
              <p>Ofrecemos soluciones en comunicaciones para todos los sectores con tecnología 4.5G</p>
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div><!-- end.titleInt -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/icono-bg.svg" alt="Icono" class="iconBg">
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/header-imagen-1.png" alt="Icono" class="imgAbsBan">
    </section><!-- end.hero-sec -->

    <section class="dudas-sec">
      <div class="container posRel">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="listFilterGalerry">
              <ul>
                <li><a class="filter-button" data-filtro="all" href="#">Todo</a></li>
                <li><a class="filter-button" data-filtro="movil" href="#">Telefonía Móvil</a></li>
                <li><a class="filter-button" data-filtro="portabilidad" href="#">Portabilidad</a></li>
                <li><a class="filter-button" data-filtro="cobertura" href="#">Cobertura</a></li>
                <li><a class="filter-button" data-filtro="mifi" href="#">Mifi Internet Móvil</a></li>
              </ul>
            </div><!-- end.galleryFilter -->
        <?php if( have_rows('faqs_tel_pre') ):
          $row = 0;
        ?>
            <div class="accDudas accordion" id="accordionExample">
        <?php while( have_rows('faqs_tel_pre') ): the_row();
        $field = get_sub_field( 'categoria' ); ?>
              <div class="accordion-item filter <?php echo esc_html($field['value']); ?>">
                <h2 class="accordion-header" id="FAQ-<?php echo $row; ?>">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFAQ-<?php echo $row; ?>" aria-expanded="false" aria-controls="collapseOne">
                    <?php the_sub_field('pregunta_telpre_field'); ?>
                  </button>
                </h2>
                <div id="collapseFAQ-<?php echo $row; ?>" class="accordion-collapse collapse" aria-labelledby="FAQ-<?php echo $row; ?>" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p><?php the_sub_field('respuesta_telpre_field'); ?></p>
                  </div>
                </div>
              </div>
        <?php 
          $row++;
        endwhile; ?>
            </div>
        <?php endif; ?>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="duCircle duCircle__left">
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/telefonia-prepago/circle_pink.svg" alt="Icono" class="duCircle duCircle__right">
    </section><!-- end.beneficios-sec -->

    <section class="ayudaVid-sec">
      <div class="benefitsCt">
        <div class="container">
          <div class="row justify-content-md-end">
            <div class="col-12">
              <h2 class="titleAyuda">Lorem ipsum dolor sit amet</h2>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="dudasct">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/image_1.jpg" alt="" class="dudasct__img">
                <div class="dudasct__desc">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div><!-- end.dudasct__desc -->
              </div><!-- end.dudasct -->
            </div><!-- end.col-* -->
            <div class="col-12 col-md-4 col-lg-4">
              <div class="dudasct">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/imagen_2.jpg" alt="" class="dudasct__img">
                <div class="dudasct__desc">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div><!-- end.dudasct__desc -->
              </div><!-- end.dudasct -->
            </div><!-- end.col-* -->
            <div class="col-12 col-md-4 col-lg-4">
              <div class="dudasct">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/imagen_3.jpg" alt="" class="dudasct__img">
                <div class="dudasct__desc">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div><!-- end.dudasct__desc -->
              </div><!-- end.dudasct -->
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div><!-- end.benefitsCt -->
      <img class="arrowAy" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/flechas-04.svg" alt="Arrows">
    </section><!-- end.beneficios-sec -->
    
    <section class="beneficiosct">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="beneficiosct__title wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="1s">LOREM IPSUM DOLOR</h2>
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--gray wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/iconos-12.svg" class="beneficiosct__img" alt="Beneficios-planes">
              <figcaption class="beneficiosct__cap">
                <p>Te ofrecemos planes de prepago desde $30, planes de pospago desde $100 y la posibilidad de tener un plan actualizado pagando 7 meses y recibiendo 12.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--pink wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/iconos-13.svg" class="beneficiosct__img" alt="beneficios-linea">
              <figcaption class="beneficiosct__cap">
                <p>Porta tu línea y quédate con tu número de toda la vida.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--gray wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/iconos-14.svg" class="beneficiosct__img" alt="beneficios-velocidad">
              <figcaption class="beneficiosct__cap">
                <p>Disfruta la mayo velocidad para navegar con la nueva red 4.5G y 5G.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-5 col-lg-3">
            <figure class="beneficiosct__fig beneficiosct__fig--pink wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
              <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/ayuda/iconos-15.svg" class="beneficiosct__img" alt="beneficios-cobertura">
              <figcaption class="beneficiosct__cap">
                <p>Mantente conectado en cualquier parte del mundo, con nuestra cobertura nacional e internacional.</p>
              </figcaption><!-- end.beneficiosct__cap -->
            </figure><!-- end.beneficiosct__fig -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.beneficiosct -->
  </article><!-- end.article inicio -->

<?php endwhile; ?>
<?php
get_footer();