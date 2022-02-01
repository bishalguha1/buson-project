<?php
/* 
    Template Name: Case  Template 
*/
get_header(); ?>

    <main>

    <!-- slider Area Start-->
    <?php get_template_part('template-parts/page-slider'); ?>
    <!-- slider Area End-->

        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <?php 
                        $case_query_obj = get_queried_object();
                        $case_query = new WP_Query(array(
                            'post_type' => 'case',
                            'posts_per_page' => 6,
                            'order' => 'DESE',
                            // 'tax_query' => array(
                            //     array(
                            //       'taxonomy' => $case_query_obj->taxonomy,
                            //       'field' => 'id',
                            //       'terms' => $case_query_obj->term_id,
                            //     )
                            // )
                        ));

                        if($case_query->have_posts()):
                            while($case_query->have_posts()):
                                $case_query->the_post();
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-cases-img  size mb-30">
                                <img src="<?php echo get_the_post_thumbnail_url($post,'full'); ?>" alt="">
                                <!-- img hover caption -->
                            <div class="single-cases-cap single-cases-cap2">
                                <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <?php the_content(); ?>
                            </div>
                            </div>
                        </div>                             
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
 
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

    </main>
 
<?php get_footer(); ?>