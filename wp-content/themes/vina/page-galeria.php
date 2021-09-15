<?php

/**
 * Template name: Galeria
 */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo galeria">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-10">
        <h1>Galerias</h1>
      </div>
    </div>

    <ul class="row galeria__lista">
      <?php
      $args = array(
        'post_type' => 'galerias',
        'posts_per_page' => -1
      );
      $galerias = new WP_Query($args);
      if ($galerias->have_posts()) : while ($galerias->have_posts()) : $galerias->the_post(); ?>

          <li class="col-12 col-md-3 galeria__item">
            <a class="galeria__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <img class="img-fluid galeria__imagem" src="<?php the_post_thumbnail_url(); ?>" />
              <p class="galeria__nome"><?php the_title(); ?></p>
            </a>
          </li>

        <?php endwhile;
      else : ?>

        <li>Não há galerias publicadas</li>

      <?php endif; ?>

    </ul>
  </div>
</section>

<?php
require_once('footer.php');
?>