<?php
/**
 * Template name: Proceso
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
            <h3>Para empezar tu proceso de portabilidad verifica si tu equipo es compatible con nuestra red ingresando tu IMEI</h3>
            <a href="http://www.mobig.mx/compatibilidad">http://www.mobig.mx/compatibilidad</a>
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/4571203.png" alt="header-section" class="w-50" />
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.hero-sec -->






    <section class="cobertura-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-6 contentControlsStep">
            <ul>
              <li class="stepIcon step1">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/iconChip.svg" alt="" class="w-50" />
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
          <div class="col-6 contentGralStep">
            <h3>Ingresa tu IMEI</h3>
            <hr/>
            <p>Marca *#06# en tu teléfono para consultar el IMEI de tu dispositivo.</p>
            <br/>
            <small>¿Necesitas ayuda? <i class="fa fa-question-circle"></i> </small>
            <input type="text" minlength="15" maxlength="16" name="inpIMEI" id="inpIMEI" class="form-control required" placeholder="]Ingresa los 15 o 16 dígitos de tu IMEI" />
            <button id="bntIMEI" class="btn btn-sumbit">Siguiente</button>
          </div>
        </div>
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->
    <section class="zonawifi-sec">
      <div class="container">
        <div class="row">

        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.zonawifi-sec -->
    <section class="beneficios-sec">
      <div class="container">
        <div class="row">

        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.beneficios-sec -->
  </article><!-- end.article inicio -->

<?php
get_footer();