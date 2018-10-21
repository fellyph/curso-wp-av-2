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

// 1. adicionando um caminho customizado
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}

// 2. atualizando diretorio
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}

// 3. Escodendo o advanced custom field do menu
add_filter('acf/settings/show_admin', '__return_false');

// 4. Incluindo o acf no tema
include_once( get_stylesheet_directory() . '/acf/acf.php' );

//5. Import the data
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5bc79b1e7408c',
    'title' => 'Dados Tutoriais',
    'fields' => array(
      array(
        'key' => 'field_5bc7a07c753ff',
        'label' => 'Nível do tutorial',
        'name' => 'post_level',
        'type' => 'select',
        'instructions' => 'Informe qual será o nível deste tutorial',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'Básico' => 'Básico',
          'Intermediário' => 'Intermediário',
          'Avançado' => 'Avançado',
        ),
        'default_value' => array(
          0 => 'Básico',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_category',
          'operator' => '==',
          'value' => 'category:tutorial',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => 'Informações extras do nosso tutorial',
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_5bc90378825d6',
    'title' => 'Informações de Contato',
    'fields' => array(
      array(
        'key' => 'field_5bc9038ccb3bb',
        'label' => 'Endereço',
        'name' => 'endereco',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_5bc903a8cb3bc',
        'label' => 'Cidade',
        'name' => 'cidade',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5bc903b8cb3bd',
        'label' => 'Estado',
        'name' => 'estado',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5bc903c2cb3be',
        'label' => 'Telefone',
        'name' => 'telefone',
        'type' => 'number',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array(
        'key' => 'field_5bc903cecb3bf',
        'label' => 'Email',
        'name' => 'email',
        'type' => 'email',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_5bc90405cb3c0',
        'label' => 'Mapa',
        'name' => 'mapa',
        'type' => 'google_map',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'center_lat' => '',
        'center_lng' => '',
        'zoom' => '',
        'height' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-contato.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_5bc7c3435cb15',
    'title' => 'Mais informações',
    'fields' => array(
      array(
        'key' => 'field_5bc8e1cd961c8',
        'label' => 'Posts Relacioanados',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5bc8e1fd961c9',
        'label' => 'Instrução de uso',
        'name' => '',
        'type' => 'message',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Aqui você consegue vincular posts com assuntos relacionados',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_5bc7da0160c18',
        'label' => 'Exibir card',
        'name' => 'exibir_card',
        'type' => 'true_false',
        'instructions' => 'Habilite a exibição de card de posts relacionados',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5bc7e2611b8a0',
        'label' => 'Posts Relacionados',
        'name' => 'posts_relacionados',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => '',
        'taxonomy' => '',
        'filters' => array(
          0 => 'search',
          1 => 'post_type',
          2 => 'taxonomy',
        ),
        'elements' => array(
          0 => 'featured_image',
        ),
        'min' => 1,
        'max' => 3,
        'return_format' => 'object',
      ),
      array(
        'key' => 'field_5bc8e259961ca',
        'label' => 'Embed Youtube',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5bc8e26c961cb',
        'label' => 'Instruções de vídeo',
        'name' => '',
        'type' => 'message',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => 'Para adicionar um vídeo cadastre o id do vídeo(identificado pelo código em negrito)
  
  https://www.youtube.com/watch?v=<strong>nxJ3isb0H8Y</strong>',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_5bc8e2a6961cc',
        'label' => 'id do vídeo',
        'name' => 'id_video',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5bc8eb53294c1',
        'label' => 'Autores',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5bc8eb85294c2',
        'label' => 'Autores do post',
        'name' => 'autores_post',
        'type' => 'user',
        'instructions' => 'Escolha aqui os contribuidores deste post:',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'array',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_5bcae6af9fd34',
    'title' => 'Saiba mais',
    'fields' => array(
      array(
        'key' => 'field_5bcae6c02839d',
        'label' => 'Extras',
        'name' => 'extras',
        'type' => 'post_object',
        'instructions' => 'Caso queira adicionar conteúdo extra adicione uma página',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'page',
        ),
        'taxonomy' => '',
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'object',
        'ui' => 1,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));
  
  endif;
