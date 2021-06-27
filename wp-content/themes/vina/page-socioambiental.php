<?php
/* Template Name: Socioambiental */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="banner-interno" style="background: url(<?php the_post_thumbnail_url(); ?>); background-size: cover; background-position: top center; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="conteudo socioambiental">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile;
        else : ?>

          <p>Não há posts publicados</p>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>