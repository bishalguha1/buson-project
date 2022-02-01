<div class="services-area section-padding2">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $service_query = new WP_Query(array(
                    'post_type' => 'service',
                    'post_per_page' => 6,
                    
                ));

                while($service_query->have_posts()):
                    $service_query->the_post();
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center">
                        <div class="services-icon">
                            <img src="<?php echo the_post_thumbnail_url('full') ?>" alt=""/>
                        </div>
                        <div class="services-caption">
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
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