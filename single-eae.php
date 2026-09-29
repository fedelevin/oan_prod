

<?php get_header(); ?>
<?php global $theme_; ?>
<?php $post_id = get_the_ID(); ?>

	<main role="main">

		<!-- section -->
		<section class="container-fluid1 background-container">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<h1 class="title_line text-center">
						<span><?php the_title(); ?></span>
					</h1>

					<!-- Encabezado -->
					<div id="slide-" class="slide-">
			        	<?php foreach ($theme_['encabezado'] as $slide => $property){ 

			        			if($property['title'] == get_the_title()){?>

								<img style="height: 50px;" class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6-.png">
								<div class="col-md-8">
									<img class="img-responsive" src="<?php echo $property['image']; ?>">
								</div>
								<div class="col-md-4">
									<br>
									<h2 class="title_line"><span><?php the_title(); ?></span></h2>
									<p style="text-align: justify;padding-right: 15px;"><?php echo $property['description']; ?></p>
									<?php if($property['url'] != "") {?>
									<a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
									<?php } ?>

								</div>
								<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/Shadow6.png">
			        		<?php } ?>
						<?php } ?>
					</div>
					<!-- Encabezado -->

					<!-- Box -->
					<section class="background-container" style="padding: 40px 0;">

							<div class="col-md-12">
								<div class="col-md-12-">

										<div class="panel-group">
											<div class="panel panel-default">
											  <div class="panel-heading"><i class="fa fa-id-card-o" aria-hidden="true"></i> Introducción</div>
											  <div class="panel-body">

															<p><?php echo $theme_['boxes_desc'];  ?></p>

											  </div>
											</div>
										</div>

								</div>
							</div>

					</section>			    
					<!--// Box -->

					<div class="proyecto-top"></div>

					<!-- Modal 1 -->
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
					<!-- Modal 1 -->		

					<!-- Modal 2 -->
					<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          	<span aria-hidden="true">&times;</span>
					        </button>        
					        <?php the_post_thumbnail(); ?>
				        	<h2 class="title_line"> <span>Titulo</span></h2>
					      </div>
					      <div class="modal-body">
					      		<p>texto</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-green-light" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal 2 -->		

			<?php endwhile; ?>
			<?php endif; ?>

		</section>
		<!-- /section -->

		<!-- section -->
		<section class="background-container" style="padding: 40px 0;">

					<div class="col-md-12">

				      	<div class="col-md-8">

				      		<?php foreach ($theme_['boxes-2025'] as $slide => $property){ ?>

												<!-- Box -->
										    <div class="row box_col_2">
											    <div class="col-sm-2 text-center col-no-padding-left ">
											      <img class="img-responsive center-block"  src="<?php echo $property['image']; ?>" alt="Imagen">
											    </div>

											    <div class="col-sm-10">
											      <h4><i class="fa fa-caret-right" aria-hidden="true"></i>
 <?php echo $property['title']; ?></h4>
											      <p>
													<?php echo $property['description']; ?>
											      </p>


											      <?php if($property['url']) { ?>

											      <!--
											      <a class="btn btn-default fullwidth" href="<?php //echo $property['url'] ?>" ><i class="fa fa-plus-circle fa-1x" aria-hidden="true"></i> Ver más info</a>
														-->

											    	<?php } ?>

											    </div>

										    </div>
										    <!--// Box -->

									<?php } ?>



				      	</div>

								<div class="col-md-4">

										<?php
										// 👇 helper para normalizar strings
										if (!function_exists('norm_key')) {
										  function norm_key($s){
										    $s = trim(wp_strip_all_tags((string)$s));
										    return $s === '' ? '' : (function_exists('mb_strtolower') ? mb_strtolower($s, 'UTF-8') : strtolower($s));
										  }
										}

										$post_id  = get_the_ID();

										// 1) Etapas seleccionadas en ESTE post (taxonomía)
										$selectedTerms = get_the_terms($post_id, 'etapas');
										$selectedTerms = (is_wp_error($selectedTerms) || !is_array($selectedTerms)) ? [] : $selectedTerms;

										// 2) Mapas rápidos
										$byName = $byId = [];
										foreach ($selectedTerms as $t){
										  if (!isset($t->name, $t->term_id)) continue;
										  $byName[norm_key($t->name)] = $t;
										  $byId[(int)$t->term_id]     = $t;
										}

										// 3) Etapa ACTIVA desde meta (ID de término)
										$rawActive = get_post_meta($post_id, 'etapas', true); // ⚠️ cambiá 'etapas' si tu meta tiene otro ID
										if (is_array($rawActive)) {
										  $rawActive = reset($rawActive);
										}
										$activeTermId = is_numeric($rawActive) ? (int)$rawActive : 0;

										// 4) Orden final según $theme_['timeline_eae'], pero SOLO mostrando las que están seleccionadas
										$timeline  = (isset($theme_['timeline_eae']) && is_array($theme_['timeline_eae'])) ? $theme_['timeline_eae'] : [];
										$ordered   = []; // array de WP_Term en el orden del timeline

										foreach ($timeline as $item){
										  // título del item de timeline
										  $title = '';
										  if (is_array($item) && isset($item['title']))       $title = (string)$item['title'];
										  elseif (is_object($item) && isset($item->title))    $title = (string)$item->title;

										  $key = norm_key($title);
										  if ($key !== '' && isset($byName[$key])) {
										    $ordered[] = $byName[$key];
										  }
										}

										// 5) Posición activa (1-based) dentro del subconjunto mostrado
										$activePos = 1;
										if ($activeTermId && !empty($ordered)) {
										  foreach ($ordered as $idx => $term) {
										    if ((int)$term->term_id === $activeTermId) {
										      $activePos = $idx + 1; // 1-based
										      break;
										    }
										  }
										}

										// 6) Render
										echo '<div class="timeline">';
										echo '<h5><b>Etapas de proceso</b></h5>';

										$pos = 1;
										foreach ($ordered as $term) {

										  $classes = ['btn','btn-outline-primary','full-width'];
										  $attrs   = '';

										  if ($pos < $activePos) {
										    $classes[] = 'past';
										    $attrs    .= ' disabled aria-disabled="true"';
										  } elseif ($pos === $activePos) {
										    $classes[] = 'active';
										    $attrs    .= ' aria-current="step"';
										  }

										  echo '<button class="'.esc_attr(implode(' ', $classes)).'"'.$attrs.'>';
										  echo '<span class="badge bg-primary me-2">'.esc_html($pos).'</span>';
										  echo esc_html($term->name);
										  echo '</button>';

										  $pos++;
										}
										echo '</div>';
										?>

								  
								</div>







					</div>

		</section>
		<!-- section -->


		<div class="clearfix"><br></div>
		<div class="clear"><br></div>

	</main>



<style>
.full-width {
  width: 100%;
}
.timeline {
  position: relative;
  padding-left: 30px;
}

.timeline::before {
  content: "";
  position: absolute;
  left: 12px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: #e1e1e1;
}
/*
.timeline button {
  position: relative;
  margin-bottom: 25px;
  width: 100%;
  box-shadow: 0 2px 5px rgba(0,0,0,0.15);
}
*/
.timeline button {
  display: flex;
  align-items: center;
  justify-content: center;  /* centra el texto y el número en el ancho total */
  position: relative;
  width: 100%;
  margin-bottom: 15px;
  text-align: center;
  padding-left: 40px; /* deja espacio para el número */
}

/* el número (badge) fijo a la izquierda */
.timeline button .badge {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
}

.timeline button::before {
  content: "";
  position: absolute;
  left: -25px;
  top: 50%;
  transform: translateY(-50%);
  width: 15px;
  height: 15px;
  background-color: #fdc10d;
  border-radius: 50%;
  border: 2px solid white;
}

.timeline button.active {
  background-color: #fdc10d;
  color: white;
}

.timeline button.active::before {
  background-color: #ffc107; /* color del punto activo (amarillo por ejemplo) */
}

.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #444444;
    border-radius: 10px;
}

span.active {
  background-color: #fdc10d;
  color: white;
}

.col-no-padding-left {
  padding-left: 0 !important;
}

.box_col_2 {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 15px;
  margin-bottom: 20px; /* espacio entre boxes */
}

/* Botón activo amarillo */
button.active {
  background-color: #ffc107 !important; /* Amarillo Bootstrap */
  border-color: #e0a800 !important;
  color: #000 !important;
}

/* Numerito alineado a la izquierda */
button .badge {
  float: left;          /* lo alinea a la izquierda */
  margin-right: 10px;   /* separa el número del texto */
}

button.full-width {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  text-align: left;
}

</style>


<?php get_footer(); ?>