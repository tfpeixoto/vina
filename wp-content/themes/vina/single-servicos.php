<?php
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-7">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>

      <div class="col-12 col-md-5">
        <ul class="lateral-servicos">
          <?php
          $args = array(
            'post_type' => 'servicos',
            'posts_per_page' => -1
          );

          $servicos = new WP_Query($args);
          if ($servicos->have_posts()) : while ($servicos->have_posts()) : $servicos->the_post(); ?>

              <li>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
                  <?php the_title();  ?>
                </a>
              </li>

            <?php endwhile;
          else : ?>

            <p>Não há posts publicados</p>

          <?php endif; wp_reset_query(); ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php 
$args = array(
  'id' => $id
);

get_template_part('template_parts/galeria', 'galeria', $args); ?>

<?php
require_once('footer.php');
?>