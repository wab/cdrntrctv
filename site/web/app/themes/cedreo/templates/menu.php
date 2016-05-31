<nav class="main-navigation">
	<div class="menu-row">
		<?php if (has_nav_menu('secteurs')) : ?> 
		<div class="menu-section">
			
			<h2 class="subheader">Les secteurs d'activité</h2>
			
			<?php wp_nav_menu(['theme_location' => 'secteurs', 'menu_class' => 'menu vertical']); ?>
			
		</div> <!-- menu-section -->
		<?php endif; ?>

		<?php if (has_nav_menu('logiciels')) : ?> 
		<div class="menu-section">
			
			<h2 class="subheader">Nos solutions logicielles</h2>
			
			<?php wp_nav_menu(['theme_location' => 'logiciels', 'menu_class' => 'menu vertical']); ?>
			
		</div> <!-- menu-section -->
		<?php endif; ?>

		<?php if (has_nav_menu('cedreo')) : ?> 
		<div class="menu-section">
			
			<h2 class="subheader">Cedreo</h2>
			
			<?php wp_nav_menu(['theme_location' => 'cedreo', 'menu_class' => 'menu vertical']); ?>
			
		</div> <!-- menu-section -->
		<?php endif; ?>
		
		<div class="menu-section">
			<h2 class="subheader">Nous suivre</h2>
			<ul class="menu vertical">
				<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url') ?>/actualites"><i class="fa fa-newspaper-o"></i> L'actualité</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url') ?>/category/realisations"><i class="fa fa-picture-o"></i> Nos réalisations</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php bloginfo('url') ?>/contact"><i class="fa fa-envelope"></i> Contactez-nous</a></li>
			</ul>
			<hr>
			<ul class="reseaux">
				<li class="nav-item"><a class="nav-link" href="https://twitter.com/cedreo"><i class="fa fa-twitter"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="https://www.facebook.com/cedreointeractive"><i class="fa fa-facebook"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="https://www.instagram.com/cedreo_interactive"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div> <!-- menu-section -->
	</div> <!-- row -->
</nav>
