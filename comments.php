<?php if ( post_password_required() ) {
	return;
} ?>

<?php
  $comment_args = array(
    'class_submit' => 'btn btn-default submit',
    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" class="form-control" cols="45" rows="4" aria-required="true" required="required"></textarea></p>',
    'fields' => array(
      )
  );
?>
	<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h5 class="comments-title">
        <?php
        printf( _nx( 'One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title'),
        	number_format_i18n( get_comments_number() ), get_the_title() );
        ?>
			</h5>
		<ul class="comment-list">
      <?php
      wp_list_comments( array(
      	'short_ping'  => true,
      	'avatar_size' => 50,
      ) );
      ?>
		</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
        <?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form($comment_args); ?>
	</div>
