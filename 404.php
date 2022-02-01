<?php 
    get_header();
?>


        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center slider-img">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo esc_html('Ops, 404 not found'); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="<?php echo esc_url(site_url());  ?>">
                        <button class="btn red-btn">Back to Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


<?php 
    get_footer();
?>