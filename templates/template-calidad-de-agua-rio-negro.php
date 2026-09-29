<?php 
/* 
 * Template Name: Calidad de Agua Del Rio Negro
 * Description: Página de Calidad de Agua Del Rio Negro
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
							Calidad de Agua del Río Negro
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



			<!-- Content -->
		    <?php 
		    	$class_search = $theme_['iniciativa_del_rio_negro'];
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
				
	        	<?php foreach ($theme_['iniciativa_del_rio_negro'] as $slide => $property){ ?>

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
					case "Visualizador":
						echo '<div class="col-sm-8">';
						$br="<br />";
						break;
					case "Estadísticos":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;	
					case "Sobre la iniciativa de Río Negro":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;						
					case "Cobertura y Ambientes":
						echo '<div class="col-sm-4">';
						break;
					case "Documentos":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;
					case "Cronograma y Avance":
						echo '<div class="col-sm-8">';
						$br="<br />";
						break;
					case "La Cuenca en Fotos":
						echo '<div class="col-sm-4">';
						$br="<br />";
						break;						
					default:
						echo '<div class="col-sm-4">';	
					}
				
				?>
						
				<?php
				/*
				if ($elti=="Visualizador"){
				?>
				
				<?php
				}elseif($elti=="Cronograma y Avance"){
				?>
				
				<div class="boxcarto">
				<iframe src='https://flo.uri.sh/visualisation/9834740/embed' title='Interactive or visual content' class='flourish-embed-iframe' frameborder='0' scrolling='no' style='width:100%;height:450px;' sandbox='allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation'></iframe>
				</div>
				<?php
				}else{	
				*/
				?>
					<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" <?php if ($property['title'] == "Visualizador"){ echo 'target="_blank"'; } ?>>
						<div class="box">
															
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
					</a>

					<?php //} ?>		
							
						
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
