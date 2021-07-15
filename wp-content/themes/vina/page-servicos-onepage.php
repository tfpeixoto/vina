<?php
/* Template name: Serviços One Page */

$estiloPagina = 'page.css';
require_once('header.php');
?>

<section id="menuServicos" class="conteudo laranja">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-8">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php
        $args = array(
          'post_type' => 'servicos',
          'posts_per_page' => -1
        );
        $servicos = new WP_Query($args);
        if ($servicos->have_posts()) : while ($servicos->have_posts()) : $servicos->the_post(); ?>

            <article class="servicos">
              <h3>
                <a href="#<?php $ancora = sanitize_title(get_the_title());
                          echo $ancora; ?>" alt="<?php the_title(); ?>">
                  <?php the_title();  ?>
                </a>
              </h3>
            </article>

          <?php endwhile;
        else : ?>

          <p>Não há posts publicados</p>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
$args = array(
  'post_type' => 'servicos',
  'posts_per_page' => -1
);
$servicos = new WP_Query($args);
if ($servicos->have_posts()) : while ($servicos->have_posts()) : $servicos->the_post(); ?>

    <section id="<?php $ancora = sanitize_title(get_the_title());
                  echo $ancora; ?>" class="conteudo">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-11 col-md-10">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <a href="#menuServicos" class="back-top">&uarr; Voltar para o topo</a>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part(
      'template_parts/galeria',
      'galeria',
      array(
          'id' => $ancora,
      )
    ); ?>

<?php endwhile;
endif; ?>

<?php
require_once('footer.php');
?>