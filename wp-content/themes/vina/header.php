<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/' . $estiloPagina ?>" as="style" media="print" onload="this.media='all'; this.onload=null;" crossorigin>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <?php the_custom_logo(); ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navheader" aria-controls="navheader" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-principal',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navheader',
          'menu_class'      => 'navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </nav>
    </div>
  </header>