<?php 
/* 
 * Template Name: Registro ONGs
 * Description: Página de Registro de ONGs
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">	

			<div class="container">
				<div class="col-md-4">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<h2 class="title_line"><span><?php the_title(); ?></span></h2>
					<?php the_content(); ?>


				<?php endwhile; ?>
				<?php endif; ?>				
				</div>
			</div>


			<!-- Indicador -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 				<div class="col-md-12">
					<h1 class="title_line text-center"><span><?php //the_title(); ?></span></h1>
				</div> -->
				<div class="col-md-12">


				</div>

				<br class="clear">


			</article>
			<!-- /Indicador -->


		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
