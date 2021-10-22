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
              <li class="stepIcon Controls-step1">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/002-sim-toolkit.png" alt="" class="w-50 stepActive" />
                <small>Valida tu equipo</small>
              </li>
              <li class="stepIcon Controls-step2">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/003-note.png" alt="" class="w-50" />
                <small>Llena tus datos</small>
              </li>
              <li class="stepIcon Controls-step3">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/001-credit-card-payment.png" alt="" class="w-50" />
                <small>Completa tu registro</small>
              </li>
            </ul>
          </div>
        </div><!-- end.row -->

        <div class="row d-flex justify-content-center">
          <!-- Button trigger modal BORRAR CUANDO ESTEN LOS ESTILOS -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#result3">
            DA CLICK PARA PROBAR LOS MODALES, CAMBIA EL data-bs-target DLE BOTON DEL result0 al result4
          </button>
          <!-- eND Button trigger modal BORRAR CUANDO ESTEN LOS ESTILOS -->
          <div class="col-6 contentGralStep step1" >
            <form id="frmStep1" name="frmStep1" method="POST">
              <h3>Ingresa tu IMEI</h3>
              <hr/>
              <p>Marca *#06# en tu teléfono para consultar el IMEI de tu dispositivo.</p>
              <br/>
              <small>¿Necesitas ayuda? <i class="fa fa-question-circle"></i> </small>
              <input type="text" minlength="15" maxlength="16" name="inpIMEI" id="inpIMEI" class="form-control required" placeholder="Ingresa los 15 o 16 dígitos de tu IMEI*" />
              <label class="msg-inpIMEI"></label>
              <input type="button" id="frmStep1" class="btn btn-sumbit" for="step2" value="Siguiente" />
              

            </form>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-6 contentGralStep step2" style="display:none;">
            <div class="row msj-result2" style="display:none;">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/proceso/vozapp.png" alt="VozApp" class="" />
              <h3>Tú equipo es compatible pero necesitaras la aplicación <strong>vozApp</strong> para realizar llamadas telefónicas</h3>
              <a href="https://www.vozapp.com.mx/" target="_blank">Más información</a>
            </div>
            <h3><i class="fas fa fa-user-circle"></i> Cuenta</h3>
            <hr/>
            <p>Datos del titular de la cuenta</p>
            <br/>
            <form id="frmStep2" name="frmStep2" method="POST">
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
              <div class="row">
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
              <p>Enviaremos tu <strong>SIM</strong> a esta dirección.</p>
              <br/>
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
                  <select name="inpEstado" id="inpEstado" class="form-control required">
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
            </form>
            <button id="btnStep2" class="btn btn-sumbit" for="https://recarga.mobig.mx/mobig">Guardar y seguir</button>
          </div>
        </div>
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->
  </article><!-- end.article inicio -->

  <?php endwhile; ?>

<?php
get_footer();