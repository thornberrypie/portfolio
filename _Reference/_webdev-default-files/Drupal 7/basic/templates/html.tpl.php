<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
	<title><?php print $head_title; ?></title>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<meta name="keywords" content="<?php print META_KEYWORDS ?>" lang="<?php print $language->language; ?>" />
	<meta name="description" content="<?php print META_DESCRIPTION ?>" lang="<?php print $language->language; ?>" />
	<link rel="icon" href="<?php print THEME_PATH ?>/favicon.ico" type="image/ico" />
	<?php print $styles; ?>
	<link rel="stylesheet" href="<?php print THEME_PATH ?>/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" media="print" href="<?php print THEME_PATH ?>/css/print.css" type="text/css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 8]><link rel="stylesheet" href="<?php print THEME_PATH ?>/css/ie7.css" type="text/css" media="all" /><![endif]-->
	<!--[if lt IE 7]><link rel="stylesheet" href="<?php print THEME_PATH ?>/css/ie6.css" type="text/css" media="all" /><![endif]-->
	<?php print $scripts; ?>
	<script type="text/javascript" src="<?php print THEME_PATH ?>/js/jquery.cycle.min.js"></script>
	<script type="text/javascript" src="<?php print THEME_PATH ?>/js/custom.js"></script>
</head>
<body class="<?php print $classes; ?>">
  <?php print $page_top; ?>
  <div id="wrapper"><?php print $page; ?></div>
  <?php print $page_bottom; ?>
</body>
</html>
