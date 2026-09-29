<?php 
/* 
 * Template Name: Acciones para la gestión
 * Description: Página de Acciones para la gestión
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

		<!-- section -->
</div> <!-- cierro wrapper -->
<br class="clear"><br class="clear">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="container">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		<?php if($property['title'] == get_the_title()){ ?>

							<!--<div class="secBanner">
								<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
							</div>-->
							<div class="secTitle" style="display: block;">
							ACCIONES PARA LA GESTIÓN
							</div>
		        		<?php } ?>

					<?php } ?>
				</div>
				<?php } ?>
				<!-- Encabezado -->
<br class="clear">
<!-- abro wrapper -->
<div class="wrapper">
	<main role="main">
	<section class="container-fluid background-container">	
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>        
				        <?php the_post_thumbnail(); ?>
			        	<h2 class="title_line"> <span><?php ?><?php the_title(); ?></span></h2>
				      </div>
				      <div class="modal-body">
				      <p><?php the_content(); ?></p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Modal -->

			<?php endwhile; ?>
			<?php endif; ?>


			<!-- Content -->
		    <?php 
					$col = '4';

		    ?>


			<!-- Geoportal -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				
				/* //comentado para Rosina	
					foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
						$title = get_the_title();
						if($property['title'] == $title){
				?>
							<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
				<?php 
						}
					}
				?>
 				<div class="col-sm-12">
					<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-sm-12-">
				<?php
				*/
				?>
				
	        	<?php foreach ($theme_['acciones-para-la-gestion'] as $slide => $property){ ?>

					<!-- Boxed -->
				
					
					<div class="col-sm-<?php if($property['title'] == 'Serie Técnica de la División Información Ambiental'){
					echo "8";
					}else{
					echo "4";	
					}	
					?>">
						<!--<a target="blank_" class="fullwidth" href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" >-->
						<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>">
							<div class="box">
															


							
						
								<div class="azul">
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										
										<h2 class="title_line text-center"><span class="blanco"><?php echo $property['title']; ?></span></h2>
										</div>
										<div class="col-sm-12">
										<p><?php echo $property['description']; ?></p>
										</div>	

								

															

								

								
							</div>
						</a>
					</div>
					<!--// Boxed -->

				<?php } ?>
				</div>

				<br class="clear">
			</article>
			<!-- /Geoportal -->
		</section>
		<!-- /section -->
	</main>

	


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
