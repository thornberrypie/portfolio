<?php
//Bootstrap Wordpress and execute query to retrieve posts
require_once( "../../../../wp-load.php" );
$args = array('numberposts' => $_GET['numposts']);
$posts = get_posts($args);

//Loop through post array building array for JSON
$pArray = array();
foreach($posts as $p) :	setup_postdata($post);
	array_push($pArray, array(
		'url' => get_permalink($p->ID),
		'title' => get_the_title($p->ID)
	));
endforeach;

//Encode JSON array and return it
$output = json_encode($pArray);
echo $output;
?>