<?php

// POST TYPE SERVICOS
function vina_post_type_servicos()
{
  $nomeSingular = 'Serviço';
  $nomePlural = 'Serviços';
  $description = $nomeSingular . ' da Vina';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-palmtree',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('servicos', $args);
}
add_action('init', 'vina_post_type_servicos');


// POST TYPE SLIDESHOW
function vina_post_type_slideshow()
{
  $nomeSingular = 'Slide';
  $nomePlural = 'Slides';
  $description = $nomeSingular . ' da Vina';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => $supports,
  );

  register_post_type('slideshow', $args);
}
add_action('init', 'vina_post_type_slideshow');

// POST TYPE GALERIAS
function vina_post_type_galerias()
{
  $nomeSingular = 'Galeria';
  $nomePlural = 'Galerias';
  $description = $nomeSingular . ' da Vina';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-format-gallery',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('galerias', $args);
}
add_action('init', 'vina_post_type_galerias');

// POST TYPE LPS
function vina_post_type_landing_pages()
{
  $nomeSingular = 'Landing Page';
  $nomePlural = 'Landing Pages';
  $description = $nomeSingular . ' da Vina';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-table-col-before',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('landing-pages', $args);
}
add_action('init', 'vina_post_type_landing_pages');
