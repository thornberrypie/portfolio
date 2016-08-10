<?php
$url = 'http://wp_scopevisio.loc/wp-content/themes/scopevisio/scripts/WP_ajax-latest-posts.php?numposts='.$_GET['numposts'];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$result = curl_exec($ch);

$arr = array($result);
echo json_encode($arr);
?>