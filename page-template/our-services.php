<?php /* 
    Template Name: Service  Template 
*/
get_header();
?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/page-slider'); ?>
        <!-- slider Area End-->

        
        <!-- services Area Start-->
        <?php get_template_part('template-parts/services-part'); ?>
        <!-- services Area End-->

        <!-- Recent News -->
        <?php get_template_part('template-parts/recent-news'); ?>

    </main>


    <?php get_footer(); ?>