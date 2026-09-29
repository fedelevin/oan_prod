<?php 
/* 
 * Template Name: EAE 1
 * Description: Página de Evaluación Ambiental Estratégica 2025 - Jerarquia 1 
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/ 

get_header(); ?>
<?php global $theme_; ?>

		<!-- section -->
</div> <!-- cierro wrapper  -->


<!-- Encabezado -------------------------------------------------------------------->
<?php if($theme_['encabezados_switch'] == 1){ ?>
<div id="container">
	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>

		<?php

		if($property['title'] == get_the_title()){ ?>

			<div class="secBanner">
				<img class="img-responsive bannerfull" src="<?php echo $property['image']; ?>">
			</div>
			<div class="secTitle">
			TITULO
			</div>
		<?php } ?>

	<?php } ?>
</div>
<?php } ?>
<!-- Encabezado -------------------------------------------------------------------->


<br class="clear">

<!-- abro wrapper -->
<div class="wrapper">
<main role="main">


	  <!-- EAE 1 --------------------------------------------------------> 
	  <?php 
	     $class_search = $theme_['columns-eae-2025'];
			if($class_search == 1){
				$col = '12';
			}elseif($class_search == 2){
				$col = '4';				
			}elseif($class_search == 3){
				$col = '4';			
			}elseif($class_search == 4){
				$col = '3';
			}
	  ?>



	  <?php if (is_page(3588)) : //https://www.ambiente.gub.uy/oan/evaluacion-ambiental-estrategica/ ?>

	  	<!-- Título -------------------------------------------------------> 
		<div class="col-md-12">
			 <h1 class="title_line text-center"><span><?php echo $theme_['title-eae-2025']; ?></span></h1>
		</div>
		<!-- // Título ----------------------------------------------------> 

		<section class="container-fluid backkground-box">

			<div class="col-md-12">

				<br><br>

				<?php foreach ($theme_['boxes-eae-2025'] as $box => $property){
					
						$valor = $property['url']; $parts = explode("*", $valor); 
						$texto = $parts[2];
						$colx = $col;

						if ($property['title'] == "¿Qué es una Evaluación Ambiental Estratégica?")  {
							$colx = 8;
						}else{
							$colx = $col;
						}	
					
						?>

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
		<?php endif; ?>
		<!--  //EAE 1 -------------------------------------------------------->


		<!-- EAE 2 --------------------------------------------------------> 
	  <?php if (is_page(3592)) : //https://www.ambiente.gub.uy/oan/hidrogeno-verde/ ?>

	  <?php 
	     $class_search = $theme_['columns-hv-2025'];
			if($class_search == 1){
				$col = '12';
			}elseif($class_search == 2){
				$col = '4';				
			}elseif($class_search == 3){
				$col = '4';			
			}elseif($class_search == 4){
				$col = '3';
			}
	  ?>

	  	<!-- Título -------------------------------------------------------> 
		<div class="col-md-12">
			 <h1 class="title_line text-center"><span><?php echo $theme_['title-hv-2025']; ?></span></h1>
			 <img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/Shadow1.png">
		</div>
		<!-- // Título ----------------------------------------------------> 

		<section class="container-fluid backkground-box">

			<div class="col-md-12">

		

				<div class="col-md-12"><br><br></div>

				<?php foreach ($theme_['boxes-hv-2025'] as $box => $property){
					
						$valor = $property['url']; $parts = explode("*", $valor); 
						$texto = $parts[2];
						$colx = $col;

						if ($property['title'] == "Proceso de evaluación de EAE")  {
							$colx = 8;
						}else{
							$colx = $col;
						}	
					
						?>
							
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


			
			
<div class="row">
  <div class="col-md-12">
    <h1 class="title_line text-center"><span>Mapa de participación del proceso de EAE</span></h1>
  </div>
  <div class="col-md-12">
    <img class="center-block" src="https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/images/Shadow1.png" alt="">
    <br><br>
  </div>
</div>


			<?php
			// ====== Datos administrables (tu array actual) ======
			$items = isset($theme_['faq-hv-2025']) && is_array($theme_['faq-hv-2025']) ? $theme_['faq-hv-2025'] : [];
			if (!$items) return;

			$uid = 'chevsplit_'.uniqid();
			?>
			<div class="chevsplit" id="<?php echo esc_attr($uid); ?>" aria-label="Flujo">
			  <div class="chevsplit-row">

			    <!-- IZQUIERDA (col-md-4): lista de chevrones -->
			    <nav class="chevsplit-nav" role="tablist" aria-label="Etapas">
			      <?php foreach ($items as $i => $property):
			        $title = isset($property['title']) ? $property['title'] : '';
			        $desc  = isset($property['description']) ? $property['description'] : '';
			        $panel_id = $uid.'-panel-'.$i;
			        $active = $i===0 ? ' is-active' : '';
			      ?>

					<a href="#<?php echo esc_attr($panel_id); ?>"
					   class="chev-item<?php echo $active; ?>"
					   role="tab"
					   aria-selected="<?php echo $i===0 ? 'true' : 'false'; ?>"
					   data-target="<?php echo esc_attr($panel_id); ?>">
					  
					  <!-- título -->
					  <h4><?php echo esc_html($title); ?></h4>
					  
					  <!-- descripción administrable -->
					  <?php if (!empty($property['url'])): ?>
					    <div class="chev-item-desc">
					      <?php
					        // Permitimos un poco de formato (negritas, saltos de línea)
					        echo wp_kses_post( wp_trim_words( $property['url'], 25, '…' ) );
					      ?>
					    </div>
					  <?php endif; ?>
					</a>

			      <?php endforeach; ?>
			    </nav>

			    <!-- DERECHA (col-md-8): panel de detalle -->
			    <div class="chevsplit-panels">

			      <?php foreach ($items as $i => $property):
			        $desc  = isset($property['description']) ? $property['description'] : '';
			        $panel_id = $uid.'-panel-'.$i;
			        $active = $i===0 ? ' is-active' : '';
			      ?>
			      <section id="<?php echo esc_attr($panel_id); ?>" class="chev-panel<?php echo $active; ?>" role="tabpanel" tabindex="0">

						<div class="chev-panel-card">
							<h3 class="chev-panel-title-dynamic"></h3>
						  <?php echo wp_kses_post($desc); ?>
						</div>

			      </section>
			      <?php endforeach; ?>

			    </div>
			  </div>
			</div>


<style>
/* ===== Layout tipo col-md-4 / col-md-8 e igual alto ===== */
/*.chevsplit{ margin:8px 10px 20px 30px; max-width:1200px; }*/
.chevsplit { margin:8px 16px 20px 16px; max-width:1200px; }

.chevsplit-row{ display:flex; flex-wrap:wrap; gap:16px; align-items:stretch; }
.chevsplit-nav{ flex:1 1 100%; }
.chevsplit-panels{ flex:1 1 100%; }

@media (min-width:768px){
  .chevsplit-row{
    flex-wrap:nowrap;
    gap:24px;                 /* usamos gap en vez de margin-left */
    align-items:stretch;
  }
  .chevsplit-nav{
    flex:0 0 33.333%;
    max-width:33.333%;
  }
  .chevsplit-panels{
    flex:0 0 66.667%;
    max-width:66.667%;
    /* SACAR margin-left:30px; */
  }
}

/* Evita que Chrome calcule overflow y fuerce salto de línea */
.chevsplit-row > * { min-width: 0; }

/* ===== Lista izquierda (chevrones) ===== */
.chevsplit-nav{ display:flex; flex-direction:column; gap:12px; }
.chev-item{
  position:relative; display:block;
  background:#2f6db3; color:#fff; text-decoration:none;
  padding:14px 22px 14px 26px; border-radius:4px;
  outline:0; border:0;
}
.chev-item:hover, .chev-item:focus{ filter:brightness(1.05); }

/* Pico a la derecha */
.chev-item::after{
  content:""; position:absolute; top:50%; right:-22px; transform:translateY(-50%);
  border-left:22px solid #2f6db3; border-top:22px solid transparent; border-bottom:22px solid transparent;
}
/* “corte” blanco entre chevrones */
.chev-item::before{
  content:""; position:absolute; top:50%; right:-2px; transform:translateY(-50%);
  border-left:8px solid #fff; border-top:8px solid transparent; border-bottom:8px solid transparent;
}

/* Título + preview */
.chev-item h4{ margin:0 0 4px; font-size:16px; font-weight:700; line-height:1.25; }
.chev-item .preview{ margin:0; font-size:13px; line-height:1.35; opacity:.95; }

/* Activo en amarillo sin borde (tu preferencia) */
.chev-item.is-active{
  background:#FFD24D !important; color:#000;
  box-shadow:none !important; outline:none !important; border:none !important;
}
.chev-item.is-active::after{ border-left-color:#FFD24D; }

/* Evitar desborde del pico en mobile */
@media (max-width:560px){
  .chev-item::after,.chev-item::before{ display:none; }
}

/* ===== Panel derecho ===== */
.chevsplit-panels{ display:flex; }
.chev-panel{ display:none; flex:1 1 auto; }
.chev-panel.is-active{ display:flex; }
.chev-panel-card{
  background:#f7f9fc; border:1px solid #e3e9f3; border-radius:6px; padding:20px;
  width:100%; min-height:100%; display:flex; flex-direction:column; overflow:auto;
}

.chev-item,
.chev-item:hover,
.chev-item:focus,
.chev-item.is-active {
  text-decoration: none !important;
}

.chev-panel-title-dynamic {
  margin-top: 0;
  margin-bottom: 16px;
  font-size: 20px;
  font-weight: 700;
  color: #2f6db3;
  border-bottom: 2px solid #e3e9f3;
  padding-bottom: 6px;
}

.chev-item h4 {
  margin: 0 0 6px;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.25;
}

.chev-item-desc {
  font-size: 13px;
  line-height: 1.4;
  opacity: 0.95;
  color: #f1f1f1;  /* texto clarito sobre el azul */
}

.chev-item.is-active .chev-item-desc {
  color: #000; /* texto oscuro sobre el fondo amarillo activo */
}

</style>

<script>
(function(){
  var root = document.getElementById('<?php echo esc_js($uid); ?>');
  if(!root) return;

  var links  = root.querySelectorAll('.chev-item');
  var panels = root.querySelectorAll('.chev-panel');

  function each(list, fn){
    for (var i=0; i<list.length; i++){ fn(list[i], i); }
  }

  function activate(targetId){
    // desactiva todo
    each(links, function(a){
      a.classList.remove('is-active');
      a.setAttribute('aria-selected', 'false');
    });
    each(panels, function(p){ p.classList.remove('is-active'); });

    // activa el actual
    var link  = root.querySelector('.chev-item[data-target="'+targetId+'"]');
    var panel = root.querySelector('#'+targetId);
    if(link){ link.classList.add('is-active'); link.setAttribute('aria-selected','true'); }
    if(panel){ panel.classList.add('is-active'); }

    // título dinámico adentro del panel activo
    if(panel && link){
      var h4 = link.querySelector('h4');
      var title = h4 ? (h4.textContent || h4.innerText) : '';
      var titleElement = panel.querySelector('.chev-panel-title-dynamic');
      if(titleElement) titleElement.textContent = title;
    }
  }

  // inicializa el primero
  var first = root.querySelector('.chev-item.is-active');
  if(first){
    activate(first.getAttribute('data-target'));
  }

  // eventos
  each(links, function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      activate(a.getAttribute('data-target'));
    });
    a.addEventListener('keydown', function(e){
      if(e.key === 'Enter' || e.key === ' '){
        e.preventDefault();
        activate(a.getAttribute('data-target'));
      }
    });
  });
})();
</script>






		</section>
		<?php endif; ?>
		<!-- //EAE 2 --------------------------------------------------------> 




</main>


<?php get_footer(); ?>