<?php 
/* 
 * Template Name: Indicadores
 * Description: Página de Indicadores
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

		<!-- section -->
</div> <!-- cierro wrapper 
<br class="clear">-->
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
							INDICADORES AMBIENTALES
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
					<input type="search" placeholder="Buscar Proyectos..." class="form-buscador form-control" />
			    	<i class="fa fa-search" id="botonsearch"></i>
			    </div>

				<div class="col-md-12">

	        	<?php foreach ($theme_['indicadores'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">

						<span class="hidden-info">
							<span><?php echo limpiaCadena($property['title']);  ?></span>
							<span><?php echo limpiaCadena($property['description']);  ?></span>							
						</span>
						<?php
						$valor = $property['url']; 
						$parts = explode("*", $valor); 
						echo $property['slug'];
						$solo_parametro=str_replace("/", "", $parts[0]);
						$solo_parametro1=str_replace("https://www.ambiente.gub.uy/indicadores_ambientales/ficha/", "", $parts[0]);
						$solo_parametro2=str_replace("/", "", $solo_parametro1);
						
						$nlink = "https://www.ambiente.gub.uy/oan/indicador/?i=".$solo_parametro2;
						
						?>
						
						
						
		        		<a href="<?php echo $nlink; ?>" class="fullwidthx">
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
