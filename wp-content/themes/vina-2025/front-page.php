<?php
/* Template name: Página Inicial */

$estiloPagina = 'home.css';
require_once('parts/header.php');
?>

<section id="galeria-home" class="slideshow">
  <div id="slideHome" class="carousel slide">
    <div class="carousel-indicators">
      <?php
      $contadorSlides = 0;
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => -1
      );
      $slides = new WP_Query($args);

      if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post(); ?>

          <button type="button" data-bs-target="#slideHome" data-bs-slide-to="<?= $contadorSlides++ ?>" class="<?= $contadorSlides === 1 ? 'active' : ''; ?>" aria-current="<?= $contadorSlides === 1 ? 'true' : ''; ?>" aria-label="Slide <?= $contadorSlides; ?>"></button>

      <?php endwhile;
      endif; ?>
    </div>

    <div class="carousel-inner">
      <?php
      $contadorSlide = 0;
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => -1
      );
      $slides = new WP_Query($args);
      if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post(); ?>

          <div class="carousel-item <?= $contadorSlide === 1 ? 'active' : ''; ?>">
            <?php
            $image_mobile = get_field('imagem_mobile');
            if ($image_mobile) :
            ?>

              <img class="d-block d-md-none img-mobile" src="<?= $image_mobile['url'] ?>" alt="<?= $image_mobile['alt'] ?>" loading="<?= ($contadorSlide > 0 || !is_mobile_device()) ? 'lazy' : ''; ?>" width="100%" height="100%" />

            <?php else : ?>

              <img class="d-block d-md-none img-mobile" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" loading="<?= ($contadorSlide > 0 || !is_mobile_device()) ? 'lazy' : ''; ?>" width="720" height="1280">

            <?php endif; ?>

            <img class="d-none d-md-block img-desktop" src="<?php the_post_thumbnail_url(); ?>" width="1920" height="1080" loading="<?= ($contadorSlide > 0 || is_mobile_device()) ? 'lazy' : ''; ?>" alt="<?php the_title(); ?>">

            <div class="carousel-caption">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/marca-vina.svg" class="marca-slide" width="250" height="76" loading="<?= ($contadorSlide > 0 || is_mobile_device()) ? 'lazy' : ''; ?>" alt="<?php bloginfo('title'); ?>" />
              <h5><?php the_title(); ?></h5>
            </div>
          </div>

        <?php
          $contadorSlide++;
        endwhile;
      else : ?>

        <p>Não há slides publicados</p>

      <?php endif; ?>
    </div>

    <button class="carousel-control-prev" aria-label="Anterior" type="button" data-bs-target="#slideHome" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" aria-label="Próximo" type="button" data-bs-target="#slideHome" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

  <a href="socioambiental#ebook-contrario" title="E-book Livro ao Contrário" class="destaque">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/ebook-livro-ao-contrario.webp" width="214" height="399" alt="E-book Livro ao Contrário" />
  </a>
</section>

<?php
require_once('parts/footer-home.php');
?>