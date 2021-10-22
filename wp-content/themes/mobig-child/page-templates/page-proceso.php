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
            <h3 class="bannerIntTel__titleSmall">Para empezar tu proceso de portabilidad verifica si tu equipo es compatible con nuestra red ingresando tu IMEI</h3>
            <a href="http://www.mobig.mx/compatibilidad" target="_blankc" class="bannerIntTel__descAnc">Aquí</a>
            </div>
            <!--<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/logos/logo_mobig-white.svg" class="bannerIntTel__imgFig" alt="logoMoBig" />-->
            
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/4571203.png" alt="bannerIntTel__Bgs" class=" bannerIntTel__BgsLeft" />
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/flechas-02.svg" alt="header-section" class="mask--FlechasProc" />
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div>
    </section><!-- end.hero-sec -->

    <section class="process-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <!-- <?php //the_field('embed'); ?> -->
            <div class="contentControlsStep">
              <ul class="contentControlsStep__list">
                <li class="contentControlsStep__item stepIcon Controls-step1">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/002-sim-toolkit.png" alt="" class="stepActive">
                  <p>Valida tu equipo</p>
                </li>
                <li class="contentControlsStep__item stepIcon Controls-step2">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/003-note.png" alt="">
                  <p>Llena tus datos</p>
                </li>
                <li class="contentControlsStep__item stepIcon Controls-step3">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/001-credit-card-payment.png" alt="">
                  <p>Completa tu registro</p>
                </li>
              </ul><!-- end.contentControlsStep__list -->
            </div><!-- end.contentControlsStep -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->

        <div class="row d-flex justify-content-center">
          <!-- Button trigger modal BORRAR CUANDO ESTEN LOS ESTILOS -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#result0">
            DA CLICK PARA PROBAR LOS MODALES, CAMBIA EL data-bs-target DLE BOTON DEL result0 al result4
          </button>
          <!-- eND Button trigger modal BORRAR CUANDO ESTEN LOS ESTILOS -->
          <div class="col-12 col-md-8 col-lg-6">
            <div class="contentGralStep step1 active">
              <form id="frmStep1" class="formProcess" name="frmStep1" method="POST">
                <h3>Ingresa tu IMEI</h3>
                <hr/>
                <p class="descStep">Marca *#06# en tu teléfono para consultar el IMEI de tu dispositivo.</p>
                <p class="descStepSmall"><small>¿Necesitas ayuda? <i class="fa fa-question-circle"></i></small></p>
                <div class="inputRel">
                  <input type="text" minlength="15" maxlength="16" name="inpIMEI" id="inpIMEI" class="form-control required" placeholder="Ingresa los 15 o 16 dígitos de tu IMEI*" />
                </div>
                <label class="msg-inpIMEI"></label>
                <div class="contentGralStep__btn">
                  <input type="button" id="frmStep1" for="step2" value="Siguiente">
                </div><!-- end.contentGralStep__btn -->
              </form>
            </div><!-- end.contentGralStep -->
          </div><!-- end.col-*  -->
        </div><!-- end.row -->
        <div class="row d-flex justify-content-center">
          <div class="col-6 col-md-8 col-lg-6">
            <div class="contentGralStep step2">
              <div class="row msj-result2">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/vozapp.png" alt="VozApp" class="" />
                <h4>Tú equipo es compatible pero necesitaras la aplicación <strong>vozApp</strong> para realizar llamadas telefónicas</h4>
                <div class="msj-result2__btn">
                  <a href="https://www.vozapp.com.mx/" class="btnGen btnGen__item btnGen__item--pink" target="_blank">Más información</a>
                </div>
              </div>
              <h3><i class="fas fa fa-user-circle"></i> Cuenta</h3>
              <hr>
              <p class="descStep">Datos del titular de la cuenta</p>
              <form class="formProcess" id="frmStep2" name="frmStep2" method="POST">
                <div class="row">
                  <div class="col">
                    <label class="">Nombre*</label>
                    <input type="text" class="form-control required" placeholder="Nombre*" id="inpNombre" name="inpNombre" />
                  </div>
                  <div class="col">
                    <label class="">Apellidos*</label>
                    <input type="text" class="form-control required" placeholder="Apellidos*" id="inpApellidos" name="inpApellidos" />
                  </div>
                </div>
                <div class="row marginRow">
                  <div class="col">
                    <label class="">Correo Electrónico*</label>
                    <input type="email" class="form-control required" placeholder="Correo electrónico*" id="inpEmail" name="inpEmail"/>
                  </div>
                  <div class="col">
                    <label class="">Teléfono*</label>
                    <input type="text" class="form-control required" placeholder="Teléfono*" id="inpTel" name="inpTel"/>
                  </div>
                </div>
                <h3><i class="fas fa fa-truck"></i> Confirma tu Dirección de Envío</h3>
                <hr/>
                <p class="descStep">Enviaremos tu <strong>SIM</strong> a esta dirección.</p>
                <div class="row">
                  <div class="col">
                    <label class="">Calle*</label>
                    <input type="text" class="form-control required" placeholder="Calle*" id="inpCalle" name="inpCalle" />
                  </div>
                  <div class="col">
                    <label class="">Número Exterior*</label>
                    <input type="text" class="form-control required" placeholder="Número ext*" id="inpNoext" name="inpNoext" />
                  </div>
                  <div class="col">
                    <label class="">Número Interior</label>
                    <input type="text" class="form-control" placeholder="Número int" id="inpNoint" name="inpNoint" />
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="">Código Postal*</label>
                    <input type="text" class="form-control required" placeholder="Código Postal*" id="inpCP" name="inpCP" />
                  </div>
                  <div class="col">
                    <label class="">Estado*</label>
                    <select name="inpEstado" id="inpEstado" class="form-select required">
                      <option>Seleccionar Estado*</option>
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="Ciudad de México">Ciudad de México</option>
                      <option value="Coahuila">Coahuila</option>
                      <option value="Colima">Colima</option>
                      <option value="Durango">Durango</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="México">México</option>
                      <option value="Michoacán">Michoacán</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo León">Nuevo León</option>
                      <option value="Oaxaca">Oaxaca</option>
                      <option value="Puebla">Puebla</option>
                      <option value="Querétaro">Querétaro</option>
                      <option value="Quintana Roo">Quintana Roo</option>
                      <option value="San Luis Potosí">San Luis Potosí</option>
                      <option value="Sinaloa">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucatán">Yucatán</option>
                      <option value="Zacatecas">Zacatecas</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="">Ciudad*</label>
                    <input type="text" class="form-control required" placeholder="Ciudad*" id="inpCiudad" name="inpCiudad" />
                  </div>
                  <div class="col">
                    <label class="">Colonia*</label>
                    <input type="text" class="form-control required" id="inpColonia" name="inpColonia" placeholder="Colonia*" />
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="">Referencias*</label>
                    <input type="text" class="form-control required" id="inpReferencia" name="inpReferencia" placeholder="Referencias*" />
                  </div>
                </div>
                <div class="contentGralStep__btn">
                  <button id="btnStep2" for="https://recarga.mobig.mx/mobig">Guardar y seguir</button>
                </div><!-- end.contentGralStep__btn -->
              </form>
            </div><!-- end.contentGralStep -->

          </div><!-- end.col-* -->
            
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->
  </article><!-- end.article inicio -->

  <?php endwhile; ?>

<?php
get_footer();