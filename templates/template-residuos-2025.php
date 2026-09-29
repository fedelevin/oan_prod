<?php 
/* 
 * Template Name: Residuos 2025
 * Description: Página de Residuos 2025
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

 get_header(); ?>

<p> &nbsp; </p>
<main role="main">

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
	  ?>

		<!-- Content -->    
		<section class="container-fluid backkground-box">

			<div class="col-md-12">

				<?php foreach ($theme_['boxes-residuos-2025'] as $box => $property){
					
					$valor = $property['url']; $parts = explode("*", $valor); $texto = $parts[2];

					if ($property['title'] == "PNGR") {
						$colx = 8;
					}else{
						$colx = $col;
					}?>
					
					<div class="col-md-<?php echo $colx; ?>">
							<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>">
								<?php if  (($texto == "") && ($property['title'] != "Carto") && ($property['title'] != "Actualizaciones")){ //Siempre que no tenga los títulos de: "Carto" ni "Actualizaciones" ?>
							
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
					</div>

				<?php } ?>

			</div>

		</section>
		<!-- Content -->

</main>

<?php get_footer(); ?>