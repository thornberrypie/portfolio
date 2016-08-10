<header id="header">
	<div id="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</div>
	<hgroup id="heading">
		<h1><?php bloginfo( 'description' ); ?></h1>
	</hgroup>
	<nav id="navigation">
		<?php wp_nav_menu(array('menu'=>'Header')); ?>
	</nav>
</header>