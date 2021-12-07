<?php
/* Template name: Serviços */

$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo laranja">
  <div class="container">
    <div class="row justify-content-start">
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
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
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
require_once('footer.php');
?>