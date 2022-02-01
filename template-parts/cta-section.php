<?php 
    $cta_info = get_field('cta_info' , 'option');
    $cta_form_shortcode = get_field('cta_form_shortcode' , 'option');

?>

    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="request-content">
                        <h3><?php echo esc_html($cta_info['cta_title']); ?></h3>
                        <p><?php echo esc_html($cta_info['cta_content']); ?></p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <!-- Contact form Start -->
                    <div class="form-wrapper">
                        <div id="contact-form">
                        <?php echo do_shortcode($cta_form_shortcode); ?>
                        </div>
                    </div>
                </div>     <!-- Contact form End -->
            </div>
        </div>
    </div>