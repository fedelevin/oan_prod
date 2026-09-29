<?php 
/* 
 * Template Name: INR - Linea base
 * Description: Página Línea base IRN
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 
get_header(); ?>
<?php global $theme_; 
?>
		<!-- section -->
</div> <!-- cierro wrapper -->


				
<br class="clear">


<div class="wrapper">
	<main role="main">
	<section class="container-fluid background-container" style="font-size:13px!important;">		
	
			<div class="container">


						<!-- Encabezado -->
						<div id="slide-" class="slide-">

							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
							<div class="col-md-8" style="padding-left: 0;">
								<img src="<?php echo esc_url($theme_['linea_base_image']['url']); ?>">
							</div>
							<div class="col-md-4">
								<br>

								<h2 class="title_line"><span><?php echo $theme_['linea_base_title']; ?></span></h2>
								<p><?php echo $theme_['linea_base_text']; ?></p>

								
								<a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
								

							</div>
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">

						</div>
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
					        	<h2 class="title_line"> <span><?php echo $theme_['linea_base_title']; ?></span></h2>
						      </div>
						      <div class="modal-body">

						      	<p><?php echo $theme_['linea_base_text_popup']; ?></p>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- Modal -->

						<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>

						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Documentos</div>
							  <div class="panel-body">


								<?php foreach ($theme_['linea_base1'] as $slide => $property){ ?>
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
														<div class="icon pull-left" style="margin-top:10px;">
															<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
														</div>

													</div>
												</div>
												<div class="col-md-8">
													<div class="info">
													<strong><?php echo $property['title']; ?></strong>			
														<p><?php echo $property['description']; ?></p>													
													</div>
												</div>						
											</div>
											<!-- Box Info ////////////////////////////////////////////////////////////////////-->
											
										</a>
									</div>

								<?php } ?>
						
							  </div>
							</div>
						</div>

						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Datos</div>
							  <div class="panel-body">
									

					        	<?php foreach ($theme_['linea_base2'] as $slide => $property){ ?>
					        		<?php //echo $property['title']; ?>

										<!-- Box Info ////////////////////////////////////////////////////////////////////-->
										<div class="box-info container-fluid">
											<?php if ($property['title']=="Mapas anuales de la cobertura del suelo"){ ?>
												<a class="fullwidth" onclick="window.open('https://code.earthengine.google.com/b32e2e8759f9aede63c0ba3249814def')" />
												
												<?php }else{ ?>	

												<a class="fullwidth" href="<?php echo $property['url'];?>">

												<?php } ?>		
											
													<div class="col-md-5">
														<div class="box-info-left" style="margin-top:30px;">
															<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
														</div>
													</div>
													<div class="col-md-7">
														<div class="info">								
															<h2><?php echo $property['title'];?></h2>
															<p><?php echo $property['description'];?></p>
															<p> <a href="<?php echo $property['url'];?>"></a> Visualizador de mapas</p>												
															<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
														</div>
													</div>

												</a>
										
										</div>
										<!-- Box Info ////////////////////////////////////////////////////////////////////-->

								<?php } ?>
																			
							  </div>
							</div>
						</div>

			</div>			

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
