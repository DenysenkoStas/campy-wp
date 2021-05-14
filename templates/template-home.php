<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<?php
//home_slider_template(); // Home page slider
get_template_part( 'parts/video-section' ); // Video section
get_template_part( 'parts/features-section' ); // Features section
get_template_part( 'parts/testimonial-section' ); // Testimonial section
get_template_part( 'parts/download-section' ); // Download section
?>

<?php get_footer(); ?>