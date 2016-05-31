<?php 
// WP_Query arguments
$args_testimony = array (
  'post_type'              => array( 'testimony' ),
  'order'                  => 'DESC',
  'orderby'                => 'rand',
);

// The Query
$testimony = new WP_Query( $args_testimony );

?>

<?php if ( $testimony->have_posts() ) : ?>

  <!-- pagination here -->
  <section class="section temoignages ">
    <div class="row column">
      <h2 class="cedreo-title">Témoignages <span>Clients</span></h2>
      <div class="owl-carousel testimony-carousel no-bullet">

        <!-- the loop -->
        <?php while ( $testimony->have_posts() ) : $testimony->the_post(); ?>
          <div class="item">
            <blockquote>
              <div class="row">
                <?php if(has_post_thumbnail()): ?>
                <div class="columns medium-4"><?php the_post_thumbnail('testimony'); ?></div>
                <?php endif; ?>
                <div class="columns medium-8">
                  <?php the_content(); ?>
                  <cite><?php the_title(); ?><?php if(get_field('subtitle')) { echo ' // ' . the_field('subtitle'); } ?></cite>
                </div>
              </div>
              
            </blockquote>
            
            
          </div>
        <?php endwhile; ?>
        <!-- end of the loop -->
      </div>
    </div>
  </section>

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php endif; ?>