<?php 
/* 
 * Template Name: Planta de Residuos2
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

							<div class="secTitle">PLAN NACIONAL DE GESTIÓN DE RESIDUOS</div>

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

				<!-- BOX: PLAN NACIONAL DE GESTION DE RESIDUOS ---------------------------------------------------------------------------------->
				<?php  $link = get_the_title(); ?>
				<?php if ($link == "PLAN NACIONAL DE GESTIÓN DE RESIDUOS") { ?>

				<div class="panel-group">
					<div class="panel panel-default">
					  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Documentos</div>
					  <div class="panel-body">

						<!-- Box Info ----------------------------------------------------------------------------------------------------------->
			        	<?php foreach ($theme_['pngr'] as $slide => $property){ ?>
			        		<?php //echo $property['title']; ?>
			        		<div class="buscador">
								<div class="box-info container-fluid">

									
									
										<div class="col-md-3">
											<div class="box-info-left">
												<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
											</div>
										</div>
										<div class="col-md-9">
											<div class="info">								
												<h2><?php echo $property['title'];?></h2>
												<p><?php echo $property['description'];?></p>
												<a class="fullwidth" href="<?php echo $property['url'];?>"><p><?php echo $property['url'];?></p>	</a>											
												<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
											</div>
										</div>

									
								
								</div>
							</div>
						<?php } ?>
						<!-- Box Info ----------------------------------------------------------------------------------------------------------->
					
					  </div>
					</div>
				</div>

				<?php } ?>
				<!-- BOX: PLAN NACIONAL DE GESTION DE RESIDUOS ---------------------------------------------------------------------------------->


				<!-- BOX: PERDIDAS Y DESPERDICIOS DE ALIMENTOS ---------------------------------------------------------------------------------->
				<?php  $link = get_the_title(); ?>
				<?php if ($link == "Pérdidas y Desperdicios de Alimentos") {  ?>

					<div class="panel-group">
						<div class="panel panel-default">
						  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Recursos de comunicación y concientización</div>
						  <div class="panel-body">

							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/pda/jingle.png">

				        	<?php $cont = 1; foreach ($theme_['pngr3'] as $slide => $property){ ?>
							

								<a class="fullwidth" href="<?php echo $property['url'];?>" style="color: black!important;">
									<div class="service color11_<?php echo $cont; ?> col-xs-12 col-sm-6 col-md-3 col-lg-3">				
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>" > <br>
										<?php echo $property['title'];?>
									</div>
								</a>
							
							<?php 

								if ($cont == 4) {
									$cont = 1;
								} else {
									$cont++; 	
								}

							} ?>

						  </div>
						</div>
					</div>


					<div class="clear"></div>


				<div class="panel-group">
					<div class="panel panel-default">
					  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Documentación</div>
					  <div class="panel-body">

						<!-- Box Info ----------------------------------------------------------------------------------------------------------->
			        	<?php foreach ($theme_['pngr2'] as $slide => $property){ ?>
			        		<?php //echo $property['title']; ?>
			        		<div class="buscador">
								<div class="box-info container-fluid">

									<a class="fullwidth" href="<?php echo $property['url'];?>">
									
										<div class="col-md-3">
											<div class="box-info-left">
												<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
											</div>
										</div>

										<div class="col-md-9">
											<div class="info">							
												<h4> <b><?php echo $property['title'];?></b></h4>
												<p><?php echo $property['description'];?></p>
												<p><?php //echo $property['url'];?></p>												
												<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
											</div>
										</div>

									</a>
								
								</div>
							</div>
						<?php } ?>
						<!-- Box Info ----------------------------------------------------------------------------------------------------------->
				
					  </div>
					</div>
				</div>

				<?php } ?>
				<!-- BOX: PERDIDAS Y DESPERDICIOS DE ALIMENTOS ---------------------------------------------------------------------------------->


			</div>			

		</section>
		<!-- /section -->

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
