<?php 
/* 
 * Template Name: Series Técnicas
 * Description: Página de Series Técnicas
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		
		
		<h1 class="title_line text-center"><span><?php strtoupper(the_title()); ?></span></h1>
		
		
		<section class="container-fluid background-container">	

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="slide-" class="slide-">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		<?php if($property['title'] == get_the_title()){ ?>

							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
							<div class="col-md-8">
								<img class="img-responsive" src="<?php echo $property['image']; ?>">
							</div>
							<div class="col-md-4"><br>
								<h2 class="title_line"><span><?php the_title(); ?></span></h2>
								<p><?php echo $property['description']; ?></p>
								<?php if($property['url'] != "") {?>
								<a href="" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
								<?php } ?>
							</div>
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">

		        		<?php } ?>

					<?php } ?>
				</div>
				<?php } ?>
				<!-- Encabezado -->

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


			<!-- Indicadores -->
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
 				<div class="col-md-12">
					<h1 class="title_line text-center">
						<span><?php the_title(); ?></span>
					</h1>
				</div>
				<?php
				
				*/
				
				?>


				<div class="col-md-12">

	        	<?php foreach ($theme_['series_tecnicas'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">

						<span class="hidden-info">
							<span><?php echo limpiaCadena($property['title']);  ?></span>
							<span><?php echo limpiaCadena($property['description']);  ?></span>							
						</span>

		        		<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" class="fullwidth">
							<!-- Box Info ////////////////////////////////////////////////////////////////////-->
							<div class="box-info container-fluid">
								<div class="col-md-3">
									<div class="box-info-left">
										<div class="icon pull-left">
											<br>
											<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										</div>
										<div class="box-info-titles">
											<div class="subtitle">&nbsp;</div>
											<div class="title_">
												<strong><?php echo $property['title']; ?></strong>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="info">			
										<p><?php echo $property['description']; ?></p>
										<!-- <i class="fa fa-link" aria-hidden="true"></i> <?php //$valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>	 -->														
									</div>
								</div>
								<div class="col-md-1" data-balloon="<?php echo $theme_['tooltip-indicadores']; ?>" data-balloon-pos="left">
									<br><br>
									<?php //if($property['description'] != ""){ ?>
									<a href="http://www.un.org/sustainabledevelopment/es/objetivos-de-desarrollo-sostenible/" target="blank_">
									<img class="img-responsive center-block" src="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $icon = $parts[1]; ?>">
									</a>
									<?php //} ?>
								</div>							
							</div>
							<!-- Box Info ////////////////////////////////////////////////////////////////////-->						
						</a>
					</div>

				<?php } ?>

				</div>
				<br class="clear">
			</article>
			<!-- /Indicadores -->

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
