<?php 
/* 
 * Template Name: INR - Iniciativa del Rio Negro
 * Description: Página Iniciativa del Rio Negro
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

		<!-- section -->
</div> <!-- cierro wrapper -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="container">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		

		        		<?php if($property['title'] == get_the_title()){ ?>

							<div class="secBanner">
								<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
							</div>

		        		<?php } ?>

					<?php } ?>
				</div>
				<?php } ?>
				<!-- Encabezado -->



				<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>

				<br><br>

				<div class="wrapper">

					<div class="container"><img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/images/line-shadow.jpg"></div>

				<div class="col-md-8">
					<div class="box_irn_intro">
						<p><?php echo $theme_['idrn_text']; ?></p>
						<a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="box_irn_intro" style="padding: 10px!important;">

						<br><br><br><br>

						<a href="https://www.ambiente.gub.uy/oan/proyectos-iniciativa-del-rio-negro/" class="fullwidth" style="background-color: red!important;">
							<img class="img-responsive center-block" src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/02/proyectos-IRN6.png">
						</a>


						<br><br><br><br>


					</div>
					<!--
					<iframe id="iframe_irn" scrolling="no" title="Interactive or visual content" sandbox="allow-same-origin allow-forms allow-scripts allow-downloads allow-popups allow-popups-to-escape-sandbox allow-top-navigation-by-user-activation" style="width: 80%; height: 900px;" src="https://flo.uri.sh/visualisation/10602601/embed?auto=1" frameborder="0"></iframe>-->
				</div>
				
				</div>	
<br /><br />


<?php
/*
?>
<!-- Box Info -->
				<div class="col-md-12">
			

				<div class="box-info1 container-fluid">

			<div class="container">
<img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/images/line-shadow.jpg">			
<span style="font-weight: bold; font-size: 19px">
Valores de Clorofila-a, Turbidez y Temperatura en los embalses del Río Negro medidos en forma automática cada 30 minutos
</span>

<style>

@media (min-width: 400px) {
  #iboyas {
    height: 500px;
  }


@media only screen and (max-width:991px) {	
  #iboyas {
    height: 1200px !important;
  }


  
</style>  

<?php

$dbRecepcion = mysqli_connect("172.20.0.46", "lect_rel_oan", "accesoRelojOan2023-MA.Mayo", "recepcion_datos_admin");
$sqlBoyas = "SELECT * FROM vista_boyas_sto_json";
$resBoyas = mysqli_query($dbRecepcion, $sqlBoyas);
$cant = mysqli_num_rows($resBoyas);

if ($cant>0){
?>

			
					<iframe src="https://www.ambiente.gub.uy/oan/gauges/" class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" id="iboyas"></iframe>	


<?php 
}else{

?>			
<p align="center"><br /><br /><br />
<span style="font-weight: bold; font-size: 16px">
Momentáneamente no disponibles
</span><br /><br /><br />
</p>

<?php 
}

?>			
					
					
					
		</div>
			
		
					</div>
				</div>
				<!-- Box Info -->
<?php
*/
?>
				<div class="container"><img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/images/line-shadow.jpg"></div>

				<br><br>

<br class="clear">

<!-- abro wrapper -->
<div class="wrapper">
	<main role="main">
		<section class="container-fluid background-container">	

				<!-- Modal -->
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
				      <p><?php //the_content(); ?> <?php echo $theme_['idrn_text_popup']; ?></p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Modal -->

			<?php endwhile; ?>
			<?php endif; ?>


			<!-- Content -->
		    <?php 
		    	$class_search = $theme_['costero_marino_columns'];
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


			<!-- IRN -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
	        	<?php foreach ($theme_['idrn'] as $slide => $property){ ?>


	        		<?php
						$titulo = $property['title'] ;
						$ultimo_caracter = substr($titulo, -1);/* si es "*" abre en otra ventana el contenido*/
	        		?>

					<!-- Boxed -->
					<div class="col-sm-<?php echo $col; ?>">
						<!--<a target="blank_" class="fullwidth" href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" >-->
						<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[0]; ?>" <?php if ($property['title'] == "Visualizador"){ echo 'target="_blank"'; } ?> <?php if($ultimo_caracter != '*'){ ?> class="fullwidth" <?php } ?>>
							<div class="box_irn">
						
								<div class="azul">
										<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
										
										<h2 class="title_line text-center">
											<span class="blanco">

											<?php

											$titulo = $property['title'];
											$titulo = trim($titulo, '*');
											echo $titulo; 
											
											?>

											</span>
										</h2>
										
										</div>
										<div class="col-sm-12">
										<p><?php echo $property['description']; ?></p>
										</div>	

							<?php if($property['title'] == 'Banderas Sanitarias'){?>
											
									
								<div class="oliva">	
										
									<?php 
									
									
									if($parts[3]!=""){?>
										<a href="<?php $valor = $property['url']; $parts = explode("*", $valor); echo $redirect = $parts[3]; ?>">
											<i class="fa fa-pie-chart fa-2" aria-hidden="true"></i>	Ver Gráfico											
										</a>																		
									<?php } ?>
									
									<?php 
									
									
									if (($parts[3]!="") && ($parts[2]!="")) { echo " &nbsp; | &nbsp; "; } ?>
									
									
									<?php if($parts[2]!=""){?>

										<a href="<?php 
											$valor = $property['url']; 
											$parts = explode("*", $valor); 
											echo $redirect = $parts[2]; 
											$extension = explode(".", $parts[2]); 
											$extension = end( $extension );
											?> ">
											
											<i class="fa fa-download fa-2" aria-hidden="true"></i> Descargar							
										</a>

									<?php } 
									
									
									?>
								</div>
								

							<?php } 
							
							
							?>	

								
							</div>
						</a>
					</div>
					<!--// Boxed -->


				<?php } ?>







				<div class="container text-center" style="display: none;">
					<div class="col-md-4" >logo 1</div>	
					<div class="col-md-4" >logo 1</div>	
					<div class="col-md-4" >logo 1</div>	

				</div>

				</div>

				<br class="clear">
			</article>
			<!-- /IRN -->




			<div class="container"><img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/images/line-shadow.jpg"></div>

		</section>
		<!-- /section -->
	</main>

	


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
