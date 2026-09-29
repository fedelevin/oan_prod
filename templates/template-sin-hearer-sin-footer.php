<?php 
/* 
 * Template Name: Sin header - sin footer
 * Description: Página de Acciones para la gestión
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

 get_header(); ?>
<?php global $theme_; ?>


</div> <!-- cierro wrapper -->

	<main role="main">
		<!-- section -->
		<section class="container background-container">

	

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- Encabezado -->
			<?php //if($theme_['slide_switch'] == 1){ ?>
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
			<?php //} ?>
			<!-- Encabezado -->


			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="col-md-12">
				<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php //edit_post_link(); ?>

			</article>
			<!-- /article -->


			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        </button>        
			        <?php the_post_thumbnail(); ?>
		        	<h2 class="title_line"> <span><?php the_title(); ?></span></h2>
			      </div>
			      <div class="modal-body">
			      <p><?php the_content(); ?></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- Modal -->


		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer('hiden'); ?>
