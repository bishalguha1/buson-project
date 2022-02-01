<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
            <?php 
                $footer_lefts = get_field('footer_left', 'option');
                $footer_right = get_field('footer_right', 'option');
                $copyright_text = get_field('copyright_text', 'option');
            ?>

               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="<?php echo site_url(); ?>"><img src="<?php echo esc_html($footer_lefts['footer_logo']['url']); ?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo esc_html($footer_lefts['footer_description']); ?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php 
                                    foreach($footer_lefts['footer_social'] as $footer_left){
                                        ?>
                                            <a href="<?php echo $footer_left['footer_social_url'] ?>">
                                                <i class="<?php echo $footer_left['footer_social_icon'] ?>"></i>
                                            </a>
                                        <?php
                                    }

                                    
                                ?>
                                
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php echo esc_html('Company'); ?></h4>
                               <ul>
                                   <?php 
                                    if(is_active_sidebar( 'footer-2' )){
                                        dynamic_sidebar('footer-2');
                                    }
                                   ?>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php echo esc_html('Services'); ?></h4>
                               <ul>
                                   <?php 
                                    if(is_active_sidebar( 'footer-3' )){
                                        dynamic_sidebar('footer-3');
                                    }
                                   ?>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php echo esc_html('Get in Touch'); ?></h4>
                               <ul>
                                <li><a href="tel:<?php echo esc_html($footer_right['phone']); ?>"><?php echo esc_html($footer_right['phone']); ?></a></li>
                                <li><a href="mailto:<?php echo esc_html($footer_right['email']); ?>"> <?php echo $footer_right['email'] ?></a></li>
                                <li><a href="#"><?php echo esc_html($footer_right['address']); ?></a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><?php echo esc_html($copyright_text); ?></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>


        <?php wp_footer(); ?>
        
    </body>
</html>