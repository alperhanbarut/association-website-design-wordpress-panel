<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-navigation d-none d-xl-block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="website-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php
              $logo = ts("logo");
              if (!empty($logo['url'])): ?>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" class="image-fluid" />
              <?php endif; ?>
            </a>
          </div>
        </div>

        <div class="col-lg-6">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'main',
            'menu_class'     => 'site-navigation-menu',
            'container'      => false,
            'walker'         => new MyTheme_Navwalker()
          ));
          ?>
        </div>
      </div>
    </div>
  </header>