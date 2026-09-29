<?php 
/* 
 * Template Name: Bioseguridad
 * Description: Página de BIOSEGURIDAD
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">	

				<h1 style="text-align: center;">Bioseguridad</div>
				<div class="container">
					<div id="bioseguridad"></div>
				</div>

				<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

				<script type="text/javascript" charset="utf-8" >
					bioseguridad_evaluacion_riesgo = GenerateRecords("riskAssessment", "uy", "es");//Evaluación del Riesgo.
					bioseguridad_desiciones = GenerateRecords("decision", "uy", "es"); // Decision del país o cualquier otra comunicación.
					$("#bioseguridad").html(bioseguridad_desiciones);
				</script>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
