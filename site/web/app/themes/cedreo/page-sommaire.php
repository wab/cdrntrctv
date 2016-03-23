<?php
/**
 * Template Name: Sommaire
 */
?>

<?php while (have_posts()) : the_post(); ?>
  	<header class="page-header section" style="background-image: url(https://unsplash.it/1850/250?random);">
		<div class="row column">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</header>
	<div class="section">
		<div class="row">
			<div class="columns large-6">
				<?php get_template_part('templates/content', 'page'); ?>
				<?php
				$children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' );
				if ( $children) : ?>
				    <ul class="menu vertical">
				        <?php echo $children; ?>
				    </ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
  	
<?php endwhile; ?>
