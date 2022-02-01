<?php get_header(); ?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center slider-img">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Case Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Services Details Start -->
        <div class="services-details section-padding2">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-12">
                        <div class="s-detailsImg">
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                        </div>
                    </div>
                    <div class="offset-xl-12">
                        <div class="s-details-caption">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>

                            <!-- btn -->
                        <?php 
                            $button_name = get_field('button_name', 'option');
                            $button_url = get_field('button_url', 'option');
                        ?>

                            <a href="<?php echo $button_url; ?>" class="btn red-btn"><?php echo $button_name; ?> <i class="ti-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>

    <?php get_footer(); ?>