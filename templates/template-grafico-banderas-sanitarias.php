<?php 
/* 
 * Template Name: Gráfico Banderas Sanitarias
 * Description: Página del Observatorio
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header('polonio'); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">	

			<!-- Observatorio -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<br>
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

				<div class="col-md-12">
					<br><br>
					<iframe id="ifr1" class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" src="https://flo.uri.sh/story/676629/embed?auto=1#slide-0"></iframe>
					<br><br>
				</div>

				<div class="col-md-12">
					<br><br>
					<iframe id="ifr" class="page-icon preview-pane costero-marino" frameborder="0" allowfullscreen scrolling="no" src="https://flo.uri.sh/visualisation/4514139/embed?auto=1"></iframe>
					<br><br>
				</div>
				
				<br class="clear">
			</article>
			<!-- /Observatorio -->

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
