<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "theme_";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'theme_',
        'use_cdn' => false,
        'page_slug' => '_options',
        'page_title' => 'Observatorio Options',
        'update_notice' => TRUE,
        //'intro_text' => '<p>This text is displayed above the options panel. It isn\’t required, but more info is always better! The intro_text field accepts all HTML.</p>’',
        //'footer_text' => '<p>This text is displayed below the options panel. It isn\’t required, but more info is always better! The footer_text field accepts all HTML.</p>',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Observatorio Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => FALSE,
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'display_version' => '2.0',
        'display_name' => 'Observatorio Ambiental Nacional l MA',
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    /*    
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );
    */

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // REV SLIDER
    /*
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if ( is_plugin_active( 'revslider/revslider.php' ) ) {
        global $wpdb;
        $rs = $wpdb->get_results(
            "
          SELECT id, title, alias
          FROM " . $wpdb->prefix . "revslider_sliders
          ORDER BY id ASC LIMIT 999
          "
        );
        $revsliders = array();
        if ( $rs ) {
            foreach ( $rs as $slider ) {
                $revsliders[$slider->alias] = $slider->alias;
            }
        } else {
            $revsliders[__( 'No sliders found', 'aguada' )] = 0;
        }
    } else{
        $revsliders[__( 'No sliders found', 'aguada' )] = "Revolution Slider not found";
    }
    */
    // END REV SLIDER     
    


    // LOGO & FAVICON /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-idea',
        'title' => __('Logos y favicon', 'observatorio'),
        'fields' => array(
            /*
            array(
                'id' => 'json',
                'type' => 'media',
                'url' => true,
                'title' => __('Datos de la tabla', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir archivo json.', 'observatorio'),
                'subtitle' => __('archivo json', 'observatorio'),
                'library_filter'  => array('json','jpg','png'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ),
            */
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => true,
                'title' => __('Favicon', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir favicon.', 'observatorio'),
                'subtitle' => __('', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),
            ),
            array(
                'id' => 'favicon_touch',
                'type' => 'media',
                'url' => true,
                'title' => __('Touch', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir touch.', 'observatorio'),
                'subtitle' => __('Medida recomendada 144 x 144 ', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo primario', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir Logo.', 'observatorio'),
                'subtitle' => __('Medida recomendada: Alto: 89px and Ancho: 333px', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ),
            array(
                'id' => 'logo_secundario',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo secundario', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir Logo.', 'observatorio'),
                'subtitle' => __('Medida recomendada: Alto: 69px and Ancho: 322px', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ),
            array(
                'id' => 'logo_snap',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo snap', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Destinos naturales.', 'observatorio'),
                'subtitle' => __('Medida recomendada: Alto: 69px and Ancho: 322px', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ), 

            array(
                'id' => 'logo_premio',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo premio', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Logo que aparece en el footer de la pagina del premio', 'observatorio'),
                'subtitle' => __('', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ),              

            array(
                'id' => 'logo_expo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo expo', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Logo de la expo', 'observatorio'),
                'subtitle' => __('', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ), 

        )
    ) );  
    // LOGO & FAVICON /////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // SKIN ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-cogs',
        'title' => __('Skin', 'observatorio'),
        'fields' => array(

            array(
                'id'       => 'nro_tramites',
                'type'     => 'select',
                'title'    => __('Seleccione trámites', 'observatorio'), 
                'subtitle' => __('Nro. de trámites a mostar en los proyectos de UPM', 'observatorio'),
                'desc'     => __('Cantidad de trámites', 'observatorio'),
                // Must provide key => value pairs for select options
                'options'  => array(
                    '10' => '10 trámites',
                    '20' => '20 trámites',
                    '30' => '30 trámites',
                    '40' => '40 trámites',
                    '50' => '50 trámites',
                    '60' => '60 trámites',
                    '70' => '70 trámites',
                    '80' => '80 trámites',
                    '90' => '90 trámites',
                    '100' => '100 trámites',
                ),
                'default'  => '10',
            ),

            array(
                'id'       => 'nro_documentos',
                'type'     => 'select',
                'title'    => __('Seleccione documentos', 'observatorio'), 
                'subtitle' => __('Nro. de documentos a mostrar por cada trámite de UPM', 'observatorio'),
                'desc'     => __('Cantidad de documentos', 'observatorio'),
                // Must provide key => value pairs for select options
                'options'  => array(
                    '10' => '10 documentos',
                    '20' => '20 documentos',
                    '30' => '30 documentos',
                    '40' => '40 documentos',
                    '50' => '50 documentos',
                    '60' => '60 documentos',
                    '70' => '70 documentos',
                    '80' => '80 documentos',
                    '90' => '90 documentos',
                    '100' => '100 documentos',
                ),
                'default'  => '10',
            ),

            array(
                'id' => 'color_fondo',
                'type' => 'color',
                'title' => __('Color del fondo', 'observatorio'),
                'subtitle' => __('Elegir el color de fondo (default: #151515).', 'observatorio'),
                'default' => '#151515',
                'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ),              
            array(
                'id' => 'background',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen/textura de fondo', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen de fondo', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),
            array(
                'id' => 'deco',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen decorativa lateral', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen decorativa', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/deco.png'),
            ),                       
            array(
                'id' => 'color_menu',
                'type' => 'color',
                'title' => __('Color menu navegación', 'observatorio'),
                'subtitle' => __('Elegir el color de los items del menú (default: #151515).', 'observatorio'),
                'default' => '#151515',
                'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ), 
            array(
                'id' => 'color_menu_hover',
                'type' => 'color',
                'title' => __('Color menu navegación - hover', 'observatorio'),
                'subtitle' => __('Color del menu al hover, subrayado títulos, bullets slide, back top, default: #A7B611', 'observatorio'),
                'default' => '#A7B611',
                'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ),                        
            array(
                'id' => 'color_footer',
                'type' => 'color',
                'title' => __('Color pie de página', 'observatorio'),
                'subtitle' => __('Elegir el color del pié de la página (default: #151515).', 'observatorio'),
                'default' => '#151515',
                'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ),
            array(
                'id' => 'color_footer2',
                'type' => 'color',
                'title' => __('Color bajo pie de página', 'observatorio'),
                'subtitle' => __('Elegir el color del bajo pié de la página (default: #CCCCCC).', 'observatorio'),
                'default' => '#CCCCCC',
                'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ),   
            array(
                'id'        => 'width_menu',
                'type'      => 'slider',
                'title'     => __('Ancho máximo del menú', 'observatorio'),
                'subtitle'  => __('Ancho del menú antes que salte el responsive.', 'observatorio'),
                'desc'      => __('Mínimo: 800, Máximo: 2400, step: 1, valor por defecto: 1200', 'observatorio'),
                "default"   => 1200,
                "min"       => 800,
                "step"      => 1,
                "max"       => 2400,
                'display_value' => 'text'
            ),
            array(
                'id'        => 'tooltip-indicadores',
                'type'      => 'text',
                'title'     => 'Tooltip Indicadores',
                'default'   => 'Ver ODS',
            ),
            array(
                'id'        => 'tooltip-ac-ver-aplicacion',
                'type'      => 'text',
                'title'     => 'Tooltip Aporte Ciudadano - ver aplicación',
                'default'   => 'Ver aplicación',
            ),     
            array(
                'id'        => 'tooltip-ac-descargar-pdf',
                'type'      => 'text',
                'title'     => 'Tooltip Aporte Ciudadano - descargar pdf',
                'default'   => 'Guía para el registro',
            ),
            array(
                'id'        => 'tooltip-ac-descargar-apk',
                'type'      => 'text',
                'title'     => 'Tooltip Aporte Ciudadano - descargar apk',
                'default'   => 'Descargar apk',
            ),
            array(
                'id'        => 'tooltip-ac-ver-mapa',
                'type'      => 'text',
                'title'     => 'Tooltip Aporte Ciudadano - ver en mapa',
                'default'   => 'Ver en mapa',
            ),
            array(
                'id'        => 'tooltip-mc-ayuda-visual',
                'type'      => 'text',
                'title'     => 'Tooltip Aporte Ciudadano - Monitoreo visual (Ayuda Visual)',
                'default'   => 'Ayuda Visual',
            ),                                                            
            array(
                'id' => 'body-font',
                'type' => 'typography',
                'output' => array('body'),
                'title' => __('Tipografía general', 'observatorio'),
                'subtitle' => __('Especificar tipografía general del sitio.', 'observatorio'),
                'google' => true,
                'color' => false,
                'font-size' => false,
                'line-height' => false,
                'text-align' => false,
            ), 
        )
    ) );
    // SKIN ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // ITEMS HOME //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-th-large',
        'title' => __('Items del home', 'observatorio'),
        'fields' => array(
            array(
                'id'   => 'items_home_info',
                'type' => 'info',
                'style'=> 'info',
                'desc' => __('Contenido de la home: slide, items y noticias. Elegí la sección en la lista de la izquierda.', 'observatorio'),
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-website',
        'title' => __('Slide', 'observatorio'),
        'subsection' => true,
        'fields' => array(
            array(
            'id'            => 'slide_switch',
            'type'          => 'switch',
            'title'         => 'Activar/Desactivar Slide',
            'default'       => true
            ),
            array(
            'id'            => 'slide',
            'type'          => 'slides',
            'title'         => 'Slide Items',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                'url'   => 'Link',
                ),
            'required'      => array('slide_switch', '=', '1')
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-th-large',
        'title' => __('Boxes', 'observatorio'),
        'subsection' => true,
        'fields' => array(
            array(
                'id'        => 'columns',
                'type'      => 'select',
                'title'     => 'Columnas',
                'validate'  => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4'
                ),
                'default'  => '4',
            ),
            array(
            'id'            => 'boxes',
            'type'          => 'slides',
            'title'         => 'Items del home',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                'url'   => 'Link * Icono',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-comment-alt',
        'title' => __('Noticias', 'observatorio'),
        'subsection' => true,
        'fields' => array(
            array(
            'id'            => 'noticias',
            'type'          => 'slides',
            'title'         => 'Noticias/Actualizaciones',
            'subtitle' => __('Items de Noticias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            ),
        )
    ) );
    // ITEMS HOME /////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // ENCABEZADO PAGE /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-picture',
        'title' => __('Encabezados', 'observatorio'),
        'fields' => array(
            array(
            'id'            => 'encabezados_switch',
            'type'          => 'switch',
            'title'         => 'Activar/Desactivar Encabezados',
            'default'       => true
            ),            
            array(
            'id'            => 'encabezado',
            'type'          => 'slides',
            'title'         => 'Encabezado page',
            'subtitle' => __('Encabezado de cada página. El <strong>título</strong> tiene que ser identico al <strong>nombre de la página</strong>.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Tìtulo',
                'description'   => 'Description',
                'url'   => 'Mostrar info ampliada "+" = Si o No = vacio(no muestra ventana modal con info ampliada)',
                ),
            'required'      => array('encabezados_switch', '=', '1')
            ),
        )
    ) );
    // ENCABEZADO PAGE /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // DATOS ABIERTOS /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-paper-clip',
        'title' => __('Páginas', 'observatorio'),
        'fields' => array(

            /*
            array(
            'id'            => 'datos_abiertos_logo',
            'type'          => 'slides',
            'title'         => 'Logos de cada página',
            'subtitle' => __('El título debe ser igual al nombre de la página', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Title',
                'description'   => 'Description',
                'url'   => 'Url',
                ),
            ),         
            */


            /*
            array(
            'id'            => 'datos_abiertos',
            'type'          => 'slides',
            'title'         => 'Datos Abiertos',
            'subtitle' => __('Bloques de consultas.<br> Los nombres debe ser igual al <strong>Tipo</strong> del <strong>Dato Abierto</strong><br>Agregar signo "+" al final del titulo para no mostrar el icono "+".', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Imagen',
                'description'   => 'Description',
                'url'   => 'Archivos separadosp por "coma"',
                ),
            ),  
            */

            array(
                'id'            => 'geoportal_columns',
                'type'          => 'select',
                'title'         => 'Columnas geoportal',
                'validate' => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6'
                ),
                'default'  => '3',
            ),                         
            array(
            'id'            => 'geoportal',
            'type'          => 'slides',
            'title'         => 'Geoportal',
            'subtitle' => __('Items/links a las páginas.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                //'url'   => 'Archivos separadosp por "coma"',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ), 
            

            /*
            array(
                'id'        => 'geoportal_desc',
                'type'      => 'text',
                'title'     => 'Geoportal Videos Descripción ',
                'default'   => '',
            ),  
            array(
            'id'            => 'geoportal_videos',
            'type'          => 'slides',
            'title'         => 'Geoportal Videos',
            'subtitle'      => __('Video tutoriales.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'       => 'url',
                ),
            ),
            */


            array(
                'id'        => 'videos_premio_nacional_desc',
                'type'      => 'text',
                'title'     => 'Premio nacional Videos Descripción ',
                'default'   => '',
            ),  

            array(
            'id'            => 'videos_premio_nacional',
            'type'          => 'slides',
            'title'         => 'Videos',
            'subtitle'      => __('Videos.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'       => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),



            array(
            'id'                => 'indicadores',
            'type'              => 'slides',
            'title'             => 'Indicadores',
            'subtitle'          => __('Items/links a los indicadores.', 'observatorio'),
            'default'           => false,
            'placeholder'       => array(
                'title'         => 'Título',
                'description'   => 'Icono OSD',
                'url'           => 'URL + Link Archivo de imágen separadosp por "*"',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
           ),
           
           //norbertp
           
           /*
            array(
            'id'                => 'estadisticas',
            'type'              => 'slides',
            'title'             => 'Estadísticas',
            'subtitle'          => __('Items/links a las Estadísticas.', 'observatorio'),
            'default'           => false,
            'placeholder'       => array(
                'title'         => 'Título',
                'description'   => 'Icono OSD',
                'url'           => 'URL + Link Archivo de imágen separadosp por "*"',
                ),
           ),
            */

           /*
            array(
            'id'                => 'cartillas',
            'type'              => 'slides',
            'title'             => 'Cartillas Ilustrativas',
            'subtitle'          => __('Items/links a las Cartillas.', 'observatorio'),
            'default'           => false,
            'placeholder'       => array(
                'title'         => 'Título',
                'description'   => 'Icono OSD',
                'url'           => 'URL + Link Archivo de imágen separadosp por "*"',
                ),
           ),
            */

            array(
            'id'                => 'series_tecnicas',
            'type'              => 'slides',
            'title'             => 'Series Técnicas',
            'subtitle'          => __('Items/links a las Series Técnicas.', 'observatorio'),
            'default'           => false,
            'placeholder'       => array(
                'title'         => 'Título',
                'description'   => 'Icono OSD',
                'url'           => 'URL + Link Archivo de imágen separadosp por "*"',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
           ),

           
           //norberto
           
           /*
            array(
                'id'            => 'aporte_columns',
                'type'          => 'select',
                'title'         => 'Columnas Aporte ciudadano',
                'validate' => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6'
                ),
                'default'  => '3',
            ),          

            array(
            'id'            => 'aporte_ciudadano',
            'type'          => 'slides',
            'title'         => 'Aporte ciudadano',
            'subtitle' => __('Items/links a las aplicaciones. <br><br>url, separados por "*":<br> 0 - link a la aplicación <br> 1 - visualizacion en mapa <br> 2 - link para descargar la aplicación <br> 3 - código Qr', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            ), 
            */


            array(
                'id'            => 'costero_marino_columns',
                'type'          => 'select',
                'title'         => 'Columnas costero marino',
                'validate' => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6'
                ),
                'default'  => '3',
            ),    

            array(
            'id'            => 'costero_marino',
            'type'          => 'slides',
            'title'         => 'Costero Marino',
            'subtitle' => __('Items/links a las aplicaciones. <br><br>url, separados por "*":<br> 0 - link a la aplicación <br> 1 - visualizacion en mapa <br> 2 - link para descargar la aplicación <br> 3 - código Qr', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),  

            array(
            'id'            => 'residuos',
            'type'          => 'slides',
            'title'         => 'Taller Residuos',
            'subtitle' => __('Items/links a las aplicaciones. <br><br>url, separados por "*":<br> 0 - link a la aplicación <br> 1 - visualizacion en mapa <br> 2 - link para descargar la aplicación <br> 3 - código Qr', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),   

        

            array(
                'id'        => 'biodiversidad_texto',
                'type'      => 'textarea',
                'title'     => 'Intro biodiversidad ',
                'default'   => '',
            ),  

            array(
            'id'            => 'biodiversidad',
            'type'          => 'slides',
            'title'         => 'Biodiversidad',
            'subtitle' => __('', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),   


            array(
            'id'            => 'acciones-para-la-gestion',
            'type'          => 'slides',
            'title'         => 'Acciones para la gestión',
            'subtitle' => __('Items', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),   


            array(
                'id'            => 'dia_internacional_del_aire_columns',
                'type'          => 'select',
                'title'         => 'Columnas dia_internacional_del_aire',
                'validate' => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6'
                ),
                'default'  => '3',
            ), 
            
            array(
            'id'            => 'iniciativa_del_rio_negro',
            'type'          => 'slides',
            'title'         => 'Iniciativa del Río Negro',
            'subtitle' => __('Items/links a las aplicaciones. <br><br>url, separados por "*":<br> 0 - link a la aplicación <br> 1 - visualizacion en mapa <br> 2 - link para descargar la aplicación <br> 3 - código Qr', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),                



            array(
            'id'            => 'dia_internacional_del_aire',
            'type'          => 'slides',
            'title'         => 'Día Internacional del Aire',
            'subtitle' => __('Items/links a las aplicaciones. <br><br>url, separados por "*":<br> 0 - link a la aplicación <br> 1 - visualizacion en mapa <br> 2 - link para descargar la aplicación <br> 3 - código Qr', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ), 



            /*
            array(
            'id'            => 'proyecto_upm',
            'type'          => 'slides',
            'title'         => 'UPM',
            'subtitle' => __('Items de UPM', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                ),
            ),  

            array(
            'id'            => 'ayuda_visual',
            'type'          => 'slides',
            'title'         => 'Monitoreo Visual Costero - Ayuda Visual',
            'subtitle' => __('Ingresar solo el titulo de la ayuda visual. Debe ser idem al ingresado', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                'url'   => 'url',
                ),
            ),               

            array(
            'id'            => 'noticias',
            'type'          => 'slides',
            'title'         => 'Noticias/Actualizaciones',
            'subtitle' => __('Items de Noticias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'   => 'url',
                'width'   => 'width',
                ),
            ),

            array(      
            'title'    => __( 'Seleccionables taxonomia', 'observatorio' ),
            'id'       => 'filter_product_types',
            'type'     => 'select',
            'data' => 'terms',//taxonomies, posts, pages, etc.
            'args' => array('taxonomies'=>'tipo', 'args'=>array()),
            //'taxonomy_types' => array( 'tipo' ),
            'multi'    => true,
            'sortable' => true,
            ),
            */




        )
    ) );
    // DATOS ABIERTOS //////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // PNGR /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNGR', 'observatorio'),
        'fields' => array(                           
            array(
            'id'            => 'pngr',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Items Programa Nacional de Gestión de Residuos', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
            'id'            => 'pngr2',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Items Perdidas y desperdicios de alimentos', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
            'id'            => 'pngr3',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Recursos Perdidas y desperdicios de alimentos', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
            'id'            => 'boxes-residuos-2025',
            'type'          => 'slides',
            'title'         => 'Items Residuos 2025',
            'subtitle' => __('Nuevo formato de Residos 2025', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                'url'   => 'Link * Icono',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),



        )
    ) );     
    // PNGR////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // EAE 2025 - Evaluación Ambiental Estrategica ////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('EAE', 'observatorio'),
        'fields' => array(           

            array(
                'id'        => 'title-eae-2025',
                'type'      => 'text',
                'title'     => 'Título principal ',
                'default'   => '',
            ), 

            array(
                'id'        => 'columns-eae-2025',
                'type'      => 'select',
                'title'     => 'Columnas',
                'validate'  => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4'
                ),
                'default'  => '2',
            ),    

            array(
            'id'            => 'boxes-eae-2025',
            'type'          => 'slides',
            'title'         => 'Items EAE 2025',
            'subtitle' => __('Nuevo EAE 2025, Jerarquía 1', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                'url'   => 'Link * Icono',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
                'id'   =>'divider_',
                'desc' => __('', 'redux-framework-demo'),
                'type' => 'divide'
            ),


            array(
                'id'        => 'title-hv-2025',
                'type'      => 'text',
                'title'     => 'Título principal ',
                'default'   => '',
            ), 

            array(
                'id'        => 'columns-hv-2025',
                'type'      => 'select',
                'title'     => 'Columnas',
                'validate'  => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4'
                ),
                'default'  => '2',
            ),    

            array(
            'id'            => 'boxes-hv-2025',
            'type'          => 'slides',
            'title'         => 'Items EAE 2025',
            'subtitle' => __('Hidrogeno Verde 2025, Jerarquía 1', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                'url'   => 'Link * Icono',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
                'id'        => 'boxes_title',
                'type'      => 'text',
                'title'     => 'Título principal boxes ',
                'default'   => '',
            ), 


            array(
                'id'               => 'boxes_desc',
                'type'             => 'editor',
                'title'            => __('Descripción boxes', 'observatorio'), 
                //'subtitle'         => __('Texto del footer.', 'observatorio'),
                //'default'          => 'Powered by Observatorio.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 6
                )
            ),


            array(
            'id'            => 'boxes-2025',
            'type'          => 'slides',
            'title'         => 'Boxes EAE',
            //'subtitle' => __('Preguntas y respuestas', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => '',
                'description'   => '',
                'url'   => 'Link del botón "Ver PDF"',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            array(
            'id'            => 'faq-hv-2025',
            'type'          => 'slides',
            'title'         => 'Mapa de participación del proceso de EAE',
            //'subtitle' => __('Preguntas y respuestas', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => '',
                'description'   => '',
                'url'   => '',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),

            /*
            array(
                'id'        => 'lineadetiempo',
                'type'      => 'slider',
                'title'     => __('Activar color Etapa', 'observatorio'),
                //'subtitle'  => __('Nivel de zoom del mapa.', 'observatorio'),
                'desc'      => __('Mínimo: 1, Máximo: 7, step: 1, valor por defecto: 1', 'observatorio'),
                "default"   => 1,
                "min"       => 0,
                "step"      => 1,
                "max"       => 7,
                'display_value' => 'text'
            ),
            */             

        )
    ) );     
    // EAE 2025 - Evaluación Ambiental Estrategica //////////////////////////////////////////////////////////////////////////////

    // PREMIO NACIONAL DE AMBIENTE///////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNDA', 'observatorio'),
        'fields' => array(
            array(
                'id'   => 'pnda_info',
                'type' => 'info',
                'style'=> 'info',
                'desc' => __('Premio Nacional de Ambiente. Elegí el año en la lista de la izquierda.', 'observatorio'),
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNDA 2021', 'observatorio'),
        'subsection' => true,
        'fields' => array(

            array(
                'id' => 'premio_imagen',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),

            array(
            'id'            => 'premio_categorias',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Imágenes de las categorias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),

            array(
            'id'            => 'premio',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Solo la imágen de la primera opción es visible', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),
            
            array(
                'id'        => 'premio_galeria_desc',
                'type'      => 'text',
                'title'     => 'Premio nacional galeria desc ',
                'default'   => '',
            ),  

            array(
            'id'            => 'premio_galeria',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de entrega de premios', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),        

        )
    ) );     
    // PREMIO NACIONAL DE AMBIENTE///////////////////////////////////////////////////////////////////////////////////////////////    


    // PREMIO NACIONAL DE AMBIENTE 2022///////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNDA 2022', 'observatorio'),
        'subsection' => true,
        'fields' => array(


            array(
            'id'            => 'premio_categorias2',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Imágenes de las categorias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),

            array(
            'id'            => 'premio2',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Solo la imágen de la primera opción es visible', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),
            
            array(
                'id'        => 'premio_galeria_desc2',
                'type'      => 'text',
                'title'     => 'Premio nacional galeria desc ',
                'default'   => '',
            ),  

            array(
            'id'            => 'premio_galeria2',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de entrega de premios', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),        

        )
    ) );     
    // PREMIO NACIONAL DE AMBIENTE 2022/////////////////////////////////////////////////////////////////////////////////////////////// 


    // PREMIO NACIONAL DE AMBIENTE 2023///////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNDA 2023', 'observatorio'),
        'subsection' => true,
        'fields' => array(

            array(
                'id' => 'premio_imagen_2023',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),

            array(
            'id'            => 'premio_categorias_2023',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Imágenes de las categorias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),

            array(
            'id'            => 'premio_2023',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Solo la imágen de la primera opción es visible', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),
            
            array(
                'id'        => 'premio_galeria_desc_2023',
                'type'      => 'text',
                'title'     => 'Premio nacional galeria desc ',
                'default'   => '',
            ),  

            array(
            'id'            => 'premio_galeria_2023',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de entrega de premios', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),        

        )
    ) );     
    // PREMIO NACIONAL DE AMBIENTE 2023///////////////////////////////////////////////////////////////////////////////////////////////  


    // PREMIO NACIONAL DE AMBIENTE 2024///////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-trash',
        'title' => __('PNDA 2024', 'observatorio'),
        'subsection' => true,
        'fields' => array(

            array(
                'id' => 'premio_imagen_2024',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),

            array(
            'id'            => 'premio_categorias_2024',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Imágenes de las categorias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),

            array(
            'id'            => 'premio_2024',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Solo la imágen de la primera opción es visible', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),
            
            array(
                'id'        => 'premio_galeria_desc_2024',
                'type'      => 'text',
                'title'     => 'Premio nacional galeria desc ',
                'default'   => '',
            ),  

            array(
            'id'            => 'videos_premio_nacional_2024',
            'type'          => 'slides',
            'title'         => 'Videos',
            'subtitle'      => __('Videos.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'       => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ), 

            array(
            'id'            => 'premio_galeria_2024',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de entrega de premios', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),        

        )
    ) );     
    // PREMIO NACIONAL DE AMBIENTE 2024///////////////////////////////////////////////////////////////////////////////////////////////  


    // EXPO URUGUAY SUSTENTABLE/////////////////////////////////////////////////////////////////////////////////////////////// 
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-refresh',
        'title' => __('Expo Uruguay Sustentable', 'observatorio'),
        'fields' => array(     

            array(
                'id' => 'expo_imagen',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),

            array(
            'id'            => 'expo_categorias',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Imágenes de las categorias', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),

            array(
            'id'            => 'expo',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Solo la imágen de la primera opción es visible', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),
            
            array(
                'id'        => 'expo_galeria_desc',
                'type'      => 'text',
                'title'     => 'Premio nacional galeria desc ',
                'default'   => '',
            ),  


            array(
                'id' => 'expo_imagen1',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal día 1', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),


            array(
                'id' => 'expo_imagen2',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal día 2', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),


            array(
                'id' => 'expo_imagen3',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen principal día 3', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir imágen.', 'observatorio'),
                'subtitle' => __('Imágen', 'observatorio'),
                'default' => array('url' => get_template_directory_uri().'/images/default.jpg'),
            ),                        


            array(
            'id'            => 'expo_ambiente_galeria',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de imágenes día 1', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),  

            array(
            'id'            => 'expo_ambiente_galeria2',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de imágenes día 2', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),


             array(
            'id'            => 'expo_ambiente_galeria3',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Galeria de imágenes día 3', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Url',
                ),
            ),           

            array(
                'id'        => 'expo_videos_desc',
                'type'      => 'text',
                'title'     => 'Expo ambiente Descripción ',
                'default'   => '',
            ),  

            array(
            'id'            => 'expo_videos',
            'type'          => 'slides',
            'title'         => 'Videos',
            'subtitle'      => __('Videos.', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Description',
                'url'       => 'url',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),


        )
    ) );     
    // EXPO URUGUAY SUSTENTABLE/////////////////////////////////////////////////////////////////////////////////////////////// 





    // SNAP /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-eye-open',
        'title' => __('SNAP', 'observatorio'),
        'fields' => array(                       
            array(
            'id'            => 'snap',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('Items = áreas proegidas', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),
        )
    ) );     
    // SNAP////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    





    // IDENTIFICACION DE FLORACIONES ALGALES /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-leaf',
        'title' => __('Identificación de Floraciones Algales', 'observatorio'),
        'fields' => array(                           
            array(
            'id'            => 'identificacion_floraciones_algales',
            'type'          => 'slides',
            'title'         => 'Items',
            'subtitle' => __('IDENTIFICACION DE FLORACIONES ALGALES', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),



        )
    ) );     
    // IDENTIFICACION DE FLORACIONES ALGALES////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    // INICIATIVA DEL RIO NEGRO /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-tint',
        'title' => __('IDRN', 'observatorio'),
        'fields' => array(      

            array(
            'id'            => 'slide_switch_iniciativa',
            'type'          => 'switch',
            'title'         => 'Activar/Desactivar',
            'default'       => true
            ),       

            array(
                'id'            => 'idrn_text',
                'type'          => 'textarea',
                'title'         => 'Texto sobre la IRN',
                'default'       => '',
                'required'      => array('slide_switch_iniciativa', '=', '1')
            ),     

            array(
                'id'            => 'idrn_text_popup',
                'type'          => 'textarea',
                'title'         => 'Texto popup con más información sobre la IRN',
                'default'       => '',
                'required'      => array('slide_switch_iniciativa', '=', '1')
            ),  
            
            array(
            'id'            => 'idrn',
            'type'          => 'slides',
            'title'         => 'Items Iniciativa del Río Negro',
            'subtitle' => __('Iniciativa del Río Negro', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            'required'      => array('slide_switch_iniciativa', '=', '1')
            ),

            array(
            'id'            => 'irn-asca',
            'type'          => 'slides',
            'title'         => 'Items Analisis Satelital de la calidad de agua',
            'subtitle' => __('Analisis Satelital de la calidad de agua', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            'required'      => array('slide_switch_iniciativa', '=', '1')
            ),

            array(
            'id'            => 'irn-csyh',
            'type'          => 'slides',
            'title'         => 'Items Cobertura del suelo y humedales',
            'subtitle' => __('Cobertura del suelo y humedales', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),
            'required'      => array('slide_switch_iniciativa', '=', '1')
            ),            


            array(
                'id'   =>'divider_cpp1',
                'desc' => __('', 'redux-framework-demo'),
                'type' => 'divide'
            ),


            /* Linea Base Iniciativa del Río Negro *//////////////////////////////////////////////////////////////////////////
            array(
                'id'        => 'linea_base_title',
                'type'      => 'text',
                'title'     => 'Titulo Información de la Linea base',
                'default'   => 'Texto Linea base',
            ),

            array(
                'id' => 'linea_base_image',
                'type' => 'media',
                'url' => true,
                'title' => __('Imágen cabezal Línea base', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Imágen.', 'observatorio'),
            ), 

            array(
                'id'            => 'linea_base_text',
                'type'          => 'textarea',
                'title'         => 'Texto sobre Línea base',
                'default'       => '',
                'required'      => array('slide_switch_iniciativa', '=', '1')
            ),     

            array(
                'id'            => 'linea_base_text_popup',
                'type'          => 'textarea',
                'title'         => 'Texto popup con más información sobre Línea Base',
                'default'       => '',
                'required'      => array('slide_switch_iniciativa', '=', '1')
            ),  


            array(
            'id'            => 'linea_base1',
            'type'          => 'slides',
            'title'         => 'Items Línea base 1',
            'subtitle' => __('Línea base 1', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),

            ),

            array(
            'id'            => 'linea_base2',
            'type'          => 'slides',
            'title'         => 'Items Línea base 2',
            'subtitle' => __('Línea base 2', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link',
                ),

            ),
            /* Linea Base Iniciativa del Río Negro *//////////////////////////////////////////////////////////////////////////

        )
    ) );     
    // INICIATIVA DEL RIO NEGRO////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    // LOCALIZACIONES MAPA SNAP ///////////////////////////////////////////////////////////////////////////////////////////////////
    /*
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-map-marker',
        'title' => __('Localizaciones mapa', 'observatorio'),
        'fields' => array(
            array(
                'id'        => 'titulo_mapa',
                'type'      => 'text',
                'title'     => 'Título',
                'default'   => 'Titulo',
            ),                              

            array(
                'id'        => 'latitud',
                'type'      => 'text',
                'title'     => 'Latitud',
                'default'   => '-34.9001989',
                'subtitle'  => __('-34.9001989', 'observatorio'),
            ),

            array(
                'id'        => 'longitud',
                'type'      => 'text',
                'title'     => 'Longitud',
                'default'   => '-56.19220630000001',
                'subtitle'  => __('-56.19220630000001', 'observatorio'),
            ),  

            array(
                'id'        => 'zoom',
                'type'      => 'slider',
                'title'     => __('Zoom del mapa', 'observatorio'),
                'subtitle'  => __('Nivel de zoom del mapa.', 'observatorio'),
                'desc'      => __('Mínimo: 0, Máximo: 40, step: 1, valor por defecto: 10', 'observatorio'),
                "default"   => 10,
                "min"       => 0,
                "step"      => 1,
                "max"       => 40,
                'display_value' => 'text'
            ),            

            array(
            'id'            => 'localizaciones_mapa',
            'type'          => 'slides',
            'title'         => 'Geolocalización',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Nombre',
                'description'   => 'Descripción',
                'url'   => 'Latitud, Longitud ',
                ),
            ),     

            array(
                'id'   =>'divider_cpp',
                'desc' => __('', 'redux-framework-demo'),
                'type' => 'divide'
            ),

        )

    ) );
    */
    // LOCALIZACIONES MAPA SNAP ///////////////////////////////////////////////////////////////////////////////////////////////////



    // LINEA DE TIEMPO ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-time',
        'title' => __('Línea de tiempo', 'observatorio'),
        'fields' => array(
            array(
                'id'   => 'lineadetiempo_info',
                'type' => 'info',
                'style'=> 'info',
                'desc' => __('Líneas de tiempo del sitio. Elegí la sección en la lista de la izquierda.', 'observatorio'),
            ),
        ),
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-time',
        'title' => __('Proyectos UPM', 'observatorio'),
        'subsection' => true,
        'fields' => array(
            array(
            'id'            => 'timeline',
            'type'          => 'slides',
            'title'         => 'Todos los trámites de Proyectos UPM',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Tooltip',
                'url'   => 'Nombre del grupo de trámites: Comunicación, SAAP, etc.',
                ),
            //'required'    => array('welcome_slide_switch', '=', '1')
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el el-time',
        'title' => __('EAE', 'observatorio'),
        'subsection' => true,
        'fields' => array(
            array(
            'id'            => 'timeline_eae',
            'type'          => 'slides',
            'title'         => 'Todos las etapas de los EAE',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Tooltip',
                'url'   => '',
                ),
            //'required'    => array('welcome_slide_switch', '=', '1')
            ),
        )
    ) );
    // LINEA DE TIEMPO ////////////////////////////////////////////////////////////////////////////////////////////////////////////





    // DEPENDENCE //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-tag',
        'title' => __('Participantes', 'observatorio'),
        'fields' => array(
            array(
            'id'            => 'participantes_switch',
            'type'          => 'switch',
            'title'         => 'Activar Participantes',
            'default'       => true
            ),                
            array(
            'id'            => 'dependence',
            'type'          => 'slides',
            'title'         => 'Participantes Items',
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Image title',
                'description'   => 'Image description',
                ),
            'required'      => array('participantes_switch', '=', '1')
            ), 
            array(
                'id'            => 'title_dependences',
                'type'          => 'text',
                'title'         => 'Título',
                'default'       => 'Participantes',
            ),             
        )
    ) );
    */
    // DEPENDENCE /////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // CONTACT ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-list-alt',
        'title' => __('Formularios', 'observatorio'),
        'fields' => array(              
            array(
                'id'            => 'newsletter',
                'type'          => 'textarea',
                'title'         => 'Consultas técnicas/Sugerencia de mejoras',
                'default'       => '',
            ),  
            array(
                'id'            => 'form-premio',
                'type'          => 'textarea',
                'title'         => 'Formulario para el premio de ambiente',
                'default'       => '',
            ),  

            array(
                'id'            => 'form-expo',
                'type'          => 'textarea',
                'title'         => 'Consultas en general Expo Ambiente',
                'default'       => '',
            ), 



        )
    ) );  
    // CONTACT ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // SEARCH ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
    Redux::setSection( $opt_name, array(    
        'title'     => 'Buscador',
        'desc'      => 'Cambiar efecto buscador',
        'icon'      => 'el el-search',
        'fields'    => array(         
            array(
                'id'            => 'search_effect',
                'type'          => 'select',
                'title'         => 'Efecto',
                'validate' => 'not_empty',
                'default'       => '1',
                'options'  => array(
                    '1' => 'slidedown',
                    '2' => 'hugeinc',
                    '3' => 'contentpush',
                    '4' => 'door'
                ),
            ),  
            array(
                'id' => 'search_color',
                'type' => 'color_rgba',
                'title' => __('Color del fondo', 'observatorio'),
                'subtitle' => __('Elegir el color de fondo (default: #151515).', 'observatorio'),
                'default' => '#151515',

                'options'       => array(
                    'show_input'                => true,
                    'show_initial'              => true,
                    'show_alpha'                => true,
                    'show_palette'              => true,
                    'show_palette_only'         => false,
                    'show_selection_palette'    => true,
                    'max_palette_size'          => 10,
                    'allow_empty'               => true,
                    'clickout_fires_change'     => false,
                    'choose_text'               => 'Cambiar',
                    'cancel_text'               => 'Cancelar',
                    'show_buttons'              => true,
                    'use_extended_classes'      => true,
                    'palette'                   => null,  // show default
                    'input_text'                => 'Seleccione el Color'
                ),                  
                //'validate' => 'color',
                //'required'      => array('welcome_text_switch', '=', '1'),
            ),


            array(
                'id'            => 'url_search',
                'type'          => 'text',
                'title'         => 'Url',
                'default'       => 'http://www.dinama.gub.uy/oan/',
                'subtitle' => __('Ingrese la URL que realiza la búsqueda', 'observatorio')
            ),

                                        
        ),      
    ) );
    */
    // SEARCH ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // REVSLIDER /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-film',
        'title' => __('Revolution slider', 'observatorio'),
        'fields' => array(            
            array(
                'id'            => 'rev_slider_switch',
                'type'          => 'switch',
                'title'         => 'Revolution Slider',
                'default'       => false,
            ),                                                  
            array(
                'id'            => 'rev_slider_alias',
                'type'          => 'select',
                'title'         => 'Alias',
                'validate'      => 'not_empty',
                'default'       => '',
                'options'       => $revsliders,
                'description'   => __( 'Select Revolution Slider.', 'aguada' ),
                'required'      => array('rev_slider_switch', '=', '1')
            ),       
        )
    ) );
    */      

    // MAPA SNAP //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => ' el el-map-marker',
        'title' => __('Mapas del SNAP', 'observatorio'),
        'fields' => array(                       
            array(
            'id'            => 'mapa_snap',
            'type'          => 'slides',
            'title'         => 'Items del mapa',
            'subtitle' => __('El link debe estar precedido por número que identifica la zona más *', 'observatorio'),
            'default'       => false,
            'placeholder'   => array(
                'title'         => 'Título',
                'description'   => 'Descipción',
                'url'   => 'Link + Mapa png',
                ),
            //'required'      => array('welcome_slide_switch', '=', '1')
            ),
        )
    ) );     
    // MAPA SNAP/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // ANALITYCS //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-align-justify',
        'title' => __('Tracking Code', 'observatorio'),
        'fields' => array( 
            array(
                'id'            => 'analitycs',
                'type'          => 'textarea',
                'title'         => 'Analítica sobre el sitio',
                'default'       => '',
                'description'   => 'Ej: Ingrese la key del programa de analítica',
            ),                        
        )
    ) ); 
    // ANALITYCS /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // MAPA ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-map-marker',
        'title' => __('Mapa footer', 'observatorio'),
        'fields' => array(          
            array(
            'id'            => 'map_switch',
            'type'          => 'switch',
            'title'         => 'Activar/Desactivar Mapa',
            'default'       => true
            ),
            array(
                'id'        => 'titulo_map',
                'type'      => 'text',
                'title'     => 'Título del mapa para hacer click',
                'default'   => 'Ver mapa de localización de la Dinama',
                'required'  => array('map_switch', '=', '1')
            ),
            array(
                'id'        => 'icono_map',
                'type'      => 'text',
                'title'     => 'Icono del mapa para hacer click',
                'default'   => 'fa-plus-circle',
                'required'  => array('map_switch', '=', '1')
            ),                          
            array(
                'id'        => 'latitud',
                'type'      => 'text',
                'title'     => 'Latitud',
                'default'   => '-34.9001989',
                'subtitle'  => __('-34.9001989', 'observatorio'),
                'required'      => array('map_switch', '=', '1')
            ),
            array(
                'id'        => 'longitud',
                'type'      => 'text',
                'title'     => 'Longitud',
                'default'   => '-56.19220630000001',
                'subtitle'  => __('-56.19220630000001', 'observatorio'),
                'required'  => array('map_switch', '=', '1')
            ),  
            array(
                'id'        => 'etiqueta_map',
                'type'      => 'text',
                'title'     => 'Título de la etiqueta del mapa',
                'default'   => 'MVOTMA l OAN - Observatorio Ambiental Nacional',
                'required'  => array('map_switch', '=', '1')
            ),
        )
    ) );
    */
    // MAPA ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////  

    // FOOTER ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Redux::setSection( $opt_name, array(
        'icon' => 'el el-hand-down',
        'title' => __('Footer', 'observatorio'),
        'fields' => array(                          
            array(
                'id'        => 'copyright',
                'type'      => 'text',
                'title'     => 'Copyright del sitio',
                'default'   => 'Copyright DINAMA l OAN',
            ),
            array(
                'id' => 'logo_footer',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo footer', 'observatorio'),
                'compiler' => 'true',
                'desc' => __('Subir Logo.', 'observatorio'),
                'subtitle' => __('Medida recomendada: Alto: 160px and Ancho: 482px', 'observatorio'),
                //'default' => array('url' => get_template_directory_uri().'/images/logo-MVOTMA.jpg'),
            ),  
            array(
                'id'            => 'title_footer',
                'type'          => 'text',
                'title'         => 'Título',
                'default'       => '',
            ),

            array(
                'id'               => 'texto_footer',
                'type'             => 'editor',
                'title'            => __('Texto sobre el Observatorio', 'observatorio'), 
                'subtitle'         => __('Texto del footer.', 'observatorio'),
                'default'          => 'Powered by Observatorio.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 6
                )
            ),            
            array(
                'id'            => 'contact-icon-1',
                'type'          => 'text',
                'title'         => 'Icon contacto 1',
                'desc' => __('http://fontawesome.io/icons/', 'observatorio'),
                'default'       => '',
            ),   
            array(
                'id'            => 'contact-text-1',
                'type'          => 'text',
                'title'         => 'Dato contacto 1',
                'required'      => array('contact-icon-1', '!=', ''),
                'default'       => '',
            ),

            array(
                'id'            => 'contact-icon-3',
                'type'          => 'text',
                'title'         => 'Icon contacto 3',
                'desc' => __('http://fontawesome.io/icons/', 'observatorio'),
                'default'       => '',
            ),   
            array(
                'id'            => 'contact-text-3',
                'type'          => 'text',
                'title'         => 'Dato contacto 3',
                'required'      => array('contact-icon-3', '!=', ''),
                'default'       => '',
            ),
            array(
                'id'            => 'contact-icon-4',
                'type'          => 'text',
                'title'         => 'Icon contacto 4',
                'desc' => __('http://fontawesome.io/icons/', 'observatorio'),
                'default'       => '',
            ),   
            array(
                'id'            => 'contact-text-4',
                'type'          => 'text',
                'title'         => 'Dato contacto 4',
                'required'      => array('contact-icon-4', '!=', ''),
                'default'       => '',
            ),
            array(
            'id'            => 'form_switch',
            'type'          => 'switch',
            'title'         => 'Activar Formulario de consultas',
            'default'       => true
            ),                     
        )
    ) );
    // FOOTER ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // ATLAS LAGUNA MERÍN — SECCIONES ///////////////////////////////////////////////////////////////////////////////////////////
    // Contenido editable de las 7 secciones del Atlas (título, subtítulo, foto, texto intro, KPIs,
    // fuente, link al ADT, "Desafíos para la gestión integrada" y URL del visualizador embebido).
    // Los gráficos (donut / barras / tabla de gobernanza) NO son editables desde acá: siguen
    // definidos en templates/template-atlas-seccion.php porque cada sección usa una estructura
    // de datos distinta y el framework Redux no tiene un campo "repeater" genérico para eso.
    $atlas_theme_dir = get_template_directory_uri();
    $atlas_defaults = array(
        'el_territorio' => array(
            'label'       => 'El Territorio',
            'title'       => 'El Territorio',
            'subtitle'    => 'Relieve, clima, geología, suelos y uso del suelo de la cuenca binacional',
            'photo'       => $atlas_theme_dir . '/images/atlas/banner-territorio.png',
            'intro'       => 'La cuenca hidrográfica de la Laguna Merín abarca aproximadamente 61.000 km² compartidos entre Brasil y Uruguay. El relieve es predominantemente plano, con una altitud media de 89 m y pendientes suaves que favorecen la acumulación de agua y la formación de extensos humedales. El clima es húmedo subtropical, con precipitaciones medias en torno a 1.300 mm anuales.',
            'kpis'        => array(
                array('~61.000 km²',  'superficie total de la cuenca binacional'),
                array('1.300 mm/año', 'precipitación media anual, sin estación seca definida'),
                array('89 m',         'altitud media de la cuenca (relieve predominantemente plano)'),
                array('64,2%',        'del territorio con cobertura natural (pastizal, bosque, humedales y cuerpos de agua)'),
            ),
            'kpis_source' => '',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La variabilidad climática interanual, influenciada por fenómenos como ENSO, genera alternancia entre sequías e inundaciones que afectan tanto a la producción como a los ecosistemas. La gestión integrada del territorio requiere armonizar los instrumentos de planificación y los sistemas de información entre ambos países.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18041,c18002,c18054&zoom=9,-53.305664,-32.641688',
        ),
        'el_agua' => array(
            'label'       => 'El Agua',
            'title'       => 'El Agua',
            'subtitle'    => 'Recursos hídricos superficiales y subterráneos, agua potable, saneamiento y calidad del agua',
            'photo'       => $atlas_theme_dir . '/images/atlas/foto-agua-praia-capilla.jpg',
            'photo_credit'=> 'Hirã Soares, Wikimedia Commons (CC BY-SA 4.0)',
            'intro'       => 'La cuenca integra un sistema hídrico de escala regional: más de 15.000 km de red de drenaje (incluyendo tributarios) y una disponibilidad anual estimada en 24.000 hm³ de agua superficial. La Laguna Merín opera como reservorio estratégico de agua dulce gracias a la regulación del Canal San Gonzalo, que controla la intrusión salina desde la Laguna de los Patos.',
            'kpis'        => array(
                array('3.900 km²',      'superficie de la Laguna Merín, el mayor cuerpo de agua dulce del sistema'),
                array('3.200+ hm³/año', 'volumen estimado de extracción para riego arrocero'),
                array('98% / 69%',      'cobertura de agua potable: áreas urbanas / total de la cuenca'),
                array('99 estaciones',  'de monitoreo de calidad del agua (60 BR · 39 UY)'),
            ),
            'kpis_source' => 'Fuente: SNIS 2021 (Brasil) · OSE 2023 (Uruguay)',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La gestión del agua enfrenta desafíos vinculados a la coordinación binacional: armonizar criterios de monitoreo de calidad, conciliar los usos productivos con los caudales ecológicos y ampliar la cobertura de saneamiento. La variabilidad climática, con períodos de sequía e inundaciones más frecuentes, agrega presión sobre el sistema.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18061,c18062,c18032,c18033&zoom=8,-53.481445,-33.107648',
        ),
        'naturaleza' => array(
            'label'       => 'Biodiversidad',
            'title'       => 'Biodiversidad',
            'subtitle'    => 'Ecosistemas, biodiversidad, áreas protegidas y cobertura natural de la cuenca',
            'photo'       => $atlas_theme_dir . '/images/atlas/banner-naturaleza.png',
            'intro'       => 'La cuenca de la Laguna Merín se inscribe en el Bioma Pampa, una de las regiones de pastizales más extensas de América del Sur. El campo natural es la cobertura dominante (~40% del territorio), complementado por bosques nativos, humedales y cuerpos de agua que configuran una zona de transición ecológica de relevancia regional.',
            'kpis'        => array(
                array('2.069.465 ha', 'bajo Reserva de Biosfera en la cuenca (33,9%) — UY: Bañados del Este · BR: Mata Atlántica'),
                array('410.447 ha',   'bajo designación Ramsar (UY: 399.509 ha · BR: 10.939 ha)'),
                array('146.801 ha',   'bajo protección nacional formal (SNAP-UY + SNUC-BR) — 2,4% de la cuenca'),
                array('64,2%',        'del territorio con cobertura natural (pastizal, bosque, humedales y cuerpos de agua)'),
            ),
            'kpis_source' => 'Fuente: SNAP/MA Uruguay (28/08/2025) · CNUC-MMA Brasil (16/04/2026) · OAN · RSIS · MapBiomas Pampa 2023',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La conversión de pastizales naturales y zonas ribereñas por expansión agrícola y forestal ha incrementado la fragmentación de hábitats y reducido la conectividad ecológica entre Brasil y Uruguay. La armonización de los sistemas de áreas protegidas y los criterios de monitoreo de biodiversidad es una de las principales tareas pendientes.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18048,c18049,c18047,c18046&zoom=8,-53.305664,-32.641688',
        ),
        'poblacion' => array(
            'label'       => 'Población',
            'title'       => 'Población y Ciudades',
            'subtitle'    => 'Distribución demográfica, centros urbanos e infraestructura social de la cuenca',
            'photo'       => $atlas_theme_dir . '/images/atlas/banner-poblacion.jpg',
            'intro'       => 'La cuenca alberga ~895.000 habitantes (IBGE 2022/23; INE 2023/24), distribuidos entre Brasil (727.774) y Uruguay (167.066). La población es marcadamente urbana —el 91% reside en centros poblados—, con un proceso de envejecimiento demográfico: el 22% supera los 60 años. Los principales polos urbanos son Pelotas y Río Grande (BR), y Melo, Treinta y Tres y Rocha (UY).',
            'kpis'        => array(
                array('~895.000 hab',        'Población total de la cuenca · IBGE 2022/23 · INE 2023/24'),
                array('91% urbana',           'Proporción de población en centros urbanos'),
                array('22%',                  'Población de 60+ años (envejecimiento demográfico)'),
                array('2 países · 8 dptos.',  'Territorio binacional (RS-BR / Rocha, TyT, Cerro Largo-UY)'),
            ),
            'kpis_source' => 'Fuente: ADT Laguna Merín, Tabla 3.04 · IBGE 2022/2023 · INE 2023/2024',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La concentración de población en pocos centros urbanos, frente a extensas zonas rurales con baja densidad, genera desigualdades en el acceso a infraestructura. La gestión permanece estructurada en sistemas nacionales con limitada articulación binacional. Fortalecer la gobernanza transfronteriza e integrar los sistemas de información son condiciones para una planificación territorial efectiva.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18010,c18013,c18020,c18021&zoom=8,-53.305664,-32.641688',
        ),
        'produccion' => array(
            'label'       => 'Producción',
            'title'       => 'Producción y Usos',
            'subtitle'    => 'Agricultura, ganadería, silvicultura y usos productivos del agua y el suelo',
            'photo'       => $atlas_theme_dir . '/images/atlas/foto-produccion-pescadores.jpg',
            'photo_credit'=> 'Jessica Casaza, FAO',
            'intro'       => 'El 83% de la superficie terrestre está ocupada por sistemas agropecuarios. El sector primario aporta el 24,9% del VAB en Uruguay y el 16,5% en Brasil. Los sistemas dominantes son la ganadería sobre campo natural, el arroz irrigado (~268.000 ha entre ambos países), la soja y la silvicultura. La pesca artesanal, el turismo y la minería completan el perfil productivo binacional.',
            'kpis'        => array(
                array('83%',            'Superficie terrestre con uso agropecuario'),
                array('~268.000 ha',    'Cultivo de arroz (UY: 114.000 + BR: 154.632, campaña 2024/25)'),
                array('>3.200 hm³/año', 'Extracción de agua para riego arrocero'),
                array('24,9% VAB',      'Aporte agropecuario al VAB regional (UY) · 16,5% en BR'),
            ),
            'kpis_source' => 'Fuente: Molina 2025 · CONAB 2025 · DGF 2024 · OPP/BCU/INE · SEPGG/IBGE 2024',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La intensificación agrícola convierte campo natural y humedales, altera regímenes hidrológicos e incrementa la carga de agroquímicos en cuerpos de agua compartidos. La pesca artesanal enfrenta ausencia de evaluaciones ecológicas conjuntas y monitoreo binacional insuficiente. La gestión sostenible requiere armonizar instrumentos regulatorios entre Brasil y Uruguay.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18055,c18065,c18066&zoom=9,-53.305664,-32.641688',
        ),
        'riesgos' => array(
            'label'       => 'Riesgos',
            'title'       => 'Riesgos Ambientales',
            'subtitle'    => 'Contaminación, vulnerabilidad hídrica y presiones ambientales en la cuenca',
            'photo'       => $atlas_theme_dir . '/images/atlas/foto-riesgos-personas-inundacion.jpg',
            'photo_credit'=> 'Gustavo Vara, Wikimedia Commons (CC0)',
            'intro'       => 'La cuenca enfrenta presiones ambientales interrelacionadas: pérdida de calidad del agua por contaminación difusa agrícola y saneamiento deficiente, alteraciones al ciclo hidrológico por extracción para riego y drenaje de humedales, y creciente vulnerabilidad climática. Se identificaron 7 temáticas transfronterizas prioritarias en el marco del ADT GEF/FAO (2024).',
            'kpis'        => array(
                array('69%',         'Cobertura total de agua potable en la cuenca (98% urbana / ~40% rural)'),
                array('42%',         'Cobertura de alcantarillado (BR: 40% · UY: 51%)'),
                array('36%',         'Pérdidas en redes de abastecimiento de agua potable'),
                array('7 temáticas', 'Problemas transfronterizos priorizados (Taller GEF-FAO, jul. 2024)'),
            ),
            'kpis_source' => 'Fuente: SINISA 2025 · OSE 2024/2025 · ADT sección 3.5 · Taller inicial GEF/FAO 2024',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'La baja cobertura de tratamiento de aguas residuales —solo el 44% de efluentes recolectados reciben tratamiento adecuado en Brasil— genera carga contaminante directa sobre cuerpos de agua compartidos. La variabilidad climática amplifica todos los vectores de presión. Fortalecer el monitoreo binacional y armonizar instrumentos de gestión son condiciones esenciales para la seguridad hídrica.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18074,c18075&zoom=9,-53.305664,-32.641688',
        ),
        'gobernanza' => array(
            'label'       => 'Gobernanza',
            'title'       => 'Gobernanza',
            'subtitle'    => 'Instrumentos de gestión, institucionalidad y cooperación binacional',
            'photo'       => $atlas_theme_dir . '/images/atlas/foto-gobernanza-clm.jpg',
            'photo_credit'=> 'Gilberto Collares',
            'intro'       => 'La CHLMLC cuenta con un sólido marco jurídico cuya base es el Tratado de Cooperación de 1977 y la Comisión Mixta Laguna Merín (CLM). El desafío central no es normativo sino operativo: convertir ese marco en una gobernanza binacional efectiva con información compartida, protocolos estables y articulación multinivel. Brasil opera bajo modelo federal (ANA); Uruguay bajo modelo unitario (DINAGUA).',
            'kpis'        => array(
                array('1977',    'Tratado de Cooperación Laguna Merín — base jurídica binacional'),
                array('CLM',     'Comisión Mixta como eje institucional de coordinación'),
                array('7 ejes',  'Convergencias/divergencias en gobernanza (ADT Tabla 3.05)'),
                array('GEF/FAO', 'Proyecto de fortalecimiento institucional en curso (2023–2027)'),
            ),
            'kpis_source' => 'Fuente: ADT Laguna Merín, sección 3.6 · Tratado 1977 · Ley BR 9.433/1997 · Ley UY 18.610/2009',
            'adt_label'   => 'Vínculo al ADT Laguna Merín',
            'adt_url'     => '#',
            'challenge'   => 'Las principales deficiencias son de interoperabilidad técnica: redes de monitoreo heterogéneas, series no comparables, baja integración entre agua, ambiente, pesca y clima. La perspectiva estratégica es evolucionar de una cooperación normativa a una cooperación operativa, con el CLM como eje articulador y el Proyecto GEF/FAO como catalizador del fortalecimiento institucional.',
            'viewer_url'  => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18077,c18079,c18002&zoom=9,-53.305664,-32.641688',
        ),
    );

    // Sección padre "Atlas" — las 7 de abajo se anidan como subsecciones suyas
    // en el sidebar del panel (mismo mecanismo que usa Redux para agrupar).
    Redux::setSection( $opt_name, array(
        'icon'   => ' el-icon-map-marker',
        'title'  => 'Atlas',
        'fields' => array(
            array(
                'id'   => 'atlas_info',
                'type' => 'info',
                'style'=> 'info',
                'desc' => __('Contenido editable de las 7 secciones del Atlas Laguna Merín (título, subtítulo, foto, texto intro, datos destacados, fuente, link al ADT, "Desafíos para la gestión integrada" y URL del visualizador). Elegí la sección en la lista de la izquierda. Los gráficos (donut, barras, tabla de gobernanza) no se editan acá, siguen definidos en el código.', 'observatorio'),
            ),
        ),
    ) );

    // Panel principal — las 4 tarjetas de "proyectos relacionados" de
    // /atlas-laguna-merin-v2/ (templates/template-atlas-home-v2.php).
    // Primera subsección, para que aparezca arriba de las 7 temáticas.
    $atlas_theme_dir_home = get_template_directory_uri();
    $atlas_home_cards = array(
        'card1' => array(
            'label'    => 'Atlas Laguna Merín (tarjeta grande, arriba izq.)',
            'image'    => $atlas_theme_dir_home . '/images/atlas/card-atlas-laguna-merin-clean.jpg',
            'title'    => 'Atlas Laguna Merín',
            'subtitle' => 'Atlas Binacional Uruguay — Brasil',
            'desc'     => 'El Atlas reúne información geoespacial sobre la cuenca hidrográfica compartida entre Uruguay y Brasil. Es una herramienta de consulta pública desarrollada en el marco del Proyecto FAO–GEF "Gestión binacional e integrada de los recursos hídricos en la Cuenca de la Laguna Merín y lagunas costeras", orientada a facilitar el acceso a información clave para apoyar la planificación y la toma de decisiones relacionadas con el territorio, la gestión del agua y los ecosistemas asociados a nivel cuenca.',
            'link'     => home_url('/atlas-laguna-merin/'),
        ),
        'card2' => array(
            'label'    => 'Mapbiomas Uruguay (tarjeta chica, arriba der.)',
            'image'    => $atlas_theme_dir_home . '/images/atlas/card-mapbiomas-clean.jpg',
            'title'    => 'Mapbiomas Uruguay',
            'subtitle' => '',
            'desc'     => 'MapBiomas Uruguay es una iniciativa enfocada a temas como uso del suelo, teledetección satelital, SIG y programación, que busca entender los procesos de transformación que ocurren en el territorio uruguayo a partir del monitoreo anual de la cobertura y uso del suelo.',
            'link'     => home_url('/mapbiomapas-pampa/'),
        ),
        'card3' => array(
            'label'    => 'NAP Costas (tarjeta chica, abajo izq.)',
            'image'    => $atlas_theme_dir_home . '/images/atlas/card-nap-costas-clean.png',
            'title'    => 'NAP Costas',
            'subtitle' => 'Plan de Adaptación a la Zona Costera',
            'desc'     => 'El Plan Nacional de Adaptación para la zona costera (NAP Costas) se nutrió de diversos estudios y recopilaciones de información provenientes de distintos grupos de investigación y consultorías, nacionales e internacionales. A lo largo de la etapa de estudio y preparación (2017-2018) se trabajó con un importante número de profesionales y expertos de diversas áreas y de varias instituciones.',
            'link'     => home_url('/nap-costas-plan-de-adaptacion-a-la-zona-costera/'),
        ),
        'card4' => array(
            'label'    => 'Iniciativa para el Río Negro (tarjeta grande, abajo der.)',
            'image'    => home_url() . '/wp-content/uploads/2023/04/irn_banner_box_home.jpg',
            'title'    => 'Iniciativa para el Río Negro',
            'subtitle' => '',
            'desc'     => 'La Iniciativa para el Río Negro tiene como objetivo establecer un conjunto de medidas para prevenir, controlar, detener y revertir el proceso de deterioro de la calidad del agua del Río Negro, con énfasis en el desarrollo sostenible de la cuenca. Considera un modelo de gestión integral de los recursos hídricos que atiende a: los usos múltiples del agua, la protección de los ecosistemas, la variabilidad y el cambio climático, y busca además adelantarse a los cambios que pudieran generarse como resultado de los nuevos desarrollos productivos.',
            'link'     => home_url('/iniciativa-para-el-rio-negro/'),
        ),
    );

    $atlas_home_fields = array(
        array(
            'id'   => 'atlas_home_info',
            'type' => 'info',
            'style'=> 'info',
            'desc' => __('Contenido de las 4 tarjetas de "proyectos relacionados" de la página principal del Atlas (/atlas-laguna-merin-v2/).', 'observatorio'),
        ),
        array(
            'id'      => 'atlas_home_hero_image',
            'type'    => 'media',
            'url'     => true,
            'title'   => 'Imagen del banner superior',
            'default' => array( 'url' => $atlas_theme_dir_home . '/images/atlas/hero-laguna-merin-satelital.png' ),
        ),
    );
    foreach ( $atlas_home_cards as $card_key => $card ) {
        $atlas_home_fields[] = array(
            'id'   => "atlas_home_{$card_key}_divider",
            'type' => 'divide',
        );
        $atlas_home_fields[] = array(
            'id'   => "atlas_home_{$card_key}_heading",
            'type' => 'info',
            'style'=> 'normal',
            'desc' => $card['label'],
        );
        $atlas_home_fields[] = array(
            'id'      => "atlas_home_{$card_key}_image",
            'type'    => 'media',
            'url'     => true,
            'title'   => 'Imagen',
            'default' => array( 'url' => $card['image'] ),
        );
        $atlas_home_fields[] = array(
            'id'      => "atlas_home_{$card_key}_title",
            'type'    => 'text',
            'title'   => 'Título',
            'default' => $card['title'],
        );
        $atlas_home_fields[] = array(
            'id'      => "atlas_home_{$card_key}_subtitle",
            'type'    => 'text',
            'title'   => 'Subtítulo (opcional)',
            'default' => $card['subtitle'],
        );
        $atlas_home_fields[] = array(
            'id'      => "atlas_home_{$card_key}_desc",
            'type'    => 'textarea',
            'title'   => 'Texto',
            'default' => $card['desc'],
        );
        $atlas_home_fields[] = array(
            'id'      => "atlas_home_{$card_key}_link",
            'type'    => 'text',
            'title'   => 'Link (a dónde lleva la tarjeta)',
            'default' => $card['link'],
        );
    }

    Redux::setSection( $opt_name, array(
        'icon'       => ' el-icon-map-marker',
        'title'      => 'Panel principal',
        'subsection' => true,
        'fields'     => $atlas_home_fields,
    ) );

    foreach ( $atlas_defaults as $atlas_key => $ad ) {
        $atlas_kpi_defaults = array();
        foreach ( $ad['kpis'] as $atlas_kpi ) {
            $atlas_kpi_defaults[] = array(
                'title'       => $atlas_kpi[0],
                'description' => $atlas_kpi[1],
                'url'         => '',
            );
        }

        Redux::setSection( $opt_name, array(
            'icon'       => ' el-icon-map-marker',
            'title'      => $ad['label'],
            'subsection' => true,
            'fields' => array(
                array(
                    'id'      => "atlas_{$atlas_key}_title",
                    'type'    => 'text',
                    'title'   => 'Título',
                    'default' => $ad['title'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_subtitle",
                    'type'    => 'text',
                    'title'   => 'Subtítulo (banner)',
                    'default' => $ad['subtitle'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_photo",
                    'type'    => 'media',
                    'url'     => true,
                    'title'   => 'Foto ilustrativa',
                    'desc'    => 'Foto chica junto al texto introductorio (no se usa como banner).',
                    'default' => array( 'url' => $ad['photo'] ),
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_photo_credit",
                    'type'    => 'text',
                    'title'   => 'Crédito de la foto',
                    'desc'    => 'Ej: "Nombre Apellido, FAO" — se muestra chico debajo de la foto.',
                    'default' => isset( $ad['photo_credit'] ) ? $ad['photo_credit'] : '',
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_intro",
                    'type'    => 'textarea',
                    'title'   => 'Texto introductorio',
                    'default' => $ad['intro'],
                ),
                array(
                    'id'          => "atlas_{$atlas_key}_kpis",
                    'type'        => 'slides',
                    'title'       => 'Datos destacados (KPIs)',
                    'subtitle'    => 'Título = valor (ej. "~61.000 km²") · Descripción = etiqueta del dato',
                    'content_title' => 'Dato',
                    'show'        => array( 'title' => true, 'description' => true, 'url' => false ),
                    'placeholder' => array( 'title' => 'Valor', 'description' => 'Descripción del dato' ),
                    'default'     => $atlas_kpi_defaults,
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_kpis_source",
                    'type'    => 'text',
                    'title'   => 'Fuente de los datos destacados',
                    'default' => $ad['kpis_source'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_adt_label",
                    'type'    => 'text',
                    'title'   => 'Texto del link al ADT',
                    'default' => $ad['adt_label'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_adt_url",
                    'type'    => 'text',
                    'title'   => 'URL del link al ADT',
                    'default' => $ad['adt_url'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_challenge",
                    'type'    => 'textarea',
                    'title'   => 'Desafíos para la gestión integrada',
                    'default' => $ad['challenge'],
                ),
                array(
                    'id'      => "atlas_{$atlas_key}_viewer_url",
                    'type'    => 'text',
                    'title'   => 'URL del visualizador embebido (iframe)',
                    'default' => $ad['viewer_url'],
                ),
            ),
        ) );
    }
    // ATLAS LAGUNA MERÍN — SECCIONES ///////////////////////////////////////////////////////////////////////////////////////////


    /*
     * <--- END SECTIONS
     */
