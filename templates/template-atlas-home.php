<?php
/*
 * Template Name: Atlas — Home (Laguna Merín)
 * Description: [Redirect] La landing con visualizador y cuadrados de temas se retiró.
 *              Entrar al Atlas cae directo en la primera sección (El Territorio).
 * @package WordPress
 * @subpackage Observatorio
 */

wp_safe_redirect( home_url( '/atlas-laguna-merin/el-territorio/' ), 301 );
exit;
