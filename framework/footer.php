		<?php global $theme_; ?> 

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

</div><!-- /wrapper -->	

		<!-- footer -->
		<footer class="footer container-fluid">
		<div class="wrapper">	
		    


			<div class="col-md-6">
				
					 <div class="logo-footer">
					<img class="img-responsive left-block" src="<?php echo esc_url($theme_['logo_footer']['url']); ?>"><br />
				</div>
					 <p><?php echo $theme_['texto_footer']; ?></p>
		
			</div>
			<div class="col-md-6">
				<div class="info line-vert">
					<?php if($theme_['form_switch'] == 1){?>

					<div class="social"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:oan@ambiente.gub.uy"> oan@ambiente.gub.uy </a></div>

					<span class="title_line"><strong>Consultas y sugerencias de mejora. </strong></span><br>Por información sobre trámites y otras consultas al Ministerio de Ambiente, dirigirse a este formulario (<a href="https://www.gub.uy/ministerio-ambiente/institucional/contacto">https://www.gub.uy/ministerio-ambiente/institucional/contacto</a>)
					<?php echo do_shortcode($theme_['newsletter']); ?>
					<?php } ?>
					<div class="g-recaptcha" data-sitekey="6LcBdkwUAAAAAB-LDTyswfbmwqkUw7QJjjv6BXQV"></div>
				</div>
			</div>	
</div><!-- /wrapper -->			
		</footer>
		<!-- /footer -->


		<!-- Table -->
		<?php //echo do_shortcode($theme_['tablepress']); ?>
		<!-- /Table -->



</div><!-- /wrapper -->
<div class="tm-nav-section"

	 style="background-color: #162B4E">

		<div class="footer-down">
		<div class="col-sm-2 copyright"> &nbsp; </div>	
			<div class="col-sm-8 copyright"><?php echo $theme_['copyright']; ?></div>			
			<a id="back-top" title="Subir"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>	
		</div>
</div>
	</div>
	<!-- /wrapper -->

    <!-- Searching ////////////////////////////////////////////////////////////////////////////////////////////-->
    <?php 
    	$class_search = $theme_['search_effect']; //options: 1 slidedown, 2 hugeinc, 3 contentpush
		if($class_search == 1){ $class_selected = 'slidedown';
			}elseif($class_search == 2){ $class_selected = 'hugeinc';
			}elseif($class_search == 3){ $class_selected = 'contentpush';
			}elseif($class_search == 4){ $class_selected = 'door';
		}	
    ?>
    
    <div class="site-header overlay overlay-<?php echo $class_selected; ?>">
        <button type="button" class="overlay-close">Close</button>
        <nav>
        <form style="opacity: 1; transform: translateX(0px);" role="search" method="get" class="search-form" action="<?php echo $theme_['url_search']; ?>">
            <label>                       
                <input class="search-field" placeholder="Buscar…" value="" name="s" title="Buscar..." type="search">
            </label>
            <input class="search-submit" value="Search" type="submit">
        </form>			
        <h2>Escribí tu búsqueda.</h2>
        </nav>
    </div>         
    <!-- Searching ////////////////////////////////////////////////////////////////////////////////////////////-->


	<!-- DataTable -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- DataTable -->

	<?php wp_footer(); ?>

	<!-- analytics -->
	<?php echo $theme_['analitycs']; ?>
    <!-- analytics -->	


	</body>
</html>
