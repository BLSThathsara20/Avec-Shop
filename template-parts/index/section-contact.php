<!-- Contact Us Section Start -->
<div class="container my-5 ">
  <h2 class="main-title">Contact Us</h2>
  <div class="row pe-sm-1 pe-md-2 pe-lg-5 ps-sm-1 ps-md-2 ps-lg-5 pt-5">
    <div class="col-md-7 contact-shadow pt-5 ps-5 pe-5 pb-3">
      <div class="d-flex justify-content-between mb-4">

        <!-- Add Custom Logo -->
        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>

        <img width="60px" src="<?php echo (get_template_directory_uri()); ?>/assets/mail-box.png" alt="" />
      </div>
      <h3 class="fw-normal mb-4">Send us a message</h3>

      <!-- Add Contact Form 7 -->
      <?php echo apply_shortcodes('[contact-form-7 id="6" title="Contact form 1"]'); ?>

    </div>
    <div class="col-md-5 bg-primary-dark-color">
      <div class="contact-info p-5 contact-vector">
        <h3 class="text-white pb-5">Contact Information</h3>
        <div class="info ps-3">
          <div class="d-flex justify-content-start">
            <img class="contact-icon me-3" src="<?php echo (get_template_directory_uri()); ?>/assets/call.png" alt="">
            <p class="text-white">(888) 885-2239</p>
          </div>
          <div class="d-flex justify-content-start">
            <img class="contact-icon me-3" src="<?php echo (get_template_directory_uri()); ?>/assets/mail.png" alt="">
            <p class="text-white ">diane401k@virtuecm.com</p>
          </div>
          <div class="d-flex justify-content-start">
            <img class="contact-icon me-3" src="<?php echo (get_template_directory_uri()); ?>/assets/location-2.png" alt="">
            <p class="text-white">23046 Avenida De La Carlota<br />
              Suite 600<br />
              Laguna Hills, CA 92653</p>
          </div>
          <div class="d-flex mt-2">
            <a class="btn text-white fs-5" href="#"><i class="fa-brands fa-facebook-square"></i></a>
            <a class="btn text-white fs-5" href="#"><i class="fa-brands fa-instagram-square"></i></a>
            <a class="btn text-white fs-5" href="#"><i class="fa-brands fa-twitter"></i></a>
            <a class="btn text-white fs-5" href="#"><i class="fa-brands fa-youtube"></i></a>
            <a class="btn text-white fs-5" href="#"><i class="fa-brands fa-pinterest-square"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Us Section End -->