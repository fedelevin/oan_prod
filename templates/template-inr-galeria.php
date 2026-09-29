<?php 
/* 
 * Template Name: INR - Galeria de fotos
 * Description: Galeria de fotos
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>


    <style>

    .swiper-container {
        width: 100%;
        height: 100%;
        margin: 20px auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        line-height: 300px;
    }


    </style>

<a href="#" data-toggle="modal" data-target="#exampleModalLong" id="popup"></a>

	<main role="main">

		<!-- section -->
		<section class="container-fluid background-container">	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<!-- GALERIA SLIDE 1 ///////////////////////////////////////////////-->
				<section class="container-fluid backkground-box">
				    <div class="swiper-container">
				        <div class="swiper-wrapper">


							<?php //foreach ($theme_['premio_galeria'] as $slide => $property){ ?>

								<div class="swiper-slide">
						
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/costa-del-rio-negro_ch.jpg">
									
									<h4>Metadato </h4>
								</div>

								<div class="swiper-slide">
									
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rio-negro-meandro-arenosos_ch.jpg">
									
									<h4>Metadato</h4>
								</div>

								<div class="swiper-slide">
									
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete-embalse_ch-1.jpg">
									
									<h4>Metadato</h4>
								</div>

								<div class="swiper-slide">
									
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete_ch-1.jpg">
									
									<h4>Metadato</h4>
								</div>

							<?php //} ?> 	


				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next"></div>
				        <div class="swiper-button-prev"></div>
				    </div>
				</section>
				<!-- GALERIA SLIDE 1 ///////////////////////////////////////////////-->


				<!-- GALERIA SLIDE 2 ///////////////////////////////////////////////-->
				<section class="container-fluid backkground-box">
				    <div class="swiper-container2">
				        <div class="swiper-wrapper">


							<?php //foreach ($theme_['premio_galeria'] as $slide => $property){ ?>

								<div class="swiper-slide">
									<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/costa-del-rio-negro_ch.jpg" class="fullwidth">
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/costa-del-rio-negro_ch.jpg">
									</a>
									<h4>Metadato </h4>
								</div>

								<div class="swiper-slide">
									<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rio-negro-meandro-arenosos_ch.jpg" class="fullwidth">
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rio-negro-meandro-arenosos_ch.jpg">
									</a>
									<h4>Metadato</h4>
								</div>

								<div class="swiper-slide">
									<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete-embalse_ch-1.jpg" class="fullwidth">
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete-embalse_ch-1.jpg">
									</a>
									<h4>Metadato</h4>
								</div>

								<div class="swiper-slide">
									<a href="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete_ch-1.jpg" class="fullwidth">
										<img src="https://www.ambiente.gub.uy/oan/wp-content/uploads/2023/03/rincon-del-bonete_ch-1.jpg">
									</a>
									<h4>Metadato</h4>
								</div>

							<?php //} ?> 	


				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				        <!-- Add Arrows -->
				        <div class="swiper-button-next"></div>
				        <div class="swiper-button-prev"></div>
				    </div>
				</section>
				<!-- GALERIA SLIDE 2 ///////////////////////////////////////////////-->







				<!-- GALERIA DE VIDEOS 2021 ///////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de videos</span></h1>
					
					</dir>

					<div class="col-md-12 slide-videos">								
					<?php foreach ($theme_['videos_premio_nacional'] as $slide => $property){ ?>
						<div class="col-md-12 video_single">
							<h2 class="title_line"><span> <?php echo $property['title']; ?></span></h2>
							<a target="blank_" href="<?php echo $property['url']; ?>" class="fullwidth" data-balloon="<?php echo $property['title']; ?>" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
						</div>
					<?php } ?> 						
					</div>

				</div>
				<!-- GALERIA DE VIDEOS 2021 ///////////////////////////////////////////////-->


				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos 1</span></h1>
					</dir>

					<div class="col-md-12 slide-fotos-premio">								
					<?php foreach ($theme_['premio_galeria'] as $slide => $property){ ?>
						<div class="col-md-12 video_single">
							<a title="Informacion y <br> meta datos de la foto. <br> Otra información relativa de la foto." target="blank_" href="<?php echo $property['image']; ?>" data-gallery="galeria" class="fullwidth" data-balloon="foto" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
						</div>
					<?php } ?> 						
					</div>

				</div>
				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->

		    	


				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos 2</span></h1>

					</dir>

					<div class="col-md-12 slide-fotos-premio1">								
					<?php foreach ($theme_['premio_galeria'] as $slide => $property){ ?>

						<?php if ($i < 6) { $i++; ?>

						<div class="col-md-4 video_single1">
							<a title="Informacion y <br> meta datos de la foto. <br> Otra información relativa de la foto." target="blank_" href="<?php echo $property['image']; ?>" data-gallery="galeria" class="fullwidth" data-balloon="foto" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
							<p>Info de la foto</p>
						</div>

						<?php } ?>
					
					<?php } ?> 						
					</div>

				</div>
				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->



				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos 3</span></h1>

					</dir>

					<div class="col-md-12 slide-fotos-premio1">								
					<?php foreach ($theme_['premio_galeria'] as $slide => $property){ ?>

						<?php if ($z < 4) { $z++; ?>

						<div class="col-md-6 video_single1">
							<a title="Informacion y <br> meta datos de la foto. <br> Otra información relativa de la foto." target="blank_" href="<?php echo $property['image']; ?>" data-gallery="galeria" class="fullwidth" data-balloon="foto" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
							<p>Info de la foto</p>
						</div>

						<?php } ?>

					<?php } ?> 						
					</div>

				</div>
				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->


				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->
				<div class="container-fluid video_tutorial">
					
					<dir class="col-md-12">
						<h1 class="title_line text-center"><span>Galería de fotos 4</span></h1>

					</dir>

					<div class="col-md-12 slide-fotos-premio1">								
					<?php $x=0; foreach ($theme_['premio_galeria'] as $slide => $property){ ?>


						<?php if ($x < 1) { $x++; ?>

						<div class="col-md-12 video_single1">
							<a title="Informacion y <br> meta datos de la foto. <br> Otra información relativa de la foto." target="blank_" href="<?php echo $property['image']; ?>" data-gallery="galeria" class="fullwidth" data-balloon="foto" data-balloon-pos="buttom">
								<img src="<?php echo $property['image']; ?>">
							</a>
							<p>Info de la foto</p>
						</div>

						<?php }else{ ?>

							<div style=" display: none;"><img src="<?php echo $property['image']; ?>"></div>

						<?php } ?>

					<?php } ?> 						
					</div>

				</div>
				<!-- GALERIA DE FOTOS 2021 ////////////////////////////////////////////////-->


		    	<div class="clearfix"></div>


				
			</article>

		</section>
		<!-- /section -->
	</main>




<script type="text/javascript">
	//document.getElementById('popup').click();
</script>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
