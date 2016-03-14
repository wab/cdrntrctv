<nav class="main-navigation">
	<div class="row">
		<div class="columns">
			<h2 class="menu-title">Les secteurs d'activité</h2>
			<ul class="menu vertical">
				<li class="nav-item"><a class="nav-link" href="#">Construction</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Mobilier / Aménagement maison</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Agencement d'espaces</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Immobilier</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Merchandasing</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Cuisine &amp; bain</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Architecure 3D</a></li>
			</ul>
		</div>
		<div class="columns">
			<h2 class="menu-title">Nos solutions logiciels</h2>
			<ul class="menu vertical">
				<li class="nav-item"><a class="nav-link" href="#">Configurateur 3D</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Logiciel d'agencement 3D</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Logiciel construction 3D</a></li>
			</ul>
		</div>
		<div class="columns">
			<h2 class="menu-title">Cedreo</h2>
			<ul class="menu vertical">
				<li class="nav-item"><a class="nav-link" href="#">L'entreprise &amp; l'équipe</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Nos méthodes</a></li>
				<li class="nav-item"><a class="nav-link" href="#">RSE</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Rejoignez-nous</a></li>
				<li class="nav-item"><a class="nav-link" href="#">On parle de nous</a></li>
			</ul>
		</div>
		<div class="columns small-12">
			<ul class="menu">
				<li class="nav-item"><a class="nav-link" href="#">L'actualité</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Nos réalisations</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Contactez-nous</a></li>
				<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook"></i></a></li>
			</ul>
		</div>
	</ul>
	<?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
  ?>

</nav>
