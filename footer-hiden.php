		<?php global $theme_; ?> 

<!-- <a href="<?php //echo get_template_directory_uri(); ?>/bioseguridad/bioseguridad.html" class="fullwidth"> bioseguridad </a> -->

		<div class="footer-top"></div>

		<!-- Dependences  -->		
		<?php if($theme_['participantes_switch'] == 1){?>
		<section class="container-fluid">
				<div class="col-md-2">
					<h2 class="title_line "><span><?php echo $theme_['title_dependences']; ?></span></h2>
				</div>
				<div class="dependences">
					<?php $cont = 1; foreach ($theme_['dependence'] as $dep => $property){ ?>
						<a href="<?php echo $property['url']; ?>">
							<img class="img-responsive center-block" src="<?php echo $property['image']; ?>">
						</a>
					<?php } ?>				
				</div>
		</section>
		<?php } ?>
		<!-- Dependences  -->

		<img class="center-block" src="<?php echo get_template_directory_uri(); ?>/images/line-shadow.jpg">
		<div class="map-top"></div><br>



	</div>
	<!-- /wrapper -->


	<div class="container">
	<!--
	<script type="text/javascript">
	    GenerateRecords("*", "uy", "es");
	</script> 
	-->

	</div>

	<!--
	<div id="bioseguridad"></div>
	-->



	<?php //wp_footer(); ?>



	<!-- analytics -->
	<?php echo $theme_['analitycs']; ?>
    <!-- analytics -->	


	</body>
</html>
