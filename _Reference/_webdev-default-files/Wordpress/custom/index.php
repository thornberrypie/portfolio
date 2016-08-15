<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="content"><?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
		else :
			get_search_form();
		endif; ?>
	</div>
	<?php include('global-elements.php'); ?>
</div>
</body>
</html>