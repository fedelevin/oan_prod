<?php get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
	<!-- section -->
	<section class="background-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php 
		$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
		$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
		$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
		$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
		$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
		$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
		$query = get_post_meta(get_the_ID(),'_cmb_query', true);
		$campos = get_post_meta(get_the_ID(),'_cmb_campos', true);
		$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);

		$lat = get_post_meta(get_the_ID(),'_cmb_lat', true);
		$long = get_post_meta(get_the_ID(),'_cmb_long', true);
	?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!--
			<div class="col-md-12">
				<h1 class="title_line text-center"><span><?php //the_title(); ?></span></h1>
			</div>
			-->

			<br><br>

			<div class="sombra-sup">
			<img class="img-responsive" style="position: absolute; left: 0px;" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			<img class="img-responsive" style="position: absolute; right: 0px; -webkit-transform: scaleX(-1); transform: scaleX(-1);" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			</div>

			<br><br><br><br><br><br><br><br><br><br>

			<!-- Box Info -->				
			<div class="col-md-6" style="padding-left: 50px;"> 
				<?php the_post_thumbnail('full', array('class' => 'center-block')); ?>
			</div>
			<div class="col-md-6" style="padding-right: 100px;">
				<h1>ÁREA PROTEGIDA</h1>
				<h2><strong><?php the_title(); ?></strong></h2>

				<div style="font-size: 15px;">
					<?php echo rwmb_meta( 'resumen', 'type=text' ); ?>
				</div>

				<!-- Video -->
				<?php $video = rwmb_meta( 'file_video', 'type=text' ); if ($video != ""){ ?>
					
					<a class="fullwidth" style='position: absolute; z-index:1;' id="popup_snap" href="https://www.youtube.com/embed/<?php echo $video; ?>?autoplay=1" ><p><strong> Ver video <strong></p></a>
						
					<br><br>

				<?php } ?>
				<!-- Video -->


		    	<?php
				/*Resumen **********************************************************/
					$pregunta = rwmb_meta( 'pregunta', 'type=text' );
					$pregunta = strtoupper($pregunta);
					if ($pregunta == 'SI') {
						echo "<a href='#' data-toggle='modal' data-target='#exampleModalLong' style='position: absolute; z-index:1;'><i class='fa fa-plus-circle fa-2x pull-right'></i></a>";
					}
				/*Resumen **********************************************************/
				?>

				<br><br><br>

				<!-- Modal - Info completa del área -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>        
				        <?php //the_post_thumbnail(); ?>
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
				<!-- Modal - Info completa del área -->

			</div>

			<div class="sombra-inf">
			<img  class="img-responsive" style=" float: right; margin-right: 0px; margin-top: -300px; transform: rotate(180deg); " src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			</div>
			
			<!-- Map -->

			<div id="capture" style="display: none"></div>

	    		<?php

					/*Kml*/
					$mapa_base = rwmb_meta( 'file_kml', 'type=text' );
					$zoom_mapa_base = rwmb_meta( 'zoom_kml', 'type=text' );
					$zoom_mapa_base2 = rwmb_meta( 'zoom_kml2', 'type=select_advanced' );

					for ($i=1; $i <= 40; $i++) { 

						/*Icono*/
						$icons[$i] = rwmb_meta( 'icono_punto'.$i, 'type=file' );
						if ( ! empty( $icons[$i] )) {
						    foreach ( $icons[$i] as $icon ) {
						        $grupo[$i][1] = $icon['url'];
						    }
						}

						/*Categoria*/
						$categoria[$i] = rwmb_meta( 'categoria_punto'.$i, 'type=text' );
						if ( ! empty( $categoria[$i] )) {
						    foreach ( $categoria[$i] as $cat ) {
						        $grupo[$i][2] = $cat->name;
						    }
						}

						/*Coordenadas*/
						$grupo[$i][3]  = rwmb_meta( 'coordenadas_punto'.$i, 'type=text' );

						/*Descripcion*/
						$grupo[$i][4] = rwmb_meta( 'desc_punto2'.$i, 'type=textarea' );

					}	

					if (is_array($grupos) && count($grupos) > 1) {

					    for ($i = 1; $i < count($grupos); $i++) {

					        $grupo[$i][1]; // Icono
					        $grupo[$i][2]; // Categoria
					        $grupo[$i][3]; // Coordenadas
					        $grupo[$i][4]; // Descripcion

					    }

					}


					?>

					<!-- MAPA -------------------------------------------------->
	        <div id="map2">

		        <script>
		        	var image_path2 = "<?php echo get_template_directory_uri('template_directory'); ?>"
		        	var lat2 = "<?php echo $lat; ?>";
		        	var long2 = "<?php echo $long; ?>";
		        	var contentString2 = "<?php echo $theme_['etiqueta_map']; ?>";

		        	var mapa_base = "<?php echo $mapa_base; ?>";
		        	var zoom_mapa_base = "<?php echo $zoom_mapa_base; ?>";
		        	var zoom_mapa_base2 = "<?php echo $zoom_mapa_base2; ?>";

                    var locations = [
                      <?php for ($i=1; $i < 41; $i++) {  ?> 
                        ['<?php echo "<strong>".$grupo[$i][2]."</strong><br>".$grupo[$i][4]; ?>', 
                        <?php 
                          
                          $parametros = explode(",", $grupo[$i][3]);
                          //if(trim($parametros[2]) == "salto"){ //departamento sin definir
                            echo $parametros[0];
                            echo ",";
                            echo $parametros[1];
                          //}  

                        ?>, 4, '<?php echo $grupo[$i][1] ?>'],
                      <?php } ?> 
                    ];

		        </script> 

	        </div>

        	<div class="col-md-8 col-md-offset-2" style="background-color: #F7F7F7; padding: 20px; margin-top: -50px; border: solid 1px #eeeeee;  border-radius: 10px; z-index: 1; box-shadow: 1px 5px 5px 1px #999;" >

    			<div class="col-md-12">

					<ul class="text-center">
					<?php
					    $terms = wp_get_post_terms( $post->ID, 'rubro' );

					    if( ! empty( $terms ) ) : ?>

					        <?php foreach( $terms as $term ) : ?>

			        			<li style="display: inline-block; padding: 0 20px 0 0;">

											<label class="checkbox"><?php echo $term->name; ?></label>
										  <div class="col-md-2-">
										  	<input id="checkbox_<?php echo $term->slug; ?>" type="checkbox" class="switch" checked>
										  </div>

										</li>

					        <?php endforeach; ?>

					<?php
					    endif;
					?>
					</ul>

    			</div>

        	</div>

	        <div class="clear"></div>
	    		<!-- MAPA -------------------------------------------------->

			<br><br>

			<!-- SERVICIOS Y OTRA INFO ------------------------------------->
			<div class="col-md-12">

	    	<?php
			for ($i=1; $i <= 10; $i++) { 
			
				$titulo = rwmb_meta( 'info_titulo'.$i, 'type=text' );
				$icono = rwmb_meta( 'info_icono'.$i, 'type=text' );
				$texto = rwmb_meta( 'info_texto'.$i, 'type=wysiwyg' );
			?>
			<?php if ($titulo != "") { ?>

					<div class="col-md-6">
						<a href="#" data-toggle="modal" data-target="#exampleModalLong<?php echo $i; ?>">
			    			<div class="box-snap"> 
			    				<h3><i class="fa <?php echo $icono; ?>" aria-hidden="true"></i> <?php echo $titulo; ?></h3>
			    			</div>
		    			</a>
		    		</div>	

					<!-- Modal - Info  -->
					<div class="modal fade" id="exampleModalLong<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">

					    <div class="modal-content">

					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>
				        	<h2 class="title_line"> <span><i class="fa <?php echo $icono; ?>" aria-hidden="true"></i> <?php ?><?php echo $titulo; ?></span></h2>
					      </div>
					      
					      <div class="modal-body">
									<p><?php echo $texto; ?></p>
					      </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
					      </div>

					    </div>

					  </div>
					</div>
					<!-- Modal - Info-->

			<?php }

			}
			?>
	    	</div>
	    	<!-- SERVICIOS Y OTRA INFO -------------------------------------------------->


			<!-- GALERIA DE FOTOS  ------------------------------------------------------>
			<div class="col-md-12 text-center">
			<div class="col-md-12">
	    		<div class="box-snap-foto"> <h3>
	    			
					<?php 
						// Gallery
						$gallery = get_post_gallery( get_the_ID(), false );
						$gallery_ids = $gallery['ids'];
						$img_ids = explode(",",$gallery_ids);
					?>

					<?php
					$cont = 1;
					$title = wp_trim_words( get_the_title(), 1, "" );
					?>
					<div class="fotos_area_proteguida">
					
					<?php
					foreach( $img_ids AS $img_id ){
						$image_src = wp_get_attachment_image_src($img_id,'');                	
							        
						?>
						
						<?php if(!empty($gallery_ids)){ ?>
							<a href="<?php echo esc_url($image_src[0]); ?>" data-gallery="<?php echo $galleries.$title; ?>" title="<?php the_title(); ?>" class="fullwidth">
								<img src="<?php echo esc_url($image_src[0]); ?>">
							</a>
						<?php }
						
					} ?>
					</div>

					<?php
						$galleries++;
					?>

	    		</h3></div>
	    	</div>	
	    	</div>	
	    	<!-- GALERIA DE FOTOS  ------------------------------------------------------>
		
			<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">

			<!-- QUE PUEDO HACER  ------------------------------------------------------->
			<?php 
				
				$icons1[$i] = rwmb_meta( 'icons_quiens_somos', 'type=file' );
				$resumen_texto[$i] = rwmb_meta( 'resumen_que_se_puede_hacer', 'type=wysiwyg' ); 
				

				?>


			<?php if ( !empty( $icons1[$i] ) ) { ?>
			
				<div class="services-inner">
					<div class="col-md-12 text-center"><h6 class="snap">QUE PUEDO HACER</h6></div>

			    	<?php							
							$i=0;
							$titulos = array();
						    foreach ( $icons1 as $file ) {
						    	foreach ( $file as $file1 ) { ?>

						    		<?php $titulos[$i] =  $file1['title'] ?>

						    		<a href="#" data-toggle="modal" data-target="#ModalLong<?php echo $i; ?>">	
											<div class="service color<?php echo $i; ?> col-xs-12 col-sm-6 col-md-3 col-lg-3">				
												<img src="<?php echo  $file1['url']; ?>">
											</div>
										</a>

							<?php 
								$i++;	
								}	
							} 
					?>				

			    	<?php							
							$z=0;
						    foreach ( $resumen_texto as $file2 ) {
						    	foreach ( $file2 as $file3 ) { ?>

										<!-- Modal - Info  -->
										<div class="modal fade" id="ModalLong<?php echo $z; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          	<span aria-hidden="true">&times;</span>
										        </button>
									        	<h2 class="title_line"> <span><i class="fa <?php echo $icono; ?>" aria-hidden="true"></i> <?php ?><?php echo $titulos[$z]; ?></span></h2>
										      </div>
										      <div class="modal-body">
										      		<p><?php echo $file2[$z]; ?></p>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
										      </div>
										    </div>
										  </div>
										</div>
										<!-- Modal - Info-->

							<?php 
								$z++;	
								}	
							} 
					?>	

				</div>

			<?php } ?>
			<!-- QUE PUEDO HACER  ------------------------------------------------------->

			<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">



			<!-- SERVICIOS  ------------------------------------------------------->
			<?php 
				
				$icons11[$i] = rwmb_meta( 'icons_servicios', 'type=file' );
				$resumen_texto1[$i] = rwmb_meta( 'resumen_servicios', 'type=wysiwyg' ); 
				

				?>


			<?php if ( !empty( $icons11[$i] ) ) { ?>
			
				<div class="services-inner">
					<div class="col-md-12 text-center"><h6 class="snap">SERVICIOS</h6></div>

			    	<?php							
							$i=0;
							$titulos = array();
						    foreach ( $icons11 as $file ) {
						    	foreach ( $file as $file1 ) { ?>

						    		<?php $titulos[$i] =  $file1['title'] ?>

						    		<a href="#" data-toggle="modal" data-target="#ModalLong1<?php echo $i; ?>">	
											<div class="service color<?php echo $i; ?> col-xs-12 col-sm-6 col-md-3 col-lg-3">				
												<img src="<?php echo  $file1['url']; ?>">
											</div>
										</a>

							<?php 
								$i++;	
								}	
							} 
					?>				

			    	<?php							
							$z=0;
						    foreach ( $resumen_texto1 as $file2 ) {
						    	foreach ( $file2 as $file3 ) { ?>

										<!-- Modal - Info  -->
										<div class="modal fade" id="ModalLong1<?php echo $z; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          	<span aria-hidden="true">&times;</span>
										        </button>
									        	<h2 class="title_line"> <span><i class="fa <?php echo $icono; ?>" aria-hidden="true"></i> <?php ?><?php echo $titulos[$z]; ?></span></h2>
										      </div>
										      <div class="modal-body">
										      		<p><?php echo $file2[$z]; ?></p>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
										      </div>
										    </div>
										  </div>
										</div>
										<!-- Modal - Info-->

							<?php 
								$z++;	
								}	
							} 
					?>	

				</div>

			<?php } ?>
			<!-- SERVICIOS  ------------------------------------------------------->




		    <div class="clear"></div>

				<!-- Box Info -->
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>


	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">

	<!-- AREAS PROTEGIDAS  ------------------------------------------------------------>
	<div class="col-md-12 text-center"><h6 class="snap">ÁREAS PROTEGIDAS</h6></div>

	<div class="areas-protegidas">

        <?php
        $args = array(
                'post_type' => 'snap',
        );

        $loop = new WP_Query($args);
        if (have_posts()): while ($loop->have_posts()) : $loop->the_post(); ?>
        	
        	<a href="<?php the_permalink(); ?>">
        	<div style="border-right: 1px solid #e1e1e1; padding: 10px;">
        		<div class="text-center" style="padding: 10px;"><h5><?php the_title(); ?></h5></div>
        		<?php the_post_thumbnail(); ?>
        	</div>
        	</a>

		<?php endwhile; ?>
		<?php endif; ?>

	</div>
	<!-- AREAS PROTEGIDAS  ------------------------------------------------------------>


	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>



<?php get_footer(); ?>
