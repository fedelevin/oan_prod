<?php 
/* 
 * Template Name: Biodiversidad
 * Description: Página de Biodiversidad
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

		<!-- section -->
</div> <!-- cierro wrapper -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="container">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		<?php if($property['title'] == get_the_title()){ ?>

							<div class="secBanner">
								<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
							</div>
							<div class="secTitle">
							COSTERO-MARINO
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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>

				<br>
						<div class="panel-group col-md-12">
							<div class="panel panel-default">
							  <div class="panel-heading" style="font-size: 15px;"><i class="fa fa-id-card-o" aria-hidden="true"></i> Sistema de Información de Biodiversidad y Servicios Ecosistémicos</div>
							  <div class="panel-body">
							  	
									<p><?php echo $theme_['biodiversidad_texto']; ?></p>

							  </div>
							</div>
						</div>




	        	<?php $cont = 0; foreach ($theme_['biodiversidad'] as $slide => $property){ ?>


					<?php
					
						if ($cont == 0) {
							$colx = 4;
							$cont ++;
						}else{
							$colx = 8;
							$cont ++;
						}	
					
					?>


					<!-- Boxed -->
					<div class="col-sm-<?php echo $colx; ?>">
						
						<a <?php if ($colx == 8) { ?> target="_blank" <?php } ?> href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" <?php if ($property['title'] == "Visualizador"){ echo 'target="_blank"'; } ?>>
							<div class="boxcn">
						
								<div class="azul">
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										
										<h2 class="title_line text-center"><span class="blanco"><?php echo $property['title']; ?></span></h2>
										</div>
										<div class="col-sm-12">
										<p><?php echo $property['description']; ?></p>
										</div>	

								

							<?php if($property['title'] == 'Banderas Sanitarias'){?>
											
									
								<div class="oliva">	
								
									
									<?php 
									
									
									if($parts[3]!=""){?>
										<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[3]; ?>">
											<i class="fa fa-pie-chart fa-2" aria-hidden="true"></i>	Ver Gráfico											
										</a>																		
									<?php } ?>
									
									<?php 
									
									
									if (($parts[3]!="") && ($parts[2]!="")) { echo " &nbsp; | &nbsp; "; } ?>
									
									
									<?php if($parts[2]!=""){?>

										<a href="<?php 
											$valor = $property['url']; 
											$parts = explode("*", $valor); 
											echo $redirect = $parts[2]; 
											$extension = explode(".", $parts[2]); 
											$extension = end( $extension );
											?> ">
											
											<i class="fa fa-download fa-2" aria-hidden="true"></i> Descargar							
										</a>

									<?php } 
									
									
									?>
								</div>
								

							<?php } 
							
							
							?>	


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
