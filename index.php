<?php get_header(); ?>
       


    <main>

    <!-- slider Part -->
    <?php get_template_part('template-parts/slider-part'); ?>

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/about-section-part'); ?>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/services-part'); ?>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <?php get_template_part('template-parts/cta-section') ?>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <?php 
                            $home_case_section = get_field('home_case_section','option');
                        ?>
                        <div class="single-cases-info mb-30">
                            <h3><?php echo esc_html($home_case_section['section_title']); ?></h3>
                            <p><?php echo esc_html($home_case_section['section_desc']); ?></p>
                            <a href="<?php echo esc_url($home_case_section['button_url']); ?>" class="border-btn border-btn2"><?php echo esc_html($home_case_section['button_name']); ?></a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 

                            <?php 
                                $case_query = new WP_Query(array(
                                    'post_per_page' => 6,
                                    'post_type' => 'case'
                                ));

                                $dept = get_field('dept_name');

                                while($case_query -> have_posts()):
                                    $case_query -> the_post();
                                ?>

                                    <div class="single-cases-img">
                                        <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                                        <!-- img hover caption -->
                                        <div class="single-cases-cap">
                                                <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <?php the_content(); ?>
                                                <span><?php echo the_field('dept_name' , esc_html($dept)); ?></span>
                                        </div>
                                    </div>                                
                                <?php
                                wp_reset_postdata();
                                endwhile;
                            ?>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php 
                        $team_query = new WP_Query(array(
                            'post_per_page' => 4,
                            'post_type' => 'team'
                        ));
                        while($team_query -> have_posts()):
                            $team_query -> the_post();
                        ?>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <div class="single-profile mb-30">
                                <!-- Front -->
                                <div class="single-profile-front">
                                    <div class="profile-img">
                                        <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                                    </div>
                                    <div class="profile-caption">
                                        <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        wp_reset_postdata();
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial PArt -->
        <?php get_template_part('template-parts/testimonial-part'); ?>

        <!-- Recent News -->
        <?php get_template_part('template-parts/recent-news'); ?>
        

    </main>
   

    <?php get_footer(); ?>