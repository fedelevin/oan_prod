<?php 
/* 
 * Template Name: Aporte ciudadanop
 * Description: Página de Aporte Ciudadano
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
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
								<a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
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



			<!-- Content -->
		    <?php 
		    	$class_search = $theme_['aporte_columns'];
				if($class_search == 1){
					$col = '12';
				}elseif($class_search == 2){
					$col = '6';				
				}elseif($class_search == 3){
					$col = '4';			
				}elseif($class_search == 4){
					$col = '3';
				}elseif($class_search == 6){
					$col = '2';
				}elseif($class_search == 12){
					$col = '1';
				}
				//$link = $property['url'];
		    ?>


			<!-- Aporte ciudadano -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php 
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
					<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-md-12-">

	        	<?php foreach ($theme_['aporte_ciudadano'] as $slide => $property){ ?>

	        		<?php 
	        			$valor = $property['url']; 
	        			$parts = explode("*", $valor); 
	        			//echo $icon = $parts[1]; 
	        			if($parts[2]==""){
	        				$col2 = '4';
	        			}else{
	        				$col2 = '4';
	        			}
	        		?>

	        		<div class="aporte-ciudadano-top""></div>

					<!-- Boxed -->
					<div class="col-md-<?php echo $col; ?>">						
						<div class="box-aporte">					
							
							<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">


							<h2 class="title_line text-center"><span><?php echo $property['title']; ?></span></h2>									
							<div class="minheight-ac">
								<p><?php echo $property['description']; ?></p>									
							</div>
								
							<div class="icons col-md-<?php echo $col2; ?>">											
								<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" data-balloon="<?php echo $theme_['tooltip-ac-ver-aplicacion']; ?>" data-balloon-pos="right" class="fullwidth btn btn-green-light center-block link" >
									<i class="fa fa-eye" aria-hidden="true"></i>					
								</a>										

								<?php if($parts[2]!=""){?>

									<a href="<?php 
										$valor = $property['url']; 
										$parts = explode("*", $valor); 
										echo $redirect = $parts[2]; 
										$extension = explode(".", $parts[2]); 
										$extension = end( $extension );
										?>"
										data-balloon="<?php	if($extension == "pdf"){echo $theme_['tooltip-ac-descargar-pdf']; }else{ echo $theme_['tooltip-ac-descargar-apk']; 	
										}
										?>" 
										data-balloon-pos="right" class="<?php if ($extension == "pdf"){echo "fullwidth";} ?> btn btn-green-light center-block link">
										<i class="fa fa-download" aria-hidden="true"></i>								
									</a>

								<?php } ?>

								<?php if($parts[1]!=""){?>
									<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[1]; ?>" data-balloon="<?php echo $theme_['tooltip-ac-ver-mapa']; ?>" data-balloon-pos="right" class="fullwidth btn btn-green-light center-block link">
										<i class="fa fa-map-marker" aria-hidden="true"></i>												
									</a>																		
								<?php } ?>

								<!-- Monitoreo Visual Costero - Ayuda Visual -->
								<?php if($property['title'] == 'Monitoreo ciudadano costero'){?>
								<a data-balloon="<?php echo $theme_['tooltip-mc-ayuda-visual']; ?>" data-balloon-pos="right" class="btn-monitoreo-visual btn btn-green-light center-block link"><i class="fa fa-info" aria-hidden="true"></i>												
								</a>
								<?php } ?>
								<!-- Monitoreo Visual Costero - Ayuda Visual -->

							</div>									

							<div class="col-md-6">
								<?php if($parts[3]!=""){?>
								<img class="btn btn-default center-block" src="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[3]; ?>">
								<?php } ?>
							</div>								
						</div>						
					</div>
					<!--// Boxed -->

				<?php } ?>

				</div>

				<br class="clear">


			</article>
			<!-- Aporte ciudadano -->

		</section>
		<!-- /section -->

		<div class="monitoreo-top"></div> 

		<!-- Ayuda visual Monitoreo Costero-->		
		<section class="container-fluid background-container">
			<div class="col-md-12">
				
				<div class="monitoreo-visual">
					<h2 class="title_line text-center"><span>Monitoreo Visual Costero (Ayuda Visual)</span></h2>

						<div class="cerrar" data-balloon="Cerrar" data-balloon-pos="left">
						<i class="fa fa-times pull-right fa-2x" aria-hidden="true"></i>
						</div>

						<br><br>				
							

								<?php 
									$args = array(
								        'post_type' => 'ayuda_visual'
									);
									$loop = new WP_Query($args);
								if (have_posts()): while ($loop->have_posts()) : $loop->the_post();?>

										<?php
										// Gallery
										$gallery = get_post_gallery( get_the_ID(), false );
										$gallery_ids = $gallery['ids'];
										$img_ids = explode(",",$gallery_ids);
										?>

										<!-- Box Info /////////////////////////////////////////////////////////////////////////////////////////////////////////-->
										<?php foreach ($theme_['ayuda_visual'] as $slide => $property){ 
											
											$title_post = limpiaCadena(limpiaEspaciosVacios(get_the_title())); 
											$title_redux = limpiaCadena(limpiaEspaciosVacios($property["title"]));

											if($title_post == $title_redux){?>

												<div class="box-info container-fluid">
													<div class="col-md-3">
														<div class="box-info-left">
															<div class="icon pull-left">
																<br>
																<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/monitoreo_playas_apps.png">
															</div>
															<div class="box-info-titles">
																<div class="subtitle">&nbsp;</div>
																<div class="title_">
																	<strong><?php echo $property["title"]; ?></strong>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-8">
														<div class="info">
															<p><?php echo the_content(); ?></p>																												
															<div class="slide_ayuda_visual">
															<?php
																foreach( $img_ids AS $img_id ){

																/* Caption image ***********************************/
																$image_src = wp_get_attachment_image_src($img_id,'');														
																$image = get_post($img_id);
																$image_title = $image->post_title;
																$image_caption = $image->post_excerpt;
																/* Caption image ***********************************/

																if(!empty($gallery_ids)){ ?> 
																	<div class="col-md-4-">	     
																		<a href="<?php echo esc_url($image_src[0]); ?>" data-gallery="ayuda-visual" title="<?php echo $image_caption; ?>" class="fullwidth">   		
																			<img class="img-responsive center-block" src="<?php echo esc_url($image_src[0]); ?>">
																		</a>	
																	</div>
																  <?php } 
															 }
															 ?>			
															 </div>

															 <div class="clear"></div>
														</div>
													</div>													
												</div>

											<?php } ?>
										<?php } ?>	
										<!-- Box Info /////////////////////////////////////////////////////////////////////////////////////////////////////////-->

								<?php endwhile; ?>
								<?php endif; ?>

							
				</div>

			</div>			
		</section>
		<!-- Ayuda visual Monitoreo Costero-->	



	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
