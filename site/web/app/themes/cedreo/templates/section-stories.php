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
      <h2 class="cedreo-title"><span>Nos success</span> stories</h2>
      <div class="owl-carousel stories-carousel no-bullet contenu">

        <?php $i = 0; ?>

        <!-- the loop -->
        <?php while ( $story->have_posts() ) : $story->the_post(); ?>
        <?php $i++; ?>
          <div class="item text-center">
                <?php if(get_field('logo')): ?>
                <p><img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>"></p>
                <?php endif; ?>                          
                <p class="lead">
                  <?php if(get_field('prefix')) {?><span class="stat"><?php the_field('prefix'); ?></span><?php } ?>
                  <span class="stat" id="n<?php echo $i; ?>" data-number="<?php the_field('number'); ?>"><?php the_field('number'); ?></span><?php if(the_field('suffix')) {?><span class="stat"><?php get_field('suffix'); ?></span><?php } ?><br>
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
