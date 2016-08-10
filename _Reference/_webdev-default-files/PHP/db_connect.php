<?php
$user = 'user';
$pass = 'pass';
$name = 'name';
$link = mysql_connect('localhost', $user, $pass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($name, $link);
if (!$db_selected) {
    die ('Can\'t use '.$name.' : ' . mysql_error());
}
$result = mysql_query("INSERT INTO Users(name,email) VALUES('GT','thornberrypie@gmail.com')");
mysql_close($link);
?>
