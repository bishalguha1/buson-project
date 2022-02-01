        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <?php 
                                $about_img = get_field('about_image' , 'option');
                                $about_title = get_field('about_title','option');
                                $about_content = get_field('about_content', 'option');
                                $button_name = get_field('button_name', 'option');
                                $button_slug = get_field('button_slug','option');

                                // For Development Purpose
                                // echo '<pre>';
                                // print_r($about_content);
                                // echo '</pre>';
                            ?>

                            <img src="<?php echo esc_html($about_img['url']);  ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php echo esc_html($about_title); ?></h2>
                           <p><?php echo esc_html($about_content); ?></p>
                           
                            <a href="<?php echo esc_html($button_slug); ?>" class="btn trusted-btn"><?php echo esc_html($button_name); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- We Trusted End-->