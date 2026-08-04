<?php
/* Template Name: Laranja */
$estiloPagina = 'page.css';
require_once('parts/header.php');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="conteudo laranja">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-12 col-md-10">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('parts/galeria'); ?>

  <?php endwhile;
else : ?>

  <p>Não há posts publicados</p>

<?php endif; ?>

<?php
require_once('parts/footer.php');
?>