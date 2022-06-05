<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avec_shop
 */

get_header();
?>

	<main id="primary" class="site-main">

    <?php get_template_part('template-parts/index/section','slider'); ?>
        <?php get_template_part('template-parts/index/section','functions'); ?>
        <?php get_template_part('template-parts/index/section','products'); ?>
        <?php get_template_part('template-parts/index/section','product-banner'); ?>
        <?php get_template_part('template-parts/index/section','why-we-choose'); ?>
        <?php get_template_part('template-parts/index/section','feedback'); ?>
        <?php get_template_part('template-parts/index/section','support'); ?>

	</main><!-- #main -->

<?php
get_footer();
