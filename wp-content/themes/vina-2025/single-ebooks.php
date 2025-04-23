<?php
/* Template Name: Laranja */
$estiloPagina = 'page.css';
require_once('parts/header.php');

if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="ebook">
      <div class="container ebook__container">
        <div class="ebook__thumb">
          <?php the_post_thumbnail('thumb-ebook', array('class' => 'img-fluid')); ?>
        </div>

        <div class="ebook__content">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <div class="ebook__content__btn">
            <a href="<?= get_field('link_ebook'); ?>" class="btn btn-primary" target="_blank"><?= get_field('label'); ?></a>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile;
else : ?>

  <p>Ops, ocorreu um erro.</p>

<?php
endif;

require_once('parts/footer.php');
?>