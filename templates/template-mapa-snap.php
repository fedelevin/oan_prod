<?php 
/* 
 * Template Name: Mapa SNAP
 * Description: Página del Mapa del Snap
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

<!--<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>-->
<!--<a class="fullwidth" id="popup" href="#" ></a>-->

<!--<a class="fullwidth" id="popup_home_snap" href="https://www.youtube.com/embed/kIkxYxfBlzg?autoplay=1" ></a>-->

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">	

			<!-- Observatorio -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<br>

				<div class="col-md-12">
					
					<br><br>
					
					<div class="snap-mapa">

						<div class="sombra-sup">
							<img class="img-responsive left" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
							<img class="img-responsive right" src="<?php echo get_template_directory_uri(); ?>/images/sombra.png">
						</div>

						 <div class="col-md-6">	

								<?php if($theme_['logo_snap']) { ?>
									<img class="img-responsive center-block" src="<?php echo esc_url($theme_['logo_snap']['url']); ?>">
								<?php } ?> 


								<img id="mapa_home" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/mapa-generico.png"> 
						 </div>

						 <div class="col-md-6">

							<?php if (have_posts()): while (have_posts()) : the_post(); ?>						
								<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif; ?>	

			        		<div class="col-md-12"><br><br></div>

							<div class="snap panel-group" id="accordion">
							<?php $i = 0; $cont=1; foreach ($theme_['mapa_snap'] as $box => $property){  ?>

								    <?php 
										$link  = $property['url'];;
										$cadenas = explode("*", $link);		
										$cont++;						    	
								    ?>

								  <div class="panel panel-default">
								    <div class="panel-heading">
								      <h4 id="depto_<?php echo $cadenas[0]; ?>" class="panel-title" data-path="<?php echo $property['image']; ?>" >
								      	<a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>"><?php echo $property['title']; ?>
								      	<i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
								      	</a>
								      </h4>
										
										<!--
										<h4 id="<?php echo strtolower ($color); ?>" class="panel-title" data-path="<?php echo $property['image']; ?>">
										<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo strtolower ($color); echo $count; ?>">
										<div  class="bullet-circle"></div> <?php echo $property['title']; ?></a>
										</h4>
										-->

								    </div>

								    <div id="collapse_<?php echo $i; ?>" class="panel-collapse collapse ">
								      <div class="panel-body"><?php echo $property['description']; ?><br><a href="<?php echo $cadenas[1]; ?>"> <i class="fa fa-plus-circle fa-2x pull-right" aria-hidden="true"></i></a></div>
								    </div>

								  </div>

								  <?php $i++; ?>
							<?php } ?>
							</div> 

							<script>var mapas = "<?php echo $cont; ?>";</script> 

							<div class="sombra-inf">
								<!--<img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/images/sombra.png"> -->
							</div>

							<div class="clear"></div>

							<div class="col-md-12"><br><br><br><br><br><br><br><br><br><br></div>
								
						 </div>							

						

					</div>

					<br><br>
				
				</div>
				<br class="clear">
			</article>
			<!-- /Observatorio -->

		</section>
		<!-- /section -->
	</main>


		<!-- Modal - Info completa del proyecto -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>        
		      </div>
		      <div class="modal-body">
		      		<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2021/06/snap-uso-publico.jpg">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal - Info completa del proyecto -->

<script type="text/javascript">
	//document.getElementById('popup').click();
</script>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>



	<script type="text/javascript">
		//document.getElementById("popup").click();
	</script>