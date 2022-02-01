<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>


        
        <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>

       <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->


    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">

                            <?php 
                                $top_bar_info = get_field('top_bar_info', 'option');
                                $top_bar_socials = get_field('top_bar_social', 'option');  
                            ?>
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo esc_html($top_bar_info['location']); ?></li>
                                        <li><i class="fas fa-envelope"></i><?php echo esc_html($top_bar_info['email']); ?></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social"> 
                                        <?php 
                                            foreach($top_bar_socials as $top_bar_social){
                                                ?>
                                                    <li><a href="<?php echo $top_bar_social['social_url'] ?>"><i class="<?php echo $top_bar_social['social_icon']['value'] ?>"></i></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="<?php echo site_url(); ?>">
                                    <?php 
                                        if(function_exists('buson_custom_logo')){
                                            the_custom_logo();
                                        }
                                    ?>
                                </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <?php 
                                            wp_nav_menu([
                                                'theme_location' => 'Primary'
                                            ]);
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

