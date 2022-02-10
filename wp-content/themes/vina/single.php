<?php
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="conteudo">
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-12 col-md-8">
        <h1><?php the_title(); ?></h1>
        <p><strong><?php $data = get_the_date(); echo $data ?></strong></p>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/galeria'); ?>

<?php
require_once('footer.php');
?>