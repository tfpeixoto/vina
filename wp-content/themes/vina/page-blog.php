<?php
/* Template name: Blog */

$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-8">
        <h1>VinaVina</h1>

        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1
        );
        $posts = new WP_Query($args);
        if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>

            <article class="posts">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
              } ?>

              <h3>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
                  <?php the_title();  ?>
                </a>
              </h3>

              <?php the_excerpt(); ?>
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