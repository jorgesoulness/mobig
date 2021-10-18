<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moBig_Child
 */

?>        
          </div>
        </main><!-- end.Main -->

        <section class="socialFooter">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <ul  class="">
                  <li class="">
                    <a href="" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos-twitter.svg" class="" width="10%" alt="Icon-twitter" />
                    </a>
                  </li>
                  <li class="">
                    <a href="" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos-face.svg" class="" width="10%" alt="Icon-face" />
                    </a>
                  </li>
                  <li class="">
                    <a href="" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos-IG.svg" class="" width="10%" alt="Icon-ig" />
                    </a>
                  </li>
                  <li class="">
                    <a href="" target="_blank">
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos-YT.svg"class="" width="10%" alt="Icon-yt" />
                    </a>
                  </li>
                </ul>

              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">
                  <i class="fa fa-phone-square"></i>
                  <span>Atención a Clientes: </span>
                    <a href="tel:+5280066244">
                    <span>800</span>
                     <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos o moBig.svg"  alt="logooMoBig" />
                  </a>
                 
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.socialFooter -->
        <footer class="g-footer">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-3">
                <a href="/">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos o moBig.svg" alt="logoMoBig" />
                </a>
              </div>
              <div class="col-12 col-md-3">
                <ul class="menuAcercaFooter">
                  <li>
                    <span>Acerca de</span>
                  </li>
                  <li class="">
                    <a href="#">
                      Mi cuenta
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/portabilidad">
                      Portabilidad
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/recargas">
                      Recargas
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/dudas">
                      Dudas
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-3">
                <ul class="menuLegalesFooter">
                  <li>
                    <span>Legales</span>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/terminos-y-condiciones">
                      Términos y Condiciones
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/aviso-de-privacidad">
                      Aviso de Privacidad
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/aviso-legales">
                      Aviso Legales
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-3">
                 <ul class="menuServiciosFooter">
                  <li>
                    <span>Servicios</span>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/telefonia-celular">
                      Telefonía Celular
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/wifi-movil">
                      Wifi Móvil
                    </a>
                  </li>
                  <li class="">
                    <a href="<?php echo site_url(); ?>/internet-hogar-y-negocios">
                      Internet Hogar y Negocios
                    </a>
                  </li>
                </ul>
              </div>
            </div><!-- end.row -->

            <div class="row">
              <hr class="" />
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-4">
                <span>&copy; 2021 moBig. Todos los derechos reservados.</span>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                  <div class="col-sm-4">
                    <span>Lorem ipsum</span>
                  </div>
                </div>
              </div>
            </div>


          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script>
          $('body').show();
          // $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>