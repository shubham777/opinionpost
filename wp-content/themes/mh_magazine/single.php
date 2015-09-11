<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div class="mh-main">
		<div id="main-content" class="mh-content"><?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					mh_before_post_content();
					if (is_attachment()) {
						get_template_part('content', 'attachment');
					} else {
						get_template_part('content', 'single');
					}
					mh_after_post_content();
				endwhile;
				comments_template();
			endif; ?>
		</div>

		<?php get_sidebar();  ?>
		<script>
var s = document.createElement('script'); s.setAttribute('src','http://developer.quillpad.in/static/js/quill.js?lang=Hindi&key=2b58598a14c10aa96980f74bab845f6b'); s.setAttribute('id','qpd_script'); document.head.appendChild(s);
</script>
<span id="qpd_banner">Hindi Typing On This Site Is Powered By <a href="http://www.quillpad.in/" target="_blank">Quillpad</a>.</span>
	</div>
    <?php mh_second_sb(); ?>
</div>
<?php get_footer(); ?>