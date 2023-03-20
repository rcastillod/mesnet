<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

  /* Theme style */
  wp_enqueue_style('mesnet-child-theme-css', get_stylesheet_directory_uri() . '/dist/css/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
  /** External theme style */
  wp_enqueue_style('mesnet-child-theme-external', get_stylesheet_directory_uri() . '/dist/css/external/external.min.css', '', '', 'all');

  /** External scripts */
  wp_enqueue_script('mesnet-scripts-external', get_stylesheet_directory_uri() . '/dist/js/external/external.min.js', '', '1.0.0', true);
  /* Theme script */
  wp_enqueue_script('mesnet-child-theme-js', get_stylesheet_directory_uri() . '/dist/js/scripts.js', '', '1.0.0', true);

  // Get fields from servicios
  $planes_duo = get_field('planes_duo', 'option');
  $planes_internet = get_field('planes_internet', 'option');
  $planes_internet_in = get_field('planes_internet_in', 'option');
  $planes_empresa = get_field('planes_empresa', 'option');
  wp_localize_script(
    'mesnet-child-theme-js',
    'mesnet_script_object',
    array(
      'tab_duo' => $planes_duo['icono_servicio'],
      'tab_internet' => $planes_internet['icono_servicio'],
      'tab_internet_in' => $planes_internet_in['icono_servicio'],
      'tab_empresa' => $planes_empresa['icono_servicio'],
    )
  );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
