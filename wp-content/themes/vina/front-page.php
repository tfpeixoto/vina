<?php
/* Template name: Página Inicial */

$estiloPagina = 'home.css';
require_once('header-home.php');
?>

<section class="slideshow">
  <div id="slideHome" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => -1
      );
      $contadorSlides = 0;
      $slides = new WP_Query($args);
      if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post(); ?>

          <div class="carousel-item">
            <img class="d-block" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="carousel-caption d-none d-md-block">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/marca-vina.png" class="marca-slide" alt="Vina" />
              <h5><?php the_title(); ?></h5>
            </div>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há slides publicados</p>

      <?php endif; ?>
    </div>

    <ol class="carousel-indicators" href="#slideHome">
      <?php
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => -1
      );
      $slides = new WP_Query($args);
      if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post(); ?>

          <li data-target="#slideHome" data-slide-to="<?= $contadorSlides++ ?>"></li>

      <?php endwhile;
      endif; ?>
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