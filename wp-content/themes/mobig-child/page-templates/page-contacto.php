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
    <section class="hero-sec">
      <div class="container">
        <div class="row">
            <h1>CONTÁCTANOS</h1>
            <p>Ofrecemos soluciones en comunicaciones para todos los sectores con tecnología 4.5G</p>
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/header-imagen-1.png" alt="header-section" class="w-50" />
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.hero-sec -->




    <section class="cobertura-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-05.svg" alt="iconTelefono" class="w-50" />
            <p>
              Llámanos:
              <br />
              800 26 moBig
            </p>
          </div>
          <div class="col-sm-4">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-06.svg" alt="iconPing" class="w-50" />
            <p>
              Dirección:
              <br />
              Calle sin numero
              <br />
              Av. Import Col. Vivir
            </p>
          </div>
          <div class="col-sm-4">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/contacto/Contacto2-07.svg" alt="iconEmail" class="w-50" />
            <p>
              Correo electrónico:
              <br />
              info@mobig.mx
            </p>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->


    <section class="zonawifi-sec">
      <div class="container">
        <div class="row">
          <h1>NOS GUSTARÍA SABER DE TI</h1>
          <p>¿Quiers recibir atención personalizada? Deja tus datos y nosotros nos pondremos en contacto contigo.</p>


          <form method="POST" name="frmContacto" id="frmContacto">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input type="text" name="inpNombre" id="inpNombre" class="form-control required" placeholder="Nombre Completo*" />
                </div>
                <div class="form-group">
                  <input type="email" name="inpEmail" id="inpEmail" class="form-control required" placeholder="Correo Electrónico*" />
                </div> 
                <div class="form-group">
                  <input type="text" name="inptTel" id="inpTel" class="form-control" placeholder="Teléfono" />
                </div>  
              </div>
              <div class="col-6">
                <div class="form-group">
                  <textarea placeholder="Mensaje" rows="5" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center text-center">
              <div class="form-group">
                <input type="submit" name="inpSumbit" value="ENVIAR" id="inpSumbit" />
              </div>
            </div>
          </form>
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