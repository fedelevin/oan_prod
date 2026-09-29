<?php 
/* 
 * Template Name: NAP Costas2
 * Description: Página del Observatorio
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

//get_header('polonio'); 
get_header(); ?>
<?php global $theme_; ?>

<?php
/*
//norberto
$DB_Server = "172.20.0.35";    	
$DB_Username = "metadatos"; 			
$DB_Password = "metadatos2022";    		
$DB_DBName = "metadatos";    			
$db = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_DBName);
//norberto



$link = mysqli_connect("172.20.0.35", "admin_sig", "admin_sig");
mysqli_select_db($link, "admin_sig");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result = mysqli_query($link, "SELECT * FROM capas WHERE activa = 1 and nombre_real = '".$igeo."' and publicar_geoservicio = 1 ORDER BY nombre_leyenda ASC;");
mysqli_data_seek ($result, 0);
*/
?>



		<!-- section -->
</div> <!-- cierro wrapper 
<br class="clear">-->
			<?php //if (have_posts()): while (have_posts()) : the_post(); ?>


				<!-- Encabezado -->
				<?php 
				/*
				
				if($theme_['encabezados_switch'] == 1){ ?>
				<div id="container">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		<?php if($property['title'] == get_the_title()){ ?>

							<div class="secBanner">
								<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
							</div>
							<div class="secTitle">
							 	
NAP Costas :: Datos y Consideraciones Técnicas
							</div>
		        		<?php } ?>

					<?php } ?>
				</div>
				<?php } 
				
				*/
				?>
				<!-- Encabezado -->
<br class="clear">
<!-- abro wrapper -->
<div class="wrapper">
	<main role="main">
	<section class="container-fluid background-container">	
			<div class="container">




						<div class="panel-group">
							<div class="panel panel-default">
							  <h3 class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Introducción</h3>
							  <div class="panel-body">

							  	Aquí se presentan los datos y la información producida en el marco del NAP Costas, organizados por nivel temático e integrada a los recursos del OAN. Este es un proyecto de gran porte y debido a la cantidad y diversidad de información, se ha organizado de una forma práctica para facilitar su aprovechamiento.
						
							  </div>
							  <h4 class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> CONSIDERACIONES TÉCNICAS</h4>
							  <div class="panel-body">

							  	<p class="has-text-color" style="color:#68965f;font-size:18px"><a href="https://www.ambiente.gub.uy/oan/documentos/Observaciones-y-limitaciones-de-los-informes-elaborados-en-el-marco-del-NAP-Costas-final.pdf">Observaciones sobre la información manejada en los estudios elaborados en el marco del Plan Nacional de Adaptación de la Zona Costera de Uruguay</a></p>
						
							  </div>							  
							</div>
						</div>

<!--
						<div class="panel-group">
							<div class="panel panel-default">
							  <h3 class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> DINÁMICA DEL RÍO DE LA PLATA Y DE LA COSTA OCEÁNICA</h3>
							  <div class="panel-body">
							  </div>

							  <h4 class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> :: OLEAJE</h4>
							  <div class="panel-body">

							  	<p class="has-text-color" style="color:#68965f;font-size:18px"><a href="https://www.ambiente.gub.uy/oan/datos-abiertos/#datos-abiertos-12" data-type="URL" target="_blank" rel="noreferrer noopener">Datos abiertos</a></p>
						
							  </div>							  
							</div>
						</div>

-->
<?php
/*
echo "<pre>";
print_r($theme_['datos_abiertos']);
echo "</pre>";
*/
?>


	        	<?php 
				$da=1;
				foreach ($theme_['datos_abiertos'] as $slide => $property){ 
				
				$titarray = array("DINÁMICAS MARINAS (NAP COSTAS)", "DEFINICIÓN DE LA LINEA DE COSTA (NAP COSTAS)", "VARIABILIDAD OBSERVADA Y PROYECCIÓN DEL CLIMA EN URUGUAY (NAP COSTAS)", "MODELO DE INUNDACIÓN COSTERA (NAP COSTAS)", "EXPOSICIÓN A IMPACTOS DE INUNDACIÓN COSTERA (NAP COSTAS)", "EXPOSICIÓN A IMPACTOS DE EROSIÓN COSTERA (NAP COSTAS)", "RIESGO DE INUNDACIÓN COSTERA (NAP COSTAS)", "VALORACIÓN ECONÓMICA DE ACTIVOS EN ZONA COSTERA (NAP COSTAS)", "USO DE SUELO (RELEVAMIENTO COLLECT EARTH) (NAP COSTAS)" );

				if (in_array ($property['title'], $titarray)) {
				
				?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">
						
						<!-- Box Info ////////////////////////////////////////////////////////////////////-->
						<div class="box-info container-fluid">
							<div class="col-md-3">
								<div class="box-info-left">
									<div class="icon pull-left">
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
									</div>
									<div class="box-info-titles">
										<div class="subtitle">Datos Abiertos</div>
										<div class="title_">
											<strong>
											<?php 
												$existe = strstr($property['title'] , '+', true);
												if($existe == "+"){
													echo $existe; ?>	
													<span class="hidden-info"><?php echo limpiaCadena($existe); ?></span>										
													<?php
												}else{
													//echo $property['title'];
													echo $value = str_replace("+", "", $property['title']); ?>
													<span class="hidden-info"><?php echo limpiaCadena($value); ?></span>
													<?php
												}
												?>
											</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="info">									
									<p><?php echo $property['description'];?></p>
									<span class="hidden-info"><?php echo limpiaCadena($property['description']); ?></span>
									
									<p>

								

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[0];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[0]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>">
											<i class="fa fa-download" aria-hidden="true"></i> Metadatos (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones); ?>)
										</a>
										<?php } ?>

										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[1];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[1]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> Campos (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>)
										</a>
										<?php } ?>
										
										<?php									
										$valor = $property['url']; $parts = explode(',', $valor); $icon = $parts[2];
										$extensiones = explode("_", $icon); $extension = end($extensiones);
										if(!empty($extension)){ ?>									
										<a href="<?php $valor = $property['url']; $parts = explode(',', $valor); echo $icon = $parts[2]; ?>" download class="btn btn-green-light" download class="btn btn-green" data-balloon="Descargar archivo: <?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>">
											<i class="fa fa-download" aria-hidden="true"></i> Referencia (.<?php $extensiones = explode(".", $icon); echo $extension = end($extensiones);?>)
										</a>
										<?php } ?>



									

									</p>

									<?php 
									$existe = strstr($property['title'] , '+');
									if($existe != "+") {?>
										<div class="view-more"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></div>				
									<?php } ?>

									<dir class="info-display">
										
										<?php 
											$args = array(
											        'post_type' => 'datos-abiertos',
											        'tipo' => $property["title"],
											        'order' => 'ASC',
											);
											$loop = new WP_Query($args);
										if (have_posts()): while ($loop->have_posts()) : $loop->the_post();
											$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
											$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
											$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
											$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
											$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
											$ods = get_post_meta(get_the_ID(),'_cmb_ods', true);
											$ods2 = get_post_meta(get_the_ID(),'_cmb_ods2', true);
											$zip = get_post_meta(get_the_ID(),'_cmb_zip', true);
											$zip1 = get_post_meta(get_the_ID(),'_cmb_zip1', true);
											$zip2 = get_post_meta(get_the_ID(),'_cmb_zip2', true);
											$zip3 = get_post_meta(get_the_ID(),'_cmb_zip3', true);
											$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
											$query = get_post_meta(get_the_ID(),'_cmb_query', true);
											$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);
											$mostrar = get_post_meta(get_the_ID(),'_cmb_mostrar', true);
											$editor = get_post_meta(get_the_ID(),'_cmb_editor', true);
											$idref=get_post_meta(get_the_ID(),'_cmb_idref', true);
											$publicaciones=get_post_meta(get_the_ID(),'_cmb_publicacion', true);
											//echo "<h1>".$publicaciones."</h1>";
											
										?>

											<h2 class="title_line"><span><i class="fa fa-caret-right" aria-hidden="true"></i> <?php the_title(); ?></span></h2>
											<span class="hidden-info"><?php echo limpiaCadena(the_title()); ?></span>
											<p><?php echo $resume; ?></p>
											<span class="hidden-info"><?php echo limpiaCadena($resume); ?></span>

											<?php if(!empty($editor)){ ?><p><?php echo $editor; ?></p><?php } ?>

											<?php if(!empty($xls)){ ?>
												<a href="<?php echo $xls; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $xls); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xls
												</a>
											<?php } ?>

											<?php if(!empty($csv)){ ?>
												<a href="<?php echo $csv; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $csv); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .csv
												</a>
											<?php } ?>
											
											<?php if(!empty($txt)){ ?>
												<a href="<?php echo $txt; ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $txt); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .txt
												</a><?php 
											} ?>
											
											<?php if(!empty($ods)){ ?>
												<a href="<?php echo $ods ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $ods); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xlsx
												</a>
											<?php } ?>

											<?php if(!empty($ods2)){ ?>
												<a href="<?php echo $ods2 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $ods2); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .xlsx
												</a>
											<?php } ?>

											<?php if(!empty($zip)){ ?>
												<a href="<?php echo $zip ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>

											<?php if(!empty($zip1)){ ?>
												<a href="<?php echo $zip1 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip1); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>

											<?php if(!empty($zip2)){ ?>
												<a href="<?php echo $zip2 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip2); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>	

											<?php if(!empty($zip3)){ ?>
												<a href="<?php echo $zip3 ?>" download class="btn btn-green" data-balloon="<?php $nombre_file = explode('/', $zip3); echo "Archivo: ".array_pop( $nombre_file ); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> .zip
												</a>
											<?php } ?>																																												

											<?php if((!empty($query))||(!empty($embeber))){ ?>
												<a href="<?php the_permalink(); ?>" class="btn btn-green-light">
													<i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos
												</a>
											<?php } ?>
											<?php
											if(!empty($idref)){ 
											$exploref=explode(",", $idref);
											foreach($exploref as $idgeoservicio) { 
											?>
												<a target="_blank" href="https://www.ambiente.gub.uy/oan/detalle-de-geoservicio/?igeo=<?php echo $idgeoservicio; ?>" class="btn btn-green" data-balloon="Ver Geoservicio para <?php the_title(); ?>" data-balloon-pos="top">
													<i class="fa fa-download" aria-hidden="true"></i> Visualización de Capa
												</a>
											<?php 
											} //fin foreach
											} // fin viene algo
											?>	
											<br><br>
											<?php
											if(!empty($publicaciones)){ 
											echo "<p><strong>Publicaciones:<br /></strong>";
											$explopar=explode("+", $publicaciones);
											foreach($explopar as $linkdoc) { 
											$spliturl= explode("*", $linkdoc);
											
											
											?>
												<i class="fa fa-link" aria-hidden="true"></i>
 <a target="_blank" href="<?php echo $spliturl[1]; ?>" data-balloon="Acceder a Documento Online" data-balloon-pos="top">
													<?php echo $spliturl[0]; ?>
												</a><br />
											<?php 
											} //fin foreach
											echo "</p>";
											} // fin viene algo
											?>	
											<br><br>											
											
											
											

										<?php endwhile; ?>
										<?php endif; ?>
									</dir>				
																													
								</div>
							</div>
						</div>
					</div>
					<!-- Box Info ////////////////////////////////////////////////////////////////////-->

				<?php 
				$da++;
				} //end if
				} //end foreach 
				?>







		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>