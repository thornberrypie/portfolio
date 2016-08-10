<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="content" class="page-content page-single"><?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		else :
			get_search_form();
		endif; ?>
	</div>
	<?php include('global-elements.php'); ?>
</div>
</body>
</html>