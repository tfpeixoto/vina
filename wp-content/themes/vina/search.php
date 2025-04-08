<?php

/**
 * Template name: Busca
 */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-8">
        <h1>VinaVina</h1>
      </div>

      <div class="col-12 col-md-4">
        <div class="conteudo__busca">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 conteudo__retorno">
        <?php
        global $wp_query;
        $total_resultados = $wp_query->found_posts;
        $termo_buscado = get_search_query();

        $frase_retorno = ($total_resultados > 1) ?
          "Encontramos <strong> ${total_resultados} </strong> resultados com o termo <strong> ${termo_buscado} </strong>" :
          "Encontramos <strong> ${total_resultados} </strong> resultado com o termo <strong> ${termo_buscado} </strong>";

        if ($total_resultados != 0) echo $frase_retorno;
        ?>
      </div>
    </div>

    <div class="row d-flex justify-content-start posts">
      <?php 
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

            <p><strong><?php the_date(); ?></strong></p>

            <?php the_excerpt(); ?>
          </article>

        <?php endwhile;
      else : ?>

        <div class="col-12 posts__retorno">
          <p>Desculpe, não há resultados com o termo <strong><?= $termo_buscado; ?></strong>.</p>
        </div>

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