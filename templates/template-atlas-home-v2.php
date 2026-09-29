<?php
/*
 * Template Name: Atlas — Home v2 (Laguna Merín)
 * Description: Landing v2 del Atlas — banner satelital + proyectos relacionados del OAN
 * @package WordPress
 * @subpackage Observatorio
 */

wp_enqueue_style( 'atlas-css', get_template_directory_uri() . '/css/atlas.css', array(), '4.1' );

$td = get_template_directory_uri();

/* ---------- Contenido editable desde el admin (Redux) ----------
 * WP Admin › Observatorio Options › Atlas › Panel principal.
 * Si un campo no fue cargado en el admin, se usa el valor de acá abajo. */
global $theme_;

$atlas_home_hero_bg = $td . '/images/atlas/hero-laguna-merin-satelital.png';
if ( ! empty($theme_['atlas_home_hero_image']['url']) ) {
    $atlas_home_hero_bg = $theme_['atlas_home_hero_image']['url'];
}

$atlas_home_defaults = array(
    'card1' => array(
        'image'    => $td . '/images/atlas/card-atlas-laguna-merin-clean.jpg',
        'title'    => 'Atlas Laguna Merín',
        'subtitle' => 'Atlas Binacional Uruguay — Brasil',
        'desc'     => 'El Atlas reúne información geoespacial sobre la cuenca hidrográfica compartida entre Uruguay y Brasil. Es una herramienta de consulta pública desarrollada en el marco del Proyecto FAO–GEF "Gestión binacional e integrada de los recursos hídricos en la Cuenca de la Laguna Merín y lagunas costeras", orientada a facilitar el acceso a información clave para apoyar la planificación y la toma de decisiones relacionadas con el territorio, la gestión del agua y los ecosistemas asociados a nivel cuenca.',
        'link'     => home_url('/atlas-laguna-merin/'),
    ),
    'card2' => array(
        'image'    => $td . '/images/atlas/card-mapbiomas-clean.jpg',
        'title'    => 'Mapbiomas Uruguay',
        'subtitle' => '',
        'desc'     => 'MapBiomas Uruguay es una iniciativa enfocada a temas como uso del suelo, teledetección satelital, SIG y programación, que busca entender los procesos de transformación que ocurren en el territorio uruguayo a partir del monitoreo anual de la cobertura y uso del suelo.',
        'link'     => home_url('/mapbiomapas-pampa/'),
    ),
    'card3' => array(
        'image'    => $td . '/images/atlas/card-nap-costas-clean.png',
        'title'    => 'NAP Costas',
        'subtitle' => 'Plan de Adaptación a la Zona Costera',
        'desc'     => 'El Plan Nacional de Adaptación para la zona costera (NAP Costas) se nutrió de diversos estudios y recopilaciones de información provenientes de distintos grupos de investigación y consultorías, nacionales e internacionales. A lo largo de la etapa de estudio y preparación (2017-2018) se trabajó con un importante número de profesionales y expertos de diversas áreas y de varias instituciones.',
        'link'     => home_url('/nap-costas-plan-de-adaptacion-a-la-zona-costera/'),
    ),
    'card4' => array(
        'image'    => home_url() . '/wp-content/uploads/2023/04/irn_banner_box_home.jpg',
        'title'    => 'Iniciativa para el Río Negro',
        'subtitle' => '',
        'desc'     => 'La Iniciativa para el Río Negro tiene como objetivo establecer un conjunto de medidas para prevenir, controlar, detener y revertir el proceso de deterioro de la calidad del agua del Río Negro, con énfasis en el desarrollo sostenible de la cuenca. Considera un modelo de gestión integral de los recursos hídricos que atiende a: los usos múltiples del agua, la protección de los ecosistemas, la variabilidad y el cambio climático, y busca además adelantarse a los cambios que pudieran generarse como resultado de los nuevos desarrollos productivos.',
        'link'     => home_url('/iniciativa-para-el-rio-negro/'),
    ),
);

$c = array();
foreach ( $atlas_home_defaults as $card_key => $card ) {
    $c[$card_key] = $card;
    if ( ! empty($theme_) && is_array($theme_) ) {
        if ( ! empty($theme_["atlas_home_{$card_key}_image"]['url']) ) { $c[$card_key]['image']    = $theme_["atlas_home_{$card_key}_image"]['url']; }
        if ( ! empty($theme_["atlas_home_{$card_key}_title"]) )        { $c[$card_key]['title']    = $theme_["atlas_home_{$card_key}_title"]; }
        if ( isset($theme_["atlas_home_{$card_key}_subtitle"]) && $theme_["atlas_home_{$card_key}_subtitle"] !== '' ) { $c[$card_key]['subtitle'] = $theme_["atlas_home_{$card_key}_subtitle"]; }
        if ( ! empty($theme_["atlas_home_{$card_key}_desc"]) )         { $c[$card_key]['desc']     = $theme_["atlas_home_{$card_key}_desc"]; }
        if ( ! empty($theme_["atlas_home_{$card_key}_link"]) )         { $c[$card_key]['link']     = $theme_["atlas_home_{$card_key}_link"]; }
    }
}

get_header(); ?>

<main role="main">
<section class="container-fluid background-container">
<div class="atlas-root atlas-root--v2">

    <!-- ══ BANNER ══════════════════════════════════════════════════ -->
    <div class="atlas-v2-hero">
        <div class="atlas-v2-hero__bg"
             style="background-image:url('<?php echo esc_url($atlas_home_hero_bg); ?>');"></div>
    </div>

    <!-- ══ PROYECTOS RELACIONADOS ══════════════════════════════════ -->
    <div class="atlas-v2-body">
    <div class="atlas-container">

 

        <div class="atlas-v2-magazine">

            <!-- FILA SUPERIOR: grande izq (Atlas Laguna Merín) + pequeño der (Mapbiomas) -->
            <div class="atlas-v2-row atlas-v2-row--top">

                <a href="<?php echo esc_url($c['card1']['link']); ?>"
                   class="atlas-v2-card atlas-v2-card--feature atlas-v2-card--satellite">
                    <div class="box">
                        <div class="azul">
                            <img class="img-responsive center-block" src="<?php echo esc_url($c['card1']['image']); ?>">
                            <h2 class="title_line text-center"><span class="blanco"><?php echo esc_html($c['card1']['title']); ?><?php if (!empty($c['card1']['subtitle'])) : ?><br><small><?php echo esc_html($c['card1']['subtitle']); ?></small><?php endif; ?></span></h2>
                        </div>
                        <div style="padding: 10px;">
                            <p align="justify"><?php echo esc_html($c['card1']['desc']); ?></p>
                        </div>
                    </div>
                </a>

                <a href="<?php echo esc_url($c['card2']['link']); ?>"
                   class="atlas-v2-card atlas-v2-card--secondary">
                    <div class="box">
                        <div class="azul">
                            <img class="img-responsive center-block" src="<?php echo esc_url($c['card2']['image']); ?>">
                            <h2 class="title_line text-center"><span class="blanco"><?php echo esc_html($c['card2']['title']); ?><?php if (!empty($c['card2']['subtitle'])) : ?><br><small><?php echo esc_html($c['card2']['subtitle']); ?></small><?php endif; ?></span></h2>
                        </div>
                        <div style="padding: 10px;">
                            <p align="justify"><?php echo esc_html($c['card2']['desc']); ?></p>
                        </div>
                    </div>
                </a>

            </div><!-- /row top -->

            <!-- FILA INFERIOR: pequeño izq (NAP Costas) + grande der (Iniciativa Río Negro) -->
            <div class="atlas-v2-row atlas-v2-row--bottom">

                <a href="<?php echo esc_url($c['card3']['link']); ?>"
                   class="atlas-v2-card atlas-v2-card--secondary">
                    <div class="box">
                        <div class="azul">
                            <img class="img-responsive center-block" src="<?php echo esc_url($c['card3']['image']); ?>">
                            <h2 class="title_line text-center"><span class="blanco"><?php echo esc_html($c['card3']['title']); ?><?php if (!empty($c['card3']['subtitle'])) : ?><br><small><?php echo esc_html($c['card3']['subtitle']); ?></small><?php endif; ?></span></h2>
                        </div>
                        <div style="padding: 10px;">
                            <p align="justify"><?php echo esc_html($c['card3']['desc']); ?></p>
                        </div>
                    </div>
                </a>

                <a href="<?php echo esc_url($c['card4']['link']); ?>"
                   class="atlas-v2-card atlas-v2-card--feature">
                    <div class="box">
                        <div class="azul">
                            <img class="img-responsive center-block" src="<?php echo esc_url($c['card4']['image']); ?>">
                            <h2 class="title_line text-center"><span class="blanco"><?php echo esc_html($c['card4']['title']); ?><?php if (!empty($c['card4']['subtitle'])) : ?><br><small><?php echo esc_html($c['card4']['subtitle']); ?></small><?php endif; ?></span></h2>
                        </div>
                        <div style="padding: 10px;">
                            <p align="justify"><?php echo esc_html($c['card4']['desc']); ?></p>
                        </div>
                    </div>
                </a>

            </div><!-- /row bottom -->

        </div><!-- /atlas-v2-magazine -->

    </div><!-- /atlas-container -->
    </div><!-- /atlas-v2-body -->

</div><!-- /atlas-root -->
</section>
</main>

<?php get_footer(); ?>
