<?php 
/* 
 * Template Name: Datos Abiertos II
 * Description: Página de Datos Abiertos II
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


								<img class="img-responsive" src="<?php echo $property['image']; ?>">
			



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

								<?php
								$parametro="";
								if ((isset($_GET["IDg"])) && (is_numeric($_GET["IDg"]))) {
									$parametro= "?IDg=".intval($_GET["IDg"]);
								}
								if ((isset($_GET["IDsg"])) && (is_numeric($_GET["IDsg"]))) {
									$parametro= "?IDsg=".intval($_GET["IDsg"]);
								}								
								?>
			<!-- Datos abiertos -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<iframe class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" src="https://www.ambiente.gub.uy/oan/dabiertos/listado-datos-abiertos.php<?php echo $parametro; ?>" style="height: 1500px;" onload="resizeIframe(this)"></iframe>

				<br class="clear">


			</article>
			<!-- /Datos abiertos -->


		</section>
		<!-- /section -->
	</main>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
  }
</script>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
