<?php 
/* 
 * Template Name: Calidad de Aire New
 * Description: Página de Calidad de Aire
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

<br class="clear"><br class="clear">
	<main role="main">
		<!-- section -->
		
		
		<h1 class="title_line text-center"><span>Sistema de Recepción Discreta de Datos - Módulo Aire</span></h1>
		<section class="container-fluid background-container">	


			<!-- Alert -->
			<!--
			<div class="col-md-12">
				<div class="col-md-12">

				<div class="alert alert-warning alert-dismissible" role="alert">
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>    
			        
						<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Por el momento los datos de las estaciones de reporte discreto se presentan en esta página, seleccionando <strong>"Estaciones móviles/manuales"</strong> . Los datos de las estaciones de reporte continuo <b>"Estaciones automáticas"</b> se encuentran ahora en la <b><a href="https://www.ambiente.gub.uy/datos-tiempo-real/">nueva app</a></b>.
						Los datos presentados aquí muestran datos de estaciones que ya no están en funcionamiento y otras que sí. <b>Las que están en funcionamiento son Nueva Palmira (Municipio), Río Branco (Plaza de deportes), Rivera, Villa Olmos y Ciudad de la Costa.</b>
						La DINACEA trabaja en el desarrollo de una nueva aplicación que tendrá los datos más actuales de las estaciones de reporte discreto.
						</p>

						<p>
						Para acceder a los datos debe elegir el tipo de estación, la estación y el parámetro, además del período con hora y minutos.
						</p>
						
						<p>
						<b>Los períodos para los cuales hay datos son:</b>
						<ul>
							<li>Villa Olmos 2021-10-07 a 2021-10-31</li>
							<li>Río Branco (Estadio) 2013-02-28 a 2017-12-11</li>
							<li>Melo (histórico) 2011-11-09 a 2017-01-30</li>
							<li>Nueva Palmira (MGAP) 2012-06-12 a 2016-09-22</li>
							<li>Melo Móvil 2004-10-14 a 2005-08-13</li>
							<li>Nueva Palmira (Municipio) 2011-03-20 a 2019-12-31</li>
							<li>Rivera 2021-11-17 a 2022-05-16</li>
							<li>Río Branco (Plaza de deportes) 2013-03-12 a 2019-12-18</li>
							<li>Salto 2002-09-08 a 2004-01-05</li>
							<li>Minas de Corrales 2002-08-23 a 2002-09-16</li>
							<li>Tacuarembó 2002-02-16 a 2007-03-29</li>
							<li>Río Branco E001 2002-08-16 a 2006-02-23</li>
							<li>Ciudad de la Costa 2015-09-02 a 2021-09-19</li>
							<li>La Paloma 2013-05-10 2014-08-05</li>
							<li>Treinta y Tres 1999-04-08 2003-02-18</li>
						</ul>
						</p>



			    </div>
			    </div>

		    </div>
			-->
		    <!-- Alert -->



			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- Encabezado -->
				<?php if($theme_['encabezados_switch'] == 1){ ?>
				<div id="slide-" class="slide-">
		        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		        		<?php if($property['title'] == get_the_title()){ ?>

							<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
							<div class="col-md-8">
								<img class="img-responsive" src="<?php echo $property['image']; ?>">
							</div>
							<div class="col-md-4"><br>
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
				<?php } ?>
				<!-- Encabezado -->

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
				      <p><?php the_content(); ?></p>
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


			<!-- Documentos -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				
				<?php 
				/*		

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

				<br><br>
<?php
*/
?>
				<!-- Box Info -->
				<div class="col-md-12" style="padding:0;margin:0;">
					<iframe id="ifr" frameborder="0" allowfullscreen
						src="https://www.ambiente.gub.uy/srdd/public/calidad-aire"
						style="display:block;width:100%;border:none;"></iframe>
				</div>
				<!-- Box Info -->

			</article>
			<!-- /Documentos -->


		</section>
		<!-- /section -->
	</main>

<script>
(function () {
	var ifr = document.getElementById('ifr');
	if (!ifr) return;

	function fitViewport() {
		// Medir desde la posición inicial del iframe (sin scroll)
		var offsetTop = ifr.offsetTop;
		var h = window.innerHeight - offsetTop;
		ifr.style.height = Math.max(h, 400) + 'px';
	}

	fitViewport();
	window.addEventListener('resize', fitViewport);
})();
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('ifr');

    if (!iframe) {
        console.error('No se encontró el iframe de calidad de aire.');
        return;
    }

    const parametrosPortal = new URLSearchParams(window.location.search);
    const estacion = parametrosPortal.get('estacion');

    const urlAplicacion = new URL(
        'https://www.ambiente.gub.uy/srdd/public/calidad-aire'
    );

    if (estacion && /^\d+$/.test(estacion)) {
        urlAplicacion.searchParams.set('estacion', estacion);
    }

    iframe.src = urlAplicacion.toString();
});
</script>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>