<?php
$url = '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
	if($description){echo'<meta name="description" content="'.$description.'" />';}
	if($keywords){echo'<meta name="keywords" content="'.$keywords.'" />';}
	if($author){echo'<meta name="author" content="'.$author.'" />';}
	if($copyright){echo'<meta name="copyright" content="'.$copyright.'" />';}
	if($robots){echo'<meta name="robots" content="'.$robots.'" />';}echo'
	<title>'.$title.'</title>
	';?>
	<script type="text/javascript" src="scripts/JSfunctions.js" ></script>
	<link href="styles/main.css" type="text/css" rel="stylesheet" />
</head>
