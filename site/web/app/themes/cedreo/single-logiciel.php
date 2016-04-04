
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<div class="section logiciels">
		<div class="row">
			<div class="columns large-6">
				<h2 class="cedreo-title"><?php the_field('subtitle'); ?></h2>
				<?php if(get_field('video_id')): ?>
					<div class="flex-video widescreen">
						<iframe type="text/html" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>?controls=0&color=white&theme=light" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php endif; ?>
			</div>
			<?php if(get_field('video_id')): ?>
			<div class="columns large-6 ">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<section class="section gallery">
		<div class="row column text-center">
			<h3 class="cedreo-title">Exemples de rendus réalisés grace à <span><?php the_title(); ?></span></h3>
			<?php if(get_field('txt_gallery')) { the_field('txt_gallery'); } ?>
			<?php 

			$images = get_field('galerie');
			$slide = 0;		


			if( $images ): ?>
			    <div class="owl-carousel gallery-carousel" data-slider-id="1">
		            <?php foreach( $images as $image ): ?>
		                <div class="item" data-thumb="">
		                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		                    <p><?php echo $image['caption']; ?></p>
		                </div>
		            <?php endforeach; ?>
			    </div>
			    <div class="owl-thumbs" data-slider-id="1">
		            <?php foreach( $images as $image ): ?>
		                <button class="owl-thumb-item"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></button>
		            <?php endforeach; ?>
			    </div>
			<?php endif; ?>
		</div>
	</section>

<?php endwhile; ?>