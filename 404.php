<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- article -->
			<article id="post-404">

				<h1 class="text-center"><?php _e( 'Página no encontrada', 'html5blank' ); ?></h1>
				<h2 class="text-center">
					<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
				</h2>

			</article>
			<!-- /article -->
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
