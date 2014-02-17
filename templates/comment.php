
<div class="media-body">
	<div class="comment-meta">
  		<span class="published">
			<time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?></a></time>
			<?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
		</span>
		<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
	</div>
	<?php echo get_avatar($comment, $size = '64'); ?> <span class="comment-author"><?php echo get_comment_author_link(); ?></span>
  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert alert-info">
      <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
    </div>
  <?php endif; ?>

  <div class="comment-text"><?php comment_text(); ?></div>