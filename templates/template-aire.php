<?php 
/* 
 * Template Name: Día internacional del aire
 * Description: Aire
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container dia-internacional-del-aire">

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


			<!-- Aire -->
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

	        	<?php foreach ($theme_['dia_internacional_del_aire'] as $slide => $property){ ?>

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
						<div class="box-dia-del-aire">					
							
							<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">

							<h2 class="title_line text-center"><span><?php echo $property['title']; ?></span></h2>									
							<div class="margin-10">
								<p><?php echo $property['description']; ?></p>									
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
			<!-- Aire -->

		</section>
		<!-- /section -->

		<div class="monitoreo-top"></div> 


	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
