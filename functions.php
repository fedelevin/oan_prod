<?php
/**
 * _theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _theme
 */

if ( ! function_exists( '_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _theme_setup() {

    /*
     * Add Redux Framework
     */


    /*
    if ( is_admin() ) {
      require get_template_directory() . '/framework/admin/admin-init.php';
    }
    */

    require get_template_directory() . '/framework/admin/admin-init.php';

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on _theme, use a find and replace
     * to change '_theme' to the name of your theme in all the template files.
     */
    load_theme_textdomain( '_theme', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', '_theme' ),
    ) );


    // This theme uses its own gallery styles.
    add_filter( 'use_default_gallery_style', '__return_false' );
    add_shortcode('gallery', '__return_false'); 

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
     * Enable support for Post Formats.
     * See https://developer.wordpress.org/themes/functionality/post-formats/
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( '_theme_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // _theme_setup
add_action( 'after_setup_theme', '_theme_setup' );

add_filter( 'show_admin_bar', '__return_false' );



/*------------------------------------*\
    Theme Support
\*------------------------------------*/

//Custom fields:
require_once dirname( __FILE__ ) . '/framework/Custom-Metaboxes/metabox-functions.php';
require_once dirname( __FILE__ ) . '/framework/post_type.php';
require_once dirname( __FILE__ ) . '/framework/bfi_thumb-master/BFI_Thumb.php';
require_once dirname( __FILE__ ) . '/framework/wp_bootstrap_navwalker.php';

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}



/*------------------------------------*\
    Customize
\*------------------------------------*/

// Customize login access /////////////////////////////////////////////////////////////////////.
/*
function custom_login_logo() {
    echo '<style type="text/css">';
    echo 'body{ background: #fff;}';
    echo ' .login h1 a { width:100% !important; height: 90px !important; background-size: 180px !important; background-image:url('.get_template_directory_uri().'/images/logo.png) !important;}';
    echo ' .login  { background-color:#a0b09c;}';
    echo ' .login form  { border-radius: 10px; }';
    echo '</style>';
}
add_action('login_head', 'custom_login_logo');
*/


/*------------------------------------*\
	Functions
\*------------------------------------*/

include('demo.php');

/*
// Collapse panel admin//
function custom_admin_js() {
    echo "<script type='text/javascript' > 
document.body.className+=' folded';                 
</script>";

}
add_action('admin_footer', 'custom_admin_js');
*/

/* Add button wp-admin */
add_filter( 'gettext', 'change_publish_button', 10, 2 );
function change_publish_button( $translation, $text ) {
if ( 'actualizaciones' == get_post_type())
if ( $text == 'Publish' )
    return 'Copiar documento al OAN';

return $translation;
}


add_filter('wp_nav_menu_items','add_last_item_menu', 10, 2);
function add_last_item_menu( $items, $args ) {
    /*
	if( $args->theme_location == 'primary')  {
        $items .= '<li class="menu-item menu-item-custom"><a id="trigger-overlay" class="social"><i class="fa fa-search"></i></a></li>';
    }
	*/
    return $items;
}


// No view Format admin
add_action('after_setup_theme', 'wpse65653_remove_formats', 100);
function wpse65653_remove_formats()
{
   remove_theme_support('post-formats');
}


remove_action( 'wp_head', '_wp_render_title_tag', 1 );

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    $protocol = is_ssl() ? 'https' : 'http';

    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        /*Search*/
        wp_enqueue_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js',array(),false,true);
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js',array(),false,true);
        wp_enqueue_script('search_', get_template_directory_uri().'/js/lib/search-classie.js',array(),false,true);
        /*Search*/

        /*Scripts*/
        /*wp_enqueue_script('bootstrap_', get_template_directory_uri().'/js/lib/bootstrap.js',array(),false,true);*/
        //wp_enqueue_script('bootstrap_', get_template_directory_uri().'/js/lib/bootstrap.min.js',array(),false,true);
        wp_enqueue_script('carousel', get_template_directory_uri().'/js/lib/owl.carousel.js',array(),false,true);
        wp_enqueue_script('sticky', get_template_directory_uri().'/js/lib/jquery.sticky.js',array(),false,true);
        wp_enqueue_script('parallax', get_template_directory_uri().'/js/lib/jquery.parallax-1.1.3.js',array(),false,true);
        wp_enqueue_script('nicescroll', get_template_directory_uri().'/js/lib/jquery.nicescroll.min.js',array(),false,true);
        wp_enqueue_script('easing', get_template_directory_uri().'/js/lib/jquery.easing.min.js',array(),false,true);
        wp_enqueue_script('chart', get_template_directory_uri().'/js/lib/jquery.easypiechart.min.js',array(),false,true);

        wp_enqueue_script('swiper', get_template_directory_uri().'/js/lib/swiper.min.js',array(),false,true);

        /*Google Map*/
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXKM-kWNYblRWKk-gwVq3WvIOLTTXfhE&callback=viewMap2', array(), null, true);
        /*Google Map*/    

        /*Script*/

        /*Higtchart*/
        /*
        wp_enqueue_script('highchart', get_template_directory_uri().'/js/lib/highcharts.js',array(),false,true);
        wp_enqueue_script('highchart-3d', get_template_directory_uri().'/js/lib/highcharts-3d.js',array(),false,true);
        wp_enqueue_script('highchart-more', get_template_directory_uri().'/js/lib/highcharts-more.js',array(),false,true);
        */
        /*Higtchart*/
    

        wp_enqueue_script('boxer', get_template_directory_uri().'/js/lib/jquery.fs.boxer.min.js',array(),false,true);
        wp_enqueue_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js',array(),false,true);
    }

}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    /*Styles*/
    $protocol = is_ssl() ? 'https' : 'http';
    //wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('raleway-font', "$protocol://fonts.googleapis.com/css?family=Raleway:400,500", true);
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
    /*wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css'); */   
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri().'/css/owl.theme.css');
    wp_enqueue_style('search', get_template_directory_uri().'/css/search.css');
    wp_enqueue_style('boxer', get_template_directory_uri().'/css/jquery.fs.boxer.css');
    wp_enqueue_style('balloon', get_template_directory_uri().'/css/balloon.css');

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    //wp_register_style('html5blank', 'https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/style.css', array(), '1.0', 'all');

    wp_enqueue_style( 'custom_style', get_template_directory_uri().'/framework/custom_style.php');

    wp_enqueue_style('html5blank'); // Enqueue it!

    wp_enqueue_style('checkbox', get_template_directory_uri().'/css/style-checkbox.css');

    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.min.css');

    /*Presidencia*/
    wp_enqueue_style('presidencia', get_template_directory_uri().'/css/style_presidencia.css');

}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Deshabilitar la notificación de actualización de plugins
add_filter( 'site_transient_update_plugins', 'dcms_disable_plugin_update' );
function dcms_disable_plugin_update( $value ) {
    if ( isset($value) && is_object($value) ) {
        if ( isset( $value->response['m-chart/m-chart.php'] ) ) {
            unset( $value->response['m-chart/m-chart.php'] );
        }
    }
    return $value;
}

// Deshabilitar la notificación de actualización de plugins
add_filter( 'site_transient_update_plugins', 'dcms_disable_plugin_update2' );
function dcms_disable_plugin_update2( $value ) {
    if ( isset($value) && is_object($value) ) {
        if ( isset( $value->response['wonderm00ns-simple-facebook-open-graph-tags/wonderm00n-open-graph.php'] ) ) {
            unset( $value->response['wonderm00ns-simple-facebook-open-graph-tags/wonderm00n-open-graph.php'] );
        }
    }
    return $value;
}


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}


// Redirect

add_action('init','redirect_to');

function redirect_to() {
    if ( strpos($_SERVER['REQUEST_URI'], 'oan/premio-nacional-de-ambiente-uruguay-natural/') !== false ) {
        wp_redirect('https://www.ambiente.gub.uy/oan/premio-nacional-de-ambiente-uruguay-sostenible/');
        exit;
    }
}


// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


// Add file type JSON //////////////////////////////
add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
function my_myme_types( $mime_types ) {
  $mime_types['svg'] = 'image/svg+xml';     // Adding .svg extension
  $mime_types['json'] = 'application/json'; // Adding .json extension
  
  unset( $mime_types['xls'] );  // Remove .xls extension
  unset( $mime_types['xlsx'] ); // Remove .xlsx extension
  
  return $mime_types;
}
// Add file type JSON //////////////////////////////


function my_custom_mime_types( $mimes ) {
 
// New allowed mime types.
$mimes['kml'] = 'application/vnd.google-earth.kml+xml';
$mimes['jpg'] = 'image/jpeg';
 
// Optional. Remove a mime type.
unset( $mimes['exe'] );
 
return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('', 'html5blank') . '</a>';
    //return '<div class="view-more" title="ver más"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></div>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/images/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }


/*----------------------------------------------------------------------*\
    Oculta menú lateral
\*----------------------------------------------------------------------*/
function ocultar_opciones_menu() {
    /*
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=actualizaciones');
    remove_menu_page('edit-comments.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    remove_menu_page('users.php');
    remove_menu_page('contact.php');
    remove_menu_page('themes.php');
    remove_menu_page('options-general.php');
    remove_menu_page('index.php');
    remove_menu_page('duplicator');
    remove_menu_page('Wordfence');
    remove_menu_page('wpcf7');
    remove_menu_page('activity_log_page');
    */   
}

add_action('admin_menu', 'ocultar_opciones_menu', 999);


/*----------------------------------------------------------------------*\
    Mensaje personalizado en la pagina de login
\*----------------------------------------------------------------------*/
function my_custom_login()
{
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css" />';
}
add_action('login_head', 'my_custom_login');


// Agregar un mensaje personalizado a la página login /////////////////////////////////////////.
function wps_login_message( $message ) {
    if ( empty($message) ){
       // return "<strong>Repositorio de Documentos y Capas geográficas</strong>";
        return "<p class='message'>Observatorio ambiental - Administrador</p>";
    } else {
        return $message;
    }
}
add_filter( 'login_message', 'wps_login_message' );


/*----------------------------------------------------------------------*\
    Menúes
\*----------------------------------------------------------------------*/
function html5blank_nav()
{
    wp_nav_menu( 
        array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container'         => 'false',
            'container_class'   => 'collapse main-navigation',
            'container_id'      => 'site-navigation',
            'menu_class'        => 'nav nav--main navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function html5blank_nav2()
{
    wp_nav_menu( 
        array(
            'menu'              => 'expo',
            'theme_location'    => 'secondary',
            'depth'             => 3,
            'container'         => 'false',
            'container_class'   => 'collapse main-navigation',
            'container_id'      => 'site-navigation',
            'menu_class'        => 'nav nav--main- navbar-nav nav-pres',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function html5blank_nav2023()
{
    wp_nav_menu( 
        array(
            'menu'              => 'expo2023',
            'theme_location'    => 'secondary',
            'depth'             => 3,
            'container'         => 'false',
            'container_class'   => 'collapse main-navigation',
            'container_id'      => 'site-navigation',
            'menu_class'        => 'nav nav--main- navbar-nav nav-pres',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
    ));
}

function html5blank_nav2024()
{
    wp_nav_menu( 
        array(
            'menu'              => 'expo2024',
            'theme_location'    => 'secondary',
            'depth'             => 3,
            'container'         => 'false',
            'container_class'   => 'collapse main-navigation',
            'container_id'      => 'site-navigation',
            'menu_class'        => 'nav nav--main- navbar-nav nav-pres',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
    ));
}


/*----------------------------------------------------------------------*\
    Limpia cadenas de texto
\*----------------------------------------------------------------------*/
function limpiaCadena($cadena) {
 $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return $cadena;
}

function limpiaEspaciosVacios($cadena){
    $cadena = str_replace(' ', '', $cadena);
    return $cadena;
}
function limpiaguiones($cadena){
    $cadena = str_replace('_', ' ', $cadena);
    $cadena = str_replace('-', ' ', $cadena);
    return $cadena;
}

/*----------------------------------------------------------------------*\
    Redirect al hacer una búsqueda por una palabra específica
\*----------------------------------------------------------------------*/
add_action('template_redirect', function() {

    if (is_search()) {

        $redirecciones = [
            'denuncias' => 'https://www.ambiente.gub.uy/oan/datos/listado-de-datos-abiertos/',
            'denuncia' => 'https://www.ambiente.gub.uy/oan/datos/listado-de-datos-abiertos/',
            'SNAP' => 'https://www.ambiente.gub.uy/oan/sistema-nacional-de-areas-protegidas/',
        ];

        // Convierte las claves del array a minúsculas
        $redirecciones = array_change_key_case($redirecciones, CASE_LOWER);

        // Obtiene el término de búsqueda y lo convierte a minúsculas
        $termino_busqueda = strtolower(trim(get_query_var('s')));

        // Verifica si el término de búsqueda está en la lista
        if (array_key_exists($termino_busqueda, $redirecciones)) {
            wp_redirect($redirecciones[$termino_busqueda]); // Redirige al enlace correspondiente

            global $wp_query;
            $wp_query->set('s', ''); // Limpia el término de búsqueda

            exit;
        }
    }

});

/*----------------------------------------------------------------------*\
    Desactivar avisos de actualización en el admin y por mail
\*----------------------------------------------------------------------*/
// Desactivar notificaciones de actualizaciones de núcleo, plugins y temas
add_filter( 'pre_site_transient_update_core', '__return_null' );
add_filter( 'pre_site_transient_update_plugins', '__return_null' );
add_filter( 'pre_site_transient_update_themes', '__return_null' );

// Ocultar avisos en el dashboard
add_action( 'admin_menu', function() {
    remove_action( 'admin_notices', 'update_nag', 3 );
});

// Desactivar los correos de actualización automática
add_filter( 'auto_core_update_send_email', '__return_false' );
add_filter( 'send_core_update_notification_email', '__return_false' );
add_filter( 'automatic_updates_send_debug_email', '__return_false' );
add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );


/*----------------------------------------------------------------------*\
    Ver tamaño de los archivos en el admin
\*----------------------------------------------------------------------*/
// Agrega una nueva columna al listado de medios
function agregar_columna_tamano_archivo( $columns ) {
    $columns['tamano_archivo'] = 'Tamaño';
    return $columns;
}
add_filter( 'manage_upload_columns', 'agregar_columna_tamano_archivo' );

// Llena la columna con el tamaño del archivo
function mostrar_tamano_archivo_en_columna( $column_name, $post_id ) {
    if ( $column_name === 'tamano_archivo' ) {
        $archivo = get_attached_file( $post_id );
        if ( file_exists( $archivo ) ) {
            $tamano = filesize( $archivo );
            echo tamano_legible_archivo( $tamano );
        } else {
            echo 'No disponible';
        }
    }
}
add_action( 'manage_media_custom_column', 'mostrar_tamano_archivo_en_columna', 10, 2 );

// Convierte bytes a KB/MB/GB
function tamano_legible_archivo( $bytes ) {
    $unidad = array( 'B', 'KB', 'MB', 'GB', 'TB' );
    $i = 0;
    while ( $bytes >= 1024 && $i < count( $unidad ) - 1 ) {
        $bytes /= 1024;
        $i++;
    }
    return round( $bytes, 2 ) . ' ' . $unidad[$i];
}


/*-------------------------------------------------------------------*\
// Limitar archivos subidos desde el admin a 100 MB (104857600 bytes)
\*-------------------------------------------------------------------*/
function limitar_tamano_archivo_subida( $file ) {
    $tamano_maximo = 150 * 1024 * 1024; // 100 MB en bytes

    if ( $file['size'] > $tamano_maximo ) {
        $file['error'] = 'El archivo excede el límite de 100 MB.';
    }

    return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'limitar_tamano_archivo_subida' );


/*------------------------------------------------------------------*\
    Redirect a expo ambiente
\*------------------------------------------------------------------*/
add_action('template_redirect', function() {
    if (is_page('expo-uruguay-sostenible/')) {
        wp_redirect('https://www.ambiente.gub.uy/comunicaciones/expo-uruguay-sostenible/', 301);
        exit;
    }
});


/*--------------------------------------------------------------------------*\
    Ocultar paginsas proteguidas con contraseña del buscador de wordpress
\*--------------------------------------------------------------------------*/
add_action('pre_get_posts', function ($query) {

    if (
        !is_admin() &&
        $query->is_main_query() &&
        $query->is_search()
    ) {
        // No mostrar páginas/entradas protegidas con contraseña
        $query->set('has_password', false);
    }

});


/*-----------------------------------------------------------------*\
	Actions + Filters + ShortCodes
\*-----------------------------------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
//add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
//add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
//add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

/*
add_filter( 'post_type_link', 'append_query_string', 10, 2 );
function append_query_string( $url, $post ) 
{
    return $url.'?cid='.$post->ID;
}
*/

/*
add_action( 'init', function() {
    flush_rewrite_rules();
});
*/




?>





