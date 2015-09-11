
			<?php  get_header(); ?>
			<div class="separator">
				
			</div>
			<div id="post_container">
				<div id="left_part">
					<?php 
						if(have_posts()) :
							while(have_posts()): the_post(); ?>
						<div id="post-<?php the_ID() ?>">
  							<h2> <a href='<?php the_permalink(); ?>'> <?php the_title(); ?></a></h2>
						 	<div class="meta">
						 		<?php _e("Posted in "); ?> <strong><?php the_category(); ?> </strong>
						 		by <?php the_author(); ?> on  <?php the_time(); ?>
						 		<?php edit_post_link(__('Edit this')); ?>
						 		<div class="main">
						 		 <?php	the_content(__('more...')); ?>
						 		 <?php comments_template(); ?>
						 		</div>
						 	</div>
						 </div>
						<?php endwhile;
						     endif;
						 ?> 
				</div>
				  <?php get_sidebar(); ?>
				<div class="separator">
					
				</div>
				<?php get_footer(); ?>
			