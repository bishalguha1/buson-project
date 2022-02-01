        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->


                            <?php 
                                $testimonial_query = new WP_Query(array(
                                    'post_per_page' => 9,
                                    'post_type' => 'testimonial'
                                ));

                               
                                

                                while($testimonial_query -> have_posts()):
                                    $testimonial_query->the_post();

                                    $testi_name = get_field('testi_name');
                                    $designation = get_field('designation');
                                    $star = get_field('star');
                            ?>

                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="<?php echo the_post_thumbnail_url('full'); ?>" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <?php the_content(); ?>
                                    <!-- Rattion -->
                                    

                                    <div class="testimonial-ratting">
                                        <img src="<?php echo $star['url']; ?>" alt="">
                                    </div>
                                    <div class="rattiong-caption">
                                        <span><?php echo $testi_name ?><span> - <?php echo $designation ?></span> </span>
                                    </div>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            ?>

                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->