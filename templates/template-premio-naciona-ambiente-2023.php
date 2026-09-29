<?php 
/* 
 * Template Name: Premio Nacional de Ambiente 2023
 * Description: Página del Premio Nacional de Medio Ambiente 2023
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header('hiden'); ?>
<?php global $theme_; ?>

<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>

	<main role="main">

		<!-- section -->
		<section class="container-fluid background-container">	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php 
					foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
						$title = get_the_title();
						if($property['title'] == $title){
				?>
				<?php 
						}
					}
				?>

				<div  class="slide-expo2 col-md-12 ">
					<img class="img-responsive" src="<?php echo esc_url($theme_['premio_imagen_2023']['url']); ?>">
					<img class="img-responsive" src="<?php echo esc_url($theme_['premio_imagen_2023']['url']); ?>">
				</div>

				<div  class="col-md-12 "><br><br><br></div>

				<h1 class="title_line text-center"><span>Premio Nacional de Ambiente "Uruguay Sostenible" 2023</span></h1>

				<div  class="col-md-12">
				
					<div class="col-md-6">
						<!--<h2 class="title_line"><span> Ceremonia Premio Nacional de Ambiente "Uruguay Sostenible" 2023 </span></h2>-->
						<br><br>
						<!--<a href="https://www.youtube.com/embed/sAyFhVnTcfU?autoplay=1" class="fullwidth">-->
							<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/04/portada_web-PNA-2023.jpg">
						<!--</a>-->					
					</div>

					<div class="col-md-6">
						<br><br><br>
						<p>

Se abre la convocatoria a la <b>Tercera edición de la Premio Nacional de Ambiente</b>, dirigido a centro educativos, empresas, gobiernos locales y organizaciones de la sociedad civil.

<br><br>

Esta distinción reconoce las acciones de quienes trabajan en la sostenibilidad como forma de mitigar los problemas presentes vinculados con el ambiente, así como en la promoción de buenas prácticas y generación de conciencia ambiental, para incidir en el presente y legar un mejor ambiente a las futuras generaciones.</p>

					</div>

					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">

				</div>


				<div class="col-md-12" style="background-color:#fff"><br></div>





				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos 2023</span></h1>
						<p class="text-center"><?php echo $theme_['premio_galeria_desc']; ?></p>
					</dir>

					<div class="col-md-12 slide-fotos-premio">	

						<?php for ($i=1; $i < 18 ; $i++) { ?>
						<div class="col-md-12 video_single">
							<a target="blank_" href="<?php echo get_template_directory_uri(); ?>/images/premio-ambiente-2023/<?php echo $i; ?>.jpg" data-gallery="galeria_premio_2022" class="fullwidth" data-balloon="Foto" data-balloon-pos="buttom">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/premio-ambiente-2023/<?php echo $i; ?>.jpg">
							</a>
						</div>
						<?php } ?>

					</div>

				</div>
				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->




				<!-- PREMIO NACIONAL DE AMBIENTE 2023 ////////////////////////////////////////////////-->
				<div  class="col-sm-12 premio ">

				    <div class="col-md-3">
				      <ul class="nav nav-tabs tabs-left sideways">

			        	<?php $i=0; foreach ($theme_['premio_2023'] as $slide => $property){ ?>

					        <?php if ($i == 0) { ?>
					        	<li class="active"><a href="#<?php echo $i; ?>-v2" data-toggle="tab"><?php echo $property['title']; ?></a></li>
					        <?php }else { ?>
					        	<li><a href="#<?php echo $i; ?>-v2" data-toggle="tab"><?php echo $property['title']; ?></a></li>
					        <?php } ?>

				        <?php $i++; } ?>

				      </ul>
				    </div>

				    <div class="col-md-9" >
				      <div class="tab-content" style="padding: 0px 0; text-align: justify;">
				      	
				      	<?php $z=0; foreach ($theme_['premio_2023'] as $slide => $property){ ?>
				        
					        <?php if ($z == 0) { ?>
					        	<div class="tab-pane active" id="<?php echo $z; ?>-v2">
					        		
					        		<?php foreach ($theme_['premio_categorias2023'] as $slide => $property2){ ?>
					        		<div class="col-md-3" style="padding: 0;">
					        			<a href="<?php echo $property2['url']; ?>" class="fullwidth">
					        				<img class="img-responsive" src="<?php echo $property2['image']; ?>">
					        			</a>
					        		</div>
					        		<?php } ?>
					        		
					        		<div class="clearfix"></div>
					        		
					        		<p><?php echo $property['description']; ?></p>
					        		
					        		</div>
					        <?php }else { ?>
					        	<div class="tab-pane" id="<?php echo $z; ?>-v2"><?php echo $property['description']; ?></div>
					        <?php } ?>
				        	
				        <?php $z++; } ?>

				      </div>
				    </div>			

				    <div class="clearfix"></div>

				</div>
				<!-- PREMIO NACIONAL DE AMBIENTE 2023 ////////////////////////////////////////////////-->


				<div  class="col-md-12 "><br><br></div>

				



			</article>

		</section>
		<!-- /section -->
	</main>


	<!-- MODAL - INFORMACIÓN DEL INVESTIGADOR ///////////////////////////////////////////-->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        </button>        
	      </div>
	      <div class="modal-body">
	      		<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2021/04/premio-vencimiento.jpeg">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- MODAL - INFORMACIÓN DEL INVESTIGADOR ///////////////////////////////////////////-->


<script type="text/javascript">
	//document.getElementById('popup').click();
</script>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
