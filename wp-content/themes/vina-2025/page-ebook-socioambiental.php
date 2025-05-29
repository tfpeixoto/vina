<?php
/* Template Name: Ebooks Socioambiental */
$estiloPagina = 'page.css';
require_once('parts/header.php');
?>

<section class="conteudo laranja">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-10">
        <h1><?php the_title(); ?></h1>

        <div class="ebooks">
          <?php
          $args = array(
            'post_type' => 'ebooks',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $ebooks = new WP_Query($args);

          if ($ebooks->have_posts()) : while ($ebooks->have_posts()) : $ebooks->the_post(); ?>

              <article class="ebooks__item">
                <a href="<?php the_permalink(); ?>" rel="noopener">
                  <?php the_post_thumbnail('full', array('class' => 'img-fluid ebooks__image')); ?>
                </a>
                <h2><?php the_field('nome_capitulo'); ?></h2>
              </article>

            <?php endwhile;
          else: ?>

            <p>Não há eboks publicados</p>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once('parts/footer.php');
?>