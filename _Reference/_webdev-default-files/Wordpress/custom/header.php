<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php global $page, $paged;
	wp_title( '|', true, 'right' ); bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) echo ' | '.$site_description; ?>
</title>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory') ?>/css/print.css" />
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory') ?>/js/html5.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory') ?>/css/ie.css" />
<![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory') ?>/css/ie6.css" /><![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/custom.js"></script>
</head>