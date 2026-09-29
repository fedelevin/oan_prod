<?php get_header(); ?>
<?php global $theme_; ?>

	<main role="main">
	<!-- section -->
	<section class="container-fluid background-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php 
		$icono = get_post_meta(get_the_ID(),'_cmb_icono', true);
		$resume = get_post_meta(get_the_ID(),'_cmb_resume', true);
		$xls = get_post_meta(get_the_ID(),'_cmb_xls', true);
		$csv = get_post_meta(get_the_ID(),'_cmb_csv', true);
		$txt = get_post_meta(get_the_ID(),'_cmb_txt', true);
		$datos_abiertos = get_post_meta(get_the_ID(),'_cmb_datos_abiertos', true);
		$query = get_post_meta(get_the_ID(),'_cmb_query', true);
		$campos = get_post_meta(get_the_ID(),'_cmb_campos', true);
		$embeber = get_post_meta(get_the_ID(),'_cmb_embeber', true);
	?>


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="col-md-12">
					<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>

				<!-- Box Info -->
				<div class="col-md-12">
					<div class="box-info container-fluid">
						<div class="box-info-left">
							<div class="icon pull-left">
								<img class="img-responsive center-block" src="<?php echo $icono; ?>">
							</div>
							<div class="box-info-titles">
								<div class="subtitle">Observatorio Ambiental</div>
								<div class="title_"><strong><?php the_title(); ?></strong></div>								
							</div>
						</div>
						<div class="info">								
							<p><?php echo $resume; ?><p>
							<!-- <hr> -->
							<p><?php the_content(); ?></p>
							<?php if(!empty($xls)){ ?><a href="<?php echo $xls; ?>" class="btn btn-green"><i class="fa fa-download" aria-hidden="true"></i> xls</a><?php } ?>
							<?php if(!empty($csv)){ ?><a href="<?php echo $csv; ?>" class="btn btn-green"><i class="fa fa-download" aria-hidden="true"></i> csv</a><?php } ?>
							<?php if(!empty($txt)){ ?><a href="<?php echo $txt; ?>" class="btn btn-green"><i class="fa fa-download" aria-hidden="true"></i> txt</a><?php } ?>
							
							<!-- <hr> -->

							<?php if(!empty($embeber)){ ?>
								
								<!--
								<p>
								En el siguiente filtro puede seleccionar el Departamento, Cuenca, Programa y Parámetro. Las fechas se seleccionan de forma dinámica de acuerdo a las últimas muestras para cada parámetro. Se puede seleccionar campos independientes entre sí.
								<p/>
							-->

							<iframe id="ifr" class="page-icon preview-pane" frameborder="0" allowfullscreen scrolling="no" src="<?php echo $embeber; ?>"></iframe>
							<?php } ?>	

						

							<?php if(!empty($query)){ ?>
								<div class="col-md-12-">		
								  <div id="toolbar">
									<!-- 								
									<select class="form-control">
									<option value="">Export Basic</option>
									<option value="all">Export All</option>
									<option value="selected">Export Selected</option>
									</select> 
									-->
								  </div>
								  <table  class="table table-hover"style="border-style: none;width: 100%; height: 120px;" 
								    data-toggle="table"
								    data-height="0"
								    data-show-toggle="false"
								    data-show-columns="true"
								    data-show-export="false"
								    data-click-to-select="true"
								    data-toolbar="#toolbar"
								    data-pagination="true"
									data-side-pagination="server"
								    data-search="true"
								    data-detail-view="true"
								    data-export-types="['excel', 'csv', 'txt']"
								    data-show-Refresh="true"
								    data-row-style = rowStyle
								    data-page-list = [10,25,50,100,All]
								    data-click-to-select = "true"
								    data-detail-formatter="detailFormatter"
								    data-maintain-selected = "true"
								    data-filter-control="true"
								    data-locale = "es-SP"
								    data-url=<?php echo $query; ?>>
								    <thead>
								      <?php
								      	$campos_table = explode(",", $campos);
								      ?>
								      <tr>
								      	<?php 
								      		foreach($campos_table as $datafield){ 
								      	?>
											<th data-field="<?php echo $datafield; ?>" data-sortable="true"> <?php echo $datafield; ?></th>
										<?php } ?>
								      </tr>
								    </thead>
								  </table>
								</div>				
								<br class="clear">
							<?php } ?>	

						</div>
					</div>
				</div>
				<!-- Box Info -->
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
