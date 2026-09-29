<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function your_prefix_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'observatorio';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'standard',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Documentación de Trámites(10)', 'observatorio' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'proyectos' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(


			/*TRAMITE 1 *****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 1', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite1",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite1",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),				
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite1",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 1*****************************************************************************************************/


			/*TRAMITE 2*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 2', 'observatorio' )
			),			
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite2",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite2",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite2",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 2*****************************************************************************************************/	


			/*TRAMITE 3*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 3', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite3",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite3",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite3",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 3*****************************************************************************************************/


			/*TRAMITE 4*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 4', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite4",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite4",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite4",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 4*****************************************************************************************************/


			/*TRAMITE 5*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 5', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite5",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite5",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite5",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 5*****************************************************************************************************/	
			

			/*TRAMITE 6*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 6', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite6",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite6",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),			
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite6",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 6*****************************************************************************************************/	


			/*TRAMITE 7*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 7', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite7",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite7",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),			
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite7",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 7*****************************************************************************************************/	


			/*TRAMITE 8*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 8', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite8",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite8",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),			
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite8",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 8*****************************************************************************************************/	


			/*TRAMITE 9*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 9', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite9",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite9",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite9",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 9*****************************************************************************************************/	


			/*TRAMITE 10*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 10', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite10",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite10",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite10",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 10*****************************************************************************************************/

			/*TRAMITE 11*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 11', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite11",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite11",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite11",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 11*****************************************************************************************************/

			/*TRAMITE 12*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 12', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite12",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite12",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite12",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 12*****************************************************************************************************/

			/*TRAMITE 13*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 13', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite13",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite13",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite13",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 13*****************************************************************************************************/

			/*TRAMITE 14*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 14', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite14",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite14",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite14",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 14*****************************************************************************************************/	

			/*TRAMITE 15*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 15', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite15",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite15",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite15",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 15*****************************************************************************************************/

			/*TRAMITE 16*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 16', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite16",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite16",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite16",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 16*****************************************************************************************************/

			/*TRAMITE 17*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 17', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite17",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite17",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite17",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 17*****************************************************************************************************/


			/*TRAMITE 18*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 18', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite18",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite18",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite18",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 18*****************************************************************************************************/


			/*TRAMITE 19*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 19', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite19",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite19",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite19",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 19*****************************************************************************************************/


			/*TRAMITE 20*****************************************************************************************************/
			array(
				'type' => 'heading',
				'name' => esc_html__('Tramite 20', 'observatorio' )
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Grupo', 'observatorio' ),
				'id'         => "observatorio_grupo_tramite20",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'grupos',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Tramite', 'observatorio' ),
				'id'         => "observatorio_tramite20",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'tramites',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),					
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Documentos asociados al trámite', 'observatorio' ),
				'id'               => "observatorio_file_tramite20",
				'type'             => 'file_advanced',
				'max_file_uploads' => 50,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			/*TRAMITE 20*****************************************************************************************************/															

		),



	);
	// 2nd meta box
	$meta_boxes[] = array(
		'title' => esc_html__( 'Advanced Fields', 'observatorio' ),
		'fields' => array(
			// HEADING
			array(
				'type' => 'heading',
				'name' => esc_html__( 'Heading', 'observatorio' ),
				'desc' => esc_html__( 'Optional description for this heading', 'observatorio' ),
			),
			// SLIDER
			array(
				'name'       => esc_html__( 'Slider', 'observatorio' ),
				'id'         => "{$prefix}slider",
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => esc_html__( '$', 'observatorio' ),
				'suffix'     => esc_html__( ' USD', 'observatorio' ),
				// jQuery UI slider options. See here http://api.jqueryui.com/slider/
				'js_options' => array(
					'min'  => 10,
					'max'  => 255,
					'step' => 5,
				),
				// Default value
				'std'        => 155,
			),
			// NUMBER
			array(
				'name' => esc_html__( 'Number', 'observatorio' ),
				'id'   => "{$prefix}number",
				'type' => 'number',
				'min'  => 0,
				'step' => 5,
			),
			// DATE
			array(
				'name'       => esc_html__( 'Date picker', 'observatorio' ),
				'id'         => "{$prefix}date",
				'type'       => 'date',
				// jQuery date picker options. See here http://api.jqueryui.com/datepicker
				'js_options' => array(
					'appendText'      => esc_html__( '(yyyy-mm-dd)', 'observatorio' ),
					'dateFormat'      => esc_html__( 'yy-mm-dd', 'observatorio' ),
					'changeMonth'     => true,
					'changeYear'      => true,
					'showButtonPanel' => true,
				),
			),
			// DATETIME
			array(
				'name'       => esc_html__( 'Datetime picker', 'observatorio' ),
				'id'         => $prefix . 'datetime',
				'type'       => 'datetime',
				// jQuery datetime picker options.
				// For date options, see here http://api.jqueryui.com/datepicker
				// For time options, see here http://trentrichardson.com/examples/timepicker/
				'js_options' => array(
					'stepMinute'     => 15,
					'showTimepicker' => true,
				),
			),
			// TIME
			array(
				'name'       => esc_html__( 'Time picker', 'observatorio' ),
				'id'         => $prefix . 'time',
				'type'       => 'time',
				// jQuery datetime picker options.
				// For date options, see here http://api.jqueryui.com/datepicker
				// For time options, see here http://trentrichardson.com/examples/timepicker/
				'js_options' => array(
					'stepMinute' => 5,
					'showSecond' => true,
					'stepSecond' => 10,
				),
			),
			// COLOR
			array(
				'name' => esc_html__( 'Color picker', 'observatorio' ),
				'id'   => "{$prefix}color",
				'type' => 'color',
			),
			// CHECKBOX LIST
			array(
				'name'    => esc_html__( 'Checkbox list', 'observatorio' ),
				'id'      => "{$prefix}checkbox_list",
				'type'    => 'checkbox_list',
				// Options of checkboxes, in format 'value' => 'Label'
				'options' => array(
					'value1' => esc_html__( 'Label1', 'observatorio' ),
					'value2' => esc_html__( 'Label2', 'observatorio' ),
				),
			),
			// AUTOCOMPLETE
			array(
				'name'    => esc_html__( 'Autocomplete', 'observatorio' ),
				'id'      => "{$prefix}autocomplete",
				'type'    => 'autocomplete',
				// Options of autocomplete, in format 'value' => 'Label'
				'options' => array(
					'value1' => esc_html__( 'Label1', 'observatorio' ),
					'value2' => esc_html__( 'Label2', 'observatorio' ),
				),
				// Input size
				'size'    => 30,
				// Clone?
				'clone'   => false,
			),
			// EMAIL
			array(
				'name' => esc_html__( 'Email', 'observatorio' ),
				'id'   => "{$prefix}email",
				'desc' => esc_html__( 'Email description', 'observatorio' ),
				'type' => 'email',
				'std'  => 'name@email.com',
			),
			// RANGE
			array(
				'name' => esc_html__( 'Range', 'observatorio' ),
				'id'   => "{$prefix}range",
				'desc' => esc_html__( 'Range description', 'observatorio' ),
				'type' => 'range',
				'min'  => 0,
				'max'  => 100,
				'step' => 5,
				'std'  => 0,
			),
			// URL
			array(
				'name' => esc_html__( 'URL', 'observatorio' ),
				'id'   => "{$prefix}url",
				'desc' => esc_html__( 'URL description', 'observatorio' ),
				'type' => 'url',
				'std'  => 'http://google.com',
			),
			// OEMBED
			array(
				'name' => esc_html__( 'oEmbed', 'observatorio' ),
				'id'   => "{$prefix}oembed",
				'desc' => esc_html__( 'oEmbed description', 'observatorio' ),
				'type' => 'oembed',
			),
			// SELECT ADVANCED BOX
			array(
				'name'        => esc_html__( 'Select', 'observatorio' ),
				'id'          => "{$prefix}select_advanced",
				'type'        => 'select_advanced',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'value1' => esc_html__( 'Label1', 'observatorio' ),
					'value2' => esc_html__( 'Label2', 'observatorio' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				// 'std'         => 'value2', // Default value, optional
				'placeholder' => esc_html__( 'Select an Item', 'observatorio' ),
			),
			// TAXONOMY
			array(
				'name'       => esc_html__( 'Taxonomy', 'observatorio' ),
				'id'         => "{$prefix}taxonomy",
				'type'       => 'taxonomy',
				// Taxonomy name
				'taxonomy'   => 'category',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'checkbox_list',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Taxonomy Advanced', 'observatorio' ),
				'id'         => "{$prefix}taxonomy_advanced",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => true,
				// Taxonomy name
				'taxonomy'   => 'category',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
			// POST
			array(
				'name'        => esc_html__( 'Posts (Pages)', 'observatorio' ),
				'id'          => "{$prefix}pages",
				'type'        => 'post',
				// Post type
				'post_type'   => 'page',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => esc_html__( 'Select an Item', 'observatorio' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'WYSIWYG / Rich Text Editor', 'observatorio' ),
				'id'      => "{$prefix}wysiwyg",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
			// DIVIDER
			array(
				'type' => 'divider',
			),
			// FILE UPLOAD
			array(
				'name' => esc_html__( 'File Upload', 'observatorio' ),
				'id'   => "{$prefix}file",
				'type' => 'file',
			),
			// FILE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'File Advanced Upload', 'observatorio' ),
				'id'               => "{$prefix}file_advanced",
				'type'             => 'file_advanced',
				'max_file_uploads' => 4,
				'mime_type'        => 'application,audio,video', // Leave blank for all file types
			),
			// IMAGE ADVANCED - RECOMMENDED
			array(
				'name'             => esc_html__( 'Image Advanced Upload (Recommended)', 'observatorio' ),
				'id'               => "{$prefix}imgadv",
				'type'             => 'image_advanced',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 2,
				// Display the "Uploaded 1/2 files" status
				'max_status'       => true,
			),
			// IMAGE UPLOAD
			array(
				'id'               => 'image_upload',
				'name'             => esc_html__( 'Image Upload', 'observatorio' ),
				'type'             => 'image_upload',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 2,
				// Display the "Uploaded 1/2 files" status
				'max_status'       => true,
			),
			// PLUPLOAD IMAGE UPLOAD (ALIAS OF IMAGE UPLOAD)
			array(
				'name'             => esc_html__( 'Plupload Image (Alias of Image Upload)', 'observatorio' ),
				'id'               => "{$prefix}plupload",
				'type'             => 'plupload_image',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 2,
				// Display the "Uploaded 1/2 files" status
				'max_status'       => true,
			),
			// THICKBOX IMAGE UPLOAD (WP 3.3+)
			array(
				'name'         => esc_html__( 'Thickbox Image Upload', 'observatorio' ),
				'id'           => "{$prefix}thickbox",
				'type'         => 'thickbox_image',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete' => false,
			),
			// IMAGE
			array(
				'name'             => esc_html__( 'Image Upload', 'observatorio' ),
				'id'               => "{$prefix}image",
				'type'             => 'image',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 2,
			),
			// VIDEO
			array(
				'name'             => __( 'Video', 'observatorio' ),
				'id'               => 'video',
				'type'             => 'video',
				// Maximum video uploads. 0 = unlimited.
				'max_file_uploads' => 3,
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Display the "Uploaded 1/3 files" status
				'max_status'       => true,
			),
			// BUTTON
			array(
				'id'   => "{$prefix}button",
				'type' => 'button',
				'name' => ' ', // Empty name will "align" the button to all field inputs
			),
			// TEXT-LIST
			array(
				'name'    => esc_html__( 'Text List', 'rwmb' ),
				'id'      => "{$prefix}text_list",
				'type'    => 'text_list',
				// Options of inputs, in format 'Placeholder' => 'Label'
				'options' => array(
					'Placehold1' => esc_html__( 'Label1', 'rwmb' ),
					'Placehold2' => esc_html__( 'Label2', 'rwmb' ),
					'Placehold3' => esc_html__( 'Label3', 'rwmb' ),
				),
			),
		),
	);
	return $meta_boxes;
}