<!-- Product Banner Start -->
<div class="container my-5 ">
  <div class="row">

  <!-- Product Filter Loop -->
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 2,
      'paged'          => $paged,
    );

    $counter = 1;
    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
      while ($loop->have_posts()) : $loop->the_post();

        $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
        $regular_price = get_post_meta(get_the_ID(), '_regular_price', true);
        $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
        $terms = get_the_terms($post->ID, 'product_cat');
        foreach ($terms as $term) {
          $product_cat_name = $term->name;
          $product_cat_id = $term->term_id;
          break;
        }

    ?>

        <div class="col-md-6 box-shadow-cust ps-4 pt-sm-4 pt-md-0">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6">
              <h2><?php the_title(); ?></h2>
              <div class="price">
                <p class="text-decoration-line-through m-0 text-start product-font product-sale-price-outer">
                  <span class="product-sale-price-inner">Rs.<?php echo $regular_price ?></span>
                </p>
                <p class="fs-5 m-0 text-start product-font">Rs.<?php echo $sale_price ?></p>
              </div>
              <div class="cart">
                <a class="mt-2 btn btn-primary-color text-white rounded-0" href="<?php echo get_permalink(wc_get_page_id('cart'))  . "?add-to-cart=" .  get_the_ID(); ?> " data-toggle="tooltip" data-placement="left" title="Add to cart">Add to Cart</a>
              </div>
            </div>
            <div class="col-md-6">
              <img class="img-thumbnail product-background border-0" src="<?php echo $image[0] ?>" alt="" />
            </div>
          </div>
        </div>
    <?php

        $counter++;

      endwhile;
    } else {
      echo __('No products found');
    } ?>
  </div>
  <!-- Product Banner End -->