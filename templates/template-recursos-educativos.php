<?php
/*
 * Template Name: Recursos Educativos
 * Description: Página de Recursos Educativos sobre Economía Circular
 * @package WordPress
 * @subpackage Observatorio
 * @since Observatorio 1.0
*/

get_header(); ?>
<?php global $theme_; ?>

<br class="clear"><br class="clear">
<main role="main">

	<h1 class="title_line text-center"><span>Recursos Educativos sobre Economía Circular</span></h1>

	<section class="container-fluid background-container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php if($theme_['encabezados_switch'] == 1){ ?>
			<div id="slide-" class="slide-">
	        	<?php foreach ($theme_['encabezado'] as $slide => $property){ ?>
	        		<?php if($property['title'] == get_the_title()){ ?>
						<div class="col-md-8"><img class="img-responsive" src="<?php echo $property['image']; ?>"></div>
	        		<?php } ?>
				<?php } ?>
			</div>
			<?php } ?>
		<?php endwhile; endif; ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="col-md-12" style="padding: 40px 20px;">

				<!-- Tarjetas de recursos -->
				<div class="row" style="max-width:1100px; margin:0 auto 40px; display:flex; flex-wrap:wrap;">

					<!-- Recurso 1 -->
					<div class="col-md-4 col-sm-6" style="margin-bottom:24px; display:flex;">
						<a href="https://rea.ceibal.edu.uy/recurso-externo/la-economia-circular"
						   target="_blank" rel="noopener noreferrer" class="rec-card">
							<div class="rec-card__icon rec-card__icon--1">
								<i class="fa fa-recycle fa-2x" aria-hidden="true"></i>
							</div>
							<div class="rec-card__body">
								<h3 class="rec-card__title">¿Qué es la economía circular?</h3>
								<p class="rec-card__desc">La economía circular surge en contraposición a la economía lineal basada en extraer materiales de la Tierra, fabricar productos a partir de ellos y, finalmente, desecharlos como residuos.</p>
							</div>
							<div class="rec-card__footer">
								<span class="rec-card__link">
									Acceder al recurso <i class="fa fa-arrow-right" aria-hidden="true"></i>
								</span>
							</div>
						</a>
					</div>

					<!-- Recurso 2 -->
					<div class="col-md-4 col-sm-6" style="margin-bottom:24px; display:flex;">
						<a href="https://rea.ceibal.edu.uy/recurso-externo/ellen-macarthur-sobre-los-fundamentos-de-la-economia-circular"
						   target="_blank" rel="noopener noreferrer" class="rec-card">
							<div class="rec-card__icon rec-card__icon--2">
								<i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
							</div>
							<div class="rec-card__body">
								<h3 class="rec-card__title">Fundamentos de la economía circular</h3>
								<p class="rec-card__desc">Ellen MacArthur y Joe Iles hablan sobre los diversos bucles del "diagrama de mariposa" de la Fundación Ellen MacArthur.</p>
							</div>
							<div class="rec-card__footer">
								<span class="rec-card__link">
									Acceder al recurso <i class="fa fa-arrow-right" aria-hidden="true"></i>
								</span>
							</div>
						</a>
					</div>

					<!-- Recurso 3 -->
					<div class="col-md-4 col-sm-6" style="margin-bottom:24px; display:flex;">
						<a href="https://rea.ceibal.edu.uy/recurso-externo/el-marco-resolve-propuesto-por-la-fundacion-ellen-macarthur"
						   target="_blank" rel="noopener noreferrer" class="rec-card">
							<div class="rec-card__icon rec-card__icon--3">
								<i class="fa fa-sitemap fa-2x" aria-hidden="true"></i>
							</div>
							<div class="rec-card__body">
								<h3 class="rec-card__title">El marco RESOLVE</h3>
								<p class="rec-card__desc">El marco RESOLVE, propuesto por la Fundación Ellen MacArthur, describe y enfoca las actuaciones basadas en la aplicación de los principios fundamentales de la economía circular.</p>
							</div>
							<div class="rec-card__footer">
								<span class="rec-card__link">
									Acceder al recurso <i class="fa fa-arrow-right" aria-hidden="true"></i>
								</span>
							</div>
						</a>
					</div>

				</div>
				<!-- /Tarjetas -->

				<!-- CTA REA Ceibal -->
				<div class="rec-edu-cta">
					<div class="rec-edu-cta__icon">
						<i class="fa fa-book fa-3x" aria-hidden="true"></i>
					</div>
					<div class="rec-edu-cta__text">
						<strong>Repositorio de Recursos Educativos Abiertos (REA) — Ceibal</strong>
						<p>Gestionado por docentes de Educación Primaria y Media. Recibe aportes de la comunidad educativa. Accedé a estos y muchos más recursos.</p>
					</div>
					<div class="rec-edu-cta__action">
						<a href="https://rea.ceibal.edu.uy/" target="_blank" rel="noopener noreferrer" class="btn btn-green-light">
							<i class="fa fa-external-link" aria-hidden="true"></i> Visitar rea.ceibal.edu.uy
						</a>
					</div>
				</div>

			</div>
			<br class="clear">
		</article>

	</section>
</main>

<style>
/* ── Recursos Educativos — estilos de página ── */

/* ── Tarjetas ── */
.rec-card {
	display: flex;
	flex-direction: column;
	height: 100%;
	background: #fff;
	border-radius: 6px;
	box-shadow: 0 2px 8px rgba(0,0,0,.08);
	text-decoration: none !important;
	color: inherit;
	transition: transform .2s ease, box-shadow .2s ease;
	overflow: hidden;
}
.rec-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 8px 24px rgba(0,0,0,.13);
	text-decoration: none;
	color: inherit;
}
.rec-card__icon {
	padding: 28px 0 22px;
	text-align: center;
}
.rec-card__icon--1 { background: #e8f5ee; color: #005B27; }
.rec-card__icon--2 { background: #f0f4e0; color: #7a8f00; }
.rec-card__icon--3 { background: #e6ecf5; color: #162B4E; }

.rec-card__body {
	padding: 18px 22px 10px;
	flex: 1;
}
.rec-card__title {
	font-size: 16px;
	font-weight: bold;
	color: #162B4E;
	margin: 0 0 10px;
	line-height: 1.4;
}
.rec-card__desc {
	font-size: 14px;
	color: #666;
	line-height: 1.6;
	margin: 0;
}
.rec-card__footer {
	padding: 14px 22px 18px;
	border-top: 1px solid #f0f0f0;
}
.rec-card__link {
	font-size: 13px;
	font-weight: bold;
	color: #005B27;
}
.rec-card:hover .rec-card__link { color: #AEBE16; }

/* ── CTA inferior ── */
.rec-edu-cta {
	display: flex;
	align-items: center;
	gap: 24px;
	background: #f7f9f0;
	border: 1px solid #d6e29a;
	border-left: 5px solid #AEBE16;
	border-radius: 6px;
	padding: 28px 30px;
	max-width: 1100px;
	margin: 0 auto;
	flex-wrap: wrap;
}
.rec-edu-cta__icon { color: #AEBE16; flex-shrink: 0; }
.rec-edu-cta__text { flex: 1; min-width: 200px; }
.rec-edu-cta__text strong { font-size: 15px; color: #162B4E; display: block; margin-bottom: 4px; }
.rec-edu-cta__text p { margin: 0; font-size: 14px; color: #666; line-height: 1.6; }
.rec-edu-cta__action { flex-shrink: 0; }

@media (max-width: 767px) {
	.rec-edu-hero__title { font-size: 22px; }
	.rec-edu-cta { flex-direction: column; text-align: center; }
	.rec-card { margin-bottom: 16px; }
}
</style>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
