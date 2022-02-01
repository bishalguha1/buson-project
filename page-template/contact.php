<?php /* 
    Template Name: Contact  Template 
*/
get_header();
?>

<!-- ACF Field Get -->
<?php 
    $google_map_iframe = get_field('google_map_iframe' , 'option');
    $address_info = get_field('address_info' , 'option');
    $phone_info = get_field('phone_info' , 'option');
    $email_info = get_field('email_info' , 'option');
    $contactform_shortcode = get_field('contactform_shortcode' , 'option');

?>

    <!-- slider Area Start-->
    <?php get_template_part('template-parts/page-slider'); ?>
        <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <?php echo $google_map_iframe ; ?>
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-contact">
                            <?php echo do_shortcode($contactform_shortcode); ?>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3><?php echo $address_info['address']; ?></h3>
                                <p><?php echo $address_info['address_sub_title']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><?php echo $phone_info['phone']; ?></h3>
                                <p><?php echo $phone_info['phone_sub_title']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?php echo $email_info['email']; ?></h3>
                                <p><?php echo $email_info['email_sub_title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <!-- Request Back Start -->
    <?php get_template_part('template-parts/cta-section') ?>
    <!-- Request Back End -->
    
<?php get_footer(); ?>