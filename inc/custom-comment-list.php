<?php
if( ! function_exists( 'custom_comment_list' ) ):
function custom_comment_list($comment, $args, $depth) {
?>

<div class="comments-area">
    <h4>05 Comments</h4>
    <div class="comment-list" id="li-comment-<?php comment_ID() ?>">
        <?php if ($comment->comment_approved == '0') : ?>
            <em><?php esc_html_e('Your comment is awaiting moderation.','buson') ?></em>
        <br />
        <?php endif; ?>

        <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img src="<?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>" alt="">
            </div>
            <div class="desc">
                <p class="comment">
                    <?php 
                        comment_text( );
                    ?>
                </p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                    <h5>
                        <a href="#"><?php echo get_comment_author(); ?></a>
                    </h5>
                    <p class="date"><?php echo get_comment_date(); ?> </p>
                    </div>
                    <div class="reply-btn">
                    <a href="#" class="btn-reply text-uppercase">
                        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<i class="arrow_back"></i> reply'))) ?>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
}
endif;