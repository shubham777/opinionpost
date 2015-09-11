<?php 
 
 if(have_posts()) :
 	while(have_posts()): the_post(); ?>
 <a href='<?php the_permalink() ?>'  <?php the_title("<h1>", "</h1>", true); ?> </a> in <?php the_category(','); ?><br><br>
    <?php _e("Posted "); ?> by <?php the_author(); ?> at <?php the_date();?>
    <?php the_content(); ?>
     <?php comments_template(); ?> 
     <br>
 <?php  endwhile;
 endif; ?>
   