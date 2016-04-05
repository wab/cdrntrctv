<?php 
	$args_categories = array (
		'orderby'    => 'id',
        'show_count' => false,
        'title_li' => '',
        'exclude'    => array( 14 ),
        'show_option_all' => '<span class="show-for-sr">tous</span>'
	);
?>

<nav class="navigation-categories row columns">

	<ul class="menu-categories no-bullet">

	  <?php wp_list_categories( $args_categories ); ?> 

  	</ul>

</nav>
