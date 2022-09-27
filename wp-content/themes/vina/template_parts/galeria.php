<?php
$images = get_field('galeria');
$size = 'full';
$contadorSlides = 0;
$ancora = 0;

if ($images) : ?>

  <section class="slideshow">
    <div id="<?= $ancora ? "slide-${ancora}" : "slideGaleria" ?>" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach ($images as $image) : ?>

          <div class="carousel-item <?php $contadorSlides == 0 ? 'active' : ''; ?>">
            <img class="d-block img-desktop" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          </div>

        <?php endforeach; ?>
      </div>

      <?php
      $images = get_field('galeria');
      if ($images) : ?>

        <ol class="carousel-indicators" href="#<?= $ancora ? "slide-${ancora}" : "slideGaleria" ?>">
          <?php foreach ($images as $image) : ?>
            <li data-target="#<?= $ancora ? "slide-${ancora}" : "slideGaleria" ?>" data-slide-to="<?= $contadorSlides++ ?>"></li>
          <?php endforeach; ?>
        </ol>

      <?php endif; ?>

      <a class="carousel-control-prev" href="#<?= $ancora ? "slide-${ancora}" : "slideGaleria" ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#<?= $ancora ? "slide-${ancora}" : "slideGaleria" ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>

<?php endif; ?>