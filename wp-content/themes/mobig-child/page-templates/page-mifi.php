<?php
/**
 * Template name: Mifi
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
            <img src=""<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/Iconos o moBig.svg" class="w-50" alt="logoMoBig" />
            <h1>TEN LA SEGURIDAD QUE SIEMPRE ESTARAS CONECTADO</h1>
            <p>moBig Mifi es tu propia zona Wifi, sin importar donde vayas el internet te acompaña.</p>
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/mifi/4571203.png" alt="header-section" class="w-50" />
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.hero-sec -->

    <section class="cobertura-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/mifi/mifi.png" class="w-50" alt="mifi" />
          </div>
          <div class="col-sm-6">
            <h1>MIFI ES NUESTRO MODEM INALÁMBRICO</h1>
            <p>Su práctico tamaño te permite transportarlo a todos lados las 24 horas del día con cobertura nacional.</p>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.cobertura-sec -->

    <section class="zonawifi-sec">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-10">
            <div class="row">
              <h1>APROVECHA NUESTROS PLANES PREPAGO</h1>
              <p>Sin importar donde vayas con moBig Mifi tu internet con tus amigos y clientes en tu casa, establecimiento, oficina o en cualquier parte.</p>
            </div>
            <div class="row">
              <div class="card col-sm-4" >
                <div class="card-body">
                  <h3 class="card-title text-center">PLAN MIFI 1</h3>
                  <h4>5GB</h4>
                  <h1>$100</h1>
                  <ul>
                    <li><i class="fa fa-check-circle"></i> <p>30 días de vigencia</p></li>
                    <li><i class="fa fa-check-circle"></i> <p>5 GB de navegación en territorio nacional</p></li>
                  </ul>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card col-sm-4" >
                <div class="card-body">
                  <h3 class="card-title text-center">PLAN MIFI 2</h3>
                  <h4>10GB</h4>
                  <h1>$175</h1>
                  <ul>
                    <li><i class="fa fa-check-circle"></i> <p>30 días de vigencia</p></li>
                    <li><i class="fa fa-check-circle"></i> <p>10 GB de navegación en territorio nacional</p></li>
                  </ul>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card col-sm-4" >
                <div class="card-body text-center">
                  <h3 class="card-title">PLAN MIFI 3</h3>
                  <h4>20GB</h4>
                  <h1>$300</h1>
                  <ul>
                    <li><i class="fa fa-check-circle"></i> <p>30 días de vigencia</p></li>
                    <li><i class="fa fa-check-circle"></i> <p>20 GB de navegación en territorio nacional</p></li>
                  </ul>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card col-sm-4" >
                <div class="card-body">
                  <h3 class="card-title text-center">PLAN MIFI 4</h3>
                  <h4>50GB</h4>
                  <h1>$500</h1>
                  <ul>
                    <li><i class="fa fa-check-circle"></i> <p>30 días de vigencia</p></li>
                    <li><i class="fa fa-check-circle"></i> <p>50 GB de navegación en territorio nacional</p></li>
                  </ul>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card col-sm-4" >
                <div class="card-body">
                  <h3 class="card-title text-center">PLAN MIFI 5</h3>
                  <h4>100GB</h4>
                  <h1>$1000</h1>
                  <ul>
                    <li><i class="fa fa-check-circle"></i> <p>30 días de vigencia</p></li>
                    <li><i class="fa fa-check-circle"></i> <p>100 GB de navegación en territorio nacional</p></li>
                  </ul>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.zonawifi-sec -->

    <section class="beneficios-sec">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
              <h1>¿Dudas? Por acá hay algunas preguntas frecuentes</h1>
            </div>
            <div class="row">
              <?php if( have_rows('faqs_mifi') ):
              $row = 0;
              ?>
                <div class="col-sm-10">
                <div class="accordion" id="accordionExample">
                <?php while( have_rows('faqs_mifi') ): the_row();
                    ?>

                    <div class="accordion-item col-sm-6">
                      <h2 class="accordion-header" id="FAQ-<?php echo $row; ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFAQ-<?php echo $row; ?>" aria-expanded="false" aria-controls="collapseOne">
                          <?php the_sub_field('pregunta_field'); ?>
                        </button>
                      </h2>
                      <div id="collapseFAQ-<?php echo $row; ?>" class="accordion-collapse collapse" aria-labelledby="FAQ-<?php echo $row; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p><?php the_sub_field('respuesta_field'); ?></p>
                        </div>
                      </div>
                    </div>
                <?php 
                  $row++;
              endwhile; ?>
                  </div>
</div>
            <?php endif; ?>
            </div>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </section><!-- end.beneficios-sec -->
  </article><!-- end.article inicio -->

<?php
get_footer();