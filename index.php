<?php get_header(); ?>

<!-- Sidebar Section -->
<?php get_template_part('template-parts/part', 'aside'); ?>
<!-- Main Section -->

<div id="betty-main">
    <?php get_template_part('template-parts/part', 'hero'); ?>

    <!-- About Us -->
    <?php get_template_part('template-parts/part', 'about'); ?>

    <!-- Our Team -->
    <?php get_template_part('template-parts/part', 'team'); ?>

    <!-- Services -->
    <?php get_template_part('template-parts/part', 'services'); ?>

    <!-- Makeup Services -->
    <?php get_template_part('template-parts/part', 'makeup'); ?>

    <!-- Testiominals -->
    <?php get_template_part('template-parts/part', 'testimonial'); ?>

    <!-- Blog -->
    <?php get_template_part('template-parts/part', 'blog'); ?>

    <!-- Contact -->
    <?php get_template_part('template-parts/part', 'contact'); ?>

    <!-- Brands -->
    <?php get_template_part('template-parts/part', 'brands'); ?>


    <!-- Footer -->
    <?php get_footer(); ?>