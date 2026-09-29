<?php get_header(); ?>

<main role="main">



	<!-- Slide -->	
	<?php if($theme_['slide_switch'] == '1') { ?>
	<section>
		<div id="slide" class="slide">
        	<?php foreach ($theme_['slide'] as $slide => $property){ ?>
        		<a href="<?php echo $property['url']; ?>">
        			<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
        		</a>
			<?php } ?>
		</div>	
	</section>
	<img class="center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
	<?php } ?>
	<!-- Slide -->
	
	<?php if($theme_['logo_secundario']) { ?>
	<div class="logo-sub">
		<img class="img-responsive center-block" src="<?php echo esc_url($theme_['logo_secundario']['url']); ?>">
	</div>	
	<?php } ?>

	<!-- Contentxx -->
    <?php 
    	$class_search = $theme_['columns'];
		if($class_search == 1){
			$col = '12';
		}elseif($class_search == 2){
			$col = '6';				
		}elseif($class_search == 3){
			$col = '4';			
		}elseif($class_search == 4){
			$col = '3';
		}elseif($class_search == 6){
			$col = '2';
		}elseif($class_search == 12){
			$col = '1';
		}
		//$link = $property['url'];
		
		echo "<!-- PROP";
		
		print_r($property)
		
		echo "-->";
    ?>
    
	<section class="container-fluid backkground-box">
		
		<!-- Infomación sobre el Observatorio 
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="box2">
				  <div class="alert alert-success alert-dismissible fade in">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					    <p>
					    <strong>Plataforma de información ambiental</strong> con acceso a datos abiertos, representaciones gráficas e información de variables ambientales y gestión. Consulta de mapas y aplicaciones automatizadas y dinámicas con imágenes satelitales actuales. <strong>El Observatorio Ambiental Nacional</strong> es una herramienta dinámica de consulta pública que se encuentra en continuo crecimiento por lo que invitamos a su consulta periódica de manera de aprovechar todas sus características. <strong>Ley 19.147</strong>, <strong>Ley 19.889 Art. 293.</strong>
						</p>
				  </div>
				</div>
			</div>
		</div>
	 Infomación sobre el Observatorio -->


		<div class="col-md-12">
			<?php foreach ($theme_['boxes'] as $box => $property){ ?>
				<?php $valor = $property['url']; $parts = explode("*", $valor); $texto = $parts[2]; ?>
				
				<?php
				
				if (($property['title'] == "Análisis satelital de la calidad de agua") || ($property['title'] == "Carto") || ($property['title'] == "Geoportal")) {
				$colx = 8;
				}else{
				$colx = $col;
				}	
				
				?>
				
				<div class="col-md-<?php echo $colx; ?>">

					<!-- Boxed -->
					<?php if ($property['title'] == "Identificación de floraciones algales") { ?>
						<!-- Visualizador identificador de floraciones algales : Bloom-->
						<a id="bloom" class="fullwidth" href="https://dinama.users.earthengine.app/view/visualizador-blooms-dinama" class="full">


					<?php }else if ($property['title'] == "Carto") { ?>
<div class="box">



<div style="left: 0; width: 100%; height: 520px; position: relative;"><iframe src="https://rsegui.carto.com/viz/d0f7ddc7-9089-4666-aced-364ada448e7f/embed_map" style="top: 0; left: 0; width: 100%; height: 450px; position: absolute; border: 0;" allowfullscreen></iframe></div>



</div>

					<?php }else{?>

						<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>">

					<?php } ?>

						<?php if  (($texto == "") && ($property['title'] != "Carto")){?>
						<div class="box">
							<div class="azul">
							
					
							<!--<img class="img-responsive center-block" src="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $icon = $parts[1]; ?>">-->
								<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
							
								<h2 class="title_line text-center"><span class="blanco"><?php echo $property['title']; ?></span></h2>
								
						</div>								
								<p><?php echo $property['description']; ?></p>
								


						</div>
						<?php } ?>						
					</a>
					<!--// Boxed -->

					<!-- Boxed News -->
					<?php if($texto != ""){?>
					<div class="box-news">							
						<img class="img-responsive center-block" src="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $icon = $parts[1]; ?>">
						<div class="col-md-12">								
							<h2 class="title_line text-center"><span><?php echo $property['title']; ?></span></h2>
							<p><?php echo $property['description']; ?></p>

								<!-- Mostrar Noticias-->
								<div class="noticias">
						        	<?php foreach ($theme_['noticias'] as $noticias => $property){ ?>
						        		<div class="news">
							        		<h5 class="text-center"><strong><?php echo $property['title']; ?></strong></h5>
							        		<p style="font-size: 12px;">
							        			<?php echo $property['description']; ?>
							        			<?php if($property['url'] != ""){?>
							        			<a href="<?php echo $property['url']; ?>"> <i class="fa fa-plus" aria-hidden="true"></i></a>
							        			<?php } ?>
							        		</p>
						        		</div>
									<?php } ?>
								</div>
								<!-- Mostrar Noticias-->
								
						</div>
					</div>
					<?php } ?>
					<!--// Boxed News -->	
				</div>		

			<?php 
				
			
			} //fin foreach 
			
			
			?>
		</div>
	</section>
	<!-- Content -->

</main>
<?php get_footer(); ?>
