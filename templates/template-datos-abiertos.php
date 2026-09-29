<?php 
/* 
 * Template Name: Datos Abiertos 
 * Description: Página de Datos Abiertos
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


								<img class="img-responsive" src="<?php echo $property['image']; ?>">
			



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


			<!-- Datos abiertos -->
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
					<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-md-12">

				<?php
				*/
				?>

				<input type="search" placeholder="Buscar Datos Abiertos..." class="form-buscador form-control" />
				<i class="fa fa-search" id="botonsearch"></i>

	        	<?php 
				$da=1;
				foreach ($theme_['datos_abiertos'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">
						
						<!-- Box Info ////////////////////////////////////////////////////////////////////-->
						<div class="box-info container-fluid">
							<div class="col-md-3">
								<div class="box-info-left">
									<div class="icon pull-left">
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
									</div>
									<div class="box-info-titles">
										<div class="subtitle">Datos Abiertos</div>
										<div class="title_">
											<strong>
											<?php 
												$existe = strstr($property['title'] , '+', true);
												if($existe == "+"){
													echo $existe; ?>	
													<span class="hidden-info"><?php echo limpiaCadena($existe); ?></span>										
													<?php
												}else{
													//echo $property['title'];
													echo $value = str_replace("+", "", $property['title']); ?>
													<span class="hidden-info"><?php echo limpiaCadena($value); ?></span>
													<?php
												}
												?>
											</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="info">									
									<p><?php echo $property['description'];?></p>
									<span class="hidden-info"><?php echo limpiaCadena($property['description']); ?></span>
									
									<p>

									<?php 	
										/* OPCION CONTEMPLADA SOLO PARA LOS PLAGUICIDAS */
										if ($property['title'] != "PLAGUICIDAS PRIORITARIOS PARA LA GESTION AMBIENTAL+") {
										 
									?>

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[0];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[0]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>">
											<i class="fa fa-download" aria-hidden="true"></i> .<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>
										</a>
										<?php } ?>

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[1];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[1]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> .<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>
										</a>
										<?php } ?>
										
										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[2];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>									
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[2]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> .<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>
										</a>
										<?php } ?>	
										

									<?php }else{ ?>
										

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[0];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[0]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>">
											<i class="fa fa-download" aria-hidden="true"></i> Metadatos (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>)
										</a>
										<?php } ?>

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[1];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[1]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> Campos (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>)
										</a>
										<?php } ?>
										
										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[2];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>									
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[2]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> Referencia (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>)
										</a>
										<?php } ?>



									<?php } ?>

									</p>

									<?php 
									$existe = strstr($property['title'] , '+');
									if($existe != "+") {?>
										<div class="view-more"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></div>				
									<?php } ?>

									<dir class="info-display">
										
										<?php 
											$args = array(
											        'post_type' => 'datos-abiertos',
											        'tipo' => $property["title"],
											        'order' => 'ASC',
											);
											$loop = new WP_Query($args);
										if (have_posts()): while ($loop->have_posts()) : $loop->the_post();
											$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
											$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
											$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
											$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
											$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
											$ods = get_post_meta(get_the_ID(),'_cmb_ods', true);
											$ods2 = get_post_meta(get_the_ID(),'_cmb_ods2', true);
											$zip = get_post_meta(get_the_ID(),'_cmb_zip', true);
											$zip1 = get_post_meta(get_the_ID(),'_cmb_zip1', true);
											$zip2 = get_post_meta(get_the_ID(),'_cmb_zip2', true);
											$zip3 = get_post_meta(get_the_ID(),'_cmb_zip3', true);
											$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
											$query = get_post_meta(get_the_ID(),'_cmb_query', true);
											$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);
											$mostrar = get_post_meta(get_the_ID(),'_cmb_mostrar', true);
											$editor = get_post_meta(get_the_ID(),'_cmb_editor', true);
										?>

											<h2 class="title_line"><span><i class="fa fa-caret-right" aria-hidden="true"></i> <?php the_title(); ?></span></h2>
											<span class="hidden-info"><?php echo limpiaCadena(the_title()); ?></span>
											<p><?php echo $resume; ?></p>
											<span class="hidden-info"><?php echo limpiaCadena($resume); ?></span>

											<?php if(!empty($editor)){ ?><p><?php echo $editor; ?></p><?php } ?>

											<?php if(!empty($xls)){ ?>
												<a href="<?php echo $xls; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $xls); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xls
												</a>
											<?php } ?>

											<?php if(!empty($csv)){ ?>
												<a href="<?php echo $csv; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $csv); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .csv
												</a>
											<?php } ?>
											
											<?php if(!empty($txt)){ ?>
												<a href="<?php echo $txt; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $txt); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .txt
												</a><?php 
											} ?>
											
											<?php if(!empty($ods)){ ?>
												<a href="<?php echo $ods ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $ods); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xlsx
												</a>
											<?php } ?>

											<?php if(!empty($ods2)){ ?>
												<a href="<?php echo $ods2 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $ods2); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xlsx
												</a>
											<?php } ?>

											<?php if(!empty($zip)){ ?>
												<a href="<?php echo $zip ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>

											<?php if(!empty($zip1)){ ?>
												<a href="<?php echo $zip1 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip1); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>

											<?php if(!empty($zip2)){ ?>
												<a href="<?php echo $zip2 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip2); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>	

											<?php if(!empty($zip3)){ ?>
												<a href="<?php echo $zip3 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip3); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>																																												

											<?php if((!empty($query))||(!empty($embeber))){ ?>
												<a href="<?php the_permalink(); ?>" class="btn btn-green-light">
													<i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos
												</a>
											<?php } ?>

											<br><br>

										<?php endwhile; ?>
										<?php endif; ?>
									</dir>				
																													
								</div>
							</div>
						</div>
					</div>
					<!-- Box Info ////////////////////////////////////////////////////////////////////-->

				<?php 
				$da++;
				} ?>

				</div>

				<br class="clear">


			</article>
			<!-- /Datos abiertos -->


		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
