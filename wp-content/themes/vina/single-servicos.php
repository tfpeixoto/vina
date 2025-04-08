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
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-servicos',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'lateral-servicos',
          'container_id'    => 'nav-servicos',
          'menu_class'      => 'navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </div>
    </div>
  </div>
</section>

<?php
// $args = array(
//   'id' => $id
// );
get_template_part('template_parts/galeria', 'galeria');
require_once('footer.php');
?>