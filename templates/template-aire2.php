<?php 
/* 
 * Template Name: Día internacional del aire II
 * Description: Página de Día internacional del aire II
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
							Día internacional del Aire Limpio por un Cielo Azul
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

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="panel panel-default buscarMenu">
			    	<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      		<div class="panel-body">


<p><?php the_content(); ?></p>
<p> &nbsp; </p>
<div>
<div>
<div>


<div>
<div>
<div>


			<!-- Content -->
		    <?php 
		    	$class_search = $theme_['dia_internacional_del_aire_columns'];
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
				
	        	<?php foreach ($theme_['dia_internacional_del_aire'] as $slide => $property){ ?>

					<!-- Boxed -->
				
				<?php
				/*
				echo '<pre>';
				print_r($property);
				echo '</pre>';
				*/
				
				$elti = $property['title'];
				$br="";
				switch ($elti) {
					case "Inventario de Emisiones Atmosféricas y Black Carbon":
						echo '<div class="col-sm-8">';
						$br="<br />";
						break;
					case "Monitoreo":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;	
					case "Decreto 135-021: Reglamento de calidad de aire":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;						
					case "Aseguramiento de calidad de las Mediciones de Emisiones al aire<br> reportadas al Ministerio de Ambiente":
						echo '<div class="col-sm-6">';
						break;
					case "Compromiso de todos":
						echo '<div class="col-sm-6">';
						$br="<br />";
						break;
					default:
						echo '<div class="col-sm-4">';	
					}
				
 
				?>
						
						
							<div class="boxres">
															


							
						
								<div class="azul">
										<?php if ($property['image']!=""){ 
										echo '<img class="img-responsive center-block" src="'.$property['image'].'">';
										}else{
										echo $br;
										}
										?>
										<h2 class="title_line text-center"><span class="blanco"><?php echo $property['title']; ?></span></h2>
										</div>
										<div class="col-sm-12">
										<p><?php echo $property['description']; ?></p>
										</div>	


								
							</div>
						
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
