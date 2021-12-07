<?php

// FUNCOES DO TEMA
function vina_adiciona_recursos_tema()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_image_size('lista_posts', 0, 204, true);
  add_image_size('produto-topo', 385, 385, true);
}
add_action('after_setup_theme', 'vina_adiciona_recursos_tema');

// LIMITE DE RESUMO
function wpdocs_custom_excerpt_length($length)
{
  return 35;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

// INCLUI NAV WALKER
function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// REGISTRA MENU
function vina_registra_menu()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'vina'),
    'menu-rodape' => __('Menu Rodapé', 'vina'),
    'menu-servicos' => __('Menu Serviços', 'vina'),
    'menu-galeria' => __('Menu Galerias', 'vina')
  ));
}
add_action('after_setup_theme', 'vina_registra_menu');

// SCRIPTS
function vina_scripts()
{
  wp_enqueue_style('critital', get_template_directory_uri() . '/assets/css/critical.css', array(), '1.1', 'all');

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true);
  wp_enqueue_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array('bootstrap'), '5.3.0', true);
  wp_enqueue_script('acoes', get_template_directory_uri() . '/assets/js/scripts.min.js', array('lightbox'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'vina_scripts');

/*
 * Shortcode Tempo de leitura no post
 */
function tempoDeLeitura()
{
  $content = get_post_field('post_content');
  $word_count = str_word_count(strip_tags($content));
  $char_count = mb_strlen(strip_tags($content), "UTF-8");

  $min = ceil($char_count / 1200); // tempo médio de leitura: 1200 caracteres

  if ($char_count <= 1) {
    $tempo = '1 min. de leitura';
  } else {
    $tempo = $min . ' min. de leitura';
  }

  // $tempo .= ' ('. $word_count .' palavras, '. $char_count .' caracteres)';
  $tempo_leitura = $tempo;
  return $tempo_leitura;
}
add_shortcode('shortcode-tempo-leitura', 'tempoDeLeitura');


function vina_paginacao()
{
  global $wp_query;
  $big = 999999999;

  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'type' => 'list',
    'prev_next' => true,
    'prev_text' => '&lsaquo;',
    'next_text' => '&rsaquo;',
    // 'before_page_number' => '&laquo;',
    // 'after_page_number' => '&raquo;',
    // 'show_all' => false,
    // 'mid_size' => 3,
    // 'end_size' => 1,
  ));
}

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

// Configs do Gutemberg
function vina_config()
{
  // 1. Responsividade nas mídias incorporadas, como o bloco do YouTube, por exemplo.
  add_theme_support('responsive-embeds');

  // 2. Estilo padrão de cada bloco.
  add_theme_support('wp-block-styles');

  // 3. Alinhamentos de blocos: largura completa (Full) e largura ampla (Wide)
  add_theme_support('align-wide');

  add_theme_support('editor-color-palette', array(
    array(
      'name' => __('Laranja', 'vina'),
      'slug' => 'laranja',
      'color' => '#d07329',
    ),
    array(
      'name' => __('Marrom', 'vina'),
      'slug' => 'marrom',
      'color' => '#22090e',
    ),
    array(
      'name' => __('Branco', 'vina'),
      'slug' => 'branco',
      'color' => '#ffffff',
    ),
  ));
}
add_action('after_setup_theme', 'vina_config', 0);