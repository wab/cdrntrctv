<footer class="content-info">
  
  <div class="row">
    
    <div class="column medium-6">
    	<?php
		    if (has_nav_menu('footer')) :
		      wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav-footer menu simple']);
		    endif;
		?>
    </div>

    <div class="column medium-4">
    	<ul class="menu simple">
    		<li><a href="#"><i class="fa fa-twitter"></i> <span class="show-for-sr">Twitter</span></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i> <span class="show-for-sr">Facebook</span></a></a></li>
    	</ul>
    </div>

	<div class="column medium-2">
		<?php
		    if (has_nav_menu('lg')) :
		      wp_nav_menu(['theme_location' => 'lg', 'menu_class' => 'menu simple']);
		    endif;
		?>
	</div>

  </div>
  
</footer>
