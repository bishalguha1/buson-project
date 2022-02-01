<?php 
    get_header();
?>

<!-- Breadcumb -->	
<div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>
                                <?php printf(
                                    esc_html__( 'Results for "%s"', 'buson' ),
                                    '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
                                );
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding">
        <div class="container">
            <div class="row">
                <?php 
                    $search = get_search_query();
                    $args = array(
                        's' => $search
                    );

                    $query = new WP_Query($args);

                    if($query->have_posts()){
                        while($query->have_posts()):
                            $query->the_post();
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
                    }else{
                        echo esc_html('Nothing to Show');
                    };
                ?>
            </div>
        </div>
    </div>

    <?php 
        get_footer();
    ?>