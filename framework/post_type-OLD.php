<?php

/* Datos Abiertos **********************************************************/
add_action( 'init', 'register_observatorio_Datos_abiertos' );
function register_observatorio_Datos_abiertos() {
    
    $labels = array( 
        'name' => __( 'datos-abiertos', 'observatorio' ),
        'singular_name' => __( 'datos-abiertos', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New Dato Abierto', 'observatorio' ),
        'edit_item' => __( 'Edit Dato Abierto', 'observatorio' ),
        'new_item' => __( 'New Dato Abierto', 'observatorio' ),
        'view_item' => __( 'View Dato Abierto', 'observatorio' ),
        'search_items' => __( 'Search Datos Abiertos', 'observatorio' ),
        'not_found' => __( 'No Dato Abierto found', 'observatorio' ),
        'not_found_in_trash' => __( 'No Dato Abierto found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent Datos Abiertos:', 'observatorio' ),
        'menu_name' => __( 'Datos Abiertos', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Datos Abiertos',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
		'taxonomies' => array( 'Datos_abiertos_category','marcas','tipo' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => get_stylesheet_directory_uri(). '/images/admin_ico_datos_abiertos.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'datos-abiertos', $args );
}


add_action( 'init', 'create_Tipo_hierarchical_taxonomy', 0 );
function create_Tipo_hierarchical_taxonomy() {

  $labels = array(
    'name' => __( 'Tipo', 'observatorio' ),
    'singular_name' => __( 'Tipo', 'observatorio' ),
    'search_items' =>  __( 'Search Tipo','observatorio' ),
    'all_items' => __( 'All Tipo','observatorio' ),
    'parent_item' => __( 'Parent Tipo','observatorio' ),
    'parent_item_colon' => __( 'Parent Tipo:','observatorio' ),
    'edit_item' => __( 'Edit Tipo','observatorio' ), 
    'update_item' => __( 'Update Tipo','observatorio' ),
    'add_new_item' => __( 'Add New Tipo','observatorio' ),
    'new_item_name' => __( 'New Tipo Name','observatorio' ),
    'menu_name' => __( 'Tipo','observatorio' ),
  );     

  register_taxonomy('tipo',array('datos-abiertos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'datos-abiertos' ),
  ));     

}
/*/ Datos abiertos **********************************************************/


/* Actualizaciones/Noticias *************************************************/
add_action( 'init', 'register_observatorio_Actualizaciones' );
function register_observatorio_Actualizaciones() {
    
    $labels = array( 
        'name' => __( 'actualizaciones', 'observatorio' ),
        'singular_name' => __( 'actualizaciones', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New actualizacion', 'observatorio' ),
        'edit_item' => __( 'Edit actualizacion', 'observatorio' ),
        'new_item' => __( 'New actualizacion', 'observatorio' ),
        'view_item' => __( 'View actualizacion', 'observatorio' ),
        'search_items' => __( 'Search actualizaciones', 'observatorio' ),
        'not_found' => __( 'No actualizacion found', 'observatorio' ),
        'not_found_in_trash' => __( 'No actualizacion found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent actualizacion:', 'observatorio' ),
        'menu_name' => __( 'Actualizaciones', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List actualizaciones',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array( 'actualizaciones_category','marcas' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => get_stylesheet_directory_uri(). '/images/admin_ico_actualizaciones.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'actualizaciones', $args );
}
/*/ Actualizaciones/Noticias **************************************************/


/* Monitoreo Visual Costero - Ayuda Visual ***********************************/
add_action( 'init', 'register_observatorio_Ayuda_visual' );
function register_observatorio_Ayuda_visual() {
    
    $labels = array( 
        'name' => __( 'Monitoreo Visual Costero', 'observatorio' ),
        'singular_name' => __( 'ayuda_visual', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New Ayuda Visual', 'observatorio' ),
        'edit_item' => __( 'Edit Ayuda Visual', 'observatorio' ),
        'new_item' => __( 'New Ayuda Visual', 'observatorio' ),
        'view_item' => __( 'View Ayuda Visual', 'observatorio' ),
        'search_items' => __( 'Search Ayuda Visual', 'observatorio' ),
        'not_found' => __( 'No Ayuda Visual found', 'observatorio' ),
        'not_found_in_trash' => __( 'No Ayuda Visual found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent Ayuda Visual:', 'observatorio' ),
        'menu_name' => __( 'MVC - Ayuda Visual', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Ayuda Visual',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => get_stylesheet_directory_uri(). '/images/admin_ico_mvc.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'ayuda_visual', $args );
}
/* Monitoreo Visual Costero - Ayuda Visual ***********************************/

/* Proyectos UMP **********************************************************/
add_action( 'init', 'register_observatorio_Proyectos' );
function register_observatorio_Proyectos() {
    
    $labels = array( 
        'name' => __( 'Proyectos', 'observatorio' ),
        'singular_name' => __( 'proyectos', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New proyecto', 'observatorio' ),
        'edit_item' => __( 'Edit actualizacion', 'observatorio' ),
        'new_item' => __( 'New actualizacion', 'observatorio' ),
        'view_item' => __( 'View actualizacion', 'observatorio' ),
        'search_items' => __( 'Search proyectos', 'observatorio' ),
        'not_found' => __( 'No actualizacion found', 'observatorio' ),
        'not_found_in_trash' => __( 'No actualizacion found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent actualizacion:', 'observatorio' ),
        'menu_name' => __( 'Proyectos UPM', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List proyectos',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array( 'proyectos' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => get_stylesheet_directory_uri(). '/images/admin_ico_proyectos.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'proyectos', $args );
}

add_action( 'init', 'documentacion__hierarchical_taxonomy', 0 );
function documentacion__hierarchical_taxonomy() {

  $labels = array(
    'name' => __( 'Trámites', 'observatorio' ),
    'singular_name' => __( 'Trámites', 'observatorio' ),
    'search_items' =>  __( 'Search Trámites','observatorio' ),
    'all_items' => __( 'All Trámites','observatorio' ),
    'parent_item' => __( 'Parent Trámites','observatorio' ),
    'parent_item_colon' => __( 'Parent Trámites:','observatorio' ),
    'edit_item' => __( 'Edit Trámites','observatorio' ), 
    'update_item' => __( 'Update Trámites','observatorio' ),
    'add_new_item' => __( 'Add New Trámites','observatorio' ),
    'new_item_name' => __( 'New Trámites Name','observatorio' ),
    'menu_name' => __( 'Trámites','observatorio' ),
  );

  register_taxonomy('tramites',array('proyectos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'proyectos' ),
  )); 
}  

add_action( 'init', 'grupo_hierarchical_taxonomy', 0 );
function grupo_hierarchical_taxonomy() {

  $labels = array(
    'name' => __( 'Grupos', 'observatorio' ),
    'singular_name' => __( 'Grupos', 'observatorio' ),
    'search_items' =>  __( 'Search Grupos','observatorio' ),
    'all_items' => __( 'All Grupos','observatorio' ),
    'parent_item' => __( 'Parent Grupos','observatorio' ),
    'parent_item_colon' => __( 'Parent Grupos:','observatorio' ),
    'edit_item' => __( 'Edit Grupos','observatorio' ), 
    'update_item' => __( 'Update Grupos','observatorio' ),
    'add_new_item' => __( 'Add New Grupos','observatorio' ),
    'new_item_name' => __( 'New Grupos Name','observatorio' ),
    'menu_name' => __( 'Grupos','observatorio' ),
  );

  register_taxonomy('grupos',array('proyectos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'proyectos' ),
  )); 
}  
/*/ Proyectos UMP **********************************************************/