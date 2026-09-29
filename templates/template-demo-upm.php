<?php 
/* 
 * Template Name: Demo UPM
 * Description: Página de CPrueba borrar!!
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 


 get_header(); ?>

<?php global $theme_; ?>

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
        		<?php if($property['title'] == get_the_title()){ ?>
					<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
					<div class="col-md-8">
						<img class="img-responsive" src="<?php echo $property['image']; ?>">
					</div>
					<div class="col-md-4">
						<br>
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

									<div class="box-proyect">											
										<a class="view_proyect big-font fullwidth1 <?php echo $state; ?>" data-balloon="<?php echo $property['description']; ?>" data-balloon-pos="top"><?php echo $property['title']; ?>
											<br>
											<strong><?php //echo $property['url']; ?></strong>
										</a>
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
						//echo "<br><br><div class='text-center'><strong>SAAP:</strong> Solicitud de Autorización Ambiental Previa.</div>";
					?>
					<br><br>
				</section>


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
		<!-- Estado del Proyecto -->

		<div class="col-md-6">
			<?php

			$cantidad = $theme_['nro_tramites'];

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

			//var_dump($faqs_preguntas)

			?>
		</div>	


		<div class="col-md-12"><br></div>
		<div class="col-md-12"><br></div>



		<!-- Comisiónd e Seguimiento -->
		<?php //if ($archivo != "") { ?>
		<div class="col-md-12">
			<h1 class="title_line text-center">
				<span>Comisión de Seguimiento</span>
			</h1>
        	<ul style="font-size: 13px;">
        		<li><a href="https://www.dinama.gub.uy/oan/wp-content/uploads/2020/12/RM-2024_2019-Conformacion-de-Comision-de-Seguimiento-UPM-II.pdf" target="blank">RM de conformación de la Comisión</a></li>
        		<li><a href="https://www.dinama.gub.uy/oan/wp-content/uploads/2020/12/Resolucion-Representantes-de-la-Sociedad-Civil.pdf" target="blank">R/DN de sociedad civil</a></li>
        	</ul>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro de reunión</th>
      <th scope="col">Actas</th>
      <th scope="col">Anexos</th>
      <th scope="col">Fecha</th>
      <th scope="col">Lugar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-12012" target="_blank">CSMP Acta 5 de setiembre 2012</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-1" target="_blank">Presentación Dinama/Mvotma</a><br>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-1" target="_blank">Presentación Montes del Plata</a>
      </td>
      <td>09/2012</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-22013" target="_blank">CSMP Acta 7 de marzo 2013</a></td>
      <td>--</td>
      <td>03/2013</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-32013" target="_blank">CSMP Acta 29 de mayo 2013</a></td>
      <td><a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexo-acta-3" target="_blank">Presentación Montes del Plata</a></td>
      <td>05/2013</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-42013" target="_blank">CSMP Acta 21 de agosto de 2013</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos" target="_blank">Presentación Montes del Plata 1 </a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos" target="_blank">Presentación Montes del Plata 2 </a>

      </td>
      <td>08/2013</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>CSMP Acta 26 de febrero de 2014</td>
      <td><a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/presentacion-comision-seguimiento-ambiental" target="_blank">Presentación Comisión de Seguimiento Ambiental - 26/02/2014</a></td>
      <td>02/2014</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-62014" target="_blank">CSMP Acta 23 de abril 2014</a></td>
      <td><a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexo-acta-6" target="_blank">Presentación Comisión de Seguimiento 23 de Abril 2014</a></td>
      <td>04/2014</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-72014" target="_blank">CSMP Acta 29 de julio de 2014</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-7" target="_blank">Presentación DINAMA/MVOTMA 29 de julio 2014</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-7" target="_blank">Presentación Montes del Plata 29 de julio 2014</a>
      </td>
      <td>07/2014</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-82014" target="_blank">CSMP Acta 06 de noviembre de 2014</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-8" target="_blank">Presentación Dinama / Mvotma 06 de noviembre de 2014</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-8" target="_blank">Presentación Montes del Plata 06 de noviembre de 2014</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-8" target="_blank">Presentación Div. Control Dinama / Mvotma 06 de noviembre de 2014</a>

      </td>
      <td>11/2014</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-92014" target="_blank">CSMP Acta 17 de diciembre de 2014</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexo-acta-9-17-diciembre-2014" target="_blank">Convocatoria Dinama / Mvotma para el 17 de diciembre de 2014</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexo-acta-9-17-diciembre-2014" target="_blank">Presentación Montes del Plata 17 de diciembre de 2014</a><BR>

      </td>
      <td>12/2014</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td><a href="https://www.gub.uy/ministerio-ambiente/institucional/informacion-de-gestion/actas/acta-n-102015" target="_blank">CSMP Acta 15 de octubre de 2015</a></td>
      <td>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-10" target="_blank">Presentación Div. Control Ambiental Dinama / Mvotma, 15 de octubre de 2015</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-10" target="_blank">Presentación Div.Impacto Ambiental Dinama / Mvotma, 15 de octubre de 2015</a><BR>
      	<a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-10" target="_blank">Presentación Montes del Plata, 15 de octubre de 2015</a>


      </td>
      <td>10/2015</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>CSMP Ambiental 2017</td>
      <td><a href="https://www.gub.uy/ministerio-ambiente/comunicacion/publicaciones/anexos-acta-11" target="_blank">Presentación Montes del Plata, noviembre de 2017</a></td>
      <td>11/2017</td>
      <td>--</td>
    </tr>                





  </tbody>
</table>


		</div>
		<?php // } ?>
		<!-- Comisiónd e Seguimiento -->


		
		<div class="col-md-12"><br></div>
		<div class="col-md-12"><br></div>

		<!-- Visualización en mapa -->
		<?php if ($pathiframeVisualizador != "") { ?>
			<div class="col-md-12">
				<h1 class="title_line text-center">
					<span>Visualización: <?php the_title(); ?></span>
				</h1>
			</div>
			<div class="col-md-12">
				<iframe style="border-radius: 10px;" id="ifr" class="manifiesto page-icon preview-pane geoserver" frameborder="0" allowfullscreen scrolling="yes" src="<?php echo $pathiframeVisualizador; ?>"></iframe>
			</div>
		<?php } ?>
		<!-- Visualización en mapa -->

		<div class="col-md-12" id="documentos"></div>
		




		<div class="col-md-12"><br></div>
		<div class="col-md-12"><br></div>

		
		<!-- Temas del Proyecto -->
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
			<div class="col-md-12">
				<h1 class="title_line text-center">
					<span>Documentos: <?php the_title(); ?></span>
				</h1>
			</div>

			<div class="col-md-12">
				<input type="search" placeholder="Buscar Documentos..." class="form-buscador form-control" /> 
		    	<i class="fa fa-search" id="botonsearch"></i>
		    </div>

		    <div class="proyecto-down"></div>

			<div class="col-md-12">
        		
					<span class="hidden-info">
						<span><?php echo limpiaCadena($property['title']);  ?></span>
						<span><?php echo limpiaCadena($property['description']);  ?></span>							
					</span>

					<div class="col-md-12-">
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
										          <a class="tramite" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $y;?>">
										          	<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $desc_tramite[$i]; // $name_tramite[$i];?>
										          </a>
										        </h4>
										      </div>

										      <div id="collapse<?php echo $y; ?>" class="panel-collapse collapse">
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
		<!-- //Temas del Proyecto -->



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




<?php //get_sidebar(); ?>

<?php get_footer(); ?>
