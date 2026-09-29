<?php 
/* 
 * Template Name: Geoservicios
 * Description: Página de Geoservicios
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

<br class="clear"><br class="clear">
	<main role="main">
		<!-- section -->
		
		
		<h1 class="title_line text-center"><span>Listado de Capas y Geoservicios</span></h1>
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


			<!-- Documentos -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				<?php 
				/*		

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

				<br><br>
<?php
*/
?>
				<!-- Box Info -->
				<div class="col-md-12">
					<div class="box-info1 container-fluid">
							
					<?php
						
						$gparams = "";
						if (isset($_GET["c"])){
						
						$error = 0;
						$carr = array();
						$cats = explode("," , $_GET["c"]);
						
							foreach($cats as $cat) {
								
								$cnumber = trim($cat);
								if (is_numeric($cnumber)){
								
								$carr[]=$cnumber;
								
								}else{
									$error++;
								}	
							}

							if ($error>0){
								$gparams = "";
							}else{
								$gparams = "&c=".implode(",", $carr);
							}	
						}	

					
					?>	
					
							<iframe id="ifr" class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" src="https://www.ambiente.gub.uy/geoservicios/?boxer=true<?php echo $gparams; ?>"></iframe>
						
					</div>
				</div>
				<!-- Box Info -->
				
				<br class="clear">
			</article>
			<!-- /Documentos -->


		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>