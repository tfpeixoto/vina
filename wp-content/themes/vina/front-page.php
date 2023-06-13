<?php
/* Template name: Página Inicial */

$estiloPagina = 'home.css';
require_once('header-home.php');
?>

<section id="galeria-home" class="slideshow">
  <div id="slideHome" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" href="#slideHome">
      <?php
      $contadorSlides = 0;
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

    <div class="carousel-inner">
      <?php
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => -1
      );
      $slides = new WP_Query($args);
      if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post(); ?>

          <div class="carousel-item">
            <?php
            $image_mobile = get_field('imagem_mobile');
            if ($image_mobile) :
            ?>

              <img class="d-block d-md-none img-mobile" src="<?= $image_mobile['url'] ?>" alt="<?= $image_mobile['alt'] ?>">

            <?php else : ?>

              <img class="d-block d-md-none img-mobile" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

            <?php endif; ?>

            <img class="d-none d-md-block img-desktop" src="<?php the_post_thumbnail_url(); ?>" width="1920" height="1080" alt="<?php the_title(); ?>">

            <div class="carousel-caption">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/marca-vina.svg" class="marca-slide" width="250" height="76" alt="<?php bloginfo('title'); ?>" />
              <h5><?php the_title(); ?></h5>
            </div>
          </div>

        <?php endwhile;
      else : ?>

        <p>Não há slides publicados</p>

      <?php endif; ?>
    </div>

    <a class="carousel-control-prev" href="#slideHome" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#slideHome" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <div class="destaque">
    <a href="/socioambiental" title="E-book Livro ao Contrário">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/ebook-livro-ao-contrario.jpg" width="214" height="399" alt="E-book Livro ao Contrário" />
    </a>
  </div>
</section>

<?php
require_once('footer-home.php');
?>