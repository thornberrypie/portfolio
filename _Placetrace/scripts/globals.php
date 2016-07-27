<?php
$title="Place-Trace Home Page";
$description="test your geography knowledge, learn about countries and capitals of the world";
$keywords="game, fun, quiz, countries, world, capital, population, currency, language, area size";
$robots="index,follow";
$copyright="&copy;2006 Thornberry Pie";
$author="Graeme Thornber";

//Local DB Settings
$dbUser = "wp";
$dbPass = "wp123";
$dbName = "graemet";
$dbHost = "localhost";

//Define path to PlaceTrace
$ptLocalName="placetrace.loc";
$url = $_SERVER['SERVER_NAME'];
$ptPath = "/";

if(!$url || $url != $ptLocalName){
	$ptPath = "/placetrace/";
//Live DB Settings
	$dbUser = "thornberrypie";
	$dbPass = "thorgma25358grr30547_";
	$dbName = "thorgma25358com30547_";
	$dbHost = "mysql2.domains4less.net.nz";
}
?>