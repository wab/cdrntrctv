<footer class="content-info">
  <div class="row">
    <?php
	    if (has_nav_menu('footer_navigation')) :
	      wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'menu']);
	    endif;
	?>

	<ul class="menu">
		<li><a href="#"><i class="fa fa-twitter"></i> <span class="show-for-sr">Twitter</span></a></li>
		<li><a href="#"><i class="fa fa-facebook"></i> <span class="show-for-sr">Facebook</span></a></a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">CGU</a></li>
		<li><a href="#">Mentions légales</a></li>
		<li><a href="#"><span class="fa fa-sign-in"> </span> Se connecter</a></li>
	</ul>

  </div>
  
</footer>
