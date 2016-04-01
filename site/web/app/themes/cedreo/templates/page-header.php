<?php 
	use Roots\Sage\Titles;
	use Roots\Sage\Breadcrumbs;
?>

<header class="page-header section" <?php if (has_post_thumbnail()) { ?>style="background-image: url(<?php the_post_thumbnail_url('banner'); ?>);"<?php } ?>>

  		<h1 class="page-title cedreo-title"><?= Titles\title(); ?></h1>
  		<?= Breadcrumbs\breadcrumbs(); ?>
 
</header>