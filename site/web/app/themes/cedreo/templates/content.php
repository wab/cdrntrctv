<article <?php post_class('excerpt'); ?>>
	<a href="<?php the_permalink(); ?>" class="thumb"><?php if (has_post_thumbnail()) {the_post_thumbnail('banner');} else {?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/thumb-2.jpg" alt="" /> <?php } ?></a>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part('templates/entry-meta'); ?>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
