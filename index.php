<?php get_header(); ?>
<p> &nbsp; </p>
<main role="main">


	<!-- Slide -->	
<!--
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
-->	
	

	<!-- Popup home -->
	<?php if ( is_home() ) { ?>

	<a id="irn_landing" href="https://www.ambiente.gub.uy/oan/irnp/" class="fullwidth"></a>

	<script type="text/javascript">

	(function ($, root, undefined) {
		
		/*
		$( window ).load(function() {
			document.getElementById("irn_landing").click();
		});
		*/

	})(jQuery, this);

	</script>	

	<?php } ?>
	<!-- Popup home -->



	<?php } ?>
	<!-- Slide -->

	<!-- Content -->
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
    ?>
    
<section class="container-fluid backkground-box">
		


		<div class="col-md-12">
			<?php foreach ($theme_['boxes'] as $box => $property){ ?>
				
				<?php 
						
						$valor = $property['url']; 
						$parts = explode("*", $valor); 
						$texto = $parts[2]; ?>
				
				<?php

				if (($property['title'] == "Análisis satelital de la calidad de agua del río Negro") || ($property['title'] == "Carto") || ($property['title'] == "Iniciativa para el Río Negro") ) {
					$colx = 8;
				}else{
					$colx = $col;
				}	
				
				?>
				
				<div class="col-md-<?php echo $colx; ?>">

					<!-- Boxed -->
					<?php if ($property['title'] == "Identificación de floraciones algales---") { /*pARA QUE NO ENTRE AL LINK "---"*/ ?>
						<!-- Visualizador identificador de floraciones algales : Bloom-->
						<a href="https://observatorioan.users.earthengine.app/view/visualizador-floraciones-dinacea" target="_blank">


					<?php }else if ($property['title'] == "Carto") { ?> 
							<div class="boxcarto">

							<iframe src='https://flo.uri.sh/visualisation/9834740/embed' title='Interactive or visual content' class='flourish-embed-iframe' frameborder='0' scrolling='no' style='width:100%;height:450px;' sandbox='allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation'></iframe>
							<!--
							<div style="left: 0; width: 100%; height: 450px; position: relative;"><iframe src="https://rsegui.carto.com/viz/d0f7ddc7-9089-4666-aced-364ada448e7f/embed_map" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen></iframe></div>
							-->


							</div>

							

					<?php }else{?>

						<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>">

					<?php } ?>

						<?php if  (($texto == "") && ($property['title'] != "Carto") && ($property['title'] != "Actualizaciones")){?>
						<div class="box">
							
							
<div class="azul">
								<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
							
								<h2 class="title_line text-center"><span class="blanco"><?php echo $property['title']; ?></span></h2>
							</div>	
								


								<div style="padding: 10px;">
								<p><?php echo $property['description']; ?></p>
								</div>
							

						</div>
						<?php } ?>						
					</a>
					<!--// Boxed -->

					<!-- Boxed News -->
					<?php if ($property['title'] == "Actualizaciones") {?>
					<div class="boxcarto">			
					

<div id="h1slide">
        	<?php 
			$w=1;
			
			foreach ($theme_['noticias'] as $noticias => $property){
			

			?>
				
					
				<div>
				<div class="azul">
				<!-- <a href="#" target="_blank"> -->
				
				<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
				
				<!-- </a> -->
				 <div class="prevarrow" id="prev"> << </div>
				 <div class="nextarrow" id="next"> >> </div>
				<div class="boxslidertitle"><?php echo $property['title']; ?></div>
				</div>	
				<div class="col-md-12">
				<p><?php echo $property['description']; ?></p>
				</div>
				
				
									
			</div>
		
			<?php 
			$w++;
			} 
			?>	

			

						</div>
						
				
						
						
					</div>
					<?php } // fin if ?>
					<!--// Boxed News -->	
				</div>		

			<?php 
				
			
			} //fin foreach 
			
			
			?>
		</div>
	</section>
	<!-- Content -->
</main>

<script type="text/javascript">
	
(function($) { $(document).ready(function(){
$('#h1slide > div:gt(0)').hide();


	$("#next").click(function(){
		$('#h1slide > div:gt(0)').hide();
		$('#h1slide > div:first').fadeOut(500).next().fadeIn(500).end().appendTo('#h1slide');
	})	

	$("#prev").click(function(){
		$("#h1slide > div:last").finish();
		$('#h1slide > div:gt(0)').hide();
		$('#h1slide > div:last').prependTo('#h1slide').fadeIn(500).next().fadeOut(500);
		
	}) 
	
	
setInterval(function() {
  $('#h1slide > div:first').fadeOut(2000).next().fadeIn(2000).end().appendTo('#h1slide');
  
 
  
  
  
}, 6000);
    })})(jQuery)
	

</script> 








<?php get_footer(); ?>
