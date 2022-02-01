<?php get_header(); ?>

    <!-- slider Area Start-->
    <?php get_template_part('template-parts/page-slider'); ?>
    <!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                         <?php the_title(); ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i>
                            <?php 
                                $Categories = get_the_category();
                                $Seperator = ' , ';
                                $result = ' ';

                                if($Categories){
                                    foreach($Categories as $Category){
                                        $result .= '<a href="' . get_category_link($Category -> term_id) . '">' . $Category -> cat_name . '</a>' . $Seperator;
                                    }

                                    echo trim($result , $Seperator);
                                }
                            ?>
                        </li>

                    
                        <li><a href="<?php echo get_comments_link() ?>"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                     </ul>
                        
                        <?php the_content(); ?>

                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                         <?php 
                            $prev = get_previous_post();
                            if(is_a($prev , 'WP_Post')):
                        ?>
                            <div
                            class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="<?php echo get_permalink($prev->ID) ?>">
                                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($prev->ID , 'thumbnail') ?>" alt="">
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="<?php echo get_permalink($prev->ID) ?>">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                </a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="<?php echo get_permalink($prev->ID) ?>">
                                    <h4><?php echo apply_filters('the_title',$prev->post_title); ?></h4>
                                </a>
                            </div>
                            </div>

                        <?php
                            endif;
                         ?>

                         <?php 
                            $next = get_next_post();
                            if(is_a($next,'WP_Post')):
                        ?>

                            <div
                            class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="<?php echo get_permalink($next->ID); ?>">
                                    <h4><?php echo apply_filters('the_title', $next->post_title); ?></h4>
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="<?php echo get_permalink($next->ID); ?>">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="<?php echo get_permalink($next->ID); ?>">
                                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($next->ID, 'thumbnail'); ?>" alt="">
                                </a>
                            </div>
                            </div>                        
                        <?php
                            endif;
                         ?>


                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                      <?php 
                        $author_id = $post->post_author;
                      ?>
                     <img src="<?php echo get_avatar_url($author_id); ?>" alt="">
                     <div class="media-body">
                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                           <h4><?php echo get_the_author_meta('display_name', $author_id); ?></h4>
                        </a>
                        <p><?php echo get_the_author_meta('user_description', $author_id); ?></p>
                     </div>
                  </div>
               </div>

                <!--Leave-comments-->
                <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <?php 
                            if(is_active_sidebar( 'sidebar-search' )){
                                dynamic_sidebar('sidebar-search');
                            }
                        ?>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>

                        

                        <ul class="list cat-list">
                        <?php 
                            if(is_active_sidebar( 'sidebar-1' )){
                                dynamic_sidebar('sidebar-1');
                            }
                        ?>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <?php 
                                if(is_active_sidebar( 'sidebar-recent-post' )){
                                    dynamic_sidebar('sidebar-recent-post');
                                }
                            ?>
                        </div>

                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <?php 
                                if(is_active_sidebar( 'sidebar-tag' )){
                                    dynamic_sidebar('sidebar-tag');
                                }
                            ?>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                            <?php 
                                if(is_active_sidebar( 'sidebar-insta' )){
                                    dynamic_sidebar('sidebar-insta');
                                }
                            ?>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        
                        <?php 
                            if(is_active_sidebar( 'sidebar-news' )){
                                dynamic_sidebar('sidebar-news');
                            }
                        ?>
                    </aside>
                </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<?php get_footer(); ?>