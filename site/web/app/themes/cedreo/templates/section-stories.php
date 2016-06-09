<?php 
// WP_Query arguments
$args_story = array (
  'post_type'              => array( 'story' ),
  'order'                  => 'DESC',
  'orderby'                => 'rand',
);

// The Query
$story = new WP_Query( $args_story );

?>

<?php if ( $story->have_posts() ) : ?>

  <!-- pagination here -->
  <section class="section stories">
    <div class="row column">
      <h2 class="cedreo-title"><span>Success</span> stories</h2>
      <div class="owl-carousel stories-carousel no-bullet contenu">

        <!-- the loop -->
        <?php while ( $story->have_posts() ) : $story->the_post(); ?>
          <div class="item text-center">
                <?php if(get_field('logo')): ?>
                  <p><img data-src="<?php the_field('logo'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onload="lzld(this)" alt="<?php the_title(); ?>"></p>
                <?php endif; ?>                          
                <p class="lead">
                  <div class="stat">
                  <?php if(get_field('prefix')) { the_field('prefix'); } ?>
                  <span class="counter" data-counterup-time="5200"><?php the_field('number'); ?></span>
                  <?php if(get_field('suffix')) { the_field('suffix'); } ?>
                  </div>
                  <?php the_field('description'); ?>
                </p>
          </div>
        <?php endwhile; ?>
        <!-- end of the loop -->
      </div>
      <div class="arrows">
        <a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
        <a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
      </div>
    </div>

  </section>

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php endif; ?>
