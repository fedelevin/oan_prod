 <?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	// Add other metaboxes as needed
	//https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Field-Types
	$meta_boxes[] = 
    array(
        'id'         => 'post_setting',
        'title'      => 'Contenido Datos abiertos',
        'pages'      => array('post', 'datos-abiertos'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(		

            array(
                'name' => 'video ',
                'desc' => 'video ',
                'id'   => $prefix . 'video',
                'type'    => 'autocomplete',
            ),

            array(
                'name' => 'icono',
                'desc' => 'Icono de la categoria',
                'id'   => $prefix . 'icono',
                'type'    => 'file',
            ),

			array(
                'name' => 'Resume',
                'desc' => 'Breve texto antes de desplegar el contenido.',
                'id'   => $prefix . 'resume',
                'type'    => 'textarea_small',
            ),

            array(
                'name' => '.xls',
                'desc' => 'Link al archivo .xls para descargar',
                'id'   => $prefix . 'xls',
                'type'    => 'file',
            ),

            array(
                'name' => '.csv',
                'desc' => 'Link al archivo .csv para descargar',
                'id'   => $prefix . 'csv',
                'type'    => 'file',
            ),

            array(
                'name' => '.txt',
                'desc' => 'Link al archivo .txt para descargar',
                'id'   => $prefix . 'txt',
                'type'    => 'file',
            ),

            array(
                'name' => '.ods',
                'desc' => 'Link al archivo .ods para descargar',
                'id'   => $prefix . 'ods',
                'type'    => 'file',
            ),

            array(
                'name' => '.ods2',
                'desc' => 'Link al archivo .ods para descargar',
                'id'   => $prefix . 'ods2',
                'type'    => 'file',
            ),

            array(
                'name' => '.zip',
                'desc' => 'Link al archivo .zip para descargar',
                'id'   => $prefix . 'zip',
                'type'    => 'file',
            ),   

            array(
                'name' => '.zip1',
                'desc' => 'Link al archivo .zip para descargar',
                'id'   => $prefix . 'zip1',
                'type'    => 'file',
            ),   

            array(
                'name' => '.zip2',
                'desc' => 'Link al archivo .zip para descargar',
                'id'   => $prefix . 'zip2',
                'type'    => 'file',
            ), 

            array(
                'name' => '.zip3',
                'desc' => 'Link al archivo .zip para descargar',
                'id'   => $prefix . 'zip3',
                'type'    => 'file',
            ),                                                

            array(
                'name' => 'Consulta ',
                'desc' => 'Link a la consulta, http://localhost/consultas2/consultas/lista_especies_nativas',
                'id'   => $prefix . 'query',
                'type'    => 'text',
            ),

            array(
                'name' => 'Campos de la tabla ',
                'desc' => 'Nombre de los campos de la tabla separados por "coma" ',
                'id'   => $prefix . 'campos',
                'type'    => 'text',
            ),

            array(
                'name' => 'Embeber página ',
                'desc' => 'Link a la página ',
                'id'   => $prefix . 'embeber',
                'type'    => 'text',
            ),

            array(
                'name' => 'editor ',
                'desc' => 'editor ',
                'id'   => $prefix . 'editor',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'idref ',
                'desc' => 'Ids de Capas, separadas por coma ',
                'id'   => $prefix . 'idref',
                'type'    => 'text',
            ),
            array(
                'name' => 'Publicaciones ',
                'desc' => 'Publicaciones Asociadas, en pares de titulo*url, separadas a su vez por signo + ',
                'id'   => $prefix . 'publicacion',
                'type'    => 'text',
            ),			
        )
    );
	// Add other metaboxes as needed

	$meta_boxes[] = array(
		'id'         => 'noticia',
		'title'      => 'Noticia del proyecto',
		'pages'      => array( 'proyectos'), // Post type
		'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
		'fields' => array(

            array(
                'name' => 'Noticia ',
                'desc' => 'Separar párrafos con "enter", éstos aparecerán en el slide de la noticia.',
                'id'   => $prefix . 'editor',
                'type'    => 'wysiwyg',
            ),

            array(
                'name' => 'Nombre del o los trámite actuales, separados por coma ',
                'desc' => 'Nombre del trámite separado por coma',
                'id'   => $prefix . 'tramite_actual',
                'type'    => 'text',
            ),

            array(
                'name' => 'Id formulario externo',
                'desc' => 'Id que identifica al formulario. EL mismo debe figurar como parámetro data-target="" en el hipervinculo ',
                'id'   => $prefix . 'idformManifiesto',
                'type'    => 'text',
            ),  

            array(
                'name' => 'Url a formulario externo',
                'desc' => 'ejemplo: https://www.dinama.gub.uy/manifiesto/index.php/manifiesto/crear/4263/st/ ',
                'id'   => $prefix . 'formManifiesto',
                'type'    => 'text',
            ),  

            array(
                'name' => 'Url a Visualizador',
                'desc' => 'ejemplo: https://www.dinama.gub.uy/oan/geoservicio-c387-via-ferrea/capa-c378-oan.php ',
                'id'   => $prefix . 'pathiframeVisualizador',
                'type'    => 'text',
            ),                               
		)
	);

    $meta_boxes[] = array(
        'id'         => 'copete',
        'title'      => 'Copete de las FAQs',
        'pages'      => array( 'proyectos'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(

            array(
                'name' => 'Copete ',
                'desc' => 'Copete de las FAQs',
                'id'   => $prefix . 'copete',
                'type'    => 'wysiwyg',
            ),
                            
        )
    );    

    $meta_boxes[] = array(
        'id'         => 'snap',
        'title'      => 'SNAP (Sistema Nacional de Áreas Proteguidas)',
        'pages'      => array( 'snap'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            
            /*
            array(
                'name' => 'Noticia ',
                'desc' => 'Separar párrafos con "enter", éstos aparecerán en el slide de la noticia.',
                'id'   => $prefix . 'editor',
                'type'    => 'wysiwyg',
            ),
            */

            array(
                'name' => 'Mapa - Latitud ',
                'desc' => 'Latitud',
                'id'   => $prefix . 'lat',
                'type'    => 'text',
            ),

            array(
                'name' => 'Mapa - Longitud ',
                'desc' => 'Longitud',
                'id'   => $prefix . 'long',
                'type'    => 'text',
            ),            
                               
        )
    );

	// Add other metaboxes as needed
	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';
    
}
