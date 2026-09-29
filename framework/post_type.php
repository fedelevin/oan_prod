<?php

/* Datos Abiertos **********************************************************/
/*
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
        'has_archive' => false,
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
    'rewrite' => array( 'slug' => 'datos-abiertos-oan' ),
  ));     

}
*/
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
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'actualizaciones', $args );
}
/*/ Actualizaciones/Noticias **************************************************/


/* Monitoreo Visual Costero - Ayuda Visual ***********************************/
/*
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
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'ayuda_visual', $args );
}
*/
/* Monitoreo Visual Costero - Ayuda Visual ***********************************/


/* SNAP - Sistema Nacional de Áreas proteguidas ******************************/
add_action( 'init', 'register_observatorio_SNAP' );
function register_observatorio_SNAP() {
    
    $labels = array( 
        'name' => __( 'SNAP', 'observatorio' ),
        'singular_name' => __( 'SNAP', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New SNAP', 'observatorio' ),
        'edit_item' => __( 'Edit SNAP', 'observatorio' ),
        'new_item' => __( 'New SNAP', 'observatorio' ),
        'view_item' => __( 'View SNAP', 'observatorio' ),
        'search_items' => __( 'Search SNAP', 'observatorio' ),
        'not_found' => __( 'No SNAP found', 'observatorio' ),
        'not_found_in_trash' => __( 'No SNAP found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent SNAP:', 'observatorio' ),
        'menu_name' => __( 'SNAP', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List SNAP',
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
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'SNAP', $args );
}


    add_action( 'init', 'create_Rubro_hierarchical_taxonomy', 0 );
    function create_Rubro_hierarchical_taxonomy() {

      $labels = array(
        'name' => __( 'Rubro', 'observatorio' ),
        'singular_name' => __( 'Rubro', 'observatorio' ),
        'search_items' =>  __( 'Search Rubro','observatorio' ),
        'all_items' => __( 'All Rubro','observatorio' ),
        'parent_item' => __( 'Parent Rubro','observatorio' ),
        'parent_item_colon' => __( 'Parent Rubro:','observatorio' ),
        'edit_item' => __( 'Edit Rubro','observatorio' ), 
        'update_item' => __( 'Update Rubro','observatorio' ),
        'add_new_item' => __( 'Add New Rubro','observatorio' ),
        'new_item_name' => __( 'New Rubro Name','observatorio' ),
        'menu_name' => __( 'Rubro','observatorio' ),
      );     

      register_taxonomy('rubro',array('snap'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'snap-oan' ),
      ));  
    }  


/* SNAP - Sistema Nacional de Áreas proteguidas ******************************/


/*/ Proyectos Impacto **********************************************************/
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
        'menu_name' => __( 'Proyectos Impacto', 'observatorio' ),
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
        'has_archive' => false,
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
    'rewrite' => array( 'slug' => 'proyectos-upm' ),
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
    'rewrite' => array( 'slug' => 'proyectos-upm' ),
  )); 
}  
/*/ Proyectos Impacto **********************************************************/



/*/ EAE Evaluación Ambiental Estratégica ***************************************/
add_action( 'init', 'register_observatorio_EAE' );
function register_observatorio_EAE() {
    
    $labels = array( 
        'name' => __( 'EAE', 'observatorio' ),
        'singular_name' => __( 'eae', 'observatorio' ),
        'add_new' => __( 'Add New', 'observatorio' ),
        'add_new_item' => __( 'Add New proyecto', 'observatorio' ),
        'edit_item' => __( 'Edit actualizacion', 'observatorio' ),
        'new_item' => __( 'New actualizacion', 'observatorio' ),
        'view_item' => __( 'View actualizacion', 'observatorio' ),
        'search_items' => __( 'Search EAE', 'observatorio' ),
        'not_found' => __( 'No actualizacion found', 'observatorio' ),
        'not_found_in_trash' => __( 'No actualizacion found in Trash', 'observatorio' ),
        'parent_item_colon' => __( 'Parent actualizacion:', 'observatorio' ),
        'menu_name' => __( 'EAE', 'observatorio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List EAE',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array( 'eae' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => get_stylesheet_directory_uri(). '/images/admin_ico_proyectos.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'eae', $args );
}

add_action( 'init', 'tramites_eae_hierarchical_taxonomy', 0 );
function tramites_eae_hierarchical_taxonomy() {

  $labels = array(
    'name' => __( 'Etapas', 'observatorio' ),
    'singular_name' => __( 'Etapas', 'observatorio' ),
    'search_items' =>  __( 'Search Etapas','observatorio' ),
    'all_items' => __( 'All Etapas','observatorio' ),
    'parent_item' => __( 'Parent Etapas','observatorio' ),
    'parent_item_colon' => __( 'Parent Etapas:','observatorio' ),
    'edit_item' => __( 'Edit Etapa','observatorio' ), 
    'update_item' => __( 'Update Etapa','observatorio' ),
    'add_new_item' => __( 'Add New Etapa','observatorio' ),
    'new_item_name' => __( 'New Etapa Name','observatorio' ),
    'menu_name' => __( 'Etapas','observatorio' ),
  );

  register_taxonomy('etapas',array('eae'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'evaluacion_ambiental_estrategica' ),
  )); 
}  
 
/*/ EAE Evaluación Ambiental Estratégica ***************************************/