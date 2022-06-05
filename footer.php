<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avec_shop
 */

?>

<footer id="colophon" class="pb-5">

	<!-- Footer Contact Section Liked -->
	<?php get_template_part('template-parts/index/section', 'contact'); ?>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- Connet Bootstrap script file -->
<script src="<?php echo (get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>