<?php
/* Template Name: Marrom */
$estiloPagina = 'page.css';
require_once('parts/header.php');

echo 'Página';
echo !is_page('vina-gestao-de-residuos');
echo 'Admin';
echo !is_admin();
echo "Duas";
echo !is_admin() || !is_page('vina-gestao-de-residuos');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="conteudo marrom">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-12 col-md-12">
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