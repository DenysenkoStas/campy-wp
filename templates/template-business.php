<?php
/**
 * Template Name: Business Page
 */
get_header(); ?>

<?php
get_template_part( 'parts/main-section' ); // Main section
get_template_part( 'parts/submain-section' ); // Submain section
get_template_part( 'parts/info-section' ); // Info section
get_template_part( 'parts/testimonial-section' ); // Testimonial section
get_template_part( 'parts/cta-section' ); // CTA section
?>

<?php get_footer(); ?>
