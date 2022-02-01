<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp_assign
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>



<!--widget-comments-->
<div class="widget mb-50">
	<div class="title">
		<?php 
			if(have_comments()):
				$comments_number = get_comments_number();
		?>
		<h5><?php echo $comments_number . ($comments_number === '1' ? ' comment' : ' comments'); ?></h5>
		<?php
			endif;
		?>
		
	</div>

	<!-- Get comment list from inc/custom-comment-list.php through callback -->
	<?php 
		wp_list_comments(
			array(
				'style'      => ' ',
				'short_ping' => true,
				'callback' => 'custom_comment_list'
			)
		);
	?>

	<!-- Comment pagination -->
	<?php 
		if(!comments_open()):
	?>
		<h4 class="comment-blank">
		<?php esc_html_e( 'Comments are closed.', 'campassign' ); ?>
		</h4>
	<?php
		endif;
	?>

	<!--Custom Comment form -->
	<?php 
		comment_form(array(
			
			'fields' => array(
				'author' => '<input class="form-control" name="name" id="name" type="text" placeholder="Name">',

				'email' => '<input class="form-control" name="email" id="email" type="email" placeholder="Email">',

				'url' => '<input class="form-control" name="website" id="website" type="text" placeholder="Website">'
			),
			'comment_field' => '<textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
            placeholder="Write Comment"></textarea>',

			'submit_button' => '<button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>',

			'class_form' => 'form-contact comment_form',

			'title_reply' => '<h4>Leave a Reply</h4>'

		));
	?>
</div>
