<?php
/*
	Template Name: Home Page
*/
get_header(); ?>

    <?php get_template_part('template-parts/content', 'lead'); ?>

    <?php get_template_part('template-parts/content', 'service'); ?>

    <hr class="border--primary">
    
    <?php get_template_part('template-parts/content', 'featured'); ?>

    <?php get_template_part('template-parts/content', 'cta'); ?>
	
<?php get_footer(); ?>
