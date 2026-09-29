<?php 
/* 
 * Template Name: INR - ASCA
 * Description: Página Análisis Satelital Calidad del Agua
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
<!-- abro wrapper -->
<div class="wrapper">
	<main role="main">
	<section class="container-fluid background-container" style="font-size:13px!important;">		
	

			<div class="container">


						<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
						


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
							  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Información Satelital</div>
							  <div class="panel-body">
									

				        	<?php foreach ($theme_['irn-asca'] as $slide => $property){ ?>
				        		<?php //echo $property['title']; ?>

				        		<div class="buscador">

									<!-- Box Info ////////////////////////////////////////////////////////////////////-->
									<div class="box-info container-fluid">

										<a class="fullwidth" href="<?php echo $property['url'];?>">
									
										<div class="col-md-5">
											<div class="box-info-left" style="margin-top: 50px;">
												<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
											</div>
										</div>

										<div class="col-md-7">
											<div class="info">								
												<h3><?php echo $property['title'];?></h3>
												<p><?php echo $property['description'];?></p>
												<p><i class="fa fa-link" aria-hidden="true"></i>
												<?php echo $property['url'];?></p>												
												<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
											</div>
										</div>

									</a>
									
									</div>
								</div>
								<!-- Box Info ////////////////////////////////////////////////////////////////////-->

							<?php } ?>


	
																			
							  </div>
							</div>
						</div>

						<!--
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Formulario para realizar comentarios</div>
							  <div class="panel-body">
																	
									<div class="col-md-2"><a class="fullwidth" href="https://www.ambiente.gub.uy/oan/consulta-publica-plan-nacional-de-residuos/index.php/formulario"><i class="fa fa-plus-circle icon" aria-hidden="true"></i>  Abrir Formulario</a></div>
	
							  </div>
							</div>
						</div>
						-->

			</div>			

			<!-- Observatorio -->
			<!--
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<iframe id="ifr1" class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" src="https://www.ambiente.gub.uy/oan/consulta-publica-plan-nacional-de-residuos/index.php/formulario" style="height:2500px!important;"></iframe>

				<br class="clear">
			</article>
			-->
			<!-- /Observatorio -->

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
