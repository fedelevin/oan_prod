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

		<!-- DataTable -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Acordeon de proyectos y sticky menu // Fix para evitar el Enable jQuery Migrate Helper-->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- Acordeon de proyectos y sticky menu // Fix para evitar el Enable jQuery Migrate Helper-->	

		<!--
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
		<script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/js/lib/tableExport.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/export/bootstrap-table-export.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/extensions/toolbar/bootstrap-table-toolbar.js"></script>
		-->

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css" /> -->
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

			<!--
			<div class="col-md-12 text-center"> 
				<br><br><br><br><br><br>
				<a target="blank_" href="http://localhost/observatorio/cabo-polonio/" class="fullwidth">
					<img src="<?php //echo get_template_directory_uri(); ?>/images/polonio.png">
				</a>	
				<br><br>
			</div>
			-->

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

			<div class="clear"></div>


			