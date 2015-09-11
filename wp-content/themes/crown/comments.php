<?php if ( $comments ): ?>
<ol id="commentlist">
  <?php foreach ($comments as $comment): ?>
    <li id="comment-<?php comment_ID() ?>">
    <?php comment_text(); ?>
    <p>
        <cite>
        <?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?>
        <?php _e('by') ?>
        <?php comment_author_link() ?> —
        <?php comment_date() ?> @
        <a href="#comment-<?php comment_ID() ?>">
        <?php comment_time() ?>
        </a>
        </cite>
        <?php edit_comment_link(__("Edit This"), ' |') ?>
    </p>
  <?php endforeach; ?>
</ol>
<?php else : ?>
<p><?php _e('No comments.'); ?></p>
<?php endif; ?>