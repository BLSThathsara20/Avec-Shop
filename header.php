<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avec_shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?php echo the_title(); ?>" />
  <meta property="og:description" content="<?php echo $excerpt; ?>" />
  <meta property="og:type" content="shop" />
  <meta property="og:url" content="<?php echo the_permalink(); ?>" />
  <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
  <meta property="og:image" content="<?php echo $img_src; ?>" />

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php wp_head(); ?>
  <style>
    .carousel-indicators-circle1:hover,
    .carousel-indicators-circle1:active {
      border-radius: 50%;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #FFE49A;
    }
  </style>
</head>


<?php
$header_menu_id = get_menu_id('avec-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

?>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'avec-shop'); ?></a>

    <header id="masthead" class="site-header">
      <div class="site-branding bg-secondary-light-color">
        <div class="container">
          <div class="row d-flex align-items-center py-1">
            <div class="col-md-6 col-sm-12 responsive-content-start">
              <h3 class="fs-5 text-primary-color text-lg-start fw-normal">
                WELCOME TO OUR AVEC STORE!
              </h3>
            </div>
            <div class="top-bar-links col-md-6 col-sm-12 responsive-content-end">
              <div class="top-bar-selectors">
                <select class="form-select border-0 bg-transparent text-primary-color">
                  <option selected>USD</option>
                  <option value="1">LKR</option>
                </select>
              </div>
              <div>
                <a href="#" class="btn text-primary-color  pe-4">ENG</a>
              </div>
              <div class="top-bar-social-links">
                <ul class="navbar-nav d-flex flex-row">
                  <div class="bg-primary-color square rounded-circle m-2">
                    <li class="nav-item">
                      <a class="nav-link text-white rounded-circle" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                  </div>
                  <div class="bg-primary-color square rounded-circle m-2">
                    <li class="nav-item">
                      <a class="nav-link text-white rounded-circle p-2" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                  </div>
                  <div class="bg-primary-color square rounded-circle m-2">
                    <li class="nav-item">
                      <a class="nav-link text-white rounded-circle p-2" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="navbar navbar-expand-lg container">
        <div class="container-fluid d-flex align-items-center">

          <!-- Custom Logo -->
          <?php
          if (function_exists('the_custom_logo')) {
            the_custom_logo();
          }
          ?>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (!empty($header_menus) && is_array($header_menus)) {
            ?>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                foreach ($header_menus as $menu_item) {
                  if (!$menu_item->menu_item_parent) {

                    $child_menu_items = get_child_menu_items($header_menus, $menu_item->ID);
                    $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                    $link_target        = !empty($menu_item->target) && '_blank' === $menu_item->target ? '_blank' : '_self';

                    if (!$has_children) {
                ?>
                      <li class="nav-item">
                        <a class="nav-link text-black ps-3" href="<?php echo esc_url($menu_item->url); ?>" target="<?php echo esc_attr($link_target); ?>">
                          <?php echo esc_html($menu_item->title); ?>
                        </a>
                      </li>
                    <?php
                    } else {
                    ?>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?php echo esc_html($menu_item->title); ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                            <?php
                            foreach ($child_menu_items as $child_menu_item) {
                            ?>
                              <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>">
                                <?php echo esc_html($child_menu_item->title); ?>
                              </a>
                            <?php
                            }
                            ?>
                          </li>
                        </ul>
                      </li>
                    <?php
                    }

                    ?>


                <?php
                  }
                }
                ?>
              </ul>
            <?php
            }
            ?>
            <form class="d-flex" role="search">
              <button onclick="location.href='<?php echo (get_template_directory_uri()); ?>/my-account/'" type="button" class="btn border-0">
              LOGIN / REGISTER
              </button>
              <button onclick="location.href='<?php echo (get_template_directory_uri()); ?>/my-account/'" type="button" class="btn border-0">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/user-account.png" alt="" />
              </button>
              <button onclick="location.href='<?php echo (get_template_directory_uri()); ?>/cart/'" type="button" class="btn border-0">
                <img src="<?php echo (get_template_directory_uri()); ?>/assets/shopping-cart.png" alt="" />
              </button>
            </form>
          </div>
        </div>
      </nav><!-- #site-navigation -->

    </header><!-- #masthead -->