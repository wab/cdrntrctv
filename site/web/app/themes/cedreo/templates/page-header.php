<?php 
	use Roots\Sage\Titles;
	use Roots\Sage\Breadcrumbs;
?>
<div class="banshadow">
	<header class="page-header section" <?php if (has_post_thumbnail() ) { ?>style="background-image: url(<?php the_post_thumbnail_url('banner'); ?>);"<?php } ?>>

		<?php if ( is_page_template( 'page-logiciels.php' ) ) : ?>

  		<p class="h1 page-title cedreo-title"><?= Titles\title(); ?></p>

  		<?php else: ?>

  		<h1 class="page-title cedreo-title"><?= Titles\title(); ?></h1>
	
  		<?php endif; ?>

	</header>
</div>
<div class="column row">
	<?= Breadcrumbs\breadcrumbs(); ?>
</div>
