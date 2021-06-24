<?php
/* Template name: Página Inicial */

$estiloPagina = 'home.css';
require_once('header-home.php');
?>

<section class="slideshow">
  <div id="slideHome" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" alt="Primeiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Filosofia moderna e consciente</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" alt="Segundo Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Estrutura e capacitação técnica</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/assets/images/banner.jpg" alt="Terceiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Conceito de empresa-parque</h5>
        </div>
      </div>
    </div>

    <ol class="carousel-indicators" href="#slideHome">
      <li data-target="#slideHome" data-slide-to="0" class="active"></li>
      <li data-target="#slideHome" data-slide-to="1"></li>
      <li data-target="#slideHome" data-slide-to="2"></li>
    </ol>

    <a class="carousel-control-prev" href="#slideHome" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#slideHome" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</section>

<?php
require_once('footer-home.php');
?>