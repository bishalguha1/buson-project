        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
            <!-- Slider Custom Post Type -->
            <?php 
                $slider_cpt = array(
                    'post_type' => 'slider',
                    'post_per_page' => 3
                );
                $query = new WP_Query($slider_cpt);

                // Get custom field
                $btn_txt = get_field('button_text');

                while($query -> have_posts(  )):
                    $query -> the_post();
                ?>

                    <div class="single-slider slider-height d-flex align-items-center slider-img">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="hero__caption">
                                        <?php the_content(); ?>
                                        <h1><?php the_title(); ?></h1>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <a href="#" class="btn hero-btn"><?php the_field('button_text', esc_html($btn_txt)); ?></a>
                                        </div>
                                    </div>
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
        <!-- slider Area End-->