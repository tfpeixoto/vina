<?php
/* Template name: Blog */

$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>VinaVina</h1>
      </div>
    </div>

    <div class="row d-flex justify-content-start posts">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'posts_per_page' => 9
      );
      $posts = query_posts($args);
      if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="col-12 col-md-4 posts__box">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('blog-list', array('class' => 'img-fluid'));
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

    <div class="row paginacao">
      <?php vina_paginacao(); ?>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>