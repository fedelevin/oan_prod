<!doctype html>
<html lang="es-ES" <?php //language_attributes(); ?> class="no-js">
<?php global $theme_; ?>  
	<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N6M84DGD');</script>
	<!-- End Google Tag Manager -->


		<!-- Acordeon de proyectos y sticky menu // Fix para evitar el Enable jQuery Migrate Helper-->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- Acordeon de proyectos y sticky menu // Fix para evitar el Enable jQuery Migrate Helper-->	


		<?php 

		$post_slug = $post->post_name;
		if ($post_slug == "consultas-qdc") {
			header("Location: https://www.ambiente.gub.uy/oan/proyectos/paisaje-protegido-quebrada-de-los-cuervos-y-sierras-del-yerbal/");
		}
		?>

		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="<?php echo esc_url($theme_['favicon']['url']); ?>" type="image/png">
        <link href="<?php echo esc_url($theme_['favicon_touch']['url']); ?>" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Es una plataforma de información ambiental, de libre acceso, que aporta insumos para la toma de decisiones institucionales y al mismo tiempo acerca esa información a la gente. La Ley 19.147 establece su creación como una herramienta que centralice, organice y difunda toda la información ambiental generada en los diversos ámbitos del Estado y otorga al Ministerio de Vivienda, Ordenamiento Territorial y Medio Ambiente, a través de la Dirección Nacional de Medio Ambiente la responsabilidad de su implementación.<?php //bloginfo('description'); ?>">


		<link rel="manifest" href="manifest.json">

		<!-- DataTable -->
		<!--<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>-->
		<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css" /> -->
		<!-- DataTable -->


		<!-- NUEVO SLIDER CSS/JS -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/css/nuevo-slider.css" />
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/js/nuevo-slider.js"></script>
		<!-- FIN NUEVO SLIDER -->



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

    <!-- GOOGLE ADS /////////////////////////////////////////////////////////////////////////// -->
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11130107911"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-11130107911');
		</script>

		<!-- Event snippet for Suscripción conversion page -->
		<script>
		  gtag('event', 'conversion', {'send_to': 'AW-11130107911/dZifCJPDgMwYEIfwn7sp'});
		</script>
		<!-- GOOGLE ADS /////////////////////////////////////////////////////////////////////////// -->


	</head>
	<body <?php body_class(); ?>>



<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6M84DGD" 	height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

		<!--// loader //
		<div class="loader">
		    <div class="inner"></div>
		</div>

		<div id="loader3"></div>-->
		
		<!--// loader //-->


		<!-- wrapper -->
		<div class="wrapper">


			<!-- Header -->		
			<header class="header">
			
			<div class="row">
		<div class="col-md-6">
			<!-- Header -->		

				 
				<?php if($theme_['deco']['url']) { ?>
				<div class="deco pull-right"><img src="<?php echo esc_url($theme_['deco']['url']); ?>"></div>
				<?php } ?> 
				<?php if($theme_['logo']) { ?>
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img class="img-responsive left-block" src="<?php echo esc_url($theme_['logo']['url']); ?>">
					</a>	
				</div>
				<?php } ?> 
				 
			
			<!-- Header -->
		</div>			
			
			
			
    <div class="col-md-6">	


<div class="col-md-6 col-md-offset-6">


	<br />		
	<br />				






<form role="search" method="get" action="https://www.ambiente.gub.uy/oan/"> 
      <div class="input-group">
        <input type="text" class="form-control" name="s" placeholder="Buscar..." id="txtSearch"/>
        <div class="input-group-btn">
          <button class="btn" style="background-color: #162B4E; color: #FFF;" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
</form>	
			
</div>				
			
					</div>			
			
</div>			
			

			</header>
			<!-- Header -->


</div> <!-- Fin wrapper -->

<?php

if ( is_home() ) {
	
?>	
<div>
  <div id="containerx">
   
    <div class="slider_container">
      <ul>

		
        	<?php 
			$k=0;
			
			foreach ($theme_['slide'] as $slide => $property){ 
			
			if ($k==0){
			echo '<li class="current_slide">';	
			}else{	
			
			echo '<li>';	
			}
			?>
        		<a href="<?php echo $property['url']; ?>">
        			<img src="<?php echo $property['image']; ?>" id="mbann<?php echo $k; ?>">
        		</a></li>
			<?php 
			$k++;
			} 
			?>		
		
		
		
		

      </ul>
      
      <span class="prev_slide"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
      <span class="next_slide"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
      
      <div class="buttons"></div>
      
      <span class="play_pause"><i class="fa fa-pause"></i></span>
    </div>
  </div>
</div>	
<?php
} // fin es o no la homepage
?>




<div class="tm-nav-section">

		<div class="wrapper" style="background-color: #162B4E; width: 100%">

<!-- Nav -->
<div id="menu" style="background-color: #162B4E">
    <div class="menu-fixed-banner" id="mfb">
        <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/logo-bar-2025.png">
    </div>
    <nav class="navbar navbar-default nav-fill">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-bars fa-2x" aria-hidden="true" style="color: white;"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--<span class="close-menu">&times;</span>--> <!-- Botón de cierre -->
                <?php html5blank_nav(); ?>
            </div>
        </div>
    </nav>
</div>
<!-- Nav -->

		</div> <!-- Fin wrapper contenido en la barra azul -->	

</div> 	<!-- Fin  barra azul -->			







			
<div class="wrapper">
			


	


			