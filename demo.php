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

	/* Los 5 grupos de documentos de trámites (Documentación de Trámites, Comisión,
	   Proceso, EsIA, AAO) ahora se registran en tramites-group-field.php como campos
	   repetibles sin límite fijo, en vez de $no_tramites/10 metaboxes fijos acá. */


	/*Archivo KML ***************************************************************/	
	$meta_boxes[] = array(
		'id'         => 'kml',
		'title'      => esc_html__( 'Kml asociados al área', 'observatorio' ),
		'post_types' => array( 'snap' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'type' => 'heading',
				'name' => esc_html__('KML', 'observatorio' )
			),
			/*
			array(
				'name'             => esc_html__( 'Archivos KML asociados a la zona protegida', 'observatorio' ),
				'id'               => "file_kml",
				'type'             => 'file_advanced',
				'max_file_uploads' => $nro_documentos,
				'mime_type'        => 'application,kml',
			),*/
			array(
			    'name'        => 'Link al Kml',
			    //'label_description' => 'Label description',
			    'id'         => "file_kml",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 120,
			),		
			array(
			    'name'        => 'Zoom del Kml',
			    //'label_description' => 'Label description',
			    'id'         => "zoom_kml",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 10,
			),

		),
	);
	/*Archivo KML ***************************************************************/	

	/*Video ***************************************************************/	
	$meta_boxes[] = array(
		'id'         => 'video',
		'title'      => esc_html__( 'Video y PDF asociados al área', 'observatorio' ),
		'post_types' => array( 'snap' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'type' => 'heading',
				'name' => esc_html__('Video y PDF', 'observatorio' )
			),
			/*
			array(
				'name'             => esc_html__( 'Archivos KML asociados a la zona protegida', 'observatorio' ),
				'id'               => "file_kml",
				'type'             => 'file_advanced',
				'max_file_uploads' => $nro_documentos,
				'mime_type'        => 'application,kml',
			),*/
			array(
			    'name'        => 'Clave del video en youtube',
			    //'label_description' => 'Label description',
			    'id'         => "file_video",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 120,
			),		


				array(
					'name'             => esc_html__( 'Archivo PDF asociado al área', 'observatorio' ),
					'id'               => "pdf_file",
					'type'             => 'file_advanced',
					'mime_type'        => 'application/pdf'
				),


		),
	);
	/*Video ***************************************************************/	


	/*Resumen *******************************************************************/
	$meta_boxes[] = array(
		'id'         => 'resumen_container',
		'title'      => esc_html__( 'Resumen', 'observatorio' ),
		'post_types' => array( 'snap' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(

			array(
			    'name'        => 'Amplia información?',
			    'label_description' => 'Habilita ventana modal con descripción completa',
			    'id'         => "pregunta",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 30,
			),

			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'Resumen de la descripción', 'observatorio' ),
				'id'         => "resumen",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				//'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),


		),
	);
	/*Resumen *******************************************************************/

	/* 2 Archivos UPM 2  Comunicion de seguimiento ***********************************/
	$meta_boxes[] = array(
		'id'         => 'comision_seguimiento',
		'title'      => esc_html__( 'Archivos Comision de Seguimiento UPM2', 'observatorio' ),
		'post_types' => array( 'proyectos' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(

			array(
			    'name' => 'Archivo 1',
			    'label_description' => 'Resolucion 1',
			    'id'         => "file1_comision_seguimiento",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 150,
			),
			array(
			    'name' => 'Archivo 1',
			    'label_description' => 'Resolucion 2',
			    'id'         => "file2_comision_seguimiento",
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'text',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 150,
			),

		),
	);
	/* 2 Archivos UPM 2  Comunicion de seguimiento **********************************/

	/*Información general *******************************************************/
	for ($i=1; $i < 10 + 1; $i++) { 
	
		$meta_boxes[] = array(
			'id'         => 'info_gral'.$i,
			'title'      => esc_html__( 'Info gral('.$i.')', 'observatorio' ),
			'post_types' => array( 'snap' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'autosave'   => true,
			'fields'     => array(

				array(
				    'name'        => 'Título',
				    //'label_description' => 'Label description',
				    'id'         => "info_titulo".$i,
				    //'desc'        => 'Please enter some text above',
				    'type'        => 'text',

				    // Default value (optional)
				    // 'std'         => 'Default text value',

				    // Cloneable (i.e. have multiple value)?
				    'clone'       => false,

				    // Placeholder
				    //'placeholder' => 'Pregunta',

				    // Input size
				    'size'        => 30,
				),

				array(
				    'name'        => 'Ícono',
				    //'label_description' => 'Label description',
				    'id'         => "info_icono".$i,
				    //'desc'        => 'Please enter some text above',
				    'type'        => 'text',

				    // Default value (optional)
				    // 'std'         => 'Default text value',

				    // Cloneable (i.e. have multiple value)?
				    'clone'       => false,

				    // Placeholder
				    //'placeholder' => 'Pregunta',

				    // Input size
				    'size'        => 30,
				),

				// WYSIWYG/RICH TEXT EDITOR
				array(
					'name'    => esc_html__( 'Información', 'observatorio' ),
					'id'         => "info_texto".$i,
					'type'    => 'wysiwyg',
					// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
					'raw'     => false,
					//'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
					// Editor settings, see wp_editor() function: look4wp.com/wp_editor
					'options' => array(
						'textarea_rows' => 4,
						'teeny'         => true,
						'media_buttons' => false,
					),
				),


			),
		);
	}
	/*Información general *******************************************************/



	/*Geolocalización de puntos *******************************************************/
	for ($i=1; $i < 40 + 1; $i++) { 
	
		$meta_boxes[] = array(
			'id'         => 'geolocalizacion'.$i,
			'title'      => esc_html__( 'Geolocalización puntos('.$i.')', 'observatorio' ),
			'post_types' => array( 'snap' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'autosave'   => true,
			'fields'     => array(

				array(
					'name'             => esc_html__( 'Icono a mostrar en el punto', 'observatorio' ),
					'id'               => "icono_punto".$i,
					'type'             => 'file_advanced',
					'mime_type'        => 'image/png, image/jpg'
				),

				array(
					'name'       => esc_html__( 'Categoría', 'observatorio' ),
					'id'         => "categoria_punto".$i,
					'type'       => 'taxonomy_advanced',
					'clone'      => false,
					'taxonomy'   => 'rubro',
					'field_type' => 'select_tree',
					'query_args' => array(),
				),

				array(
				    'name'        => 'Coordenadas',
				    //'label_description' => 'Label description',
				    'id'         => "coordenadas_punto".$i,
				    //'desc'        => 'Please enter some text above',
				    'type'        => 'text',

				    // Default value (optional)
				    // 'std'         => 'Default text value',

				    // Cloneable (i.e. have multiple value)?
				    'clone'       => false,

				    // Placeholder
				    //'placeholder' => 'Pregunta',

				    // Input size
				    'size'        => 30,
				),


			array(
			    'name'        => 'Descripción',
			    'id'         => "desc_punto2".$i,
			    //'desc'        => 'Please enter some text above',
			    'type'        => 'textarea',

			    // Default value (optional)
			    // 'std'         => 'Default text value',

			    // Cloneable (i.e. have multiple value)?
			    'clone'       => false,

			    // Placeholder
			    //'placeholder' => 'Pregunta',

			    // Input size
			    'size'        => 30,
			),				


			),
		);
	}
	/*Geolocalización de puntos *******************************************************/


	/*Iconos Quienes Somos *******************************************************/	
	$meta_boxes[] = array(
		'id'         => 'icons_quienes_somos',
		'title'      => esc_html__( 'Iconos Que se puede hacer', 'observatorio' ),
		'post_types' => array( 'snap' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'             => esc_html__( 'Iconos de "Que se puede hacer" asociados a la zona protegida', 'observatorio' ),
				'id'               => "icons_quiens_somos",
				'type'             => 'file_advanced',
				'max_file_uploads' => $nro_documentos,
				'mime_type'        => 'image/jpeg, image/png',
			),


			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'Texto de cada icono', 'observatorio' ),
				'id'         => "resumen_que_se_puede_hacer",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				'clone'       => true,
				//'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

		),
	);
	/*Iconos Quienes Somos *******************************************************/	


	/*Iconos Servicios ***********************************************************/	
	$meta_boxes[] = array(
		'id'         => 'icons_servicios1',
		'title'      => esc_html__( 'Iconos Servicios', 'observatorio' ),
		'post_types' => array( 'snap' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'             => esc_html__( 'Iconos de Servicios asociados a la zona protegida', 'observatorio' ),
				'id'               => "icons_servicios",
				'type'             => 'file_advanced',
				'max_file_uploads' => $nro_documentos,
				'mime_type'        => 'image/jpeg, image/png',
			),

			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'Texto de cada icono', 'observatorio' ),
				'id'         => "resumen_servicios",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				'clone'       => true,
				//'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

		),
	);
	/*Iconos Servicios ***********************************************************/

	/*
	for ($i=1; $i < $no_tramites + 1; $i++) { 
	
		$meta_boxes[] = array(
			'id'         => 'standard2'.$i,
			'title'      => esc_html__( 'Faq('.$i.')', 'observatorio' ),
			'post_types' => array( 'proyectos' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'autosave'   => true,
			'fields'     => array(
				array(
					'type' => 'heading',
					'name' => esc_html__('Pregunta/Respuesta '.$i, 'observatorio' )
				),

				array(
				    'name'        => 'Escriba la pregunta',
				    //'label_description' => 'Label description',
				    'id'         => "pregunta1".$i,
				    //'desc'        => 'Please enter some text above',
				    'type'        => 'text',

				    // Default value (optional)
				    // 'std'         => 'Default text value',

				    // Cloneable (i.e. have multiple value)?
				    'clone'       => false,

				    // Placeholder
				    //'placeholder' => 'Pregunta',

				    // Input size
				    'size'        => 30,
				),

				// WYSIWYG/RICH TEXT EDITOR
				array(
					'name'    => esc_html__( 'Respuesta', 'observatorio' ),
					'id'         => "respuesta".$i,
					'type'    => 'wysiwyg',
					// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
					'raw'     => false,
					//'std'     => esc_html__( 'WYSIWYG default value', 'observatorio' ),
					// Editor settings, see wp_editor() function: look4wp.com/wp_editor
					'options' => array(
						'textarea_rows' => 4,
						'teeny'         => true,
						'media_buttons' => false,
					),
				),


			),
		);
	}	
	*/





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




	// 3nd meta box
	$meta_boxes[] = array(
		'title' => esc_html__( 'Campos personalizados', 'observatorio' ),
		'post_types' => array( 'eae' ),
		'fields' => array(
			// HEADING
			array(
				'type' => 'heading',
				'name' => esc_html__( 'Heading', 'observatorio' ),
				'desc' => esc_html__( 'Seteos generales', 'observatorio' ),
			),
			
			// TAXONOMY ADVANCED
			array(
				'name'       => esc_html__( 'Seleccione la etapa que estará activa', 'observatorio' ),
				'id'         => "etapas",
				'type'       => 'taxonomy_advanced',
				// Can this be cloned?
				'clone'      => false,
				// Taxonomy name
				'taxonomy'   => 'etapas',
				// How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
				'field_type' => 'select_tree',
				// Additional arguments for get_terms() function. Optional
				'query_args' => array(),
			),
		
		
		),
	);





	return $meta_boxes;
}