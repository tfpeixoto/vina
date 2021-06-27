<?php
/* Template Name: Marrom */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo marrom">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
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