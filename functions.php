<?php

// adicionando suporte a thumbnail
add_theme_support('post-thumbnails');

//adicionando tamanhoa de imagem customizado
add_image_size('thumb-post','700','300', true);

//registrando sidebar dinamica
register_sidebar( 
  array(
    'name' => 'Sidebar homepage', 
    'id' => 'sidebar-principal'
  )
);

// registrando sidebar dinamica
register_sidebar(
  array(
    'name' => 'Sidebar arquivo',
    id => 'sidebar-archive'
  )
);


// adicionando background customizado
$args = array ('default-color' => 'f2f2f2');
add_theme_support('custom-background', $args);

// adicionando header customizado
$default = array (
  'default-image'=> get_template_directory_uri() . '/assets/imgs/banner.jpg',
  'height' => 400,
  'width' => 1600,
  'header-text' => true,
  'video' => true
);

//adicionando suporte a header customizado
add_theme_support('custom-header', $default);

//adicionando suporte a logo customizada

$args_logo = array(
  'width' => '150',
  'height' => '150'
);
add_theme_support('custom-logo', $args_logo);

//registrando menu dinâmico
register_nav_menu('main', 'Menu principal');

register_nav_menu('menu-footer', 'Menu do footer');

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_google_map_api( $api ){
	// subistitua xxx por sua api key
	$api['key'] = 'xxx';
	
	return $api;
	
}

