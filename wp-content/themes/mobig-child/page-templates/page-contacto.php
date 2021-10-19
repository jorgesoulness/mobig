<?php
/**
 * Template name: Contacto
 *
 * @package moBig_Child
 * 
 */

 get_header();
?>

  <article class="bg-gen">
    <section class="bannerInt">
      <div class="titleInt">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-10 col-lg-10">
              <h1>CONTÁCTANOS</h1>
              <p>Ofrecemos soluciones en comunicaciones para todos los sectores con tecnología 4.5G</p>
            </div><!-- end.col-* -->
          </div><!-- end.row -->
        </div><!-- end.container -->
      </div><!-- end.titleInt -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/icono-bg.svg" alt="Icono" class="iconBg">
    </section><!-- end.hero-sec -->

    <section class="contactoDatos-sec">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="datosContact">
              <div class="datosContact__img">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-05.svg" alt="iconTelefono">
              </div>
              <div class="datosContact__desc">
                <p>Llámanos:<br>26 moBig</p>
              </div>
            </div><!-- end.datosContact -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-4">
            <div class="datosContact">
              <div class="datosContact__img">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-06.svg" alt="iconPing">
              </div>
              <div class="datosContact__desc">
                <p>Dirección:<br>Calle sin numero<br>Av. Import Col. Vivir</p>
              </div>
            </div><!-- end.datosContact -->
          </div><!-- end.col-* -->
          <div class="col-12 col-md-4">
            <div class="datosContact">
              <div class="datosContact__img">
                <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-07.svg" alt="iconEmail">
              </div>
              <div class="datosContact__desc">
                <p>Correo electrónico:<br>info@mobig.mx</p>
              </div>
            </div><!-- end.datosContact -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/flecha-02.svg" alt="Icono" class="icArrows">
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/circulo-02.svg" alt="Icono" class="icCircle">
    </section><!-- end.cobertura-sec -->

    <section class="formcontacto-sec">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-9">
            <div class="descConacto">
              <h2>NOS GUSTARÍA SABER DE TI</h2>
              <p>¿Quiers recibir atención personalizada? Deja tus datos y nosotros nos pondremos en contacto contigo.</p>
            </div><!-- dnd.descConacto -->
          </div><!-- end.col-* -->
          <div class="col-12">
            <div class="frmSecConact">
              <form method="POST" name="frmContacto" id="frmContacto">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group animatedField">
                      <input type="text" name="inpNombre" id="inpNombre" class="form-control" required>
                      <label for="inpNombre">Nombre Completo*</label>
                    </div>
                    <div class="form-group animatedField">
                      <input type="email" name="inpEmail" id="inpEmail" class="form-control" required>
                      <label for="inpEmail">Correo Electrónico*</label>
                    </div> 
                    <div class="form-group animatedField">
                      <input type="text" name="inptTel" id="inpTel" class="form-control" required>
                      <label for="inpTel">Teléfono*</label>
                    </div>  
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group animatedTextArea">
                      <textarea id="mensaje" name="mensaje" rows="6" class="form-control" required></textarea>
                      <label for="mensaje">Mensaje</label>
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-center text-center">
                  <div class="form-group">
                    <input type="submit" name="inpSumbit" value="ENVIAR" id="inpSumbit" />
                  </div>
                </div>
              </form>
            </div><!-- end.frmSecConact -->
          </div><!-- end.col-* -->
        </div><!-- end.row -->
      </div><!-- end.container -->
      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/flecha-02.svg" alt="Icono" class="arrowContact">
    </section><!-- end.formcontacto-sec -->
  </article><!-- end.article inicio -->

<?php
get_footer();