<?php

/* -------------------------------------------------------------------------- */
/*                  Admin content pages                                       */
/* -------------------------------------------------------------------------- */

if (function_exists('acf_add_options_page')) {

  // Ajustes Generales
  acf_add_options_page(array(
    'page_title' => 'Información General',
    'menu_title' => 'Información General',
    'menu_slug' => "ajustes",
    'capability' => 'edit_posts',
    'redirect' => true,
    'position' => 20,
    'icon_url' => 'dashicons-admin-site'
  ));
  // Home
  acf_add_options_page(array(
    'menu_title' => 'Home',
    'page_title' => 'Home',
    'menu_slug' => "home",
    'capability' => 'edit_posts',
    'redirect' => true,
    'position' => 21,
    'icon_url' => 'dashicons-admin-home'
  ));
}
