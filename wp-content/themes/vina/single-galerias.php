<?php
$estiloPagina = 'page.css';
require_once('header.php');

// ativação do loop
if (have_posts()) : while (have_posts()) : the_post();

    // instância da galeria
    $images = get_field('galeria');
?>

    <section class="conteudo galeria">
      <div class="container">
        <div class="row d-flex justify-content-start">
          <div class="col-12 col-md-10 galeria__titulo">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>

        <ul class="row galeria__lista">

          <?php foreach ($images as $image) : ?>

            <li class="col-12 col-md-3 galeria__item">
              <a href="<?php echo esc_url($image['url']); ?>" data-toggle="lightbox" data-gallery="example-gallery" data-type="image" data-max-width="700">
                <div class="galeria__boximage">
                  <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid galeria__imagem" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
              </a>
            </li>

          <?php endforeach; ?>

        </ul>
      </div>
    </section>

  <?php endwhile;
else : ?>

  <p>Não há imagens publicadas</p>

<?php endif; ?>

<?php
require_once('footer.php');
?>