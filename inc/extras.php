<?php

// Allow safe svg upload
function enable_svg_upload($upload_mimes)
{
  $upload_mimes['svg'] = 'image/svg+xml';
  $upload_mimes['svgz'] = 'image/svg+xml';
  return $upload_mimes;
}
add_filter('upload_mimes', 'enable_svg_upload', 10, 1);


/* -------------------------------------------------------------------------- */
/*                             Header info widget                             */
/* -------------------------------------------------------------------------- */
function g3d_register_widget()
{
  register_widget('g3d_info_widget');
}
add_action('widgets_init', 'g3d_register_widget');

class g3d_info_widget extends WP_Widget
{

  // construct
  function __construct()
  {
    parent::__construct(
      // widget ID
      'g3d_info_widget',
      // widget name
      __('Contact info', 'g3d'),
      // widget description
      array('description' => __('Contact info widget', 'g3d'),)
    );
  }

  public function widget($args, $instance)
  {
    // Get ACF fields
    $tel = get_field('telefono', 'option');
    $tel_link = get_field('link_telefono', 'option');
    $email = get_field('email', 'option');
    $email_link = get_field('link_email', 'option');

    echo $args['before_widget'];
    echo '<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-hb-info-contact">';
    echo '<ul class="g3d-info-list">';
    echo '<li class="g3d-info-list__item">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>';
    echo '<a href=' . $tel_link . '>' . $tel . '</a>';
    echo '</li>';
    echo '<li class="g3d-info-list__item">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
    <path d="M3 7l9 6l9 -6"></path></svg>';
    echo '<a href=' . $email_link . '>' . $email . '</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo $args['after_widget'];
  }
}
