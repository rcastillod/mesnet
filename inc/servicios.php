<?php

/* -------------------------------------------------------------------------- */
/*                   Shortcode hero slide                                     */
/* -------------------------------------------------------------------------- */
add_shortcode('plan_duo', 'mesnet_plan_duo');

function mesnet_plan_duo()
{
  ob_start();

  if (have_rows('hero_slider', 'option')) { ?>
    <!-- Hero SLider -->
    <div id="heroSlider" class="swiper hero-wrapper">
      <div class="swiper-wrapper">
        <?php
        while (have_rows('hero_slider', 'option')) : the_row();
          // Data Slider
          $bgImage = get_sub_field('imagen', 'option');
          $title   = get_sub_field('titulo', 'option');
          $content = get_sub_field('contenido', 'option');
          $link     = get_sub_field('link', 'option');
          $link2     = get_sub_field('link_2', 'option');
        ?>
          <div class="swiper-slide hero-slide" style="background-image: url(<?php echo $bgImage; ?>)">
            <div class="hero-slide__content">
              <h2 class="hero-slide__title"><?php echo $title; ?></h2>
              <p class="hero-slide__excerpt"><?php echo $content; ?></p>
              <div class="hero-slide__links btn-gradient">
                <?php
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="elementor-button hero-slide__link <?php echo $link2 ? 'hero-slide__link--transparent' : ''; ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
                <?php
                if ($link2) :
                  $link_url2 = $link2['url'];
                  $link_title2 = $link2['title'];
                  $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                ?>
                  <a href="<?php echo esc_url($link_url2); ?>" class="elementor-button hero-slide__link" target="<?php echo esc_attr($link_target2); ?>"><?php echo esc_html($link_title2); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-pagination hero-pagination"></div>
    </div>


<?php
    $myvariable = ob_get_clean();
    return $myvariable;
  }
}
