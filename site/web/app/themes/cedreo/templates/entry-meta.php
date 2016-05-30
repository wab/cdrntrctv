<?php $categories = get_the_category(); ?>

<div class="meta">
	<?php if ( ! empty( $categories ) && ! is_single() ) : ?>
		<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="category cat-<?php echo esc_html( $categories[0]->term_id ); ?>"></a>
		<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M'); ?><br><?= get_the_date('y'); ?></time>
	<?php else : ?>
		<p>Publié le <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('d/m/y'); ?></time> dans 
		<?php $sep = '';
		foreach((get_the_category()) as $cat) {
		    echo $sep . '<a href="' . get_category_link($cat->term_id) . '"  class="cat-' . $cat->slug . '" title="View all posts in '. esc_attr($cat->name) . '">' . $cat->cat_name . '</a>';
		$sep = ', ';
		}
		?>
		</p>
		<hr>
	<?php endif;?>
	
</div>

