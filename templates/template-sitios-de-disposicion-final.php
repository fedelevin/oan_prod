<?php 
/* 
 * Template Name: Sitios de Disposicion Final
 * Description: Página del Observatorio
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; 





?>
		<!-- section -->
</div> <!-- cierro wrapper -->




				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="container">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ 
							
							?>
		        		<?php if($property['title'] == get_the_title()){ 
						
						?>

							<div class="secBanner">
								<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
							</div>

							<div class="secTitle">SITIOS DE DISPOSICIÓN FINAL</div>

		        		<?php } ?>

					<?php } ?>
				</div>
				<?php } ?>
				<!-- Encabezado -->

				
<br class="clear">

<!-- abro wrapper -->
<div class="wrapper">
	<main role="main">

		<section class="container-fluid background-container" style="font-size:13px!important;">		
	
			<div class="container">

				<div class="panel-group">
					<div class="panel panel-default">
					  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Introducción</div>
					  <div class="panel-body">

					  	<?php the_content(); ?>
				
					  </div>
					</div>
				</div>


					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-body">

							<a href="https://www.ambiente.gub.uy/oan/visualizador-de-sitios-de-disposicion-final/" target="_blank"><img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/06/mapa_sdf.jpg" border="0"></a>

						  </div>
						</div>
					</div>


					<div class="clear"></div>


			</div>			

		</section>
		<!-- /section -->

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
