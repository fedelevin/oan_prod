<!doctype html>
<html lang="es-ES" <?php //language_attributes(); ?> class="no-js">
<?php global $theme_; ?>  
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="<?php echo esc_url($theme_['favicon']['url']); ?>" type="image/png">
        <link href="<?php echo esc_url($theme_['favicon_touch']['url']); ?>" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Es una plataforma de información ambiental, de libre acceso, que aporta insumos para la toma de decisiones institucionales y al mismo tiempo acerca esa información a la gente. La Ley 19.147 establece su creación como una herramienta que centralice, organice y difunda toda la información ambiental generada en los diversos ámbitos del Estado y otorga al Ministerio de Vivienda, Ordenamiento Territorial y Medio Ambiente, a través de la Dirección Nacional de Medio Ambiente la responsabilidad de su implementación.<?php //bloginfo('description'); ?>">

	    <!-- OpenGraph (Facebook) -->
	    <meta property="og:title" content="OAN l Observatorio Ambiental Nacional" />
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="https://www.dinama.gub.uy/oan/" />
	    <meta property="og:image" content="https://www.dinama.gub.uy/oan/wp-content/uploads/2017/06/observadores.jpg" />
	    <meta property="og:description" content="Observatorio Ambiental Nacional"/>
	    <meta property="og:site_name" content="Observatorio Ambiental Nacional" />        
	    <meta property="og:locality" content="Montevideo"/>        
	    <meta property="og:country-name" content="Uruguay"/>
	    <meta property="og:email" content="oan@mvotma.gub.uy"/>
	    <meta property="og:phone_number" content="+598 2 917 0710"/>  
	    <!-- End OpenGraph (Facebook) -->

		<!-- DataTable -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/tableExport.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/export/bootstrap-table-export.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/toolbar/bootstrap-table-toolbar.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css" />
		<!-- DataTable -->

		<?php wp_head(); ?>
		
		<script>
	        // conditionizr.com
	        // configure environment tests
	        /*
	        conditionizr.config({
	            assets: '<?php //echo get_template_directory_uri(); ?>',
	            tests: {}
	        });
	        */
        </script>
	</head>
	<body <?php body_class(); ?>>

		<!--// loader //-->
		<div class="loader">
		    <div class="inner"></div>
		</div>
		<!--// loader //-->

		<!-- wrapper -->
		<div class="wrapper">

			<!-- Header -->		
			<header class="header">
				<?php if($theme_['deco']['url']) { ?>
				<div class="deco pull-right"><img src="<?php echo esc_url($theme_['deco']['url']); ?>"></div>
				<?php } ?> 
				<?php if($theme_['logo']) { ?>
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img class="img-responsive center-block" src="<?php echo esc_url($theme_['logo']['url']); ?>">
					</a>	
				</div>
				<?php } ?> 
			</header>
			<!-- Header -->

			<!-- Nav -->
			<div id="menu">
				<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
				      </button>
				      <!--<img class="padding" src="images/logo-bar.png">-->
				    </div>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <?php html5blank_nav(); ?>
				    </div>
				  </div>
				</nav>
				<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
			</div>
			<!-- Nav -->

			<!--<div id="grafico-3d" style="height: 400px"></div>-->	
