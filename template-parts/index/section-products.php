<!-- Product List Start -->
<div class="container ">
  <h2 class="mb-5 main-title">Our product</h2>
  <div class="product-list row">

    <!-- Product Filter Loop -->
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 4,
      'paged'          => $paged
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
        <div class="col-md-3">
          <div class="card text-center border-0">
            <div class="card-header border-0 bg-transparent  p-0 m-0">
              <h4 class="fw-normal"><?php the_title(); ?></h4>
            </div>
            <div class="card-body product-background  p-0 m-0">
              <img class="img-fluid" src="<?php echo $image[0] ?>" alt="" />
            </div>
            <div class="card-footer text-muted border-0 bg-transparent">
              <div class="d-flex justify-content-between align-items-center">
                <div class="price">
                  <p class="text-decoration-line-through m-0 text-start product-font product-sale-price-outer">
                    <span class="product-sale-price-inner">Rs.<?php echo $regular_price ?></span>
                  </p>
                  <p class="fs-5 m-0 text-start product-font">Rs.<?php echo $sale_price ?></p>
                </div>
                <div class="cart">
                  <a class="btn btn-primary-color text-white rounded-0" href="<?php echo get_permalink(wc_get_page_id('cart'))  . "?add-to-cart=" .  get_the_ID(); ?> " data-toggle="tooltip" data-placement="left" title="Add to cart">Add to Cart</a>
                </div>
              </div>
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
</div>
<!-- Product List End -->