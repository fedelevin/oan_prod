<?php 
/* 
 * Template Name: Bioseguridad-Evaluacion de riesgo
 * Description: Página de Bioseguridad - Evaluación de riesgo
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header('bioseguridad'); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid1 background-container1">	

			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
			<script type='text/javascript' src='https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/js/lib/bioseguridad.js'></script>

			<style type="text/css">
				input{
					display: none;
				}

			</style>

			<body style="background-color: #fff;">

				<div class="container">
					<h1 style="text-align: center;">Bioseguridad - Evaluación de Riesgo</div>
				</div>

				<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

				<div class="wrapper">
				<script type="text/javascript" charset="utf-8" >
					bioseguridad_evaluacion_riesgo = GenerateRecords("riskAssessment", "uy", "es");//Evaluación del Riesgo.
					//$("#biosegurdiad").html(bioseguridad_evaluacion_riesgo);
				</script>
				</div>

			</body>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
