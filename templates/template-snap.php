<?php 
/* 
 * Template Name: Snap (no mapa)
 * Description: Página del SNAP
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>


	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">	


			<!-- Areas protegidas -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php 
					foreach ($theme_['datos_abiertos_logo'] as $slide => $property){ 
						$title = get_the_title();
						if($property['title'] == $title){
				?>
							<div class="text-center"><img src="<?php echo $property['image']; ?>"></div>
				<?php 
						}
					}
				?>

				<div class="col-md-12">
					<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-md-12">

				<input type="search" placeholder="Buscar Áreas protegidas..." class="form-buscador form-control" />
				<i class="fa fa-search" id="botonsearch"></i>

	        	<?php foreach ($theme_['snap'] as $slide => $property){ ?>
	        		<?php //echo $property['title']; ?>

	        		<div class="buscador">

						<!-- Box Info ////////////////////////////////////////////////////////////////////-->
						<div class="box-info container-fluid">

							<a href="<?php echo $property['url'];?>">
						
							<div class="col-md-3">
								<div class="box-info-left">
									<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
								</div>
							</div>
							<div class="col-md-9">
								<div class="info">								
									<h2><?php echo $property['title'];?></h2>
									<p><?php echo $property['description'];?></p>												
									<!--<a href="<?php //echo $property['url'];?>" class="btn btn-green-light"><i class="fa fa-eye" aria-hidden="true"></i> Filtrar datos</a>	-->	
								</div>
							</div>

						</a>
						
						</div>
					</div>
					<!-- Box Info ////////////////////////////////////////////////////////////////////-->

				<?php } ?>

				</div>

				<br class="clear">


			</article>
			<!-- /Areas protegidas -->


		</section>
		<!-- /section -->
	</main>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
