<?php
/**
 * Template name: Proceso
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
            <h3 class="bannerIntTel__titleSmall">Para empezar tu proceso de portabilidad verifica si tu <br /> equipo es compatible con nuestra red ingresando tu IMEI</h3>
            <a href="http://www.mobig.mx/compatibilidad"  class="bannerIntTel__descAnc">http://www.mobig.mx/compatibilidad</a>
            </div>
            <!--<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" class="bannerIntTel__imgFig" alt="logoMoBig" />-->
            
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/4571203.png" alt="bannerIntTel__Bgs" class=" bannerIntTel__BgsLeft" />
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/flechas-02.svg" alt="header-section" class="mask--FlechasProc" />
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div>
    </section><!-- end.hero-sec -->  







    <section class="cobertura-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-6 contentControlsStep">
            <?php the_field('embed'); ?>
            <ul>
              <li class="stepIcon step1">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/iconChip.svg" alt="" class="w-50 stepActive" />
                <small>Valida tu equipo</small>
              </li>
              <li class="stepIcon step2">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/iconDatos.svg" alt="" class="w-50" />
                <small>Llena tus datos</small>
              </li>
              <li class="stepIcon step3">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/iconCompleta.svg" alt="" class="w-50" />
                <small>Completa tu registro</small>
              </li>
            </ul>
          </div>
        </div><!-- end.row -->

        <div class="row d-flex justify-content-center">
          <div class="col-6 contentGralStep step1" style="display:none;">
            <h3>Ingresa tu IMEI</h3>
            <hr/>
            <p>Marca *#06# en tu teléfono para consultar el IMEI de tu dispositivo.</p>
            <br/>
            <small>¿Necesitas ayuda? <i class="fa fa-question-circle"></i> </small>
            <input type="text" minlength="15" maxlength="16" name="inpIMEI" id="inpIMEI" class="form-control required" placeholder="Ingresa los 15 o 16 dígitos de tu IMEI*" />
            <button id="bntIMEI" class="btn btn-sumbit" for="step2">Siguiente</button>
          </div>

          <div class="col-6 contentGralStep step2">
            <h3>Ingresa tu IMEI</h3>
            <hr/>
            <p>Marca *#06# en tu teléfono para consultar el IMEI de tu dispositivo.</p>
            <br/>
            <small>¿Necesitas ayuda? <i class="fa fa-question-circle"></i> </small>
            <input type="text" minlength="15" maxlength="16" name="inpIMEI" id="inpIMEI" class="form-control required" placeholder="Ingresa los 15 o 16 dígitos de tu IMEI*" />
            <button id="bntIMEI" class="btn btn-sumbit" for="step2">Siguiente</button>
          </div>
        </div>
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->
  </article><!-- end.article inicio -->

  <?php endwhile; ?>

<?php
get_footer();