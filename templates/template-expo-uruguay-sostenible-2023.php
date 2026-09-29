<?php 
/* 
 * Template Name: Expo Uruguay Sostenible 2023
 * Description: Página para la Expo Uruguay Sostenible
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/

get_header('hiden'); ?>
	
	<?php global $theme_;?>

	<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container-custom">	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div  class="col-md-12 "><br><br><br></div>

				<div  class="col-md-12 slide-expo2">
				<img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/06/banner_expo2023.jpg">
				<img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/06/banner_expo2023.jpg">
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
						<p> <b>EXPO URUGUAY SOSTENIBLE </b> Es un evento organizado por el <b>Ministerio de Ambiente</b> que apunta a promover acciones de sostenibilidad y cuidado del ambiente. Un espacio de encuentro en el que la ciudadanía tenga la posibilidad de conocer proyectos e iniciativas que impactan positivamente y contribuyen a generar un cambio social donde nuestro vínculo con el ambiente sea protagonista. En su primera edición la <b>EXPO URUGUAY SOSTENIBLE</b> busca fomentar la conciencia ambiental y generar procesos participativos que estimulen un compromiso inclusivo de los ciudadanos en las acciones y procedimientos destinados a asegurar un desarrollo sostenible.</p>

					</div>

					<div id="page-agenda2023">
						<h1 class="pres_title_line text-center"><span>Agenda</span></h1><br>

						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/jueves1.jpg">
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/jueves2.jpg">

						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/viernes1.jpg">
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/viernes2.jpg">
						
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/sabado.jpg">
						<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/agenda-expo-2023/domingo.jpg">												
					</div>	

					<div id="page-comoparticipar2023">
						<h1 class="pres_title_line text-center"><span>Inscribite</span></h1><br>
						<p> <b>EXPO URUGUAY SOSTENIBLE</b> reunirá a todos los actores, empresas públicas y privadas, emprendedores, instituciones, organizaciones de la sociedad civil y público en general interesadas en temas ambientales. Es una oportunidad única de participar en una actividad organizada por el <b>Ministerio de Ambiente</b> quien se encarga de la ejecución de la política nacional ambiental, de ordenamiento ambiental, de desarrollo sostenible y de conservación y uso de los recursos naturales. VOS PODÉS SER PARTE DE LA SEGUNDA <b>EXPO URUGUAY SOSTENIBLE.</b></p>


						<div class="col-md-12">

							<div class="container">
								<h1 class="pres_title_line text-center"><span>Inscribite para ser parte</span></h1><br>
							</div>

							<div class="col-md-12"><br><br><br></div>

							<div class="col-md-6 text-center">
								<a target="blank_" href="https://bpmgob.ambiente.gub.uy/tramites/iniciar/236" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion PYMES" data-balloon-pos="buttom">
									<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-10.png">
								</a>

							</div>
							<div class="col-md-6 text-center">
								
								<a target="blank_" href="https://bpmgob.ambiente.gub.uy/tramites/iniciar/237" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion OSC'S" data-balloon-pos="buttom">
									<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-11.png">
								</a>	
														
							</div>
							<!--
							<div class="col-md-4 text-center">

								<a target="blank_" href="https://bpmgob.ambiente.gub.uy/etapas/ejecutar/86718" data-gallery="galeria" class="fullwidth" data-balloon="Formulario de inscripcion VISITANTES" data-balloon-pos="buttom">
									<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-1.png">
								</a>

							</div>
							-->

						</div>

					</div>

					<div id="page-contacto2023">
						
						<h1 class="pres_title_line text-center"><span>Contacto</span></h1><br>


 						<div class="col-md-6">
 							<p><strong>Formulario:</strong></p>
 							<?php echo do_shortcode($theme_['form-expo']); ?>

 						</div>

						<div class="col-md-6">
							<p><strong>Email:</strong> <br> <i class="fa fa-envelope-o" aria-hidden="true"></i>
 							<a href="mailto:expouruguaysostenible@ambiente.gub.uy">expouruguaysostenible@ambiente.gub.uy</a></p>
 						</div>


					</div>

				</div>



				<div  class="col-md-12 ">
					
					<div class="col-md-6">
						<h2 class="title_line"><span> </span></h2>
						<a href="https://www.youtube.com/embed/AL_iz8oh7PM?autoplay=1" class="fullwidth">
							<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/BG_video.jpg">
						</a>					
					</div>

					<div class="col-md-6">
						<br><br><br>
						<h4>EXPO <b>URUGUAY SOSTENIBLE</b></h4>
						<p>Es un evento organizado por el Ministerio de Ambiente que apunta a <b>promover el desarrollo sostenible</b> y el <b>cuidado del ambiente.</b> Un espacio de encuentro para conocer <b>iniciativas, emprendimientos y acciones</b>  que impactan y contribuyen a  modificar positivamente nuestro vínculo con el ambiente.</p>

						<p>La EXPO <b>URUGUAY SOSTENIBLE</b> busca:</p>
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

	

				<div class="col-md-12"><br><br></div>
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br></div>



					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de videos</span></h1>
						<p class="text-center">Videos destacados</p>
					</dir>


				<div class="slide-videos">


					<div style="padding:0 20px;">

						<a href="https://www.youtube.com/embed/GAERBnmTg8Y" class="fullwidth" data-balloon="Inauguración" data-balloon-pos="buttom">
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/vlcsnap-2023-06-08-22h01m55s172.png">
						</a>

					</div>

					<div style="padding:0 20px;">

						<a href="https://www.youtube.com/embed/f4sxQKygoaU" class="fullwidth" data-balloon="Inauguración" data-balloon-pos="buttom">
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/vlcsnap-2023-06-09-21h03m06s322.png">
						</a>
						
					</div>


					<div style="padding:0 20px;">

						<a href="https://www.youtube.com/embed/xMjPnf3vCAw" class="fullwidth" data-balloon="Inauguración" data-balloon-pos="buttom">
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/vlcsnap-2023-06-10-21h05m17s835.png">
						</a>
						
					</div>


					<div style="padding:0 20px;">

						<a href="https://www.youtube.com/embed/RBPpxMqAVnA" class="fullwidth" data-balloon="Inauguración" data-balloon-pos="buttom">
							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/vlcsnap-2023-06-11-20h18m24s960.png">
						</a>
						
					</div>


				</div>



				<div class="col-md-12"><br><br></div>
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br></div>



				<!-- GALERIA DE FOTOS 2023 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos</span></h1>
						<p class="text-center"><?php echo $theme_['premio_galeria_desc']; ?></p>
					</dir>

					<div class="col-md-12 slide-fotos-premio">	

						<?php for ($i=1; $i < 95 ; $i++) { ?>
						<div class="col-md-12 video_single">
							<a target="blank_" href="<?php echo get_template_directory_uri(); ?>/images/galeria-expo-2023/<?php echo $i; ?>.jpg" data-gallery="galeria_premio_2023" class="fullwidth" data-balloon="Foto" data-balloon-pos="buttom">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galeria-expo-2023/<?php echo $i; ?>.jpg">
							</a>
						</div>
						<?php } ?>

					</div>

				</div>
				<!-- GALERIA DE FOTOS 2023 ////////////////////////////////////////////////-->


				<div class="col-md-12"><br><br></div>
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br></div>


				<section>

					<div class="col-md-6">
						<div class="col-md-8 actividades_expo">
							<b>PARTICIPAN: &nbsp;</b> ACTORES PÚBLICOS Y PRIVADOS
						</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/Mesa-de-trabajo-37.jpg"></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8 actividades_expo color_fondo">
							
						- CONFERENCIAS <br>
						- SEMINARIOS <br>
						- TALLERES <br>
						- CHARLAS <br>

						</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/Mesa-de-trabajo-40.jpg"></div>
					</div>

					<div class="col-md-12"><br></div>

					<div class="col-md-6">
						<div class="col-md-8 actividades_expo color_fondo">
							TEMAS VINCULADOS A LA SOSTENIBILIDAD
						</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/Mesa-de-trabajo-38.jpg"></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8 actividades_expo">
							ENTREGA &nbsp; <strong> PREMIO NACIONAL DE AMBIENTE</strong>
						</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/Mesa-de-trabajo-41.jpg"></div>
					</div>

					<div class="col-md-12"><br></div>

					<div class="col-md-6">
						<div class="col-md-8 actividades_expo">PLAZA DE COMIDAS</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/Mesa-de-trabajo-39.jpg"></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8 actividades_expo color_fondo">
							NETWORKING
						</div>
						<div class="col-md-4"><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/06/net.jpg"></div>
					</div>

				</section>



				<div class="col-md-12"><br><br></div>
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br></div>


				<section>
					<div class="col-md-12 slide-expo">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/ico_ong2.png">						
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-3.png">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-4-1.png">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-5.png">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-6.png">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-8.png">
						<img class="modal-expo img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/05/boton-9.png">
					</div>
				</section>


			
				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>
				<div class="col-md-12"><br><br></div>


				<section>

					<div class="col-md-6">
						<h3>¿POR QUÉ SER PARTE?</h3>
						<p>EXPO URUGUAY SOSTENIBLE reunirá a todos los actores, empresas públicas y privadas, emprendedores, instituciones, organizaciones de la sociedad civil y público en general interesados en temas ambientales.</p>
						<p>Es una oportunidad única de participar en una actividad organizada por el Ministerio de Ambiente quien se encarga de la ejecución de la política nacional ambiental, de ordenamiento ambiental, de desarrollo sostenible y de conservación y uso de los recursos naturales. </p>

						<br>

						<h3>PÚBLICO QUE ESPERAMOS</h3>
						<p>Esperamos durante los días de la Expo recibir unas 20.000 personas.
						Público en general, fundamentalmente familias y jóvenes de todo el país.</p>	
					</div>

					<div class="col-md-6">
						<br>
						<div class="slide-expo2">
							<div><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/1.jpg"></div>
							<div><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/2.jpg"></div>
							<div><img class="img-responsive" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/3.jpg"></div>
						</div>
					</div>

				</section>


				<div class="col-md-12">
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
				</div>

				<div class="col-md-12"><br><br><br></div>


				<!-- Logos Main Sponsors -->
				<div class="container">
					<h1 class="pres_title_line text-center"><span>Main Sponsors</span></h1><br>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-6-1.jpg">
				</div>

				<div class="col-xs-6 col-xs-6 col-md-3 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-3-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-2-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-5-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-10-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-ute.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-12-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-ancap-1.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/loreal-logo.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-7-1.jpg">
				</div>
		
				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-lsqa.png">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-upm.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-4-1.jpg">
				</div>

	
				<!-- Logos Sponsors -->
				<div class="container">
					<h1 class="pres_title_line text-center"><span>Sponsors</span></h1><br>
				</div>

				<div class="col-md-12"><br><br></div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-3.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-15.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-inac.jpg">
				</div>		

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/10.png">
				</div>			

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-16.jpg">
				</div>	

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-31.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-30.jpg">
				</div>				

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-medios-publicos.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/softys.png">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-union-europea.jpg">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2022/06/logo-35.jpg">
				</div>		

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/05/logo-mc.png">
				</div>

				<div class="col-xs-6 col-md-2 text-center">
					<img  src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/06/logo-hma.jpg">
				</div>

				<div class="col-md-12"><br><br><br></div>
			
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
	
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal - Categorias REUNE -->


	<script type="text/javascript">
		//document.getElementById('popup').click();
	</script>


	<?php //get_sidebar(); ?>

<?php get_footer('expo'); ?>