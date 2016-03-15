<footer class="content-info">
  <div class="row">
    <?php
	    if (has_nav_menu('footer_navigation')) :
	      wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'menu']);
	    endif;
	?>

	<ul class="menu">
		<li><a href="#">Twitter</a></li>
		<li><a href="#">Facebook</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">CGU</a></li>
		<li><a href="#">Mentions légales</a></li>
		<li><a href="#">Se connecter</a></li>
	</ul>

  </div>
  
</footer>
