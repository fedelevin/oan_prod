<?php 
/* 
 * Template Name: Iniciativa del Río Negro
 * Description: Información sobre la Iniciativa del Río Negro
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
	<!-- section -->
	<section class="background-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php 

		/*
		$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
		$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
		$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
		$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
		$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
		$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
		$query = get_post_meta(get_the_ID(),'_cmb_query', true);
		$campos = get_post_meta(get_the_ID(),'_cmb_campos', true);
		$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);
		$lat = get_post_meta(get_the_ID(),'_cmb_lat', true);
		$long = get_post_meta(get_the_ID(),'_cmb_long', true);
		*/

	?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



			<br><br><br><br>

			<div class="sombra-sup">
			<img class="img-responsive" style="position: absolute; left: 0px;" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			<img class="img-responsive" style="position: absolute; right: 0px; -webkit-transform: scaleX(-1); transform: scaleX(-1);" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			</div>

			<br><br><br><br><br><br><br><br><br><br>

			<!-- Box Info -->				
			<div class="col-md-6" style="padding-left: 50px;"> 
				<?php the_post_thumbnail('full', array('class' => 'center-block')); ?>
			</div>
			<div class="col-md-6" style="padding-right: 100px;">
				<h1>CALIDAD DE AGUA</h1>
				<h2><strong><?php the_title(); ?></strong></h2>
				<?php //echo rwmb_meta( 'resumen', 'type=text' ); ?>

		    	<?php
				/*Resumen **********************************************************/
					/*
					$pregunta = rwmb_meta( 'pregunta', 'type=text' );
					$pregunta = strtoupper($pregunta);
					if ($pregunta == 'SI') {
						echo "<a href='#' data-toggle='modal' data-target='#exampleModalLong' style='position: absolute; z-index:900;'><i class='fa fa-plus-circle fa-2x pull-right'></i></a>";
					}
					*/
				/*Resumen **********************************************************/
				?>

				<br><br><br>


				<!-- Modal - Info completa del área -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>
				        </button>        
				        <?php //the_post_thumbnail(); ?>
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
				<!-- Modal - Info completa del área -->

			</div>

			<div class="sombra-inf">
			<img  class="img-responsive" style=" float: right; margin-right: 0px; margin-top: -300px; transform: rotate(180deg); " src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
			</div>
			
			


			<!-- GALERIA DE FOTOS  ------------------------------------------------------>
			<div class="col-md-12 text-center">
			<div class="col-md-12">
	    		<div class="box-snap-foto"> <h3>
	    			
					<?php 
						// Gallery
						$gallery = get_post_gallery( get_the_ID(), false );
						$gallery_ids = $gallery['ids'];
						$img_ids = explode(",",$gallery_ids);
					?>

					<?php
					$cont = 1;
					$title = wp_trim_words( get_the_title(), 1, "" );
					?>
					<div class="fotos_area_proteguida">
					
					<?php
					foreach( $img_ids AS $img_id ){
						$image_src = wp_get_attachment_image_src($img_id,'');                	
							        
						?>
						
						<?php if(!empty($gallery_ids)){ ?>
							<a href="<?php echo esc_url($image_src[0]); ?>" data-gallery="<?php echo $galleries.$title; ?>" title="<?php the_title(); ?>" class="fullwidth">
								<img src="<?php echo esc_url($image_src[0]); ?>">
							</a>
						<?php }
						
					} ?>
					</div>

					<?php
						$galleries++;
					?>

	    		</h3></div>
	    	</div>	
	    	</div>	
	    	<!-- GALERIA DE FOTOS  ------------------------------------------------------>
		
			<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">

			
		    <div class="clear"></div>

				<!-- Box Info -->
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>


	<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">

	<!-- PARTICIPANTES  ------------------------------------------------------------>
	<div class="col-md-12 text-center"><h6 class="snap">PARTICIPANTES</h6></div>

	<div class="areas-protegidas">

       	
    	<a href="<?php the_permalink(); ?>">
    	<div style="border-right: 1px solid #e1e1e1; padding: 10px;">
    		<div class="text-center" style="padding: 10px;"><h5><?php the_title(); ?></h5></div>
    		<?php the_post_thumbnail(); ?>
    	</div>
    	</a>


	</div>
	<!-- PARTICIPANTES  ------------------------------------------------------------>


	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>