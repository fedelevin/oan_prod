<?php 
/* 
 * Template Name: Premio Nacional de Ambiente 2024
 * Description: Página del Premio Nacional de Medio Ambiente 2024
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


				<div  class="slide-expo2 col-md-12 banner_web">

					<img class="img-responsive" src="<?php echo esc_url($theme_['premio_imagen_2024']['url']); ?>">

					<a href="#premio2024" class="fullwidth1">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/banner_web_2.png">
					</a>

					
				</div>

				<div  class="slide-expo2- col-md-12 banner_mobile" style="display: none">
				
					<!--<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/banner_mobile.png">-->

					<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/Bases-Generales-PNA-2024-2.pdf" class="fullwidth" target="_blank">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/banner_mobile.png">
					</a>
				
				</div>


				

				<h1 class="title_line text-center"><span>Premio Nacional de Ambiente "Uruguay Sostenible" 2024</span></h1>

				<div  class="col-md-12">
				
					<div class="col-md-6">
						<!--<h2 class="title_line"><span> Ceremonia Premio Nacional de Ambiente "Uruguay Sostenible" 2023 </span></h2>-->
						<br><br>
						<!--<a href="https://www.youtube.com/embed/sAyFhVnTcfU?autoplay=1" class="fullwidth">-->
						<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/04/banner-postulaciones2.png">
						<!--</a>-->					
					</div>

					<div class="col-md-6">
						<br><br><br>

						<p>
						¡Abrimos la convocatoria a la 4ª edición de la Premio Nacional de Ambiente: “Uruguay Sostenible”! Seguimos reconociendo y visibilizando <b>iniciativas, proyectos y experiencias</b> que realizan: centros educativos, organizaciones de la sociedad civil, gobiernos locales y empresas de nuestro país, en favor de la sostenibilidad. 
						</p>

						<ul style="font-size:14px!important">
						<li><b>Innovación y búsqueda de soluciones</b> y alternativas sostenibles que equilibren desarrollo con cuidado ambiental</li>
						<li><b>Promoción de buenas prácticas</b> para el cuidado de los recursos y reducción de los impactos</li>
						<li><b>Generación de conciencia</b> ambiental y cambio cultural</li>

						<br>
						<b>¿Te reconoces en estos pasos? ¡Postulate… te esperamos!</b>

						</ul>

						<div class="col-md-12">
						<a class="btn btn-premio" href="#premio2024">Postulate!</a>
						</div>

						<div class="col-md-12"><br><br></div>

					</div>

					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">

				</div>

				<div class="col-md-12" style="background-color:#fff"><br></div>

				<!-- VIDEO PROMOCIONAL //////////////////////////////////////////////////////////-->

				<div class="col-md-12 slide-videos-premio-ambiente">								

					<div class="col-md-12 video_single">
						<a target="blank_" href="https://www.youtube.com/embed/xPz0kJrXqSE?si=isAgpxCuXdZpSkPU" class="fullwidth" data-balloon="Video promocional" data-balloon-pos="buttom">
							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/preview_video.jpg">
						</a>

						<br>

					</div>
				
				</div>

				<!-- VIDEO PROMOCIONAL //////////////////////////////////////////////////////////-->


				<!-- PREMIO NACIONAL DE AMBIENTE ////////////////////////////////////////////////-->
				<div id="premio2024"  class="col-sm-12 premio ">

				    <div class="col-md-3">
				      <ul class="nav nav-tabs tabs-left sideways">

			        	<?php $i=0; foreach ($theme_['premio_2024'] as $slide => $property){ ?>

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
				      	
				      	<?php $z=0; foreach ($theme_['premio_2024'] as $slide => $property){ ?>
				        
					        <?php if ($z == 0) { ?>
					        	<div class="tab-pane active" id="<?php echo $z; ?>-v2">
					        		
					        		<?php foreach ($theme_['premio_categorias2024'] as $slide => $property2){ ?>
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
				<!-- PREMIO NACIONAL DE AMBIENTE  ////////////////////////////////////////////////-->


				<!-- GALERIA DE VIDEOS ///////////////////////////////////////////////////////////-->
				<div class="col-md-12">
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Videos de los ganadores 2023</span></h1>
						<p class="text-center"><?php echo $theme_['videos_premio_nacional_desc']; ?></p>
					</dir>

					<div class="col-md-12 slide-videos-premio-ambiente">								
					<?php foreach ($theme_['videos_premio_nacional_2024'] as $slide => $property){ ?>
						<div class="col-md-12 video_single">
							<h2 class="title_line text-center"><span> <?php echo $property['title']; ?></span></h2>
							<a target="blank_" href="<?php echo $property['url']; ?>" class="fullwidth" data-balloon="<?php echo $property['title']; ?>" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
						</div>
					<?php } ?> 						
					</div>

				</div>
				</div>
				<!-- GALERIA DE VIDEOS  //////////////////////////////////////////////////////////-->


				<!-- GANADORES ///////////////////////////////////////////////////////////////////-->
				<div class="container">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center">
							<span>
								<i class="fa fa-trophy" aria-hidden="true"></i> <br><br>
								Ganadores 2023
							</span>
						</h1>
					</dir>


					<div class="panel" style="background-color:beige;">
						<div class="panel-body">

							<div class="col-md-3"></div>
							<div class="col-md-3">
								<p> <strong>1er Premio (Reconocimiento)</strong></p>

								<br>

								<strong>1er Premio Organizaciones de la Sociedad Civli</strong><br>
								CEMPRE Uruguay

								<br><br>

								<strong>1er Premio Gobiernos Locales</strong><br>
								Municipio de Joaquín Suárez - Canelones

								<br><br>

								<strong>1er Premio Centros Educativos</strong><br>
								Liceo Departamental de Colonia – Operación Luciérnaga

								<br><br>

								<strong>1er Premio Empresas Mipymes</strong><br>
								MARE Sustentable

								<br><br>

								<strong>1er Premio Grandes Empresas</strong><br>
								Arcos Dorados Uruguay S.A – Mcdonald´s
							</div>


							<div class="col-md-6">
								<p> <strong>Menciones especiales</strong></p>

								<br>

								<strong>Mención Especial Organizaciones de la Sociedad Civil</strong><br>
								Rosario Clasifica y Recicla

								<br><br>


								<strong>Mención Especial Gobiernos Locales</strong><br>
								Municipio de Mariscala - Lavalleja

								<br><br>

								<strong>Mención Especial Centros Educativos</strong><br>
								Colegio Los Candiles - Paysandú

								<br><br>

								<strong>Mención Especial Empresas Mipymes</strong><br>
								VITANNA

								<br><br>

								<strong>Mención Especial Grandes Empresas</strong><br>
								Telefónica Móviles del Uruguay S.A - Movistar

								<br><br>

								<strong>Mención Especial Grandes Empresas</strong><br>
								VERDE
							</div>

						</div>
					</div>

				</div>
				<!-- GANADORES /////////////////////////////////////////////////////////////////-->

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

<?php get_footer('premio'); ?>
