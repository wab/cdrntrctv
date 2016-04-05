<?php $categories = get_the_category(); ?>

<div class="meta">
	<?php if ( ! empty( $categories ) ) : ?>
	<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="category cat-<?php echo esc_html( $categories[0]->term_id ); ?>"></a>
	<?php endif;?>
	<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('F'); ?><br><?= get_the_date('d'); ?></time>
</div>

