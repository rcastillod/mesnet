<?php

/* -------------------------------------------------------------------------- */
/*                   Shortcode Plan Duo                                       */
/* -------------------------------------------------------------------------- */
add_shortcode('plan_duo', 'mesnet_plan_duo');

function mesnet_plan_duo()
{
  ob_start();

  // Tab Group
  if (have_rows('planes_duo', 'option')) : ?>
    <div id="tabSliderDuo" class="swiper tabSlider tab__content-wrapper">
      <div class="swiper-wrapper">
        <?php
        while (have_rows('planes_duo', 'option')) : the_row();

          // Tab Repeater
          if (have_rows('planes', 'option')) :

            while (have_rows('planes', 'option')) : the_row();

              // Planes Data
              $speed            = get_sub_field('mb', 'option');
              $price            = get_sub_field('valor', 'option');
              $desc_internet    = get_sub_field('desc_internet', 'option');
              $desc_television  = get_sub_field('desc_television', 'option');
        ?>
              <div class="plan__wrapper swiper-slide">
                <div class="plan__header">
                  <div class="plan__speed"><?php echo $speed; ?></div>
                </div>
                <div class="plan__content">
                  <div class="plan__price"><span>$</span><?php echo $price; ?></div>
                  <div class="plan__internet">
                    <div class="title"><?php echo $desc_internet['titulo']; ?></div>
                    <div class="descripcion"><?php echo $desc_internet['descripcion']; ?></div>
                  </div>
                  <div class="plan__television">
                    <div class="title"><?php echo $desc_television['titulo']; ?></div>
                    <div class="descripcion"><?php echo $desc_television['descripcion']; ?></div>
                  </div>
                </div>
              </div>
        <?php
            endwhile;
          endif;
        endwhile;
        ?>
      </div>
      <div class="swiper-pagination tab-pagination"></div>
    </div>


  <?php
    $myvariable = ob_get_clean();
    return $myvariable;
  endif;
}

/* -------------------------------------------------------------------------- */
/*                   Shortcode Plan Internet                                  */
/* -------------------------------------------------------------------------- */
add_shortcode('plan_internet', 'mesnet_plan_internet');

function mesnet_plan_internet()
{
  ob_start();

  // Tab Group
  if (have_rows('planes_internet', 'option')) : ?>
    <div id="tabSlider" class="swiper tabSlider tab__content-wrapper">
      <div class="swiper-wrapper">
        <?php
        while (have_rows('planes_internet', 'option')) : the_row();

          // Tab Repeater
          if (have_rows('planes', 'option')) :

            while (have_rows('planes', 'option')) : the_row();

              // Planes Data
              $speed            = get_sub_field('mb', 'option');
              $price            = get_sub_field('valor', 'option');
              $desc_internet    = get_sub_field('desc_internet', 'option');
        ?>
              <div class="plan__wrapper swiper-slide">
                <div class="plan__header">
                  <div class="plan__speed"><?php echo $speed; ?></div>
                </div>
                <div class="plan__content">
                  <div class="plan__price"><span>$</span><?php echo $price; ?></div>
                  <div class="plan__internet">
                    <div class="title"><?php echo $desc_internet['titulo']; ?></div>
                    <div class="descripcion"><?php echo $desc_internet['descripcion']; ?></div>
                  </div>
                </div>
              </div>
        <?php
            endwhile;
          endif;
        endwhile;
        ?>
      </div>
      <div class="swiper-pagination tab-pagination"></div>
    </div>


<?php
    $myvariable = ob_get_clean();
    return $myvariable;
  endif;
}
