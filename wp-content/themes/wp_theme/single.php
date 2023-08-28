<?php get_header(); ?>

<div class="post-details">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php if(get_the_post_thumbnail()) : ?>
<?php the_post_thumbnail('large'); ?>
<?php endif; ?>
<h3><?php the_title(); ?></h3>
<?php the_content(); ?>
<?php //comments_template(); ?>
<?php //echo get_avatar(get_the_author_meta('ID'), 24); ?>
 <?php //the_author_posts_link(); ?>
<?php //the_category(', '); ?>
<?php //the_time('F j Y'); ?>



<?php endwhile; else : ?>
	<p><?php _e('Sorry. No content found.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>