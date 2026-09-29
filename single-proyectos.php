
<?php get_header(); ?>
<?php global $theme_; ?>
<?php $post_id = get_the_ID(); ?>

	<main role="main">


	<!-- section -->
	<section class="container-fluid1 background-container">
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
			$tramite_actual = get_post_meta(get_the_ID(),'_cmb_tramite_actual', true);
			$noticia = get_post_meta(get_the_ID(),'_cmb_editor', true);
			$copete = get_post_meta(get_the_ID(),'_cmb_copete', true);
			$formManifiesto = get_post_meta(get_the_ID(),'_cmb_formManifiesto', true);
			$idformManifiesto = get_post_meta(get_the_ID(),'_cmb_idformManifiesto', true);
			$pathiframeVisualizador = get_post_meta(get_the_ID(),'_cmb_pathiframeVisualizador', true);

			$archivo = rwmb_meta( 'file1_comision_seguimiento', 'type=text' );
		?>

		<?php
			//Tramites asociados al proyecto
			$tramites;
			$tramites_desc;
			$i=1;
			$terms = get_the_terms( $post->ID, 'tramites', '', ' ', ''); 
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			    foreach ( $terms as $term ) {
			        $tramites[$i] = $term->name;
			        $tramites_desc[$i] = $term->description;
			        $i++;
			    }
			}
			//Tramites asociados al proyecto
		?>

		<!-- Encabezado -->
		<div id="slide-" class="slide-">
        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>
        		
        		<?php //echo trim($property['title']."/".get_the_title()); ?>

        		<?php 

					//Chequeo tñitulo de la pàgina con titulo del slide del ADMIIN//
					$titulo_pagina = trim(get_the_title());
					$titulo_slide  = trim($property['title']);

					// 1. Convertir entidades HTML a caracteres reales
					$titulo_pagina = html_entity_decode($titulo_pagina, ENT_QUOTES | ENT_HTML5, 'UTF-8');
					$titulo_slide  = html_entity_decode($titulo_slide, ENT_QUOTES | ENT_HTML5, 'UTF-8');

					// 2. Reemplazar espacios no rompibles y similares por espacio normal
					$titulo_pagina = preg_replace('/\x{00A0}|\x{200B}|\x{FEFF}/u', ' ', $titulo_pagina);
					$titulo_slide  = preg_replace('/\x{00A0}|\x{200B}|\x{FEFF}/u', ' ', $titulo_slide);

					// 3. Compactar espacios
					$titulo_pagina = preg_replace('/\s+/', ' ', $titulo_pagina);
					$titulo_slide  = preg_replace('/\s+/', ' ', $titulo_slide);

					//Comparar estrictamente
        			if ($titulo_pagina === $titulo_slide) {?>


					<img style="height: 50px;" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
					<div class="col-md-8">
						<img class="img-responsive" src="<?php echo $property['image']; ?>">
					</div>
					<div class="col-md-4">
						<br>
						<h2 class="title_line"><span><?php the_title(); ?></span></h2>
						<p style="text-align: justify;padding-right: 15px;"><?php echo $property['description']; ?></p>
						<?php if($property['url'] != "") {?>
						<a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
						<?php } ?>

					</div>
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">
        		<?php } ?>
			<?php } ?>
		</div>
		<!-- Encabezado -->

		<div class="proyecto-top"></div>

		<!-- Modal - Info completa del proyecto -->
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
		<!-- Modal - Info completa del proyecto -->


		<!-- Estado del Proyecto -->
		<?php if ( $post_id != 362 ){ ?>

		<?php
		if(!empty($tramites)){ ?>
			<div class="col-md-12">
			
				<h1 class="title_line text-center">

				<?php 
				$post_slug = $post->post_name;
				
				if ($post_slug == "paisaje-protegido-quebrada-de-los-cuervos-y-sierras-del-yerbal") { ?>
				
					<span>Proceso de Ampliación del Paisaje Protegido Quebrada de los Cuervos</span>
				
				<?PHP }else{	?>

					<span>Estado del proceso de Evaluación de Impacto Ambiental</span>

				<?php } ?>	
			
				</h1>
			
			</div>
			<div class="col-md-12">

				<?php

					global $wp;
					$current_slug = add_query_arg( array(), $wp->request );
					$part = explode("/", $current_slug);

				?>

				<!-- LINEA DE TIEMPO DEL PROYECTO UPMII -------------------------------------->
				<section class="text-center">
					<br>
					
					<?php						
					$count = 0;
					$control_desactive = 0;
					$i=0;
					foreach ($theme_['timeline'] as $slide => $property){
						$state="";

						$categorias_tramite = explode(",", $tramite_actual);
						//echo $categorias_tramite[0];

						if(!empty($property['title'])){

							foreach ($categorias_tramite as $tra) {
								if($tra == $property['title']){
									$state = "activated";
									$control_desactive = 1;
								}else{
									if ($control_desactive == 0) {
										$state = "desactive";
									}
								}
							}

							foreach ($tramites as $tramite) {
								if($tramite == $property['title']){ ?>

										<?php 

											if ($part[1] == 'planta-de-celulosa') {

												if ($property['title'] == "Recepción del EsIA") {
													//$color = "#698C00";
													//$icon = '<div class="col-md-12"><i class="fa fa-chevron-down bullet" aria-hidden="true"></i></div>';
												}else{
													$color = "";
													$icon = "";
												}

											}	

										?>

										<div class="box-proyect">											
											<a class="view_proyect big-font fullwidth1 <?php echo $state; ?>" style="background-color:<?php echo $color; ?>;" data-balloon="<?php echo $property['description']; ?>" data-balloon-pos="top"><?php echo $property['title']; ?>
												<br>
												<strong><?php //echo $property['url']; ?></strong>
											</a>

											<?php echo $icon; ?> 

										</div>

										<?php
										if ($count < count($tramites)-1){?>
												<i class="fa fa-chevron-right bullet" aria-hidden="true"></i>
											<?php 
											$count++; 
										}

						  		}

							}

						}
					}
					?>

					<br><br>
					
				</section>
				<!-- LINEA DE TIEMPO DEL PROYECTO UPMII -------------------------------------->

				<!-- LINEA DE TIEMPO DEL SEGUIMIENTO DEL PROYECTO UPMII ---------------------->
				<section class="text-center">

					<?php if ($part[1] == 'planta-de-celulosa') { ?>

					<div class="padding-left-timeline">	
						<div class="box-proyect">											
							<a class="view_proyect big-font fullwidth1" data-balloon="Puesta de Manifiesto asociada a Recepción del EsIA" data-balloon-pos="top">Recepción del EsIA Modificación de proyecto<br></a>
						</div>

						<div class="box-proyect">											
							<a class="view_proyect big-font fullwidth1"  data-balloon="Puesta de Manifiesto asociada a Recepción del EsIA" data-balloon-pos="top">Puesta de Manifiesto<br></a>
						</div>

						<i class="fa fa-chevron-right bullet" aria-hidden="true"></i>

						<div class="box-proyect">											
							<a class="view_proyect big-font fullwidth1"  data-balloon="Audiencia Pública asociada a Recepción del EsIA" data-balloon-pos="top">Audiencia Pública<br></a>
						</div>		

						<i class="fa fa-chevron-right bullet" aria-hidden="true"></i>

						<div class="box-proyect">											
							<a class="view_proyect big-font fullwidth1" data-balloon="Informe Final asociada a Recepción del EsIA" data-balloon-pos="top">Informe final<br></a>
						</div>		

						<i class="fa fa-chevron-right bullet" aria-hidden="true"></i>

						<div class="box-proyect">											
							<a class="view_proyect big-font fullwidth1" style="background-color: #698C00; color: #fff;" data-balloon="Res. Ministerial asociada a Recepción del EsIA" data-balloon-pos="top">Resolución Ministerial<br></a>
					</div>		
					</div>

					<?php } ?> 

				</section>
				<!-- LINEA DE TIEMPO DEL SEGUIMIENTO DEL PROYECTO UPMII ---------------------->


				<?php if(!empty($noticia)){ ?>
					
					<br><br>

					<div class="text-center">					
						<legend>Noticias del proyecto</legend>
					</div>			

					<div class="noticias proyect_noticia">
					<?php 
						$parrafos = explode('&nbsp;', $noticia);
						$count_parrafos = count($parrafos);
						$i=0;
						while ( $i < $count_parrafos) {
							echo "<p>".$parrafos[$i]."</p>";
							$i++;
						}
					?>
					</div>
					
					
					<?php if ($idformManifiesto != "") { ?>
					
					<!-- Formulario de manifiesto -->
					<a href="#" class="manifiesto" data-toggle="modal" data-target="#<?php echo $idformManifiesto; ?>">
						<div class="btn-proyectos box-manifiesto text-center"><i class="fa fa-clipboard"></i> Envie sus comentarios a la puesta de Manifiesto</div>
					</a> 
					<!-- Formulario de manifiesto -->		

					<br>

					<div class="proyecto-down"></div>	
					<section class="background-container">
						<div class="proyecto">
							<div class="cerrar_formulario text-center"><i class="fa  fa-times-circle fa-3x" aria-hidden="true"></i></div>
							<iframe id="ifr" class="manifiesto page-icon preview-pane" frameborder="0" allowfullscreen scrolling="yes" src="<?php echo $formManifiesto; ?>"></iframe>
						</div>
					</section>

					<?php } ?>

					<br><br>

				<?php } ?>

			</div>
		<?php } ?>
		<?php } ?>
		<!-- Estado del Proyecto -->




		<div class="col-md-6">
			<?php

			$cantidad = $theme_['nro_tramites'];

			/* DOCUMENTOS  ********************************************************************************************/
			for ($i=1; $i < $cantidad+1 ; $i++) { //Permite cargar hasta 50 documentos asociados al trámite.

				/*Archivos ****************************************************************/
				$files_docs[$i] = rwmb_meta( 'observatorio_file_tramite'.$i, 'type=file' );
				/*Archivos ****************************************************************/

				/*Faqs Preguntas ****************************************************************/
				//$faqs_preguntas[$i] = rwmb_meta( 'pregunta'.$i, 'type=wysiwyg' );
				$faqs_preguntas[$i] = rwmb_meta( 'pregunta1'.$i, 'type=wysiwyg' );
				/*Faqs Preguntas ****************************************************************/

				//$copete = rwmb_meta( 'copete', 'type=wysiwyg' );

				/*Faqs Respuestas****************************************************************/
				$faqs_respuestas[$i] = rwmb_meta( 'respuesta'.$i, 'type=wysiwyg' );
				/*Faqs ****************************************************************/								

				/*Grupo *******************************************************************/
				$obra_grupo_nombre = "observatorio_grupo_tramite".$i;
				$grupo_id = get_post_meta( get_the_ID(), $obra_grupo_nombre, true );
				$taxonomies = get_terms( array(
				    'taxonomy' => 'grupos',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies) ) :
				    foreach( $taxonomies as $category ) {
				    	if ($grupo_id == $category->term_id) {
				    		$nombre_grupo[$i] = $grupo_name = $category->name."<br>";
				    	}   
				    }
				endif;
				/*Grupo *******************************************************************/

				/*Nombre trámite **********************************************************/
				$obra_tramite_nombre = "observatorio_tramite".$i;
				$tramite_id = get_post_meta( get_the_ID(), $obra_tramite_nombre, true );
				$taxonomies = get_terms( array(
				    'taxonomy' => 'tramites',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies) ) :
				    foreach( $taxonomies as $category ) {
				    	if ($tramite_id == $category->term_id) {
				    		$nombre_tramite[$i] = $tramite_name = $category->name."<br>";
				    		$desc_tramite[$i] = $tramite_desc = $category->description."<br>";  		
				    	}   
				    }
				endif;
				/*Nombre trámite **********************************************************/			
			}
			/* DOCUMENTOS  ********************************************************************************************/


			/* COMISION DE SEGUIMIENTO ********************************************************************************/
			for ($i=1; $i < 11 ; $i++) { //Permite cargar hasta 10 documentos asociados al trámite.
				
				/*Archivos ****************************************************************/
				$files_docs_comision[$i] = rwmb_meta( 'observatorio_file_tramite_comision'.$i, 'type=file' );
				/*Archivos ****************************************************************/

				/*Faqs Preguntas ****************************************************************/
				//$faqs_preguntas[$i] = rwmb_meta( 'pregunta'.$i, 'type=wysiwyg' );
				$faqs_preguntas_comision[$i] = rwmb_meta( 'pregunta1'.$i, 'type=wysiwyg' );
				/*Faqs Preguntas ****************************************************************/

				//$copete = rwmb_meta( 'copete', 'type=wysiwyg' );

				/*Faqs Respuestas****************************************************************/
				$faqs_respuestas_comision[$i] = rwmb_meta( 'respuesta'.$i, 'type=wysiwyg' );
				/*Faqs ****************************************************************/								

				/*Grupo *******************************************************************/
				$obra_grupo_nombre_comision = "observatorio_grupo_tramite_comision".$i;
				$grupo_id_comision = get_post_meta( get_the_ID(), $obra_grupo_nombre_comision, true );
				$taxonomies_comision = get_terms( array(
				    'taxonomy' => 'grupos',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_comision) ) :
				    foreach( $taxonomies_comision as $category ) {
				    	if ($grupo_id_comision == $category->term_id) {
				    		$nombre_grupo_comision[$i] = $grupo_name = $category->name."<br>";
				    	}   
				    }
				endif;
				/*Grupo *******************************************************************/

				/*Nombre trámite **********************************************************/
				$obra_tramite_nombre_comision = "observatorio_tramite_comision".$i;
				$tramite_id_comision = get_post_meta( get_the_ID(), $obra_tramite_nombre_comision, true );
				$taxonomies_comision2 = get_terms( array(
				    'taxonomy' => 'tramites',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_comision2) ) :
				    foreach( $taxonomies_comision2 as $category ) {
				    	if ($tramite_id_comision == $category->term_id) {
				    		$nombre_tramite_comision[$i] = $tramite_name_comision = $category->name."<br>";
				    		$desc_tramite_comision[$i] = $tramite_desc_comision = $category->description."<br>";  		
				    	}   
				    }
				endif;
				/*Nombre trámite **********************************************************/			
			}
			/* COMISION DE SEGUIMIENTO ********************************************************************************/


			/* PROCESO DE CONTROL Y SEGUIMIENTO ***********************************************************************/
			for ($i=1; $i < 11 ; $i++) { //Permite cargar hasta 10 documentos asociados al trámite.
				
				/*Archivos ****************************************************************/
				$files_docs_proceso[$i] = rwmb_meta( 'observatorio_file_tramite_comision2'.$i, 'type=file' );
				/*Archivos ****************************************************************/

				/*Faqs Preguntas ****************************************************************/
				//$faqs_preguntas[$i] = rwmb_meta( 'pregunta'.$i, 'type=wysiwyg' );
				$faqs_preguntas_proceso[$i] = rwmb_meta( 'pregunta1'.$i, 'type=wysiwyg' );
				/*Faqs Preguntas ****************************************************************/

				//$copete = rwmb_meta( 'copete', 'type=wysiwyg' );

				/*Faqs Respuestas****************************************************************/
				$faqs_respuestas_proceso[$i] = rwmb_meta( 'respuesta'.$i, 'type=wysiwyg' );
				/*Faqs ****************************************************************/								

				/*Grupo *******************************************************************/
				$obra_grupo_nombre_proceso = "observatorio_grupo_tramite_comision2".$i;
				$grupo_id_proceso = get_post_meta( get_the_ID(), $obra_grupo_nombre_proceso, true );
				$taxonomies_proceso = get_terms( array(
				    'taxonomy' => 'grupos',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_proceso) ) :
				    foreach( $taxonomies_proceso as $category ) {
				    	if ($grupo_id_proceso == $category->term_id) {
				    		$nombre_grupo_proceso[$i] = $grupo_name = $category->name."<br>";
				    	}   
				    }
				endif;
				/*Grupo *******************************************************************/

				/*Nombre trámite **********************************************************/
				$obra_tramite_nombre_proceso = "observatorio_tramite_comision2".$i;
				$tramite_id_proceso = get_post_meta( get_the_ID(), $obra_tramite_nombre_proceso, true );
				$taxonomies_proceso2 = get_terms( array(
				    'taxonomy' => 'tramites',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_proceso2) ) :
				    foreach( $taxonomies_proceso2 as $category ) {
				    	if ($tramite_id_proceso == $category->term_id) {
				    		$nombre_tramite_proceso[$i] = $tramite_name_proceso = $category->name."<br>";
				    		$desc_tramite_proceso[$i] = $tramite_desc_proceso = $category->description."<br>";  		
				    	}   
				    }
				endif;
				/*Nombre trámite **********************************************************/			
			}
			/* PROCESO DE CONTROL Y SEGUIMIENTO ***********************************************************************/



			/* DOCUMENTOS Recepción del EsIA  *************************************************************************/
			for ($i=1; $i < 11 ; $i++) { //Permite cargar hasta 10 documentos asociados al trámite.
				
				/*Archivos ****************************************************************/
				$files_docs_esia[$i] = rwmb_meta( 'observatorio_file_tramite_esia'.$i, 'type=file' );
				/*Archivos ****************************************************************/

				/*Faqs Preguntas ****************************************************************/
				//$faqs_preguntas[$i] = rwmb_meta( 'pregunta'.$i, 'type=wysiwyg' );
				$faqs_preguntas_esia[$i] = rwmb_meta( 'pregunta1'.$i, 'type=wysiwyg' );
				/*Faqs Preguntas ****************************************************************/

				//$copete = rwmb_meta( 'copete', 'type=wysiwyg' );

				/*Faqs Respuestas****************************************************************/
				$faqs_respuestas_esia[$i] = rwmb_meta( 'respuesta'.$i, 'type=wysiwyg' );
				/*Faqs ****************************************************************/								

				/*Grupo *******************************************************************/
				$obra_grupo_nombre_esia = "observatorio_grupo_tramite_esia".$i;
				$grupo_id_esia = get_post_meta( get_the_ID(), $obra_grupo_nombre_esia, true );
				$taxonomies_esia = get_terms( array(
				    'taxonomy' => 'grupos',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_esia) ) :
				    foreach( $taxonomies_esia as $category ) {
				    	if ($grupo_id_esia == $category->term_id) {
				    		$nombre_grupo_esia[$i] = $grupo_name = $category->name."<br>";
				    	}   
				    }
				endif;
				/*Grupo *******************************************************************/

				/*Nombre trámite **********************************************************/
				$obra_tramite_nombre_esia = "observatorio_tramite_esia".$i;
				$tramite_id_esia = get_post_meta( get_the_ID(), $obra_tramite_nombre_esia, true );
				$taxonomies_esia2 = get_terms( array(
				    'taxonomy' => 'tramites',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_esia2) ) :
				    foreach( $taxonomies_esia2 as $category ) {
				    	if ($tramite_id_esia == $category->term_id) {
				    		$nombre_tramite_esia[$i] = $tramite_name_esia = $category->name."<br>";
				    		$desc_tramite_esia[$i] = $tramite_desc_esia = $category->description."<br>";  		
				    	}   
				    }
				endif;
				/*Nombre trámite **********************************************************/			
			}
			/* DOCUMENTOS Recepción del EsIA  *************************************************************************/


			/* DOCUMENTOS AAO *****************************************************************************************/
			for ($i=1; $i < 11 ; $i++) { //Permite cargar hasta 10 documentos asociados al trámite.
				
				/*Archivos ****************************************************************/
				$files_docs_comision_aao[$i] = rwmb_meta( 'observatorio_file_tramite_comision_aao'.$i, 'type=file' );
				/*Archivos ****************************************************************/

				/*Faqs Preguntas ****************************************************************/
				//$faqs_preguntas[$i] = rwmb_meta( 'pregunta'.$i, 'type=wysiwyg' );
				$faqs_preguntas_comision_aao[$i] = rwmb_meta( 'pregunta1'.$i, 'type=wysiwyg' );
				/*Faqs Preguntas ****************************************************************/

				//$copete = rwmb_meta( 'copete', 'type=wysiwyg' );

				/*Faqs Respuestas****************************************************************/
				$faqs_respuestas_comision_aao[$i] = rwmb_meta( 'respuesta'.$i, 'type=wysiwyg' );
				/*Faqs ****************************************************************/								

				/*Grupo *******************************************************************/
				$obra_grupo_nombre_comision_aao = "observatorio_grupo_tramite_comision_aao".$i;
				$grupo_id_comision_aao = get_post_meta( get_the_ID(), $obra_grupo_nombre_comision_aao, true );
				$taxonomies_comision_aao = get_terms( array(
				    'taxonomy' => 'grupos',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_comision_aao) ) :
				    foreach( $taxonomies_comision_aao as $category ) {
				    	if ($grupo_id_comision_aao == $category->term_id) {
				    		$nombre_grupo_comision_aao[$i] = $grupo_name_aao = $category->name."<br>";
				    	}   
				    }
				endif;
				/*Grupo *******************************************************************/

				/*Nombre trámite **********************************************************/
				$obra_tramite_nombre_comision_aao = "observatorio_tramite_comision_aao".$i;
				$tramite_id_comision_aao = get_post_meta( get_the_ID(), $obra_tramite_nombre_comision_aao, true );
				$taxonomies_comision2_aao = get_terms( array(
				    'taxonomy' => 'tramites',
				    'hide_empty' => false,
				) );
				if ( !empty($taxonomies_comision2_aao) ) :
				    foreach( $taxonomies_comision2_aao as $category ) {
				    	if ($tramite_id_comision_aao == $category->term_id) {
				    		$nombre_tramite_comision_aao[$i] = $tramite_name_comision_aao = $category->name."<br>";
				    		$desc_tramite_comision_aao[$i] = $tramite_desc_comision_aao = $category->description."<br>";  		
				    	}   
				    }
				endif;
				/*Nombre trámite **********************************************************/			
			}
			/* DOCUMENTOS AAO *****************************************************************************************/

			?>
		</div>	

		
		<div class="col-md-12"><br></div>
		<div class="col-md-12"><br></div>




		<!-- Proyecto Casupá -->
		<?php if (is_single(3616)) : //https://www.ambiente.gub.uy/oan/proyectos/presa-del-arroyo-casupa/ ?>
		<div class="col-md-12">
		<div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

            <p><b>(*)</b> Visto el lapso transcurrido desde el momento en que se realizaron los estudios técnicos para la definición del proyecto y la elaboración del Estudio de Impacto Ambiental (EsIA) hasta el presente, resulta pertinente la complementación o actualización de la información previamente presentada y de alguno de los análisis oportunamente realizados como parte del EsIA. En tal sentido, se ha solicitado a OSE que presente una actualización del EsIA a los fines de poder proseguir con la evaluación de la autorización ambiental previa solicitada.</p>            
        
    	</div>		
    	</div>
    	<?php endif; ?>
    	<!-- //Proyecto Casupá -->



		<!-- Visualización en mapa -->
		<?php if ($pathiframeVisualizador != "") { ?>
			
			<div class="col-md-12">
				<h1 class="title_line text-center">
					<span>Localización: <?php the_title(); ?></span>
				</h1>
			</div>

			<div class="col-md-12">
				<iframe style="border-radius: 10px;" id="ifr" class="manifiesto page-icon preview-pane geoserver" frameborder="0" allowfullscreen scrolling="yes" src="<?php echo $pathiframeVisualizador; ?>"></iframe>
			</div>
		
		<?php } ?>
		<!-- Visualización en mapa -->


		<div class="col-md-12" id="documentos"></div>
	

		<!-- Documentos AAO ------------------------------------------------------------------->
		<?php if ( $post_id != 362 ){ ?>

		<?php if ($archivo != "") { ?>

		<div class="col-md-12">
			<h1 class="title_line text-center">
				<span>Documentos AAO</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>

			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion2">
					
					     	<?php   	
							if ( !empty( $files_docs_comision_aao ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_comision_aao as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision_aao[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion2" href="#collapse5<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite_comision_aao[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>






										      <div id="collapse5<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

											      	<?php 
											      	//Link a docuementos "Informaes de linea de base"
													$trimmed = trim($desc_tramite_comision_aao[$i]);
													$section  = $trimmed;
													$sections = explode(" ", $section);

													if ( $sections[0] == "Informes") { ?>


														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">1. Calidad de agua, sedimentos y biota acuática del río Negro en el tramo de influencia de la planta elaborado por DINACEA</a> <br>

														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">2. Calidad de aire para la zona de Centenario y Paso de los Toros elaborado por DINACEA</a> <br>

														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">3. Clorofila-a en los embalses del río Negro. Análisis con imágenes satelitales. Período Enero 2017 - Marzo 2023 elaborado por DINACEA</a> <br><br>

														<hr>
														<br>
													<?php

													}
													//Link a docuementos "Informaes de linea de base"
											      	?>


										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>
		<?php } ?>
		
		<!-- Documentos AAO -------------------------------------------------------------------->


		<!-- Comisión de Seguimiento ----------------------------------------------------------->
		<?php if ( $post_id != 362 ){ ?>

		<?php if ($archivo != "") { ?>

		<div class="col-md-12-">
			<h1 class="title_line text-center">
				<span>Comisión de Seguimiento</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>

			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion2">
					
					     	<?php   	
							if ( !empty( $files_docs_comision ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_comision as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion2" href="#collapse2<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite_comision[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse2<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>
		<?php } ?>
		
		<!-- Comisión de Seguimiento ----------------------------------------------------------->



		<!-- Documentos EsIA ----------------------------------------------------------->
		<?php if ( $post_id != 362 ){ ?>

		<?php if ($archivo != "") { ?>

		<div>
			<h1 class="title_line text-center">
				<span>Documentos: EsIA Modificación de proyecto</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>

			<div>
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion3">

					     	<?php   	
							if ( !empty( $files_docs_esia ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_esia as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								   
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_esia[$i]; ?> </div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion3" href="#collapse3<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;  <?php echo $desc_tramite_esia[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse3<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>

		<?php } ?>
		<!-- Documentos EsIA ----------------------------------------------------------->


		<!-- Temas del Proyecto -->
		




		<!-- Documentos Particulars del proyecto de prospeccion sismica ----------------------------------------------------------->

		<?php if ( $post_id == 3554 ){ ?>


		<div class="clearfix"></div>

		<br><br>

		<h1 class="title_line text-center">
		          <span>DOCUMENTOS POR PROYECTO</span>
		        </h1>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          APA Exploration LDC Sucursal Uruguay
		        </a>
		      </h4>
		    </div>


		    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		          
		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Recepción del Estudio de Impacto Ambiental</strong><br>
		            	<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/1/DP_APA_con_anexos.pdf">DP_APA_con_anexos.pdf</a>

		              <br>
		              
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/1/EsIA_Tomo_I_y_II_APA_con_anexos_reducido.pdf">EsIA_Tomo_I_y_II_APA_con_anexos_reducido.pdf</a>

		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a Información Complementaria 01</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/2/Respuesta_SIC_01_APA.pdf">Respuesta_SIC_01_APA.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/2/SIC_01.PDF">SIC_01.PDF</a>

		              <br><br>


		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Ambiental Resumen</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/3/APA_sismica_IAR.pdf">APA_sismica_IAR.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/APA/3/Ficha_IAR_APA.pdf">Ficha_IAR_APA.pdf</a>
		          
		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Final</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/1-Informe-Final.pdf">Informe-Final.pdf</a>

		              <br>
		              
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/2-Anexo-social.pdf">Anexo-social.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/3-Evacuacion-de-la-vista-APA-a-condiciones-finales.pdf">Evacuacion-de-la-vista-APA-a-condiciones-finales.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/4-Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf">Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf</a>
		          
		          

		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Resolución Ministerial</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/RM-1483_2025.pdf">RM-1483_2025.pdf</a>
		      </div>
		    </div>

		  </div>


		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          CGG SERVICES
		        </a>
		      </h4>
		    </div>

		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		          
		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Recepción del Estudio de Impacto Ambiental</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		            <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/1/DP_Viridien.pdf">DP_Viridien.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/1/EsIA_Tomo_I_y_II_Viridien.pdf">EsIA_Tomo_I_y_II_Viridien.pdf</a>
		              <br>

		            </li>

		            <br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a Información Complementaria 01</strong><br>
		            	<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/2/Respuesta_SIC_01.pdf">Respuesta_SIC_01.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/2/SIC_01.PDF">SIC_01.PDF</a>
		            
		            <br>
		            <br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a Información Complementaria 02</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/3/Respuesta_SIC_02.pdf">Respuesta_SIC_02.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/3/SIC_02.PDF">SIC_02.PDF</a><br>

		            <br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Ambiental Resumen</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/4/Ficha_IAR.pdf">Ficha_IAR.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/CGG/4/IAR.pdf">IAR.pdf</a><br>

		              <br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Final</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/1-Informe-Final-1.pdf">Informe-Final.pdf</a>

		              <br>
		              
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/2-Anexo-social-1.pdf">Anexo-social.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/3-Evacuacion-de-la-vista-a-condiciones-de-aprobacion.pdf">Evacuacion-de-la-vista-a-condiciones-de-aprobacion.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/4-Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion-1.pdf">Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf</a>
		          
		          

		              <br><br>

		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Resolución Ministerial</strong><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/RM-1482_2025.pdf">RM-1482_2025.pdf</a>

		              <br><br>

		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Plan de Gestión Ambiental"</strong><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/PGA-prospeccion-sismica-submarina-3D-Viridien-CGGnota.pdf">PGA-prospeccion-sismica-submarina-3D-Viridien-CGG.pdf</a><br>


					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/Anexo-I-RM1482-2025-AAP..pdf">Anexo-I-RM1482-2025-AAP..pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/Anexo-II-Autorizacion-Chevron.pdf">Anexo-II-Autorizacion-Chevron.pdf</a><br>

					<br>
					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-III-1-TS.pdf">1.-Anexo-III-1-TS.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/2.-Anexo-III-2-MOPO.pdf">2.-Anexo-III-2-MOPO.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/3.-Anexo-III-3-Arreglo-fuentes.pdf">3.-Anexo-III-3-Arreglo-fuentes.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/4.-Anexo-III-4-PGR.pdf">4.-Anexo-III-4-PGR.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/5.-Anexo-III-5-IOPPC.pdf">5.-Anexo-III-5-IOPPC.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/6.-Anexo-III-6-PGAR.pdf">6.-Anexo-III-6-PGAR.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/7.-Anexo-III-7-ISPP.pdf">7.-Anexo-III-7-ISPP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/8.-Anexo-III-8-BWMP-completo.pdf">8.-Anexo-III-8-BWMP-completo.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/8.-Anexo-III-8-BWMP.pdf">8.-Anexo-III-8-BWMP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/9.-Anexo-III-9.pdf">9.-Anexo-III-9.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/10.-Anexo-III-10.pdf">10.-Anexo-III-10.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/11.-Anexo-III-11-Bunkering-in-port.pdf">11.-Anexo-III-11-Bunkering-in-port.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/12.-Anexo-III-12-Bunkering-over-the-bow.pdf">12.-Anexo-III-12-Bunkering-over-the-bow.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/13.-Anexo-III-13-Gestion-lub-y-comb..pdf">13.-Anexo-III-13-Gestion-lub-y-comb..pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/14.-Anexo-III-14-Gestion-mat.-peligrosos.pdf">14.-Anexo-III-14-Gestion-mat.-peligrosos.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/15.-Anexo-III-15-SOPEP.pdf">15.-Anexo-III-15-SOPEP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/15.-Anexo-III-15a-SOPEP.pdf">15.-Anexo-III-15a-SOPEP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/16.-Anexo-III-16-Procedimientos-de-mantenimiento.pdf">16.-Anexo-III-16-Procedimientos-de-mantenimiento.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/17.-Anexo-III-17-MERP.pdf">17.-Anexo-III-17-MERP.pdf</a><br>

					<br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-IV-1-TS.pdf">1.-Anexo-IV-1-TS.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/2.-Anexo-IV-2-MOPO.pdf">2.-Anexo-IV-2-MOPO.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/3.-Anexo-IV-3-PGR.pdf">3.-Anexo-IV-3-PGR.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/4.-Anexo-IV-4-IOPP-vf.pdf">4.-Anexo-IV-4-IOPP-vf.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/5.-Anexo-IV-5-GAR.pdf">5.-Anexo-IV-5-GAR.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/6.-Anexo-IV-6-ISPP.pdf">6.-Anexo-IV-6-ISPP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/7.-Anexo-IV-7-IBWM.pdf">7.-Anexo-IV-7-IBWM.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/8.-Anexo-IV-8-IAPP.pdf">8.-Anexo-IV-8-IAPP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/9.-Anexo-IV-9-Bunkering.pdf">9.-Anexo-IV-9-Bunkering.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/10.-Anexo-IV-10-HM.pdf">10.-Anexo-IV-10-HM.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/11.-Anexo-IV-11-ICHMM.pdf">11.-Anexo-IV-11-ICHMM.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/12.-Anexo-IV-12-SOPEP.pdf">12.-Anexo-IV-12-SOPEP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/13.-Anexo-IV-13-Procedimiento-de-emergencias.pdf">13.-Anexo-IV-13-Procedimiento-de-emergencias.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/14.-Anexo-IV-14-PGAP.pdf">14.-Anexo-IV-14-PGAP.pdf</a><br>

					<br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-V-1-ET.pdf">1.-Anexo-V-1-ET.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/2.-Anexo-V-2-MOPO.pdf">2.-Anexo-V-2-MOPO.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/3.-Anexo-V-3-PGR.pdf">3.-Anexo-V-3-PGR.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/4.-Anexo-V-4-IOPP-1.pdf">4.-Anexo-V-4-IOPP-1.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/5.-Anexo-V-5-ISPP.pdf">5.-Anexo-V-5-ISPP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/6.-Anexo-V-6-IAPP-y-CEE.pdf">6.-Anexo-V-6-IAPP-y-CEE.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/7.-Anexo-V-7-Procedimiento-de-ab.-comb..pdf">7.-Anexo-V-7-Procedimiento-de-ab.-comb..pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/8.-Anexo-V-8-Sentina.pdf">8.-Anexo-V-8-Sentina.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/9.-Anexo-V-9-SOPEP.pdf">9.-Anexo-V-9-SOPEP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/10.-Anexo-V-10-Manual-de-emergencias.pdf">10.-Anexo-V-10-Manual-de-emergencias.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/11.-Anexo-V-11-Mantenimiento.pdf">11.-Anexo-V-11-Mantenimiento.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/12.-Anexo-V-12-Normas-de-seguridad.pdf">12.-Anexo-V-12-Normas-de-seguridad.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/13.-Anexo-V-13-Agua-potable.pdf">13.-Anexo-V-13-Agua-potable.pdf</a><br>

					<br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/Anexo_VI_1_CVs.pdf">1.-Anexo-VI-1-CVs.pdf</a><br>
					

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-VI-2-Plan-de-mitigacion-BGP.pdf">1.-Anexo-VI-2-Plan-de-mitigacion-BGP.pdf</a><br>

					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-VI-3-Material-curso.pdf">1.-Anexo-VI-3-Material-curso.pdf</a><br>

					<br>
					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-ANEXO-VII-Plan-de-Navegacion.pdf">1.-ANEXO-VII-Plan-de-Navegacion.pdf</a><br>

					<br>
					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-VIII.pdf">1.-Anexo-VIII.pdf</a><br>

					<br>
					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-ANEXO-XI-PRC.pdf">1.-ANEXO-XI-PRC.pdf</a><br>

					<br>
					<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
					<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/Anexo-XII-Protocolo-de-compensacion.pdf">Anexo-XII-Protocolo-de-compensacion.pdf</a><br>

		            <br>

		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/1.-Anexo-XIII-Proyecto-redes-de-varamiento.pdf">1.-Anexo-XIII-Proyecto-redes-de-varamiento.pdf</a><br>

						<br>

						<!--
		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud de Información Complementaria 03</strong><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/SIC-1.3-1.pdf">SIC-1.3-1.pdf</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/wp-content/uploads/respuesta-a-SIC-I.pdf">Respuesta a SIC I.pdf</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/Respuesta-a-la-SIC-I-Autorizacion-petrolera-a-CGG.pdf">Respuesta a la SIC I (Autorización petrolera a CGG).pdf</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/02/SIC02.pdf">SIC02.pdf</a><br>
						-->


		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud de información complementaria PGA</strong><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/1_SIC01_PGA.pdf">SIC01 PGA.pdf</a><br>

			
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/2_Respuesta_SIC01_PGA.pdf">Respuesta_SIC01 PGA.pdf</a><br>		              


		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/3_SIC02_PGA.pdf">SIC02 PGA.pdf</a><br>


		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/4_Respuesta_ SIC02 PGA.pdf">Respuesta_SIC02 PGA.pdf</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/5_Respuesta_SIC02_Anexos_IX_y_X-PGA.pdf">Respuesta_SIC02 Anexos IX y X -PGA.pdf</a><br>		


		              <br>


		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Aprobación del PGA</strong><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/6_Informe_final_PGA.pdf">Informe final PGA.pdf</a><br>

			
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/7_RM_170_2026_Arpobacion_PGA.pdf">RM 170_2026 aprobación PGA.pdf</a><br>		              	


		              <br>


		              <i class="fa fa-folder" aria-hidden="true"></i> <strong>Seguimiento de la Actividad</strong><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/Informe_de_observadores_de_fauna_y_PAM-Quincena_1.pdf">Informe de observadores de fauna y PAM - Quincena 1</a><br>

			
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/Informe_de_observadores_de_fauna_y_PAM-Quincena_2.pdf">Informe de observadores de fauna y PAM - Quincena 2</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/Informe_de_observadores_de_fauna_y_PAM-Quincena_3.pdf">Informe de observadores de fauna y PAM - Quincena 3</a><br>

		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/prospeccion_sismica/Informe_mensual_de_Seguimiento_Sismica_offshore_CGG_Temporada_1_Marzo2026_PM.pdf">Informe mensual de Seguimiento Sísmica offshore CGG Temporada 1</a><br>	



<br>


						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Informe-Ambiental-Final-T1-Viridien_CGG.pdf">Informe-Ambiental-Final-T1-Viridien_CGG.pdf</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-1-Autorizaciones-y-permisos-del-proyecto.pdf">Anexo-1-Autorizaciones-y-permisos-del-proyecto</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-2-Comunicaciones-de-inicio-y-fin-de-la-temporada-1.pdf">Anexo-2-Comunicaciones-de-inicio-y-fin-de-la-temporada-1</a>
						<br>		              	              		              

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-3-Informe-Final-de-Operaciones.pdf">Anexo-3-Informe-Final-de-Operaciones</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-4-Aviso-a-los-Navegantes.pdf">Anexo-4-Aviso-a-los-Navegantes</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-5-Reunion-de-coordinacion-y-presentacion-del-programa-de-adquisicion-sismica-.pdf">Anexo-5-Reunion-de-coordinacion-y-presentacion-del-programa-de-adquisicion-sismica</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-6-Informe-Final-del-Oficial-de-Enlace-con-la-Pesca-FLO-Viridien.pdf">Anexo-6-Informe-Final-del-Oficial-de-Enlace-con-la-Pesca-FLO-Viridien</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-7-Informe-Final-OFMPAM-Viridien.pdf">Anexo-7-Informe-Final-OFMPAM-Viridien</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-8-Plan-de-Gestion-de-Residuos-y-Emisiones-BGP.pdf">Anexo-8-Plan-de-Gestion-de-Residuos-y-Emisiones-BGP</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-9-Recibos-de-entrega-de-desechos-MARPOL-ANP..pdf">Anexo-9-Recibos-de-entrega-de-desechos-MARPOL-ANP</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-10-Documentacion-relativa-a-la-de-gestion-de-efluentes.pdf">Anexo-10-Documentacion-relativa-a-la-de-gestion-de-efluentes</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-11-Informes-Finales-del-Plan-de-Verificacion-de-Niveles-Sonoros-Viridien.pdf">Anexo-11-Informes-Finales-del-Plan-de-Verificacion-de-Niveles-Sonoros-Viridien</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-12-Memorandos-tecnicos-e-Informes-Finales-de-campanas-del-PMB-BS.pdf">Anexo-12-Memorandos-tecnicos-e-Informes-Finales-de-campanas-del-PMB-BS</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-13-Comunicaciones-con-la-armada-la-URSEA-y-los-operadores-de-los-cables-submarinos.pdf">Anexo-13-Comunicaciones-con-la-armada-la-URSEA-y-los-operadores-de-los-cables-submarinos</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-14-Informes-de-avances-del-Proyecto-de-fortalecimiento-del-Grupo-de-Trabajo-de-Varamientos.pdf">Anexo-14-Informes-de-avances-del-Proyecto-de-fortalecimiento-del-Grupo-de-Trabajo-de-Varamientos</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-15-Informe-de-Implementacion-del-Plan-de-Relacionamiento-Comunitario.pdf">Anexo-15-Informe-de-Implementacion-del-Plan-de-Relacionamiento-Comunitario</a>
						<br>

						<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
						<a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2026/09/Anexo-16-Primer-y-ultimo-reporte-de-operaciones-diario-BGPO-Viridien.pdf">Anexo-16-Primer-y-ultimo-reporte-de-operaciones-diario-BGPO-Viridien</a>
						<br>



		      </div>
		    </div>

		  </div>

		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          PGS EXPLORATION UK LTD
		        </a>
		      </h4>
		    </div>

		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Recepción Estudio de Impacto Ambiental</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/1/PGS_DP_Tomo_I.pdf">PGS_DP_Tomo_I.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/1/PGS_EsIA_Tomo_II_comp.pdf">PGS_EsIA_Tomo_II_comp.pdf</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 01</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/2/2024_011395_PGS_SIC_01.PDF">2024_011395_PGS_SIC_01.PDF</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/2/PGS_Respuesta_SIC_1.pdf">PGS_Respuesta_SIC_1.pdf</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 02</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/3/PGS_Resp_SIC_2.pdf">PGS_Resp_SIC_2.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/3/SIC_02.PDF">SIC_02.PDF</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 03</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/4/Respuesta_SIC_03.pdf">Respuesta_SIC_03.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/4/SIC_03.PDF">SIC_03.PDF</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 04</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/5/Respuesta_SIC_4.pdf">Respuesta_SIC_4.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/5/SIC_04.PDF">SIC_04.PDF</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Ambiental Resumen</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/6/PGS_Ficha_IAR.pdf">PGS_Ficha_IAR.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/6/PGS_IAR.pdf">PGS_IAR.pdf</a>

		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta información complementaria 05</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/7/Respuesta_SIC_5.pdf">Respuesta_SIC_5.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/PGS/7/SIC_05.PDF">SIC_05.PDF</a>

		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Final</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/1-Informe-Final-2.pdf">Informe-Final.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/2-Anexo-Social.pdf">Anexo-social.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/3-Evacuacion-de-la-vista-a-condiciones-de-aprobacion-1.pdf">Evacuacion-de-la-vista-a-condiciones-de-aprobacion.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/4-Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion-2.pdf">Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf</a>


		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/4-Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion-2.pdf">Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf</a>


		              <br><br>



		      </div>
		    </div>

		  </div>


		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingThree1">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
		          SEARCHER GEODATA UK LIMITED
		        </a>
		      </h4>
		    </div>

		    <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree1">
		      <div class="panel-body">

		          
		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Recepción Estudio de Impacto Ambiental</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/1/Searcher_Documento_Proyecto.pdf">Searcher_Documento_Proyecto.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/1/Searcher_EsIA_Tomo_I_Tomo_II.pdf">Searcher_EsIA_Tomo_I_Tomo_II.pdf</a>
		           
		           <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 01</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/2/Respuesta_SIC_01.pdf">Respuesta_SIC_01.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/2/SIC_01.PDF">SIC_01.PDF</a>
		            
		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Solicitud y respuesta a información complementaria 02</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/3/Respuesta_a_SIC_02.PDF">Respuesta_a_SIC_02.PDF</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/3/SIC_02.PDF">SIC_02.PDF</a>
		            
		            <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Ambiental Resumen</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/4/Searcher_sismica_ficha_IAR.pdf">Searcher_sismica_ficha_IAR.pdf</a><br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth"  href="https://www.ambiente.gub.uy/oan/prospeccion_sismica/SEARCHER/4/Searcher_sismica_IAR.pdf">Searcher_sismica_IAR.pdf</a>
		          

		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Informe Final</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/1-Informe-Final-3.pdf">Informe-Final.pdf</a>

		              <br>
		              
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/2-Anexo-Social-1.pdf">Anexo-social.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/3-Evacuacion-de-la-vista-a-condiciones-de-aprobacion-2.pdf">Evacuacion-de-la-vista-a-condiciones-de-aprobacion.pdf</a>

		              <br>
		              <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/4-Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion-3.pdf">Respuesta-a-evacuacion-de-la-vista-y-condiciones-finales-de-aprobacion.pdf</a>
		          
		          

		              <br><br>

		            <i class="fa fa-folder" aria-hidden="true"></i> <strong>Resolución Ministerial</strong><br>
		            <img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">
		              <a class="fullwidth" href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/12/RM-1486_2025.pdf">RM-1486_2025.pdf</a>

		      </div>
		    </div>
    
		  </div>


		<?php } ?>
		<!-- Documentos Particulars del proyecto de prospeccion sismica ----------------------------------------------------------->









		<?php if ( $post_id != 362 ){ ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<div class="col-md-12"><br><br></div>

			<div  id="docs">
				<h1 class="title_line text-center">
					<span>Documentos <!--: EsIA proyecto original --><?php //the_title(); ?></span>
				</h1>
			</div>

			<?php if ( $post_id == 3560 ){ ?><!-- Solo para el Proyecto UPM - Fray Bentos -->
			<div class="col-md-12">
			<div class="panel panel-default">

					    <div class="panel-heading">
					      <p style="text-align: justify;padding-right: 15px;">
			La <b>Comisión de Seguimiento</b> fue formalizada por la Resolución MVOTMA N.º 113/007 de 2007, con el objetivo de dar seguimiento al desempeño ambiental de la planta de celulosa, la terminal portuaria y la zona franca UPM (ex Botnia) en Fray Bentos. Presidida por la autoridad ambiental e integrada por organismos del Estado, sociedad civil y la empresa, actúa como órgano asesor en el marco de la participación pública y la transparencia. Tras su última sesión en 2017, el Ministerio de Ambiente dispuso su reactivación en el año 2025 para restablecer la comunicación entre los actores y asegurar a la población acceso a información sobre el proyecto.
					      </p>
					    </div>

			</div>
			</div>
			<?php } ?>


			<div class="col-md-12">
				<input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> 
		    	<i class="fa fa-search" id="botonsearch"></i>
		  	</div>

		  	<div class="clearfix"></div>

		  	<div class="proyecto-down"></div>


			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12">
					  <div class="panel-group" id="accordion">
					
					     	<?php   	
							if ( !empty( $files_docs ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion" href="#collapse4<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse4<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>

		</article>

		<?php } ?>

		<!-- //Temas del Proyecto -->


		<div class="clearfix"></div>

































<?php if ( $post_id == 362 ){ //Proyecto  Planta Celulosa UPM II////////////////////////////////////////////////////////////////////// ?>

  <div class="panel-group" >

	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title" style="font-size:20px;">
	        Autorizaciones ambientales
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in">
	      <div class="panel-body">


			<!-- Sub-secciones ------------------------------------------------>

			  <div class="panel-group" id="accordion_sub">

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_sub" href="#uno">
			          Autorización Ambiental Previa
			        </a>
			      </h4>
			    </div>
			    <div id="uno" class="panel-collapse collapse in">
			      <div class="panel-body">
			        
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php 
					foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
						$title = get_the_title();
						if($property['title'] == $title){ ?>
							<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
				<?php 
						}
					}
				?>


				<div class="col-md-12-">
					<h1 class="title_line text-center">
						<span>Autorización Ambiental Previa</span>
					</h1>
				<div>

				<div  id="docs"></div>

			  <div class="proyecto-down"></div>


				<div class="col-md-12-">
	        		
						<span class="hidden-info">
							<span><?php echo limpiaCadena($property['title']);  ?></span>
							<span><?php echo limpiaCadena($property['description']);  ?></span>							
						</span>

						<div class="col-md-12-">
						  <div class="panel-group" id="accordion_docs">
						
						     	<?php   	
								if ( !empty( $files_docs ) ) {								
									$i=0; $y=0;
								    foreach ( $files_docs as $file ) {
								    	$i++;
									    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
									    
									    	<!--// Documento por trámite //-->
										    <div class="panel panel-default">
										    
											      <div class="panel-heading buscador">
											      	<div class="grupo_name pull-right"><?php echo $nombre_grupo[$i]; ?></div>
											        <h4 class="panel-title">
											          <a class="tramite" data-toggle="collapse" data-parent="#accordion_docs" href="#collapse4<?php echo $y;?>">
											          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite[$i]; // $name_tramite[$i];?>
											          </a>
											        </h4>
											      </div>

											      <div id="collapse4<?php echo $y; ?>" class="panel-collapse collapse">
											        <div class="panel-body">

											        	<?php											    	
												    	foreach ( $file as $file1 ) {
												    		$ext = end(explode('.',$file1['name']));
												    		
												    		// Especifico
												    		switch ($ext) {

												    			case 'pdf':
												    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
												    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
												    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
												    				break;

												    			case 'zip':
												    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
												    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
												    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
												    				break;
												    		}

												    	}
												    	$y++;
													    ?>

											        </div>
											      </div>
											      
										    </div>
										    <!--// Documento por trámite //-->
								<?php	}
									} 
								}
								?>
						
						  </div> 
						</div>
					
				</div>
			</article>

		      </div>
		    </div>
		  </div>




		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_sub" href="#dos">
		          Modificación de Proyecto
		        </a>
		      </h4>
		    </div>
		    <div id="dos" class="panel-collapse collapse in">
		     
		      <div class="panel-body">
		     
		<!-- Documentos EsIA ----------------------------------------------------------->
		<?php if ($archivo != "") { ?>

		<div>
			<h1 class="title_line text-center">
				<span>Modificación de proyecto</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>

			<div>
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion3_modificacionproyecto">

					     	<?php   	
							if ( !empty( $files_docs_esia ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_esia as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								   
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_esia[$i]; ?> </div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion3_modificacionproyecto" href="#collapse3<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;  <?php echo $desc_tramite_esia[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse3<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>

		<!-- Documentos EsIA ----------------------------------------------------------->

		      </div>
		    </div>
		  </div>





		    <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_sub" href="#tres">
		          Autorización Ambiental de Operación
		        </a>
		      </h4>
		    </div>
		    <div id="tres" class="panel-collapse collapse in">
		      <div class="panel-body">

		<!-- Documentos AAO ------------------------------------------------------------------->
		<?php if ($archivo != "") { ?>

		<div class="col-md-12-">
			<h1 class="title_line text-center">
				<span>Autorización Ambiental de Operación</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>


			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion2_autorizacinoambientaloperacion">
					
					     	<?php   	
							if ( !empty( $files_docs_comision_aao ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_comision_aao as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision_aao[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion2_autorizacinoambientaloperacion" href="#collapse5<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite_comision_aao[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>






										      <div id="collapse5<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

											      	<?php 
											      	//Link a docuementos "Informaes de linea de base"
													$trimmed = trim($desc_tramite_comision_aao[$i]);
													$section  = $trimmed;
													$sections = explode(" ", $section);

													if ( $sections[0] == "Informes") { ?>


														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">1. Calidad de agua, sedimentos y biota acuática del río Negro en el tramo de influencia de la planta elaborado por DINACEA</a> <br>

														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">2. Calidad de aire para la zona de Centenario y Paso de los Toros elaborado por DINACEA</a> <br>

														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png'">
														<a class="docs_download " data-balloon="Link al documento" data-balloon-pos="right" href="https://www.ambiente.gub.uy/oan/linea-de-base-para-la-zona-de-influencia-del-proyecto-upm-ii/">3. Clorofila-a en los embalses del río Negro. Análisis con imágenes satelitales. Período Enero 2017 - Marzo 2023 elaborado por DINACEA</a> <br><br>

														<hr>
														<br>
													<?php

													}
													//Link a docuementos "Informaes de linea de base"
											      	?>


										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>
		
		<!-- Documentos AAO -------------------------------------------------------------------->
		      
		      </div>
		    </div>
		  </div>

		</div>

		<!-- End Sub-secciones ------------------------------------------------>

      
      </div>
    </div>
  </div>





  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="font-size:20px;">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2_general" href="#collapseTwo">
          Comisión de Seguimiento del proyecto
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">


		<!-- Comisión de Seguimiento ----------------------------------------------------------->
		<?php if ($archivo != "") { ?>

		<div class="col-md-12-">
			<h1 class="title_line text-center">
				<span>Comisión de Seguimiento</span>s
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>

			<!-- <div class="col-md-12"><input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> <i class="fa fa-search" id="botonsearch"></i></div>-->

		  <div class="proyecto-down"></div>

			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion2">
					
					     	<?php   	
							if ( !empty( $files_docs_comision ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_comision as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion2" href="#collapse2<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite_comision[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse2<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>









					    <!--// Documento por trámite - HARDCORD TEMPORAL //-->
					    <div class="panel panel-default">
					    
						      <div class="panel-heading buscador">
						      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision[$i]; ?></div>
						        <h4 class="panel-title">
						          <a class="tramite" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_01">
						          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;Reunión #10 Comisión de Seguimiento UPM II 13/11/2024
						          </a>
						        </h4>
						      </div>

						      <div id="collapse2_01" class="panel-collapse collapse">
						        <div class="panel-body">

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Auditoria-procesos-sancionatorios-y-denuncias.pdf" >Auditoría procesos sancionatorios y denuncias</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Auditoria-procesos-sancionatorios-y-denuncias.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Derrame-lixiviado-y-estado-del-Sauce.pdf" >Derrame lixiviado y estado del Sauce</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Derrame-lixiviado-y-estado-del-Sauce.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Forestacion-Suelos.pdf" >Forestacion Suelos</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Forestacion-Suelos.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Imagenes-satelitales_clorofila.pdf" >Imágenes satelitales_clorofila</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Imagenes-satelitales_clorofila.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Informe-anual-calidad-aire.pdf" >Informe anual calidad aire</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Informe-anual-calidad-aire.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Informe-control.pdf" >Informe control</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Informe-control.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Presentacion-Agua-comision-seguimiento.pdf" >Presentación Agua comision seguimiento</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Presentacion-Agua-comision-seguimiento.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Presentacion-UPM-CdSc.pdf" >Presentación UPM CdSc</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/07/Presentacion-UPM-CdSc.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>

						        </div>
						      </div>

					    </div>
					    <!--// Documento por trámite - HARDCORD TEMPORAL //-->




					    <!--// Documento por trámite - HARDCORD TEMPORAL //-->
					    <div class="panel panel-default">
					    
						      <div class="panel-heading buscador">
						      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_comision[$i]; ?></div>
						        <h4 class="panel-title">
						          <a class="tramite" data-toggle="collapse" data-parent="#accordion11" href="#collapse2_011">
						          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;Reunión #11 Comisión de Seguimiento UPM II 15/05/2025
						          </a>
						        </h4>
						      </div>

						      <div id="collapse2_011" class="panel-collapse collapse">
						        <div class="panel-body">

									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/1-Imagenes-satelitales-clorofila.pdf" >1 - Imágenes satelitales clorofila</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/1-Imagenes-satelitales-clorofila.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/2-Estado-del-Arrollo-Sauce.pdf" >2 - Estado del Arrollo Sauce</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/2-Estado-del-Arrollo-Sauce.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/3-Evaluacion-de-calidad-de-aire-durante-eventos-de-olor-diciembre-2024.pdf" >3 - Evaluación de calidad de aire durante eventos de olor diciembre 2024</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/3-Evaluacion-de-calidad-de-aire-durante-eventos-de-olor-diciembre-2024.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/5-Actividades-de-control-y-seguimiento.pdf" >5 - Actividades de control y seguimiento</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/5-Actividades-de-control-y-seguimiento.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/6-Acciones-tomadas-por-el-Ministerio-de-Ambiente-contingencias.pdf" >6 - Acciones tomadas por el Ministerio de Ambiente - contingencias</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/6-Acciones-tomadas-por-el-Ministerio-de-Ambiente-contingencias.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/7-Presentacion-FCS.pdf" >7 - Presentación FCS</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/7-Presentacion-FCS.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/8-Presentacion-UPM.pdf" >8 - Presentación UPM</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/06/8-Presentacion-UPM.pdf" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>


									<img src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/icon-pdf.jpg">&nbsp; <a class='docs_download fullwidth'  data-balloon-pos='right' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/07/Minuta-11ma-sesion-CdS-UPM-II.doc" >9 - Minuta 11ma sesión CdS UPM II</a>
									<span class='pull-right'>
										<a class='docs_download' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2025/07/Minuta-11ma-sesion-CdS-UPM-II.doc" target='blank' download >	
											<i class='fa fa-arrow-circle-down icon'></i>
										</a></span></br>




						        </div>
						      </div>

					    </div>
					    <!--// Documento por trámite - HARDCORD TEMPORAL //-->





					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>
		
		<!-- Comisión de Seguimiento ----------------------------------------------------------->

      </div>
    </div>
  </div>






  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="font-size:20px;">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2_general" href="#collapseThree">
          Línea de base de UPM II
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in">
      <div class="panel-body">


     <!-- Linea base -------------------------------------------------------------------------------------->

		<h1 class="title_line text-center"><span>Linea de base para la zona de influencia del Proyecto UPM II</span></h1>

		<div class="panel-group">
			<div class="panel panel-default">
			  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Documentos..</div>
			  <div class="panel-body">


				<?php foreach ($theme_['linea_base1'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">

						<span class="hidden-info">
							<span><?php echo limpiaCadena($property['title']);  ?></span>
							<span><?php echo limpiaCadena($property['description']);  ?></span>							
						</span>

		        		<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" class="fullwidth">

							<!-- Box Info ////////////////////////////////////////////////////////////////////-->
							<div class="box-info container-fluid">
								<div class="col-md-3">
									<div class="box-info-left">
										<div class="icon pull-left" style="margin-top:10px;">
											<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										</div>

									</div>
								</div>
								<div class="col-md-8">
									<div class="info">
									<strong><?php echo $property['title']; ?></strong>			
										<p><?php echo $property['description']; ?></p>													
									</div>
								</div>						
							</div>
							<!-- Box Info ////////////////////////////////////////////////////////////////////-->
							
						</a>
					</div>

				<?php } ?>
		
			  </div>
			</div>
		</div>

		<div class="panel-group">
			<div class="panel panel-default">
			  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Datos</div>
			  <div class="panel-body">
					

	        	<?php foreach ($theme_['linea_base2'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

						<!-- Box Info ////////////////////////////////////////////////////////////////////-->
						<div class="box-info container-fluid">
							<?php if ($property['title']=="Mapas anuales de la cobertura del suelo"){ ?>
								<a class="fullwidth" onclick="window.open('https://code.earthengine.google.com/b32e2e8759f9aede63c0ba3249814def')" />
								
								<?php }else{ ?>	

								<a class="fullwidth" href="<?php echo $property['url'];?>">

								<?php } ?>		
							
									<div class="col-md-5">
										<div class="box-info-left" style="margin-top:30px;">
											<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										</div>
									</div>
									<div class="col-md-7">
										<div class="info">								
											<h2><?php echo $property['title'];?></h2>
											<p><?php echo $property['description'];?></p>
											<p> <a href="<?php echo $property['url'];?>"></a> Visualizador de mapas</p>												
											<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
										</div>
									</div>

								</a>
						
						</div>
						<!-- Box Info ////////////////////////////////////////////////////////////////////-->

				<?php } ?>
															
			  </div>
			</div>
		</div>
		<!-- Linea base -------------------------------------------------------------------------------------->



      </div>
    </div>
  </div>







  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="font-size:20px;">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2_general" href="#collapseFour">
          Proceso de control y seguimiento
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in">
      <div class="panel-body">







		<!-- Proceso de control y seguimiento ----------------------------------------------------------->


		<?php if ($archivo != "") { ?>

		<div class="col-md-12-">
			<h1 class="title_line text-center">
				<span>Proceso de control y seguimiento</span>
			</h1>
		<div>

		<!-- Temas de Comision de apoyo -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php 
				foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
					$title = get_the_title();
					if($property['title'] == $title){ ?>
						<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
			<?php 
					}
				}
			?>


		  <div class="proyecto-down"></div>

			<div class="col-md-12-">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
					  <div class="panel-group" id="accordion_proceso">
					
					     	<?php   	
							if ( !empty( $files_docs_proceso ) ) {								
								$i=0; $y=0;
							    foreach ( $files_docs_proceso as $file ) {
							    	$i++;
								    if(!empty($file)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// Documento por trámite //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<div class="grupo_name pull-right"><?php echo $nombre_grupo_proceso[$i]; ?></div>
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion_proceso" href="#collapse2_proceso<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite_proceso[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse2_proceso<?php echo $y; ?>" class="panel-collapse collapse">
										        <div class="panel-body">

										        	<?php											    	
											    	foreach ( $file as $file1 ) {
											    		$ext = end(explode('.',$file1['name']));
											    		
											    		// Especifico
											    		switch ($ext) {

											    			case 'pdf':
											    				$img = get_template_directory_uri().'/images/icon-pdf.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download fullwidth' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." >".$file1['title']."</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;

											    			case 'zip':
											    				$img = get_template_directory_uri().'/images/icon-zip.jpg';
											    				echo "<img src='$img'>&nbsp; <a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' href=".$file1['url']." download >".$file1['title']./*ucfirst(limpiaguiones($file1['title'])).*/"</a>
											    				<span class='pull-right'><a class='docs_download' data-balloon='.".$ext."' data-balloon-pos='right' onclick='ga('send', 'event', ‘Descargas', ‘Documentos', 'PDF');' href=".$file1['url']." target='blank' download ><i class='fa fa-arrow-circle-down icon'></i></a></span></br>";
											    				break;
											    		}

											    	}
											    	$y++;
												    ?>

										        </div>
										      </div>
										      
									    </div>
									    <!--// Documento por trámite //-->
							<?php	}
								} 
							}
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Temas de Comision de apoyo -->

		</div>

		<?php } ?>

		
		<!-- Proceso de control y seguimiento ----------------------------------------------------------->


















      </div>
    </div>
  </div>


</div>

<?php } //End Proyecto  Planta Celulosa UPM II/////////////////////////////////////////////////////////////////////////////////// ?>  




  


		<!-- //Preguntas Frecuentes -->
		<?php //if ( !empty( $faqs_preguntas ) ) { 
			$control = 0;
			foreach ( $faqs_preguntas as $faq ) {
				if (!empty($faq)) {
					$control = 1;
				}
			}
		?>

		<?php if ( $control == 1 ) { ?>	

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="col-md-12">
				<h1 class="title_line text-center">
					<span>Preguntas Frecuentes</span>
				</h1>
			</div>

	
		    <div class="proyecto-down"></div>

			<div class="col-md-12">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>
					
					<div class="col-md-12-">

					<p>
					<?php 
					/*Copete Faqs****************************************************************/
					echo $copete;
					/*Copete Faqs ****************************************************************/
					?>
					</p>

					  <div class="panel-group" id="accordion_faq">
					
					     	<?php   

								$i=0; $y=0;
							    foreach ( $faqs_preguntas as $faq ) {

							    	$i++;

								    if(!empty($faq)){ //si no hay documentos no muestra el trámite ?>
								    
								    	<!--// FAQs //-->
									    <div class="panel panel-default">
									    
										      <div class="panel-heading buscador">
										      	<!--<div class="grupo_name pull-right"><?php //echo $nombre_grupo[$i]; ?></div>-->
										        <h4 class="panel-title">
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion_faq" href="#collapse_<?php echo "faq_".$i;?>">
										          	<i class="fa fa-question-circle"></i>&nbsp;&nbsp; <?php echo $faqs_preguntas[$i]; ?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse_<?php echo "faq_".$i; ?>" class="panel-collapse collapse">
										        <div class="panel-body">
													<?php echo $faqs_respuestas[$i]; ?>										        	
										        </div>
										      </div>
										      
									    </div>
									    <!--// FAQs //-->
							<?php	}
								} 
							?>
					
					  </div> 
					</div>
				
			</div>
		</article>
		<!-- //Preguntas Frecuentes -->

		<?php } ?>

	<?php endwhile; ?>
	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>