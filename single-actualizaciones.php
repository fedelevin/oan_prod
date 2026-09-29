<?php get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
	<!-- section -->
	<section class="container-fluid background-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php 
			$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
			$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
			$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
			$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
			$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
			$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
			$query = get_post_meta(get_the_ID(),'_cmb_query', true);
			$campos = get_post_meta(get_the_ID(),'_cmb_campos', true);
			$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);
		?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="col-md-12">
				<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
			</div>

			<!-- Box Info -->
			<div class="col-md-12">
				<div class="box-info container-fluid">
					<div class="box-info-left">
						<div class="icon pull-left">
							<img class="img-responsive center-block" src="<?php echo $icono; ?>">
						</div>
						<div class="box-info-titles">
							<div class="title_"><strong><?php the_title(); ?></strong></div>								
						</div>
					</div>
					<div class="info">								
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<!-- Box Info -->

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
