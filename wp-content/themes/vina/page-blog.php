<?php
/* Template name: Blog */

$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-8">
        <h1>VinaVina</h1>

        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="servicos">
              <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
                <?php the_title('<h3>', '</h3>');  ?>
              </a>

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