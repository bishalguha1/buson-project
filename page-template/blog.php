<?php
/* 
    Template Name: Blog  Template 
*/
get_header(); ?>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/page-slider'); ?>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    <?php 

                    $query_object = get_queried_object();
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $buson_post = new WP_Query(array(
                        'post_type' => 'post',
                        'order' => 'DESE',
                        // 'tax_query' => array(
                        //   array(
                        //     'taxonomy' => $query_object->taxonomy,
                        //     'field' => 'id',
                        //     'terms' => $query_object->term_id,
                        //   )
                        //   ),
                          'paged' => $paged
                    ));
                        if($buson_post->have_posts()):
                            while($buson_post->have_posts()):
                                $buson_post->the_post();
                    ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                                <?php 
                                    $post_day = get_the_time('d');
                                ?>
                                <a href="<?php echo esc_url(get_day_link(false, false, $post_day)) ?>" class="blog_item_date">
                                    <h3><?php echo get_the_date('j') ?></h3>
                                    <p><?php echo get_the_date('M') ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <?php the_excerpt(); ?>
                                <ul class="blog-info-link">
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
                            </div>
                        </article>

                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                        


                            <?php 
                            $pages = paginate_links( array( 
                                'type' => 'array',
                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                'total'        => $buson_post->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'buson' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'buson' ) ),
                                'add_args'     => false,
                                'add_fragment' => '',
                            ) );
                            if( $pages ) {
                            echo '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
                            foreach ( $pages as $page ) {
                                 echo "<li class='page-item'><span class='page-link'>$page</span></li>";
                            }
                            echo '</ul></nav>';
                       }
                       
                            ?>
                    </div>
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
    <!--================Blog Area =================-->

<?php get_footer(); ?>