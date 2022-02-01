<?php /* 
    Template Name: About  Template 
*/
get_header();
?>



    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/page-slider'); ?>

        <!-- slider Area End-->

        
        <!-- We trusted section -->
        <?php get_template_part('template-parts/about-section-part'); ?>

      
        <!-- Testimonial PArt -->
        <?php get_template_part('template-parts/testimonial-part'); ?>

        <!-- Recent News -->
        <?php get_template_part('template-parts/recent-news'); ?>

    </main>


    <?php get_footer(); ?>