<?php 
/* 
 * Template Name: Genérico Indicadores
 * Description: Cargador generico de indicadores
*/ 

get_header(); ?>
<?php global $theme_; ?>

<br class="clear"><br class="clear">
	<main role="main">
		<!-- section -->
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

				<?php
				*/
				
				?>


				<!-- Box Info -->
				<div class="col-md-12">
					<div class="box-info container-fluid">
							
    <style>
        #iframe1 {
			height: 4300px; 
            margin:0;
            padding:0;
            border:0;
        }

        #loader1 {
            position:absolute;
            left:45%;
            top:150px;
        }
    </style>

    <script>

  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
	document.getElementById('loader1').style.display = "none";
  }


    </script>

							
							<?php
							$i = $_GET["i"];
							?>
						        
							<img id="loader1" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/loader.gif" alt="loading gif" /> 
							<iframe src="https://www.ambiente.gub.uy/indicadores_ambientales/ficha/<?php echo $i; ?>" onload="resizeIframe(this)"></iframe> 
							

						
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