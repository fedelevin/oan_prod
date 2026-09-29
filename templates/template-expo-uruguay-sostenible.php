<?php 
/* 
 * Template Name: Expo Uruguay Sostenible
 * Description: Página para la Expo Uruguay Sostenible
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/

get_header('hiden'); ?>
	
	<?php global $theme_;?>

	<style type="text/css">
		.owl-theme .owl-controls {
		    display: none!important;
		}	
	</style>

	<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>

	<main role="main">

			<br><br>

			<section class="section_expo">
				<div class="col-md-6">
					<div class="logo-footer">
						<img class="img-responsive left-block" src="<?php echo esc_url($theme_['logo_expo']['url']); ?>">
					</div>
				</div>

				<div class="col-md-6">				

					<div class="space"></div>

					<!-- Nav Expo -->
					<div id="menu-expo2024">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <div class="navbar-header">
						    </div>
						    <div class="navbar-collapse" >
							  <?php  html5blank_nav2024(); ?>
						    </div>
						  </div>
						</nav>
					</div>
					<!-- Nav Expo -->

				</div>
			</section>

		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			 	<div id="video-vertical">
					<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/video-expo-web-horiz.mp4" class="fullwidth">
						<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/video.jpg">							
					</a>
				</div>
				
		        <video id="video-horizontal" width="100%" height="100%" autoplay loop muted>
		          <source src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/video-expo-web-horiz.mp4" type="video/mp4">
		        </video> 
	   
	   			<!--
		         <video style=" display:none; " id="video-vertical" width="100%" height="100%" autoplay loop muted>
		          <source src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/video-vertical.mp4" type="video/mp4">
		        </video> 
				-->

				<!-- AGENDA ----------------------------------------------------------------------------------------------------->
				<section id="agenda2024" class="container-fluid background-container-custom section_expo">	

			        <div class="container">

			        	<h1 class="title_line1 text-center titulo_expo" style="height: 130px;"><span>Agenda</span></h1>

						<div class="slide-agenda2024">

							<?php for ($i=1; $i < 8 ; $i++) { ?>
							<div class="col-md-12 video_single">
								<a target="blank_" href="<?php echo get_template_directory_uri(); ?>/images/expo2024/agenda/<?php echo $i; ?>.jpg" data-gallery="agenda2024" class="fullwidth" data-balloon="Foto" data-balloon-pos="buttom">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/expo2024/agenda/<?php echo $i; ?>.jpg">
								</a>
							</div>
							<?php } ?>

						</div>

						<br>

						<h4 class="text-center">
							<a href="<?php echo get_template_directory_uri(); ?>/images/expo2024/agenda/agenda-2024.pdf" target= "_blank">Descargar Agenda formato PDF</a>
						</h4>

					</div>	

				</section>	
				<!-- AGENDA ----------------------------------------------------------------------------------------------------->


		        <!-- QUIERO SER PARTE ------------------------------------------------------------------------------------------->
		        <section id="ser-parte2024" class="container-fluid background-container-custom section_expo">	

			        <div class="container">

			        	<h1 class="title_line1 text-center titulo_expo" style="height: 130px;"><span>¡Quiero ser parte!</span></h1>
	
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="modal" data-target="#emprendimientosModal">		
							<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/emprendimientos.png">
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="modal" data-target="#empresasModal">		
							<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/empresas.png">
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="modal" data-target="#organizacionesModal">		
							<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/organizaciones.png">
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="modal" data-target="#visitantesModal">		
							<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/visitantes.png">
						</div>																		
			        </div>	

			        <div class="container text-center">
			        	
			        	<br><br><br>

			        	<div style="text-align: left;">

			        		<p style="font-size: 25px!important;">La Expo Uruguay Sostenible es un evento organizado por el Ministerio de Ambiente que apunta a <b>visibilizar y promover iniciativas y acciones de sostenibilidad y cuidado del ambiente.</b></p>

			        		<p style="font-size: 25px!important;">Cuatro días en los que se concentran múltiples y diversas propuestas, que van desde <b>charlas, conferencias, talleres, exposiciones, juegos,</b> para conocer de primera mano qué estamos haciendo en Uruguay en el camino de la sostenibilidad.</p>

			        		<p style="font-size: 25px!important;">Reúne a <b>emprendedores, empresas, organizaciones del estado, de la sociedad civil, centros educativos,</b> para que la <b>ciudadanía</b> tenga la posibilidad de conocer proyectos e iniciativas que impactan positivamente en el ambiente y contribuyen a generar cambios en lo social y lo cultural.</p>		        		

			        		<p style="font-size: 25px!important;">Busca fomentar la conciencia ambiental, estimular el involucramiento de los ciudadanos y los diferentes sectores en las acciones que garantizan un <b>desarrollo sostenible.</b></p>

			        	</div>
			        </div>

		    	</section>
		    	<!-- QUIERO SER PARTE ------------------------------------------------------------------------------------------->


		    	<div class="clearfix"></div>


		        <!-- LA EXPO ES--------------------------------------------------------------------------------------------------->
		        <section id="la-expo2024" class="container-fluid background-container-custom section_expo">
		        	<h1 class="title_line1 text-center titulo_expo" style="height: 130px;"><span>La Expo es</span></h1>

							        	

		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalConcienciaAmbiental" >
		        		Conciencia Ambiental
		        	</div>


		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalConocimiento" >
		        		Conocimiento
		        	</div>

		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalConsumo" >
		        		Consumo responsable
		        	</div>

		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalEconomia" >
		        		Economía circular
		        	</div>

		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalPromocion" >
		        		Promoción del cuidado del ambiente
		        	</div>

		        	<div class="service color1_expo col-xs-12 col-sm-6 col-md-6 col-lg-4" data-toggle="modal" data-target="#exampleModalSostenibilidad" >
		        		Sostenibilidad
		        	</div>	
		        </section>	
		        <!-- LA EXPO ES--------------------------------------------------------------------------------------------------->
		        

				<!-- LA EXPO EN NUMEROS ------------------------------------------------------------------------------------------>
				<section class="text-center section_expo">
					
					<h1 class="title_line1 text-center titulo_expo" style="height: 130px;"><span>LA EXPO EN NÚMEROS</span></h1>

					<div class="row">
						<div class="col-md-4">
							<h2 style="font-size: 21px;"><b style="font-size: 60px">37.000</b> <br> <span style="color:#666"><img width="50px" title="Visitas" class="img-fluid text-center" src="<?php echo get_template_directory_uri(); ?>/images/expo2024/iconos/icon-visitas.png"><br>Visitas</span></h2>
						</div>

						<div class="col-md-4">
							<h2 style="font-size: 21px;"><b style="font-size: 60px">270</b> <br> <span style="color:#666"><img width="50px" title="Marcas Sostenibles" class="img-fluid text-center" src="<?php echo get_template_directory_uri(); ?>/images/expo2024/iconos/icon-marcas.png"><br>Marcas <br>Sostenibles</span></h2>
						</div>

						<div class="col-md-4">
							<h2 style="font-size: 21px;"><b style="font-size: 60px">90</b> <br> <span style="color:#666"><img width="50px" title="Charlas realizadas" class="img-fluid text-center" src="<?php echo get_template_directory_uri(); ?>/images/expo2024/iconos/icon-charlas.png"><br>Charlas <br> realizadas</span></h2>
						</div>	
					</div>

				</section>

				<div class="clearfix"></div>
				<!-- LA EXPO EN NUMEROS ----------------------------------------------------------------------------------------->


				<!-- GALERIA DE FOTOS 2023 ////////////////////////////////////////////////-->
				<section class="text-center section_expo">
					<div class="container-fluid video_tutorial">
						
						<h1 class="title_line text-center"><span>Galería de fotos</span></h1>
						<p class="text-center"><?php echo $theme_['premio_galeria_desc']; ?></p>
						
						<div class=" slide-fotos-premio-2024">	

							<?php for ($i=1; $i < 95 ; $i++) { ?>
							<div class="col-md-12 video_single">
								<a target="blank_" href="<?php echo get_template_directory_uri(); ?>/images/galeria-expo-2023/<?php echo $i; ?>.jpg" data-gallery="galeria_premio_2023" class="fullwidth" data-balloon="Foto" data-balloon-pos="buttom">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galeria-expo-2023/<?php echo $i; ?>.jpg">
								</a>
							</div>
							<?php } ?>

						</div>

					</div>
				</section>
				<!-- GALERIA DE FOTOS 2023 ////////////////////////////////////////////////-->




				<!-- Logos Main Sponsors -->
				<div class="container">
					<div class="col-md-12">
						<h1 class="pres_title_line text-center"><span>Sponsors principales</span></h1>
					</div>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/01.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/02.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/03.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/04.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/05.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/06.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/07.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/08.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/09.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img class="img-responsive"   src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/1_sponsors_principales/10.jpg">
				</div>																																				


				<div class="col-md-12"><br><br><br></div>
				
	
				<!-- Logos Sponsors -->
				<div class="container">
					<div class="col-md-12">
						<h1 class="pres_title_line text-center"><span>Sponsors</span></h1>
					</div>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/01.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/02.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/03.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/04.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/05.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/06.jpg">
				</div>		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/2_sponsors/07.jpg">
				</div>																										


				<div class="clearfix"></div>
				<div class="col-md-12"><br><br><br></div>

				
				<!-- Logos Apoyos-->
				<div class="container">
					<div class="col-md-12">
						<h1 class="pres_title_line text-center"><span>Apoyos</span></h1>
					</div>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/01.jpg">
				</div>	

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/02.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/03.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/04.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/05.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/06.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/07.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/08.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/09.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/10.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/11.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/12.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/13.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/14.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/15.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/16.jpg">
				</div>	
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/17.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/expo2024/sponsors/3_apoyos/18.jpg">
				</div>																																																																						
				<div class="clearfix"></div>

			</article>

	</main>





	<br><br><br>


	<!-- Modal - Conciencia Ambiental-->
	<div class="modal fade" id="exampleModalConcienciaAmbiental" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	      <div class="modal-header">
	      	        
	      </div>
	      
	      <div class="modal-body">

	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/conciencia-ambiental.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Conciencia Ambiental</h3>
		      		<p>A través de charlas, talleres y juegos, buscamos que conozcas más sobre el ambiente, que aprendas sobre el cuidado de nuestros recursos y transformes tus hábitos. </p>
		      		<p><b>¡Creemos que la conciencia ambiental es el inicio de la transformación! Y que tus decisiones tienen impacto.</b></p>
	      		</div>

	      		<div class="clearfix"></div>

	      </div>
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>

	    </div>
	  </div>
	</div>
	<!-- Modal - Conciencia Ambiental-->

	<!-- Modal - Conocimiento-->
	<div class="modal fade" id="exampleModalConocimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	      <div class="modal-header">

	      </div>

	      <div class="modal-body">

	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/conocimiento.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Conocimiento</h3>
					<p>La Expo es un espacio de encuentro y actualización, a través de charlas y conferencias, para que conozcas proyectos e iniciativas que <b>impactan positivamente en el ambiente y contribuyen a generar un cambio social.</b></p>
	      		</div>

	      		<div class="clearfix"></div>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Conocimiento-->

	<!-- Modal - Consumo-->
	<div class="modal fade" id="exampleModalConsumo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
    
	      </div>

	      <div class="modal-body">

	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/consumo-responsable.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Consumo responsable</h3>
					<p>Cientos de marcas te reciben para que conozcas sus iniciativas sostenibles y sigas <b>transformando tu manera de consumir.</b></p>
	      		</div>

	      		<div class="clearfix"></div>

	      		
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>

	    </div>
	  </div>
	</div>
	<!-- Modal - Consumo-->

	<!-- Modal - Economia-->
	<div class="modal fade" id="exampleModalEconomia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	      <div class="modal-header">       
	      </div>

	      <div class="modal-body">


	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/economia-circular.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Economía circular</h3>
					<p>Facilitamos la participación de emprendimientos y organizaciones para que muestren sus iniciativas, generen nuevas conexiones, crezcan y se fortalezcan, como forma de transformar las cadenas productivas y de consumo.</b></p>
	      		</div>

	      		<div class="clearfix"></div>
	      	

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>

	    </div>
	  </div>
	</div>
	<!-- Modal - Economia-->

	<!-- Modal - Promocion-->
	<div class="modal fade" id="exampleModalPromocion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header"></div>

	      <div class="modal-body">

	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/promocion-ambiente.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Promoción del cuidado del ambiente</h3>
		      		<p>A través de la Expo, como ministerio facilitamos la difusión de iniciativas ambientales, nuevas conexiones entre empresas y emprendimientos, impulsamos el crecimiento de la comunidad de emprendimientos sostenibles y acercamos la temática ambiental a la ciudadanía.</p>

		      		<p>Es un momento clave para nuestro ministerio en el desarrollo de un Uruguay Sostenible.</p>
	      		</div>

	      		<div class="clearfix"></div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Promocion-->


	<!-- Modal - Sostenibilidad-->
	<div class="modal fade" id="exampleModalSostenibilidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header"></div>
	      <div class="modal-body">

	      		<div class="col-md-6">
	      			<img src="<?php echo get_template_directory_uri(); ?>/images/expo2024/sostenibilidad.jpg">
	      		</div>

	      		<div class="col-md-6">
	      			<h3>Sostenibilidad</h3>
		      		<p>Promovemos acciones de cuidado y responsabilidad con el ambiente, tanto desde la ciudadanía como del gobierno, instituciones, empresas y emprendimientos.</p>
		      		<p>Además somos un evento sostenible: promovemos la reducción y la reutilización, gestionamos los residuos adecuadamente, incluimos acciones de sensibilización y educación ambiental, entre otros.</p>
	      		</div>

	      		<div class="clearfix"></div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Sostenibilidad-->


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
	      		<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2021/04/premio-vencimiento.jpeg">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Info completa del proyecto -->


	<!-- Modal - Categorias REUNE -->
	<div class="modal fade" id="reuneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">

	    <div class="modal-content">

	      <div class="modal-header"></div>

	      <div class="modal-body">
	      		<!--<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2021/04/premio-vencimiento.jpeg">-->

				<div class="col-md-12 reune" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fondo-eco1.jpg'); font-size: 15px; padding: 0px; margin:0; border-radius: 10px; " >
					<div class="col-md-4"><h3 style="color: #099096">REÚNE</h3></div>
					<div class="col-md-8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fondo-eco2.jpg'); padding: 40px; border-radius: 10px;">
						<b>
						• ONG's <br>
						• Emprendimientos<br>
						• Empresas estatales<br>
						• Intendencias<br>
						• Instituciones<br>
						• Empresas privadas<br>
						• Organismos Internacionales<br>
						• Instituciones educativas nacionales e internacionales.
						</b>					
					</div>
				</div>

	      </div>

	      <div class="modal-footer">
				<button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
	      </div>

	    </div>
	  </div>
	</div>
	<!-- Modal - Categorias REUNE -->

	<!-- Modal - Emprendimientos -->
	<div class="modal fade" id="emprendimientosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content col-md-12">

	    	<div class="modal-header"><h3>Emprendimientos</h3></div>

		      <div class="modal-body">
		      		
		      		<p><b>¡Le damos la bienvenida a tu emprendimiento!</b></p>


		      		<p>
						La Expo Uruguay Sostenible te permite:<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Mostrar tu iniciativa sostenible <br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Generar sinergia<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Ampliar tu red de contactos<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Acercarte a la ciudadanía<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Crecer<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Tener un stand gratuito durante 4 días<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Participar de la ronda de negocios
					</p>

					<p>Si tu emprendimiento es de carácter sostenible, y luego de postular es seleccionado por el tribunal, podrás acceder a un stand gratuito durante todo el evento.</p>
					<p>Además tenés la posibilidad de acceder a la ronda de negocios: una instancia de intercambio directo con empresas tractoras que se desarrolla durante una jornada en la expo, ¡una oportunidad increíble de gran potencial para tu emprendimiento!</p>

						<br>

						<div class="alert alert-success" role="alert">

						<h1>Pasos para participar:</h1>
						<p>
						1.	Postulá tu emprendimiento hasta el 30 de abril (plazo culminado) <br>
						2.	Aguardá nuestras comunicaciones por mail<br>
						3.	Si tu emprendimiento es seleccionado, además de participar con un stand gratuito en la expo, podrás acceder a la ronda de negocios <br>
						4.	¡Empezá a preparar tu propuesta!
						</p>

						</div>

						<br>

						<h1>Conocé cómo la ronda de negocios en 2023 ya potenció a emprendedores y empresas</h1>


						<a href="https://www.youtube.com/embed/g6zBF4aczKE?si=QY7C6VMrgDwEXsVB" class="fullwidth">
							<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/ver-video-ronda-de-negocios.jpg">							
						</a>


						<br>

						<h1>Sobre la participación en la Expo Uruguay Sostenible</h1>

						<p>La Expo Uruguay Sostenible se desarrollará del 6 al 9 de junio en el Antel Arena, de 10 a 18 horas.</p>
						<p>La fecha límite de la postulación para participar es el 30 de abril, 18 horas. </p>
						<p>La Expo Uruguay Sostenible será en un espacio cerrado y techado. Los emprendimientos y organizaciones contarán con stands de 2 metros de frente x 2 metros de profundidad que lo utilizarán para exponer sus productos y servicios. </p>
						<p>Los participantes deberán montar su stand durante la jornada que se le asigne, 4 o 5 de junio, entre 8 y 19 horas. El desarme está previsto para el lunes 10 de junio.</p>
						<p>La selección de los emprendimientos y organizaciones será realizada por un comité integrado por el Ministerio de Ambiente, ANDE, ANII y PNUD. </p>

						<br>

						<h1>Sobre los criterios de sostenibilidad y la selección</h1>
						<p>Como criterios de sostenibilidad se consideran la dimensión ambiental, social y económica. También serán considerados factores como descentralización y diversidad de sectores de actividad. Serán priorizados aquellos que ya hayan iniciado sus actividades y cuenten con menos de 3 años de actividad.</p>
						<p>Los emprendimientos estarán habilitados para presentar y vender sus productos.</p>
						<p>Se realizará un concurso de stands por categorías, que incluirá como criterios de evaluación la adhesión al protocolo de sostenibilidad, la propuesta de activación, entre otros.</p>
						<p>Todos los emprendimientos y organizaciones seleccionadas deberán cumplir con el protocolo de Eventos Sostenibles del Ministerio de Ambiente.(<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/protocolo-eventos-sostenibles" target="_blank">Ver protocolo</a>) </p>
						

					


		      </div>
		      <div class="modal-footer">
					<button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
		      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Emprendimientos -->

	<!-- Modal - Empresas -->
	<div class="modal fade" id="empresasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content col-md-12">

	    	<div class="modal-header"><h3>Empresas</h3></div>

		      <div class="modal-body">
		      		
		      		<p><b>¡Le damos la bienvenida a tu empresa!</b></p>

		      		<p>
						La Expo Uruguay Sostenible te permite:<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Mostrar tu iniciativa sostenible<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Ganar visibilidad<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Generar sinergia<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Ampliar tu red de contactos<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Acercarte a la ciudadanía<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Crecer<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Conocer nuevos emprendimientos en la ronda de negocios 
					</p>

					<br>

					<div class="alert alert-success" role="alert">

						<h1>Pasos para participar:</h1>
						<p>
						1.	Expresanos tu interés en participar escribiendo a expouruguaysostenible@ambiente.gub.uy <br>
						2.	¡Empezá a preparar tu propuesta!<br>
						</p>

						<br>				

					</div>

					<br>

					<a href="https://www.youtube.com/embed/g6zBF4aczKE?si=QY7C6VMrgDwEXsVB" class="fullwidth">
						<img class="img-responsive center-block"  src="<?php echo get_template_directory_uri(); ?>/images/expo2024/ver-video-ronda-de-negocios.jpg">							
					</a>

					<br>

					<h1>Conocé cómo la ronda de negocios en 2023 ya potenció a emprendedores y empresas </h1>

		      </div>
		      <div class="modal-footer">
					<button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
		      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Empresas -->

	<!-- Modal - Organizaciones -->
	<div class="modal fade" id="organizacionesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content col-md-12">

	    	<div class="modal-header"><h3>Organizaciones</h3></div>

		      <div class="modal-body">
		      		
		      		<p><b>¡Le damos la bienvenida a tu organización!</b></p>
		      		<p>
						La Expo Uruguay Sostenible te permite:<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Mostrar tu iniciativa sostenible <br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Generar sinergia<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Ampliar tu red de contactos<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Acercarte a la ciudadanía<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Crecer<br>
						<i class="fa fa-caret-right" aria-hidden="true"></i> Tener un stand gratuito durante 4 días

					</p>

					<br>

					<div class="alert alert-success" role="alert">

						<h1>Pasos para participar:</h1>
						<p>
						1.	Postulá tu organización hasta el 30 de abril (plazo culminado) <br>
						2.	Aguardá nuestras comunicaciones por mail<br>
						3.	Si tu organización es seleccionada, podrás participar con un stand gratuito durante toda la expo <br>
						4.	¡Empezá a preparar tu propuesta!<br>
						</p>

					</div>

		

					<h1>Sobre la participación en la Expo Uruguay Sostenible</h1>
					<p>La Expo Uruguay Sostenible se desarrollará del 6 al 9 de junio en el Antel Arena, de 10 a 18 horas.</p>
					<p>La fecha límite de la postulación para participar es el 30 de abril, 18 horas. </p>
					<p>La Expo Uruguay Sostenible será en un espacio cerrado y techado. Los emprendimientos y organizaciones contarán con stands de 2 metros de frente x 2 metros de profundidad que lo utilizarán para exponer sus productos y servicios. </p>
					<p>Los participantes deberán montar su stand durante la jornada que se le asigne, 4 o 5 de junio, entre 8 y 19 horas. El desarme está previsto para el lunes 10 de junio.</p>
					<p>La selección de los emprendimientos y organizaciones será realizada por un comité integrado por el Ministerio de Ambiente, ANDE, ANII y PNUD. </p>

					<br>

					<h1>Sobre los criterios de sostenibilidad y la selección</h1>
					<p>Como criterios de sostenibilidad se consideran la dimensión ambiental, social y económica. También serán considerados factores como descentralización y diversidad de sectores de actividad. Serán priorizados aquellos que ya hayan iniciado sus actividades y cuenten con menos de 3 años de actividad.</p>
					<p>Los emprendimientos estarán habilitados para presentar y vender sus productos.</p>
					<p>Se realizará un concurso de stands por categorías, que incluirá como criterios de evaluación la adhesión al protocolo de sostenibilidad, la propuesta de activación, entre otros.</p>
					<p>Todos los emprendimientos y organizaciones seleccionadas deberán cumplir con el protocolo de Eventos Sostenibles del Ministerio de Ambiente, ver el protocolo aquí </p>


					<br>

					<!--
					<video id="video-horizontal" width="100%" height="100%" autoplay="" loop="" muted="">
					  <source src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2024/03/video-expo-web-horiz.mp4" type="video/mp4">
					</video>
					-->						

					


		      </div>
		      <div class="modal-footer">
					<button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
		      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Organizaciones -->

	<!-- Modal - Visitantes -->
	<div class="modal fade" id="visitantesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content col-md-12">

	    	<div class="modal-header"><h3>Visitantes y escuelas</h3></div>

		      <div class="modal-body">
		      		
		      		<p><b>¡Agendate nuestro evento!</b> </p>
		      		<p>
					<i class="fa fa-caret-right" aria-hidden="true"></i> Jueves 6 al domingo 9 de junio<br>
					<i class="fa fa-caret-right" aria-hidden="true"></i> 10 a 19 horas<br>
					<i class="fa fa-caret-right" aria-hidden="true"></i> Antel Arena <br>
					<i class="fa fa-caret-right" aria-hidden="true"></i> Entrada libre y gratuita

					</p>

					<div class="alert alert-success" role="alert">
						<h1>Si sos parte de un centro educativo y querés coordinar una visita, escribinos a </h1><br>
						<p><a href="mailto:expouruguaysostenible@ambiente.gub.uy">expouruguaysostenible@ambiente.gub.uy</a></p>				

						<br>

						<h1>¿Qué podrás hacer?</h1>
						<p>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Recorrer el Paseo Sostenible con +200 stands<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Participar de talleres <br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Sumarte a charlas para actualizarte sobre temas ambientales<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Participar de juegos<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Sumarte a propuestas divertidas de marcas<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Comer rico en nuestro patio de comidas<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Traer tus materiales y gestionarlos en contenedores adecuados
						</p>
						<br>

						<h1>Te recomendamos:</h1>
						<p>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Venir en bici, caminando, usar transporte colectivo o compartir el auto<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Traer tu botella y cubiertos reutilizables<br>
							<i class="fa fa-caret-right" aria-hidden="true"></i> Traer tus residuos o materiales para gestionar adecuadamente
						</p>
						<p>¡Unos días antes publicaremos acá la agenda de actividades!</p>

					</div>

		      </div>
		      <div class="modal-footer">
					<button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
		      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Visitantes -->

	<script type="text/javascript">
		//document.getElementById('popup').click();
	</script>


	<?php //get_sidebar(); ?>

<?php get_footer('expo'); ?>