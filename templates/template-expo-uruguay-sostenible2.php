<?php 
/* 
 * Template Name: Expo Uruguay Sostenible
 * Description: Página para la Expo Uruguay Sostenible
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/

get_header(); ?>
	
	<?php global $theme_;?>

	<div class="container" style=" padding:50px 0;">
		<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/logo_expo_2023.png">
	</div>
		


	<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>



	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container-custom">	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<div  class="col-md-12 ">
				<img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/banners-web-2023.png">
				</div>



				<div class="container">

					<br><br>

					<!-- Nav Expo -->
					<div id="menu-expo2023">
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <div class="navbar-header">
						    </div>
						    <div class=" navbar-collapse">
							  <?php html5blank_nav2023(); ?>
						    </div>
						  </div>
						</nav>
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
					</div>
					<!-- Nav Expo -->

					<br>

					<div id="page-laferia2023">
						<h1 class="pres_title_line text-center"><span>La Feria</span></h1><br>
						<p> <b>EXPO URUGUAY SOSTENIBLE</b> Es un evento organizado por el <b>Ministerio de Ambiente</b> que apunta a promover acciones de sostenibilidad y cuidado del ambiente. Un espacio de encuentro en el que la ciudadanía tenga la posibilidad de conocer proyectos e iniciativas que impactan positivamente y contribuyen a generar un cambio social donde nuestro vínculo con el ambiente sea protagonista. En su primera edición la <b>EXPO URUGUAY SOSTENIBLE</b> busca fomentar la conciencia ambiental y generar procesos participativos que estimulen un compromiso inclusivo de los ciudadanos en las acciones y procedimientos destinados a asegurar un desarrollo sostenible.</p>

					</div>

					<div id="page-agenda2023">

					</div>	

					<div id="page-comoparticipar2023">
						<h1 class="pres_title_line text-center"><span>Inscribite</span></h1><br>
						<p> <b>EXPO URUGUAY SOSTENIBLE</b> reunirá a todos los actores, empresas públicas y privadas, emprendedores, instituciones, organizaciones de la sociedad civil y público en general interesadas en temas ambientales. Es una oportunidad única de participar en una actividad organizada por el <b>Ministerio de Ambiente</b> quien se encarga de la ejecución de la política nacional ambiental, de ordenamiento ambiental, de desarrollo sostenible y de conservación y uso de los recursos naturales. VOS PODÉS SER PARTE DE LA PRIMERA <b>EXPO URUGUAY SOSTENIBLE.</b></p>
					</div>


					<div id="page-contacto2023">
						<h1 class="pres_title_line text-center"><span>Contacto</span></h1><br>
						<p>Email de contacto: <br> <i class="fa fa-envelope-o" aria-hidden="true"></i>
 						<a href="mailto:expouruguaysostenible@ambiente.gub.uy">expouruguaysostenible@ambiente.gub.uy</a></p>
					</div>

				</div>





				<div  class="col-md-12 ">
					
					<div class="col-md-6">
						<h2 class="title_line"><span> </span></h2>
						<a href="https://www.youtube.com/embed/AL_iz8oh7PM?autoplay=1" class="fullwidth">
							<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/video-Manuela.png">
						</a>					
					</div>

					<div class="col-md-6">
						<br><br><br>
						<h4>EXPO <b>URUGUAY SOSTENIBLE.</b></h4>
						<p>Es un evento organizado por el Ministerio de Ambiente que apunta a <b>promover el desarrollo sostenible</b> y el <b>cuidado del ambiente.</b> Un espacio de encuentro para conocer <b>iniciativas, emprendimientos y acciones</b>  que impactan y contribuyen a  modificar positivamente nuestro vínculo con el ambiente.</p>

						<p>En su primera edición la EXPO <b>URUGUAY SOSTENIBLE</b> busca:</p>
						<p>
							<ul style="font-size:14px;">
								<li>Promover acciones sostenibles y de cuidado del ambiente.</li>
								<li>Fomentar la conciencia ambiental y el compromiso ciudadano.</li>
								<li>Generar un espacio de intercambio de experiencias y buenas prácticas.</li>
							</ul>
						</p>

						<br>

						<p>
						¡Vos también podes ser más sostenible! Te esperamos.
						</p>

						</p>
					</div>

					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">



				<div class="col-md-12"><br><br><br><br></div>
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br><br><br></div>
























				<div  class="col-md-12 ">
				<img class="img-responsive" src="<?php echo esc_url($theme_['expo_imagen']['url']); ?>">
				</div>

				<div class="container">

					<br><br>

					<!-- Nav Expo -->
					<div id="menu-expo">
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
						    <div class="navbar-header">
						    </div>
						    <div class=" navbar-collapse">
							  <?php html5blank_nav2(); ?>
						    </div>
						  </div>
						</nav>
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
					</div>
					<!-- Nav Expo -->

					<br>

					<div id="page-laferia">
						<h1 class="pres_title_line text-center"><span>La Feria</span></h1><br>
						<p> <b>EXPO URUGUAY SOSTENIBLE</b> Es un evento organizado por el <b>Ministerio de Ambiente</b> que apunta a promover acciones de sostenibilidad y cuidado del ambiente. Un espacio de encuentro en el que la ciudadanía tenga la posibilidad de conocer proyectos e iniciativas que impactan positivamente y contribuyen a generar un cambio social donde nuestro vínculo con el ambiente sea protagonista. En su primera edición la <b>EXPO URUGUAY SOSTENIBLE</b> busca fomentar la conciencia ambiental y generar procesos participativos que estimulen un compromiso inclusivo de los ciudadanos en las acciones y procedimientos destinados a asegurar un desarrollo sostenible.</p>

					</div>

					<div id="page-agenda">
						<h1 class="pres_title_line text-center"><span>Agenda</span></h1><br>
						<p>

							
							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/agenda_viernes-1.jpg">

							<br><br>

							
							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/agenda_sabado-1.jpg">

							<br><br>

							
							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/agenda_domingo-1.jpg">

						</p>
					</div>	

					<div id="page-comoparticipar">
						<h1 class="pres_title_line text-center"><span>Inscribite</span></h1><br>
						<p> <b>EXPO URUGUAY SOSTENIBLE</b> reunirá a todos los actores, empresas públicas y privadas, emprendedores, instituciones, organizaciones de la sociedad civil y público en general interesadas en temas ambientales. Es una oportunidad única de participar en una actividad organizada por el <b>Ministerio de Ambiente</b> quien se encarga de la ejecución de la política nacional ambiental, de ordenamiento ambiental, de desarrollo sostenible y de conservación y uso de los recursos naturales. VOS PODÉS SER PARTE DE LA PRIMERA <b>EXPO URUGUAY SOSTENIBLE.</b></p>
					</div>


					<div id="page-contacto">
						<h1 class="pres_title_line text-center"><span>Contacto</span></h1><br>
						<p>Email de contacto: <br> <i class="fa fa-envelope-o" aria-hidden="true"></i>
 						<a href="mailto:expouruguaysostenible@ambiente.gub.uy">expouruguaysostenible@ambiente.gub.uy</a></p>
					</div>

				</div>


				<br><br>
				<!--Skills Section-->
				<section class="skills section colored" id="skills">

		
						<h1 class="text-center">LA EXPO EN CIFRAS</h1>

						<br><br>

						<div id="skills-slide" class="slide-skills">
							<!--Skills Items-->
							<div class="skill">
								<span class="chart" data-percent="3">
									<span class="percent"></span>
								</span>
								<h4>DÍAS</h4>
								<p>Duración de la feria</p>
							</div>

							<div class="skill">
								<span class="chart" data-percent="10000">
									<span class="percent"></span>
								</span>
								<h4>METROS</h4>
								<p>Superficie en m2</p>
							</div>

							<div class="skill">
								<span class="chart" data-percent="100">
									<span class="percent"></span>
								</span>
								<h4>EMPRENDIMIENTOS</h4>
								<p>Más de 100 emprendimientos</p>
							</div>

							<div class="skill">
								<span class="chart" data-percent="40">
									<span class="percent"></span>
								</span>
								<h4>EXPERTOS</h4>
								<p>Más de 40 expertos</p>
							</div>


							<div class="skill">
								<span class="chart" data-percent="17000">
									<span class="percent"></span>
								</span>
								<h4>VISITAS</h4>
								<p>Personas que nos visitaron</p>
							</div>

						</div>

				</section>
				<!--Services Section-->

				<br>

				<div  class="col-md-12 "><br><br></div>

				<div  class="col-md-12 ">

					<div class="col-md-6">
						<h2 class="title_line"><span> </span></h2>
						<a href="https://www.youtube.com/embed/L2AtR-bCDr8?autoplay=1" class="fullwidth">
							<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/video-Manuela.png">
						</a>					
					</div>

					<div class="col-md-6">
						<br><br><br>
						<h4>EXPO <b>URUGUAY SOSTENIBLE</b></h4>
						<p>Es un evento organizado por el Ministerio de Ambiente que apunta a <b>promover el desarrollo sostenible</b> y el <b>cuidado del ambiente.</b> Un espacio de encuentro para conocer <b>iniciativas, emprendimientos y acciones</b>  que impactan y contribuyen a  modificar positivamente nuestro vínculo con el ambiente.</p>

						<p>En su primera edición la EXPO <b>URUGUAY SOSTENIBLE</b> busca:</p>
						<p>
							<ul style="font-size:14px;">
								<li>Promover acciones sostenibles y de cuidado del ambiente.</li>
								<li>Fomentar la conciencia ambiental y el compromiso ciudadano.</li>
								<li>Generar un espacio de intercambio de experiencias y buenas prácticas.</li>
							</ul>
						</p>

						<br>

						<p>
						¡Vos también podes ser más sostenible! Te esperamos.
						</p>

						</p>
					</div>

					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">


					<div class="col-md-12"><br><br><br></div>


					<!-- GALERIA DE VIDEOS PREMIO 2022 ///////////////////////////////////////////////-->
					<div class="container-fluid video_tutorial">
						
						<dir class="col-md-12">
							<h1 class="title_line text-center"><span>Presentación</span></h1>
							<p class="text-center"><?php echo $theme_['expo_videos_desc']; ?></p>
						</dir>

						<div class="col-md-12 slide-videos">								
						<?php foreach ($theme_['expo_videos'] as $slide => $property){ ?>
							<div class="col-md-12 video_single">
								<h2 class="title_line"><span> <?php echo $property['title']; ?></span></h2>
								<a target="blank_" href="https://www.youtube.com/embed/<?php echo $property['url']; ?>?autoplay=1" class="fullwidth" data-balloon="<?php echo $property['title']; ?>" data-balloon-pos="buttom">
									<img src="<?php echo $property['image']; ?>">
								</a>
							</div>
						<?php } ?> 						
						</div>

					</div>
					<!-- GALERIA DE VIDEOS PREMIO 2022 ///////////////////////////////////////////////-->


					<!-- GALERIA DE FOTOS DIA 1 AL 3////////////////////////////////////////////////-->
					<div class="container-fluid video_tutorial">
						
						<dir class="col-md-12">
							<h1 class="title_line text-center"><span>Galería de fotos</span></h1>
							<p class="text-center"><?php echo $theme_['premio_galeria_desc']; ?></p>
						</dir>
														

							<div class="col-md-12 slide-videos">
							
							<div class="col-md-12 video_single">
								<a target="blank_" href="<?php echo esc_url($theme_['expo_imagen1']['url']); ?>" data-gallery="galeria_dia1" class="fullwidth" data-balloon="Día 1" data-balloon-pos="buttom">
									<img class="img-responsive" src="<?php echo esc_url($theme_['expo_imagen1']['url']); ?>" data-gallery="galeria_dia1">
								</a>
							</div>

							<div class="col-md-12 video_single">
								<a target="blank_" href="<?php echo esc_url($theme_['expo_imagen2']['url']); ?>" data-gallery="galeria_dia2" class="fullwidth" data-balloon="Día 2" data-balloon-pos="buttom">
									<img class="img-responsive" src="<?php echo esc_url($theme_['expo_imagen2']['url']); ?>" data-gallery="galeria_dia2">
								</a>
							</div>

							<div class="col-md-12 video_single">
								<a target="blank_" href="<?php echo esc_url($theme_['expo_imagen3']['url']); ?>" data-gallery="galeria_dia3" class="fullwidth" data-balloon="Día 3" data-balloon-pos="buttom">
									<img class="img-responsive" src="<?php echo esc_url($theme_['expo_imagen3']['url']); ?>" data-gallery="galeria_dia3">
								</a>
							</div>

							</div>


							<?php foreach ($theme_['expo_ambiente_galeria'] as $slide => $property){ ?>
							<a href="<?php echo $property['image']; ?>" data-gallery="galeria_dia1" class="fullwidth"></a>
							<?php } ?>

							<?php foreach ($theme_['expo_ambiente_galeria2'] as $slide => $property){ ?>
							<a href="<?php echo $property['image']; ?>" data-gallery="galeria_dia2" class="fullwidth"></a>
							<?php } ?>
	
							<?php foreach ($theme_['expo_ambiente_galeria3'] as $slide => $property){ ?>
							<a href="<?php echo $property['image']; ?>" data-gallery="galeria_dia3" class="fullwidth"></a>
							<?php } ?>

						

					</div>
					<!-- GALERIA DE FOTOS  DIA 1 AL 3 ////////////////////////////////////////////////-->



					<div class="col-md-12">

						<div class="container">
							<h1 class="pres_title_line text-center"><span>Inscribite para ser parte</span></h1><br>
						</div>

						<div class="col-md-12"><br><br><br></div>

						<div class="col-md-4 text-center">
							<a target="blank_" href="https://bpmgob.ambiente.gub.uy/tramites/iniciar/215" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion PYMES" data-balloon-pos="buttom">
								<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-10.png">
							</a>

						</div>
						<div class="col-md-4 text-center">
							
							<a target="blank_" href="https://bpmgob.ambiente.gub.uy/tramites/iniciar/217" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion OSC'S" data-balloon-pos="buttom">
								<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-11.png">
							</a>	
													
						</div>
						<div class="col-md-4 text-center">

							<a target="blank_" href="https://bpmgob.ambiente.gub.uy/tramites/iniciar/216" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion VISITANTES" data-balloon-pos="buttom">
								<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-1.png">
							</a>

						</div>
					</div>

					<div class="col-md-12"><br><br><br></div>

				</div>

				

				<div class="container">
					<h1 class="pres_title_line text-center"><span>Áreas</span></h1><br>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/ico_ong2.png">
				</div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-3.png">
				</div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-4-1.png">
				</div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-5.png">
				</div>								

				<div class="col-md-12"><br><br><br></div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-6.png">
				</div>


				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-8.png">
				</div>

				<div class="col-md-3 text-center">
					<img class="modal-expo" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-9.png">
				</div>	


				<div class="col-md-12"><br><br><br></div>


				<!-- Logos Sponsors -->
				<div class="container">
					<h1 class="pres_title_line text-center"><span>Sponsors</span></h1><br>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-1-1.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-2-1.jpg">
				</div>
								<div class="col-xs-6 col-xs-6 col-md-3 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-3-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-4-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-5-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-6-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-7-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-8-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-9-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-10-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-11-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-12-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-13-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-14-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-15-1.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-16-1.jpg">
				</div>





				<div class="col-md-12"><br><br><br></div>





				<!-- Logos Participantes -->
				<div class="container">
					<h1 class="pres_title_line text-center"><span>Auspiciantes</span></h1><br>
				</div>

				<div class="col-md-12"><br><br></div>


				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-0.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-17.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-2.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-35.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-3.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-4.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-5.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-6.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-7.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-8.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-9.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-10.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-11.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-12.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-13.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-14.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-15.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-16.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-18.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-19.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-20-1.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-21.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-22.jpg">
				</div>
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-23.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-24.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-25.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-26.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-27.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo28.jpg">
				</div>	
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-29.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-30.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-31.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-32.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-33.jpg">
				</div>
								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-34.jpg">
				</div>

								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-37.jpg">
				</div>

								<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-36.jpg">
				</div>				

								<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo-(38).jpg">
				</div>	



				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo39.jpg">
				</div>	

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo40.jpg">
				</div>	


				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo41.jpg">
				</div>									

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo42.jpg">
				</div>	

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="<?php echo get_template_directory_uri(); ?>/images/logo44.jpg">
				</div>	

				<div class="col-md-12"><br><br><br></div>





				<!-- TABLA DE DATOS /////////////////////////////////////////////////-->
				
				<div class="col-md-12">


					<!--
					<div class="col-md-12" style="background-image: url('<?php //echo get_template_directory_uri(); ?>/images/fondo-eco1.jpg'); font-size: 15px; padding: 0px; margin:0; border-radius: 10px; " >
						<div class="col-md-4"><h3 style="color: #099096">REÚNE</h3></div>
						<div class="col-md-8" style="background-image: url('<?php //echo get_template_directory_uri(); ?>/images/fondo-eco2.jpg'); padding: 40px; border-radius: 10px;">
							<b>
							• ONG's <br>
							• Mipymes<br>
							• Empresas estatales<br>
							• Intendencias<br>
							• Instituciones<br>
							• Empresas privadas<br>
							• Embajadas<br>
							• Organismos Internacionales<br>
							• Instituciones educativas nacionales e internacionales	
							</b>					
						</div>
					</div>
					-->


					<div class="col-md-12" style=" font-size: 15px; padding: 0; margin:0; border-radius: 10px;" >

						<div class="container">
							<h1 class="pres_title_line text-center"><span>Temas</span></h1><br>
						</div>

						<div class="container">
						<div class="col-md-4" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
							<b>
							 <i class="fa fa-caret-right"></i> Arquitectura sostenible<br>
							 <i class="fa fa-caret-right"></i> Producción sostenible<br>
							 <i class="fa fa-caret-right"></i> Gestión ambiental<br>
							 <i class="fa fa-caret-right"></i> Eco turismo<br>
							 <i class="fa fa-caret-right"></i> Educación ambiental<br>
							 <i class="fa fa-caret-right"></i> Cambio Climático<br>
	
							</b>			
						</div>

						<div class="col-md-8" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
							<b>
							 <i class="fa fa-caret-right"></i> Economía Circular<br>
							 <i class="fa fa-caret-right"></i> Produción agroecológica<br>
							 <i class="fa fa-caret-right"></i> Gestión de Residuos<br>
							 <i class="fa fa-caret-right"></i> Biodiversidad<br>
							 <i class="fa fa-caret-right"></i> Eficiencia energética<br>
							 <i class="fa fa-caret-right"></i> Movilidad sostenible		
							</b>			
						</div>
						</div>
					
					</div>


					<div class="col-md-12" style="font-size: 15px; padding: 0px; margin:0; border-radius: 10px;" >

						<div class="container">
							<h1 class="pres_title_line text-center"><span>Charlas, talleres, seminarios</span></h1><br>
						

						<div class="col-md-12" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
							<b>
							 <i class="fa fa-caret-right"></i> Expositores nacionales, regionales e internacionales<br>
							 <i class="fa fa-caret-right"></i> Exposición de casos de éxito en materia de gestión del
							ambiente en Uruguay y el mundo
							</b>					
						</div>

						</div>

					</div>


					<div class="col-md-12" style="font-size: 15px; padding: 0; margin:0; border-radius: 10px;" >


						<div class="container">

							<h1 class="pres_title_line text-center"><span>PREMIO NACIONAL DE AMBIENTE “URUGUAY SOSTENIBLE"</span></h1><br>
							<div class="col-md-12" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
								<b> <i class="fa fa-caret-right"></i> Se hará la entrega del <b>2º Premio Nacional Uruguay Sostenible</b> a Empresas, OSC'S, Instituciones educativas (<a href="https://www.ambiente.gub.uy/oan/premio-nacional-de-ambiente-uruguay-sostenible/" target="_blank">Link al premio</a>)</b>	
							</div>

						</div>


					</div>


					<div class="col-md-12" style="font-size: 15px; padding: 0px; margin:0" >

						<div class="container">
							<h1 class="pres_title_line text-center"><span>PLAZA DE COMIDAS</span></h1><br>
							<div class="col-md-12" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
								<b> <i class="fa fa-caret-right"></i> Camiones de comida (Food Trucks)</b>				
							</div>
						</div>


					</div>


					<div class="col-md-12" style="font-size: 15px; padding: 0; margin:0; border-radius: 10px;" >

						<div class="container">
							<h1 class="pres_title_line text-center"><span>MÚSICA EN VIVO</span></h1><br>
							<div class="col-md-12" style="padding: 40px; border-radius: 10px; background-color: #099096; color: #ffffff;">
								<b> <i class="fa fa-caret-right"></i> Bandas, acting, performances</b>				
							</div>

						</div>


					</div>


				</div>
			
				<!-- TABLA DE DATOS /////////////////////////////////////////////////-->



		    	<div class="clearfix"></div>

			</article>

		</section>
		<!-- /section -->
	</main>

	<br><br><br>

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

	      <div class="modal-body">
	      		<!--<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2021/04/premio-vencimiento.jpeg">-->

				<div class="col-md-12 reune" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fondo-eco1.jpg'); font-size: 15px; padding: 0px; margin:0; border-radius: 10px; " >
					<div class="col-md-4"><h3 style="color: #099096">REÚNE</h3></div>
					<div class="col-md-8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fondo-eco2.jpg'); padding: 40px; border-radius: 10px;">
						<b>
						• ONG's <br>
						• Mipymes<br>
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
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Categorias REUNE -->


	<script type="text/javascript">
		//document.getElementById('popup').click();
	</script>


	<?php //get_sidebar(); ?>

<?php get_footer(); ?>