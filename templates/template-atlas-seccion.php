<?php
/*
 * Template Name: Atlas — Sección (Laguna Merín)
 * Description: Plantilla para las 7 secciones del Atlas Laguna Merín
 *              Diseño v2 — atlas_oan_web_v4.1.pptx (Jun 2026)
 *              Asignar a páginas con slug: el-territorio, el-agua, naturaleza,
 *              poblacion, produccion, riesgos, gobernanza
 * @package WordPress
 * @subpackage Observatorio
 */

wp_enqueue_style( 'atlas-css', get_template_directory_uri() . '/css/atlas.css', array(), '3.8' );

get_header();

$theme_dir = get_template_directory_uri();

/* Banner compartido del Atlas (mismo para las 7 secciones) y barra de logos institucionales superpuesta */
$atlas_banner_bg = $theme_dir . '/images/atlas/hero-laguna-merin.png';
$atlas_banner_logos = $theme_dir . '/images/atlas/barra-logos.png';

/* Visualizador general del Atlas (sin filtro) — usado como link único junto a cada visualizador de sección */
$viewer_url_default = 'https://www.ambiente.gub.uy/visualizador/index.php?vis=laguna_merin';

/* ---------- Datos por sección (hardcoded del PPTX v4.1) ---------- */
$secciones = array(

    'el-territorio' => array(
        'title'    => 'El Territorio',
        'subtitle' => 'Relieve, clima, geología, suelos y uso del suelo de la cuenca binacional',
        'photo'    => $theme_dir . '/images/atlas/banner-territorio.png',
        'intro'    => 'La cuenca hidrográfica de la Laguna Merín abarca aproximadamente 61.000 km² compartidos entre Brasil y Uruguay. El relieve es predominantemente plano, con una altitud media de 89 m y pendientes suaves que favorecen la acumulación de agua y la formación de extensos humedales. El clima es húmedo subtropical, con precipitaciones medias en torno a 1.300 mm anuales.',
        'kpis' => array(
            array('~61.000 km²',  'superficie total de la cuenca binacional', 'accent'),
            array('1.300 mm/año', 'precipitación media anual, sin estación seca definida', 'neutral'),
            array('89 m',         'altitud media de la cuenca (relieve predominantemente plano)', 'accent'),
            array('64,2%',        'del territorio con cobertura natural (pastizal, bosque, humedales y cuerpos de agua)', 'accent'),
        ),
        'adt_link'    => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side' => true,
        'challenge' => 'La variabilidad climática interanual, influenciada por fenómenos como ENSO, genera alternancia entre sequías e inundaciones que afectan tanto a la producción como a los ecosistemas. La gestión integrada del territorio requiere armonizar los instrumentos de planificación y los sistemas de información entre ambos países.',
        'chart' => array(
            'type'     => 'donut',
            'title'    => 'Uso y cobertura del suelo — 2023',
            'subtitle' => 'Distribución por clase (% de la superficie total) · Fuente: MapBiomas Pampa 2023',
            'slices' => array(
                array('Pastizal natural',          39.7, '#3a9c52'),
                array('Cultivo anual',             21.3, '#e08749'),
                array('Cuerpo de agua',             9.3, '#4a90c0'),
                array('Bosque nativo y arbustal',   8.8, '#2f6b8a'),
                array('Pasturas sembradas',         8.1, '#7ac093'),
                array('Humedal / pantano',          6.4, '#5fc4b6'),
                array('Silvicultura',               4.9, '#c45a3a'),
                array('Área no vegetada',           1.6, '#8e8e8e'),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18041,c18002,c18054&zoom=9,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — El territorio',
        'viewer_hint'   => 'Capas: topografía, clima, geología, suelos, uso del suelo',
        'viewer_layers' => array(
            'Límite del proyecto (a01)',
            'Subcuencas N2 (a02)',
            'División político-administrativa',
            'Topografía / Hipsometría (f05)',
            'Precipitación media (f01)',
            'Temperatura media anual (f03)',
            'Uso y cobertura del suelo (f08)',
        ),
    ),

    'el-agua' => array(
        'title'    => 'El Agua',
        'subtitle' => 'Recursos hídricos superficiales y subterráneos, agua potable, saneamiento y calidad del agua',
        'photo'    => $theme_dir . '/images/atlas/foto-agua-praia-capilla.jpg',
        'photo_credit' => 'Hirã Soares, Wikimedia Commons (CC BY-SA 4.0)',
        'intro'    => 'La cuenca integra un sistema hídrico de escala regional: más de 15.000 km de red de drenaje (incluyendo tributarios) y una disponibilidad anual estimada en 24.000 hm³ de agua superficial. La Laguna Merín opera como reservorio estratégico de agua dulce gracias a la regulación del Canal San Gonzalo, que controla la intrusión salina desde la Laguna de los Patos.',
        'kpis' => array(
            array('3.900 km²',      'superficie de la Laguna Merín, el mayor cuerpo de agua dulce del sistema', 'accent'),
            array('3.200+ hm³/año', 'volumen estimado de extracción para riego arrocero', 'accent'),
            array('98% / 69%',      'cobertura de agua potable: áreas urbanas / total de la cuenca', 'neutral'),
            array('99 estaciones',  'de monitoreo de calidad del agua (60 BR · 39 UY)', 'accent'),
        ),
        'kpis_source'  => 'Fuente: SNIS 2021 (Brasil) · OSE 2023 (Uruguay)',
        'adt_link'     => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side'  => true,
        'challenge'    => 'La gestión del agua enfrenta desafíos vinculados a la coordinación binacional: armonizar criterios de monitoreo de calidad, conciliar los usos productivos con los caudales ecológicos y ampliar la cobertura de saneamiento. La variabilidad climática, con períodos de sequía e inundaciones más frecuentes, agrega presión sobre el sistema.',
        'chart' => array(
            'type'      => 'dual_bars',
            'bar_color' => '#028090',
            'title'     => 'Consumo y pérdidas de agua potable por subcuenca',
            'subtitle'  => 'Fuente: SNIS 2021 (Brasil) / OSE 2023 (Uruguay) · Medianas calculadas sobre localidades con servicio activo',
            'left' => array(
                'title' => 'Consumo mediano de agua potable (L/hab/día)',
                'bars'  => array(
                    array('Río Olimar Grande',              100.0, '144'),
                    array('Río Yaguarón / Laguna Merín',    95.1,  '137'),
                    array('Arroyo Chuy',                    93.1,  '134'),
                    array('Arroyo Corrientes',              91.7,  '132'),
                    array('Arroyo de los Ahogados',         89.6,  '129'),
                    array('Arroyo Grande / Del Rey',        87.5,  '126'),
                    array('Río Cebollatí',                  83.3,  '120'),
                    array('Río Piratini',                   77.1,  '111'),
                    array('A. Pelotas / Santa Bárbara',     75.7,  '109'),
                    array('Río Tacuarí',                    75.7,  '109'),
                ),
            ),
            'right' => array(
                'title' => 'Pérdidas medianas en red (%)',
                'bars'  => array(
                    array('Río Olimar Grande',              42.9,  '24%'),
                    array('Río Yaguarón / Laguna Merín',   44.6,  '25%'),
                    array('Arroyo Chuy',                    96.4,  '54%'),
                    array('Arroyo Corrientes',             100.0,  '56%'),
                    array('Arroyo de los Ahogados',         46.4,  '26%'),
                    array('Arroyo Grande / Del Rey',        46.4,  '26%'),
                    array('Río Cebollatí',                  60.7,  '34%'),
                    array('Río Piratini',                   55.4,  '31%'),
                    array('A. Pelotas / Santa Bárbara',     62.5,  '35%'),
                    array('Río Tacuarí',                    39.3,  '22%'),
                ),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18061,c18062,c18032,c18033&zoom=8,-53.481445,-33.107648',
        'viewer_title'  => 'Visualizador — El agua',
        'viewer_hint'   => 'Capas: red hídrica, subcuencas, monitoreo, agua potable, saneamiento',
        'viewer_layers' => array(
            'Red hídrica (g02–g05)',
            'Subcuencas (a02)',
            'Unidades hidrogeológicas (g06)',
            'Red monitoreo hidrométrico (g07)',
            'Fuentes de agua potable (d01–d04)',
            'Infraestructura de saneamiento',
        ),
    ),

    'naturaleza' => array(
        'title'    => 'Biodiversidad',
        'subtitle' => 'Ecosistemas, biodiversidad, áreas protegidas y cobertura natural de la cuenca',
        'photo'    => $theme_dir . '/images/atlas/banner-naturaleza.png',
        'intro'    => 'La cuenca de la Laguna Merín se inscribe en el Bioma Pampa, una de las regiones de pastizales más extensas de América del Sur. El campo natural es la cobertura dominante (~40% del territorio), complementado por bosques nativos, humedales y cuerpos de agua que configuran una zona de transición ecológica de relevancia regional.',
        'kpis' => array(
            array('2.069.465 ha', 'bajo Reserva de Biosfera en la cuenca (33,9%) — UY: Bañados del Este · BR: Mata Atlántica', 'accent'),
            array('410.447 ha',   'bajo designación Ramsar (UY: 399.509 ha · BR: 10.939 ha)', 'accent'),
            array('146.801 ha',   'bajo protección nacional formal (SNAP-UY + SNUC-BR) — 2,4% de la cuenca', 'accent'),
            array('64,2%',        'del territorio con cobertura natural (pastizal, bosque, humedales y cuerpos de agua)', 'accent'),
        ),
        'kpis_source'  => 'Fuente: SNAP/MA Uruguay (28/08/2025) · CNUC-MMA Brasil (16/04/2026) · OAN · RSIS · MapBiomas Pampa 2023',
        'adt_link'     => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side'  => true,
        'challenge'    => 'La conversión de pastizales naturales y zonas ribereñas por expansión agrícola y forestal ha incrementado la fragmentación de hábitats y reducido la conectividad ecológica entre Brasil y Uruguay. La armonización de los sistemas de áreas protegidas y los criterios de monitoreo de biodiversidad es una de las principales tareas pendientes.',
        'chart' => array(
            'type'     => 'dual_bars',
            'title'    => 'Figuras de conservación en la cuenca',
            'subtitle' => 'Superficie (ha) por tipo y país · Fuente: SNAP/MA-UY (08/2025) · CNUC-MMA-BR (04/2026)',
            'left' => array(
                'title'     => 'Uruguay (ha)',
                'bar_color' => '#1A6B3A',
                'bars' => array(
                    array('Reservas de Biosfera',       100.0, '764.621'),
                    array('Sitios Ramsar',               52.2,  '399.509'),
                    array('Áreas prot. nacionales',       9.6,   '73.705'),
                ),
            ),
            'right' => array(
                'title'     => 'Brasil (ha)',
                'bar_color' => '#2A9D8F',
                'bars' => array(
                    array('Reservas de Biosfera',       100.0, '1.304.844'),
                    array('Sitios Ramsar',               0.84,  '10.939'),
                    array('Áreas prot. nacionales',       5.6,   '73.096'),
                ),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18048,c18049,c18047,c18046&zoom=8,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — Biodiversidad',
        'viewer_hint'   => 'Capas: uso del suelo, áreas protegidas, sitios Ramsar, reservas de biosfera',
        'viewer_layers' => array(
            'Uso y cobertura del suelo (f08)',
            'Áreas protegidas nacionales (5.3.4a)',
            'Sitios Ramsar (5.3.4b)',
            'Sitios prioritarios de conservación',
            'Reservas de Biosfera',
            'Zonas indígenas y quilombolas (5.3.5)',
        ),
    ),

    'poblacion-y-ciudades' => array(
        'title'    => 'Población y Ciudades',
        'subtitle' => 'Distribución demográfica, centros urbanos e infraestructura social de la cuenca',
        'photo'    => $theme_dir . '/images/atlas/banner-poblacion.jpg',
        'intro'    => 'La cuenca alberga ~895.000 habitantes (IBGE 2022/23; INE 2023/24), distribuidos entre Brasil (727.774) y Uruguay (167.066). La población es marcadamente urbana —el 91% reside en centros poblados—, con un proceso de envejecimiento demográfico: el 22% supera los 60 años. Los principales polos urbanos son Pelotas y Río Grande (BR), y Melo, Treinta y Tres y Rocha (UY).',
        'kpis' => array(
            array('~895.000 hab',       'Población total de la cuenca · IBGE 2022/23 · INE 2023/24', 'accent'),
            array('91% urbana',         'Proporción de población en centros urbanos', 'neutral'),
            array('22%',                'Población de 60+ años (envejecimiento demográfico)', 'accent'),
            array('2 países · 8 dptos.','Territorio binacional (RS-BR / Rocha, TyT, Cerro Largo-UY)', 'accent'),
        ),
        'kpis_source' => 'Fuente: ADT Laguna Merín, Tabla 3.04 · IBGE 2022/2023 · INE 2023/2024',
        'adt_link'    => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side' => true,
        'challenge'   => 'La concentración de población en pocos centros urbanos, frente a extensas zonas rurales con baja densidad, genera desigualdades en el acceso a infraestructura. La gestión permanece estructurada en sistemas nacionales con limitada articulación binacional. Fortalecer la gobernanza transfronteriza e integrar los sistemas de información son condiciones para una planificación territorial efectiva.',
        'chart' => array(
            'type'     => 'stacked_bars_v',
            'title'    => 'Población urbana y rural por país',
            'subtitle' => 'Habitantes por área · Fuente: IBGE 2022/2023 · INE 2023/2024 (ADT Tabla 3.04)',
            'max'      => 730000,
            'series'   => array(
                array('label' => 'Urbana', 'color' => '#162B4E'),
                array('label' => 'Rural',  'color' => '#a8b8cc'),
            ),
            'bars' => array(
                array('label' => 'Brasil',  'values' => array(656535, 71239)),
                array('label' => 'Uruguay', 'values' => array(157095, 9971)),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18010,c18013,c18020,c18021&zoom=8,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — Población y ciudades',
        'viewer_hint'   => 'Capas: densidad, sistema urbano, cobertura de servicios',
        'viewer_layers' => array(
            'Densidad de población (cuadrícula 1km)',
            'Sistema urbano binacional',
            'Cobertura agua potable por municipio',
            'Cobertura saneamiento por municipio',
        ),
    ),

    'produccion-y-usos' => array(
        'title'    => 'Producción y Usos',
        'subtitle' => 'Agricultura, ganadería, silvicultura y usos productivos del agua y el suelo',
        'photo'    => $theme_dir . '/images/atlas/foto-produccion-pescadores.jpg',
        'photo_credit' => 'Jessica Casaza, FAO',
        'intro'    => 'El 83% de la superficie terrestre está ocupada por sistemas agropecuarios. El sector primario aporta el 24,9% del VAB en Uruguay y el 16,5% en Brasil. Los sistemas dominantes son la ganadería sobre campo natural, el arroz irrigado (~268.000 ha entre ambos países), la soja y la silvicultura. La pesca artesanal, el turismo y la minería completan el perfil productivo binacional.',
        'kpis' => array(
            array('83%',            'Superficie terrestre con uso agropecuario', 'accent'),
            array('~268.000 ha',    'Cultivo de arroz (UY: 114.000 + BR: 154.632, campaña 2024/25)', 'accent'),
            array('>3.200 hm³/año', 'Extracción de agua para riego arrocero', 'accent'),
            array('24,9% VAB',      'Aporte agropecuario al VAB regional (UY) · 16,5% en BR', 'neutral'),
        ),
        'kpis_source' => 'Fuente: Molina 2025 · CONAB 2025 · DGF 2024 · OPP/BCU/INE · SEPGG/IBGE 2024',
        'adt_link'    => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side' => true,
        'challenge'   => 'La intensificación agrícola convierte campo natural y humedales, altera regímenes hidrológicos e incrementa la carga de agroquímicos en cuerpos de agua compartidos. La pesca artesanal enfrenta ausencia de evaluaciones ecológicas conjuntas y monitoreo binacional insuficiente. La gestión sostenible requiere armonizar instrumentos regulatorios entre Brasil y Uruguay.',
        'chart' => array(
            'type'     => 'grouped_bars_h',
            'title'    => 'Superficie por actividad productiva (ha)',
            'subtitle' => 'Campaña 2024/25 · Fuente: Molina 2025 / CONAB 2025 / DGF 2024 (* BR forestación: dato pendiente GIS)',
            'max'      => 400000,
            'series'   => array(
                array('label' => 'Uruguay', 'color' => '#028090'),
                array('label' => 'Brasil',  'color' => '#1e7d44'),
            ),
            'groups' => array(
                array('label' => 'Forestación',    'values' => array(175000, null)),
                array('label' => 'Soja',           'values' => array(90000,  375000)),
                array('label' => 'Arroz irrigado', 'values' => array(114000, 154632)),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18055,c18065,c18066&zoom=9,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — Producción y usos',
        'viewer_hint'   => 'Capas: uso del suelo, infraestructura hídrica, pesca, minería',
        'viewer_layers' => array(
            'Uso del suelo productivo (f08)',
            'Infraestructura hidráulica',
            'Comunidades pesqueras',
            'Recursos minerales (ANM/DINAMIGE)',
        ),
    ),

    'riesgos-ambientales' => array(
        'title'    => 'Riesgos Ambientales',
        'subtitle' => 'Contaminación, vulnerabilidad hídrica y presiones ambientales en la cuenca',
        'photo'    => $theme_dir . '/images/atlas/foto-riesgos-personas-inundacion.jpg',
        'photo_credit' => 'Gustavo Vara, Wikimedia Commons (CC0)',
        'intro'    => 'La cuenca enfrenta presiones ambientales interrelacionadas: pérdida de calidad del agua por contaminación difusa agrícola y saneamiento deficiente, alteraciones al ciclo hidrológico por extracción para riego y drenaje de humedales, y creciente vulnerabilidad climática. Se identificaron 7 temáticas transfronterizas prioritarias en el marco del ADT GEF/FAO (2024).',
        'kpis' => array(
            array('69%',         'Cobertura total de agua potable en la cuenca (98% urbana / ~40% rural)', 'accent'),
            array('42%',         'Cobertura de alcantarillado (BR: 40% · UY: 51%)', 'accent'),
            array('36%',         'Pérdidas en redes de abastecimiento de agua potable', 'accent'),
            array('7 temáticas', 'Problemas transfronterizos priorizados (Taller GEF-FAO, jul. 2024)', 'neutral'),
        ),
        'kpis_source' => 'Fuente: SINISA 2025 · OSE 2024/2025 · ADT sección 3.5 · Taller inicial GEF/FAO 2024',
        'adt_link'    => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side' => true,
        'challenge'   => 'La baja cobertura de tratamiento de aguas residuales —solo el 44% de efluentes recolectados reciben tratamiento adecuado en Brasil— genera carga contaminante directa sobre cuerpos de agua compartidos. La variabilidad climática amplifica todos los vectores de presión. Fortalecer el monitoreo binacional y armonizar instrumentos de gestión son condiciones esenciales para la seguridad hídrica.',
        'chart' => array(
            'type'     => 'grouped_bars_v',
            'title'    => 'Cobertura de alcantarillado — Brasil vs Uruguay',
            'subtitle' => 'Porcentaje de población con red de alcantarillado · Fuente: SINISA 2025 · OSE 2025',
            'max'      => 80,
            'ticks'    => 8,
            'series'   => array(
                array('label' => 'Cobertura total (%)',  'color' => '#b71c1c'),
                array('label' => 'Cobertura urbana (%)', 'color' => '#e67e22'),
            ),
            'groups' => array(
                array('label' => 'Brasil',  'values' => array(40.06, 61.86)),
                array('label' => 'Uruguay', 'values' => array(50.69, 53.80)),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18002,c18074,c18075&zoom=9,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — Riesgos ambientales',
        'viewer_hint'   => 'Capas: calidad del agua, saneamiento, inundaciones, humedales bajo presión',
        'viewer_layers' => array(
            'Calidad del agua (monitoreo)',
            'Áreas de riesgo de inundación',
            'Plantas de tratamiento aguas residuales',
            'Cobertura saneamiento por municipio',
        ),
    ),

    'gobernanza' => array(
        'title'    => 'Gobernanza',
        'subtitle' => 'Instrumentos de gestión, institucionalidad y cooperación binacional',
        'photo'    => $theme_dir . '/images/atlas/foto-gobernanza-clm.jpg',
        'photo_credit' => 'Gilberto Collares',
        'intro'    => 'La CHLMLC cuenta con un sólido marco jurídico cuya base es el Tratado de Cooperación de 1977 y la Comisión Mixta Laguna Merín (CLM). El desafío central no es normativo sino operativo: convertir ese marco en una gobernanza binacional efectiva con información compartida, protocolos estables y articulación multinivel. Brasil opera bajo modelo federal (ANA); Uruguay bajo modelo unitario (DINAGUA).',
        'kpis' => array(
            array('1977',    'Tratado de Cooperación Laguna Merín — base jurídica binacional', 'accent'),
            array('CLM',     'Comisión Mixta como eje institucional de coordinación', 'accent'),
            array('7 ejes',  'Convergencias/divergencias en gobernanza (ADT Tabla 3.05)', 'neutral'),
            array('GEF/FAO', 'Proyecto de fortalecimiento institucional en curso (2023–2027)', 'accent'),
        ),
        'kpis_source' => 'Fuente: ADT Laguna Merín, sección 3.6 · Tratado 1977 · Ley BR 9.433/1997 · Ley UY 18.610/2009',
        'adt_link'    => array('Vínculo al ADT Laguna Merín', '#'),
        'viewer_side' => true,
        'challenge'   => 'Las principales deficiencias son de interoperabilidad técnica: redes de monitoreo heterogéneas, series no comparables, baja integración entre agua, ambiente, pesca y clima. La perspectiva estratégica es evolucionar de una cooperación normativa a una cooperación operativa, con el CLM como eje articulador y el Proyecto GEF/FAO como catalizador del fortalecimiento institucional.',
        'chart' => array(
            'type'       => 'govtable',
            'title'      => 'Estructura de gobernanza multinivel',
            'subtitle'   => 'Marco institucional de la Cuenca Hidrográfica de la Laguna Merín y Lagunas Costeras',
            'split_from' => 1, /* BINACIONAL: fila completa; BRASIL + URUGUAY: dos columnas */
            'rows' => array(
                array(
                    'level'    => 'BINACIONAL',
                    'entities' => 'Comisión Mixta Laguna Merín (CLM) · Proyecto GEF/FAO',
                    'legal'    => 'Tratado de Cooperación 1977',
                    'color'    => '#162B4E',
                ),
                array(
                    'level'    => 'BRASIL',
                    'entities' => 'ANA · Comité Mirim-São Gonçalo',
                    'legal'    => 'Ley 9.433/1997 · SINGREH',
                    'color'    => '#1e7d44',
                ),
                array(
                    'level'    => 'URUGUAY',
                    'entities' => 'DINAGUA · CRRH-LM',
                    'legal'    => 'Ley 18.610/2009 · Art. 47 Const.',
                    'color'    => '#2c5fa8',
                ),
            ),
        ),
        'viewer_url'    => 'https://www.ambiente.gub.uy/visualizador/index.php?vis=oan&filtro=_c18077,c18079,c18002&zoom=9,-53.305664,-32.641688',
        'viewer_title'  => 'Visualizador — Gobernanza',
        'viewer_hint'   => 'Capas: institucionalidad binacional, monitoreo, proyecto GEF/FAO',
        'viewer_layers' => array(
            'Comités y consejos de cuenca',
            'Red de monitoreo hidrometeorológico',
            'Áreas con planes de gestión activos',
            'Hitos proyecto GEF/FAO',
        ),
    ),
);

global $post;
$slug = $post ? $post->post_name : '';
/* Soporte alias de slugs cortos */
if ( $slug === 'poblacion' )  { $slug = 'poblacion-y-ciudades'; }
if ( $slug === 'produccion' ) { $slug = 'produccion-y-usos'; }
if ( $slug === 'riesgos' )    { $slug = 'riesgos-ambientales'; }
$s = isset($secciones[$slug]) ? $secciones[$slug] : $secciones['el-territorio'];

/* ---------- Overlay de contenido editable desde el admin (Redux) ----------
 * Título, subtítulo, foto, intro, KPIs, fuente, link ADT, "Desafíos" y URL
 * del visualizador se pueden administrar desde WP Admin › Observatorio Options.
 * Si un campo no fue cargado en el admin, se mantiene el valor de arriba.
 * Los gráficos NO son administrables (quedan hardcodeados arriba). */
global $theme_;
$atlas_redux_map = array(
    'el-territorio'        => 'el_territorio',
    'el-agua'               => 'el_agua',
    'naturaleza'            => 'naturaleza',
    'poblacion-y-ciudades'  => 'poblacion',
    'produccion-y-usos'     => 'produccion',
    'riesgos-ambientales'   => 'riesgos',
    'gobernanza'            => 'gobernanza',
);
$atlas_rk = isset($atlas_redux_map[$slug]) ? $atlas_redux_map[$slug] : 'el_territorio';

if ( ! empty($theme_) && is_array($theme_) ) {

    $rx_title = "atlas_{$atlas_rk}_title";
    if ( ! empty($theme_[$rx_title]) ) { $s['title'] = $theme_[$rx_title]; }

    $rx_subtitle = "atlas_{$atlas_rk}_subtitle";
    if ( ! empty($theme_[$rx_subtitle]) ) { $s['subtitle'] = $theme_[$rx_subtitle]; }

    $rx_photo = "atlas_{$atlas_rk}_photo";
    if ( ! empty($theme_[$rx_photo]['url']) ) { $s['photo'] = $theme_[$rx_photo]['url']; }

    $rx_photo_credit = "atlas_{$atlas_rk}_photo_credit";
    if ( ! empty($theme_[$rx_photo_credit]) ) { $s['photo_credit'] = $theme_[$rx_photo_credit]; }

    $rx_intro = "atlas_{$atlas_rk}_intro";
    if ( ! empty($theme_[$rx_intro]) ) { $s['intro'] = $theme_[$rx_intro]; }

    $rx_kpis = "atlas_{$atlas_rk}_kpis";
    if ( ! empty($theme_[$rx_kpis]) && is_array($theme_[$rx_kpis]) ) {
        $redux_kpis = array();
        foreach ( $theme_[$rx_kpis] as $kpi_item ) {
            if ( empty($kpi_item['title']) && empty($kpi_item['description']) ) { continue; }
            $redux_kpis[] = array( $kpi_item['title'], $kpi_item['description'] );
        }
        if ( ! empty($redux_kpis) ) { $s['kpis'] = $redux_kpis; }
    }

    $rx_kpis_source = "atlas_{$atlas_rk}_kpis_source";
    if ( ! empty($theme_[$rx_kpis_source]) ) { $s['kpis_source'] = $theme_[$rx_kpis_source]; }

    $rx_adt_label = "atlas_{$atlas_rk}_adt_label";
    $rx_adt_url   = "atlas_{$atlas_rk}_adt_url";
    if ( ! empty($theme_[$rx_adt_label]) || ! empty($theme_[$rx_adt_url]) ) {
        $s['adt_link'] = array(
            ! empty($theme_[$rx_adt_label]) ? $theme_[$rx_adt_label] : ( isset($s['adt_link'][0]) ? $s['adt_link'][0] : 'Vínculo al ADT Laguna Merín' ),
            ! empty($theme_[$rx_adt_url])   ? $theme_[$rx_adt_url]   : ( isset($s['adt_link'][1]) ? $s['adt_link'][1] : '#' ),
        );
    }

    $rx_challenge = "atlas_{$atlas_rk}_challenge";
    if ( ! empty($theme_[$rx_challenge]) ) { $s['challenge'] = $theme_[$rx_challenge]; }

    $rx_viewer_url = "atlas_{$atlas_rk}_viewer_url";
    if ( ! empty($theme_[$rx_viewer_url]) ) { $s['viewer_url'] = $theme_[$rx_viewer_url]; }
}

$tabs = array(
    'el-territorio'       => 'El territorio',
    'el-agua'             => 'El agua',
    'naturaleza'          => 'Biodiversidad',
    'poblacion-y-ciudades'=> 'Población',
    'produccion-y-usos'   => 'Producción',
    'riesgos-ambientales' => 'Riesgos',
    'gobernanza'          => 'Gobernanza',
);

/* Construir conic-gradient para el donut chart */
function atlas_build_conic($slices) {
    $total = 0;
    foreach ($slices as $sl) { $total += $sl[1]; }
    if ($total <= 0) return '';
    $stops = array();
    $acc = 0;
    foreach ($slices as $sl) {
        $start = ($acc / $total) * 100;
        $acc += $sl[1];
        $end = ($acc / $total) * 100;
        $stops[] = sprintf('%s %.2f%% %.2f%%', $sl[2], $start, $end);
    }
    return 'conic-gradient(' . implode(', ', $stops) . ')';
}
?>

<main role="main">
<section class="container-fluid background-container">

    <div class="atlas-root">

        <!-- BANNER (compartido por las 7 secciones, con logos institucionales superpuestos) -->
        <div class="atlas-banner">
            <div class="atlas-banner__bg" style="background-image:url('<?php echo esc_url($atlas_banner_bg); ?>');"></div>
            <div class="atlas-banner__overlay"></div>
            <div class="atlas-breadcrumb">
                <a href="<?php echo home_url('/atlas-laguna-merin/'); ?>">← Atlas Laguna Merín</a>
                <span class="atlas-breadcrumb__sep">›</span>
                <span><?php echo esc_html($s['title']); ?></span>
            </div>
            <div class="atlas-banner__content">
                <span class="atlas-banner__eyebrow">Atlas Binacional · Uruguay — Brasil</span>
                <h1 class="atlas-banner__title"><?php echo esc_html(mb_strtoupper($s['title'])); ?></h1>
                <p class="atlas-banner__lead"><?php echo esc_html($s['subtitle']); ?></p>
            </div>
            <div class="atlas-banner__logos">
                <img src="<?php echo esc_url($atlas_banner_logos); ?>"
                     alt="Logos institucionales: Proyecto Laguna Merín · FAO · GEF · Ministerio de Ambiente · Gobierno de Brasil"
                     class="atlas-banner__logos-img">
            </div>
        </div>

        <!-- TABS -->
        <nav class="atlas-tabs">
            <div class="atlas-tabs__inner">
                <?php foreach ($tabs as $tab_slug => $tab_label) : ?>
                    <a href="<?php echo home_url('/atlas-laguna-merin/' . $tab_slug . '/'); ?>"
                       class="<?php echo $tab_slug === $slug ? 'is-active' : ''; ?>">
                        <?php echo esc_html($tab_label); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </nav>

        <!-- CONTENIDO -->
        <div class="atlas-section">
            <div class="atlas-container">

<?php
/* ── Macro de renderizado del viewer (reutilizada en los dos layouts) ── */
$viewer_url = isset($s['viewer_url']) ? $s['viewer_url'] : $viewer_url_default;

/* ── Macro de renderizado del chart ── */
function atlas_render_chart($s) {
    if ( empty($s['chart']) ) return;
    $c = $s['chart'];
    echo '<div class="atlas-chart">';
    echo '<h3 class="atlas-chart__title">' . esc_html($c['title']) . '</h3>';
    echo '<p class="atlas-chart__subtitle">' . esc_html($c['subtitle']) . '</p>';

    if ($c['type'] === 'donut') {
        $conic = atlas_build_conic($c['slices']);
        echo '<div class="atlas-chart__body">';
        echo '<div class="atlas-donut" style="background:' . esc_attr($conic) . ';"></div>';
        echo '<ul class="atlas-chart__legend">';
        foreach ($c['slices'] as $sl) {
            echo '<li>';
            echo '<span class="atlas-chart__legend-dot" style="background:' . esc_attr($sl[2]) . ';"></span>';
            echo esc_html($sl[0]);
            echo '<span class="atlas-chart__legend-value">' . number_format($sl[1], 1, ',', '.') . '%</span>';
            echo '</li>';
        }
        echo '</ul></div>';

    } elseif ($c['type'] === 'govtable') {
        $split_from   = isset($c['split_from']) ? (int) $c['split_from'] : PHP_INT_MAX;
        $single_rows  = array_slice($c['rows'], 0, $split_from);
        $split_rows   = array_slice($c['rows'], $split_from);
        echo '<div class="atlas-gov-table">';
        foreach ($single_rows as $row) {
            echo '<div class="atlas-gov-row" style="border-left-color:' . esc_attr($row['color']) . ';">';
            echo '<div class="atlas-gov-row__level" style="color:' . esc_attr($row['color']) . ';">' . esc_html($row['level']) . '</div>';
            echo '<div class="atlas-gov-row__entities">' . esc_html($row['entities']) . '</div>';
            echo '<div class="atlas-gov-row__legal">' . esc_html($row['legal']) . '</div>';
            echo '</div>';
        }
        if (!empty($split_rows)) {
            echo '<div class="atlas-gov-table__national">';
            foreach ($split_rows as $row) {
                echo '<div class="atlas-gov-row atlas-gov-row--stack" style="border-left-color:' . esc_attr($row['color']) . ';">';
                echo '<div class="atlas-gov-row__level" style="color:' . esc_attr($row['color']) . ';">' . esc_html($row['level']) . '</div>';
                echo '<div class="atlas-gov-row__entities">' . esc_html($row['entities']) . '</div>';
                echo '<div class="atlas-gov-row__legal">' . esc_html($row['legal']) . '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
        echo '</div>';

    } elseif ($c['type'] === 'dual_bars') {
        $default_color = ! empty($c['bar_color']) ? $c['bar_color'] : '#162B4E';
        echo '<div class="atlas-chart__dual">';
        foreach (array('left', 'right') as $side) {
            $panel = $c[$side];
            $panel_color = ! empty($panel['bar_color']) ? $panel['bar_color'] : $default_color;
            $fill_style  = 'background:' . esc_attr($panel_color) . ';';
            echo '<div class="atlas-chart__dual-panel">';
            echo '<p class="atlas-chart__dual-title">' . esc_html($panel['title']) . '</p>';
            echo '<div class="atlas-chart__bars atlas-chart__bars--compact">';
            foreach ($panel['bars'] as $bar) {
                list($label, $pct, $val) = $bar;
                $w = max(2, min(100, $pct));
                echo '<div class="atlas-chart__bar atlas-chart__bar--compact">';
                echo '<div class="atlas-chart__bar-label">' . esc_html($label) . '</div>';
                echo '<div class="atlas-chart__bar-track"><div class="atlas-chart__bar-fill" style="width:' . esc_attr($w) . '%;' . $fill_style . '"></div></div>';
                echo '<div class="atlas-chart__bar-value">' . esc_html($val) . '</div>';
                echo '</div>';
            }
            echo '</div></div>';
        }
        echo '</div>';

    } elseif ($c['type'] === 'stacked_bars_v') {
        $max      = ! empty($c['max']) ? $c['max'] : 1;
        $chart_h  = 220; /* px — altura del área de barras */
        $series   = $c['series'];
        $n_series = count($series);

        /* Eje Y: ticks de 700k (arriba) a 0k (abajo) */
        $y_ticks = array(700000, 600000, 500000, 400000, 300000, 200000, 100000, 0);

        echo '<div class="atlas-vstacked">';

        /* Columna izq: etiquetas eje Y — altura fija = chart_h para alinear con barras */
        echo '<div class="atlas-vstacked__yaxis">';
        foreach ($y_ticks as $tick) {
            $lbl = $tick >= 1000 ? number_format($tick / 1000, 0, ',', '.') . 'k' : '0k';
            echo '<span>' . esc_html($lbl) . '</span>';
        }
        echo '</div>';

        /* Columna der: barras (solo barras, sin etiquetas) + fila x-labels + leyenda */
        echo '<div class="atlas-vstacked__right">';

        /* Área de barras */
        echo '<div class="atlas-vstacked__bars">';
        foreach ($c['bars'] as $bar) {
            $total      = array_sum($bar['values']);
            $bar_height = $max > 0 ? round(($total / $max) * $chart_h) : 0;
            $bar_height = max(4, $bar_height);
            /* Iteramos en reverso: índice mayor (Rural) → top del bar, índice 0 (Urban) → bottom */
            echo '<div class="atlas-vstacked__bar" style="height:' . $bar_height . 'px;">';
            for ($vi = $n_series - 1; $vi >= 0; $vi--) {
                $val    = isset($bar['values'][$vi]) ? (int)$bar['values'][$vi] : 0;
                $color  = esc_attr($series[$vi]['color']);
                $slabel = esc_attr($series[$vi]['label']);
                $fmtval = number_format($val, 0, ',', '.');
                echo '<div class="atlas-vstacked__seg" style="flex:' . $val . ';background:' . $color . ';"'
                    . ' title="' . $slabel . ': ' . $fmtval . '"></div>';
            }
            echo '</div>';
        }
        echo '</div>'; /* /bars — las etiquetas van FUERA para no desbordarse hacia arriba */

        /* Fila de etiquetas X (mismos gap/padding que las barras para alinear) */
        echo '<div class="atlas-vstacked__xlabels">';
        foreach ($c['bars'] as $bar) {
            $total = array_sum($bar['values']);
            echo '<div class="atlas-vstacked__xlabel">';
            echo '<div class="atlas-vstacked__bar-label">' . esc_html($bar['label']) . '</div>';
            echo '<div class="atlas-vstacked__bar-total">' . number_format($total, 0, ',', '.') . ' hab</div>';
            echo '</div>';
        }
        echo '</div>'; /* /xlabels */

        /* Leyenda */
        echo '<div class="atlas-vstacked__legend">';
        foreach ($series as $serie) {
            echo '<span class="atlas-vstacked__leg-item">'
                . '<i class="atlas-vstacked__leg-dot" style="background:' . esc_attr($serie['color']) . ';"></i>'
                . esc_html($serie['label'])
                . '</span>';
        }
        echo '</div>';
        echo '</div>'; /* /right */
        echo '</div>'; /* /atlas-vstacked */

    } elseif ($c['type'] === 'grouped_bars_v') {
        $max     = ! empty($c['max'])   ? (float)$c['max']  : 100;
        $chart_h = 220;
        $series  = $c['series'];
        $n_ticks = isset($c['ticks']) ? (int)$c['ticks'] : 8;

        /* Ticks eje Y: de max (arriba) a 0 (abajo) */
        $tick_step = $max / $n_ticks;
        $y_ticks   = array();
        for ($t = $n_ticks; $t >= 0; $t--) {
            $y_ticks[] = round($t * $tick_step);
        }

        echo '<div class="atlas-grouped-bars-v">';

        /* Eje Y */
        echo '<div class="atlas-grouped-bars-v__yaxis">';
        foreach ($y_ticks as $tick) {
            echo '<span>' . esc_html($tick) . '</span>';
        }
        echo '</div>';

        /* Columna derecha */
        echo '<div class="atlas-grouped-bars-v__right">';
        echo '<div class="atlas-grouped-bars-v__area">';
        foreach ($c['groups'] as $group) {
            echo '<div class="atlas-grouped-bars-v__group">';
            echo '<div class="atlas-grouped-bars-v__pair">';
            foreach ($group['values'] as $vi => $val) {
                $color   = esc_attr($series[$vi]['color']);
                $bar_h   = max(4, round(((float)$val / $max) * $chart_h));
                /* Formato con coma decimal, sin ceros innecesarios */
                $val_str = rtrim(rtrim(number_format((float)$val, 2, ',', ''), '0'), ',') . '%';
                echo '<div class="atlas-grouped-bars-v__bar" style="height:' . $bar_h . 'px;background:' . $color . ';">';
                echo '<span class="atlas-grouped-bars-v__val">' . esc_html($val_str) . '</span>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>'; /* /area */

        /* Etiquetas X */
        echo '<div class="atlas-grouped-bars-v__xlabels">';
        foreach ($c['groups'] as $group) {
            echo '<div class="atlas-grouped-bars-v__xlabel">' . esc_html($group['label']) . '</div>';
        }
        echo '</div>';

        /* Leyenda */
        echo '<div class="atlas-grouped-bars-v__legend">';
        foreach ($series as $serie) {
            echo '<span class="atlas-grouped-bars-v__leg-item">'
                . '<i class="atlas-grouped-bars-v__leg-dot" style="background:' . esc_attr($serie['color']) . ';"></i>'
                . esc_html($serie['label'])
                . '</span>';
        }
        echo '</div>';
        echo '</div>'; /* /right */
        echo '</div>'; /* /atlas-grouped-bars-v */

    } elseif ($c['type'] === 'grouped_bars_h') {
        $max    = ! empty($c['max']) ? $c['max'] : 1;
        $series = $c['series'];

        echo '<div class="atlas-grouped-bars">';
        foreach ($c['groups'] as $group) {
            echo '<div class="atlas-grouped-bars__group">';
            echo '<div class="atlas-grouped-bars__label">' . esc_html($group['label']) . '</div>';
            foreach ($group['values'] as $vi => $val) {
                $color  = esc_attr($series[$vi]['color']);
                $slabel = esc_attr($series[$vi]['label']);
                if ( $val === null ) {
                    echo '<div class="atlas-grouped-bars__bar-row">';
                    echo '<div class="atlas-grouped-bars__track">'
                        . '<div class="atlas-grouped-bars__fill atlas-grouped-bars__fill--na" style="background:' . $color . ';width:1%;"></div>'
                        . '</div>';
                    echo '<span class="atlas-grouped-bars__val atlas-grouped-bars__val--na">dato pend.</span>';
                    echo '</div>';
                } else {
                    $pct    = min(100, round(($val / $max) * 100, 1));
                    $fmtval = number_format($val, 0, ',', '.') . ' ha';
                    echo '<div class="atlas-grouped-bars__bar-row">';
                    echo '<div class="atlas-grouped-bars__track">'
                        . '<div class="atlas-grouped-bars__fill" style="background:' . $color . ';width:' . $pct . '%;"></div>'
                        . '</div>';
                    echo '<span class="atlas-grouped-bars__val">' . esc_html($fmtval) . '</span>';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
        /* Leyenda alineada a la derecha, igual que el PPTX */
        echo '<div class="atlas-grouped-bars__legend">';
        foreach ($series as $serie) {
            echo '<span class="atlas-grouped-bars__leg-item">'
                . '<i class="atlas-grouped-bars__leg-dot" style="background:' . esc_attr($serie['color']) . ';"></i>'
                . esc_html($serie['label'])
                . '</span>';
        }
        echo '</div>';
        echo '</div>';

    } else { /* bars */
        $bar_color = ! empty($c['bar_color']) ? $c['bar_color'] : '#162B4E';
        $fill_style = 'background:' . esc_attr($bar_color) . ';';
        echo '<div class="atlas-chart__bars">';
        foreach ($c['bars'] as $bar) {
            list($label, $pct, $val) = $bar;
            $w = max(2, min(100, $pct));
            echo '<div class="atlas-chart__bar">';
            echo '<div class="atlas-chart__bar-label">' . esc_html($label) . '</div>';
            echo '<div class="atlas-chart__bar-track"><div class="atlas-chart__bar-fill" style="width:' . esc_attr($w) . '%;' . $fill_style . '"></div></div>';
            echo '<div class="atlas-chart__bar-value">' . esc_html($val) . '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
    echo '</div>';
}
?>

<?php if ( ! empty($s['viewer_side']) ) : ?>

                <!-- LAYOUT DOS COLUMNAS: contenido izq · visualizador vertical der -->
                <div class="atlas-twocol">

                    <!-- Columna izquierda -->
                    <div class="atlas-twocol__main">

                        <div class="atlas-intro-block">
                            <?php if ( ! empty($s['photo']) ) : ?>
                                <div class="atlas-intro-photo-wrap">
                                    <img class="atlas-intro-photo" src="<?php echo esc_url($s['photo']); ?>" alt="<?php echo esc_attr($s['title']); ?>">
                                    <?php if ( ! empty($s['photo_credit']) ) : ?>
                                        <p class="atlas-intro-photo__credit">Foto: <?php echo esc_html($s['photo_credit']); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="atlas-intro"><?php echo esc_html($s['intro']); ?></div>
                        </div>

                        <h2 class="atlas-block-title">Datos destacados</h2>
                        <div class="atlas-kpi-grid">
                            <?php foreach ($s['kpis'] as $kpi) :
                                $vc = (isset($kpi[2]) && $kpi[2] === 'neutral') ? 'atlas-kpi__value--neutral' : '';
                            ?>
                                <div class="atlas-kpi">
                                    <div class="atlas-kpi__value <?php echo $vc; ?>"><?php echo esc_html($kpi[0]); ?></div>
                                    <div class="atlas-kpi__label"><?php echo esc_html($kpi[1]); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if ( ! empty($s['kpis_source']) ) : ?>
                            <p class="atlas-kpi__source"><?php echo esc_html($s['kpis_source']); ?></p>
                        <?php endif; ?>

                        <?php if ( ! empty($s['adt_link']) ) : ?>
                            <div class="atlas-adt-link">
                                <a href="<?php echo esc_url($s['adt_link'][1]); ?>"><?php echo esc_html($s['adt_link'][0]); ?></a>
                            </div>
                        <?php endif; ?>

                        <div class="atlas-challenge">
                            <h2 class="atlas-block-title">Desafíos para la gestión integrada</h2>
                            <p class="atlas-intro"><?php echo esc_html($s['challenge']); ?></p>
                        </div>

                        <?php atlas_render_chart($s); ?>

                    </div><!-- /atlas-twocol__main -->

                    <!-- Columna derecha: visualizador vertical -->
                    <div class="atlas-twocol__side">
                        <div class="atlas-viewer atlas-viewer--vertical">
                            <div class="atlas-viewer__frame-wrap atlas-viewer__frame-wrap--vertical">
                                <iframe class="atlas-viewer__frame atlas-viewer__frame--vertical"
                                        src="<?php echo esc_url($viewer_url); ?>"
                                        title="<?php echo esc_attr($s['viewer_title']); ?>"
                                        loading="lazy"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="atlas-viewer__footer">
                                <a href="<?php echo esc_url($viewer_url_default); ?>" target="_blank" rel="noopener" class="atlas-viewer__cta">▸ Ver visualizador general</a>
                            </div>
                        </div>
                    </div><!-- /atlas-twocol__side -->

                </div><!-- /atlas-twocol -->

<?php else : ?>

                <!-- LAYOUT UNA COLUMNA (resto de secciones) -->
                <div class="atlas-intro-block">
                    <?php if ( ! empty($s['photo']) ) : ?>
                        <div class="atlas-intro-photo-wrap">
                            <img class="atlas-intro-photo" src="<?php echo esc_url($s['photo']); ?>" alt="<?php echo esc_attr($s['title']); ?>">
                            <?php if ( ! empty($s['photo_credit']) ) : ?>
                                <p class="atlas-intro-photo__credit">Foto: <?php echo esc_html($s['photo_credit']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="atlas-intro"><?php echo esc_html($s['intro']); ?></div>
                </div>

                <h2 class="atlas-block-title">Datos destacados</h2>
                <div class="atlas-kpi-grid">
                    <?php foreach ($s['kpis'] as $kpi) :
                        $value_class = (isset($kpi[2]) && $kpi[2] === 'neutral') ? 'atlas-kpi__value--neutral' : '';
                    ?>
                        <div class="atlas-kpi">
                            <div class="atlas-kpi__value <?php echo $value_class; ?>"><?php echo esc_html($kpi[0]); ?></div>
                            <div class="atlas-kpi__label"><?php echo esc_html($kpi[1]); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ( ! empty($s['kpis_source']) ) : ?>
                    <p class="atlas-kpi__source"><?php echo esc_html($s['kpis_source']); ?></p>
                <?php endif; ?>

                <?php if ( ! empty($s['adt_link']) ) : ?>
                    <div class="atlas-adt-link">
                        <a href="<?php echo esc_url($s['adt_link'][1]); ?>"><?php echo esc_html($s['adt_link'][0]); ?></a>
                    </div>
                <?php endif; ?>

                <?php atlas_render_chart($s); ?>

                <!-- VISUALIZADOR HORIZONTAL -->
                <div class="atlas-viewer">
                    <div class="atlas-viewer__frame-wrap">
                        <iframe class="atlas-viewer__frame"
                                src="<?php echo esc_url($viewer_url); ?>"
                                title="<?php echo esc_attr($s['viewer_title']); ?>"
                                loading="lazy"
                                allowfullscreen></iframe>
                    </div>
                    <div class="atlas-viewer__footer">
                        <a href="<?php echo esc_url($viewer_url_default); ?>" target="_blank" rel="noopener" class="atlas-viewer__cta">▸ Ver visualizador general</a>
                    </div>
                </div>

                <!-- DESAFÍOS -->
                <div class="atlas-challenge">
                    <h2 class="atlas-block-title">Desafíos para la gestión integrada</h2>
                    <p class="atlas-intro"><?php echo esc_html($s['challenge']); ?></p>
                </div>

<?php endif; ?>

            </div>
        </div>

    </div>

</section>
</main>

<?php get_footer(); ?>
