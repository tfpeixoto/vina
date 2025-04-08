<?php
$images = get_field('galeria');
$size = 'full';
$ancora = 0;

if ($images) : ?>

  <section id="galeria-interna" class="slideshow">
    <div id="<?= $ancora ? "slide-{$ancora}" : "slideGaleria" ?>" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $contadorSlides = 0;
        foreach ($images as $image) :
        ?>

          <div class="carousel-item <?= $contadorSlides === 0 ? 'active' : ''; ?>">
            <img class="d-block img-desktop" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
          </div>

        <?php
          $contadorSlides++;
        endforeach; ?>
      </div>

      <?php
      $images = get_field('galeria');
      $contadorSlides = 0;
      if ($images) : ?>

        <div class="carousel-indicators">
          <?php foreach ($images as $image) : ?>
            <button type="button" class="<?= $contadorSlides === 0 ? 'active' : ''; ?>" aria-current="<?= $contadorSlides === 0 ? 'active' : ''; ?>" data-bs-target="#<?= $ancora ? "slide-{$ancora}" : "slideGaleria" ?>" data-bs-slide-to="<?= $contadorSlides ?>" aria-label="Slide <?= $contadorSlides ?>"></button>
          <?php
            $contadorSlides++;
          endforeach; ?>
        </div>

      <?php endif; ?>

      <button type="button" class="carousel-control-prev" data-bs-target="#<?= $ancora ? "slide-{$ancora}" : "slideGaleria" ?>" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>

      <button type="button" class="carousel-control-next" data-bs-target="#<?= $ancora ? "slide-{$ancora}" : "slideGaleria" ?>" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </section>

<?php endif; ?>