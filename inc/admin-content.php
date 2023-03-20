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
  // Servicios
  acf_add_options_page(array(
    'menu_title' => 'Servicios',
    'page_title' => 'Servicios',
    'menu_slug' => "servicios",
    'capability' => 'edit_posts',
    'redirect' => true,
    'position' => 21,
    'icon_url' => 'dashicons-products'
  ));
  acf_add_options_sub_page(array(
    'page_title'  => __('Planes Duo'),
    'menu_title'  => __('Planes Duo'),
    'parent_slug' => 'servicios',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => __('Planes Hogar Fibra'),
    'menu_title'  => __('Planes Hogar Fibra'),
    'parent_slug' => 'servicios',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => __('Planes Hogar Inalambrico'),
    'menu_title'  => __('Planes Hogar Inalambrico'),
    'parent_slug' => 'servicios',
  ));
  acf_add_options_sub_page(array(
    'page_title'  => __('Planes Empresa'),
    'menu_title'  => __('Planes Empresa'),
    'parent_slug' => 'servicios',
  ));
}
