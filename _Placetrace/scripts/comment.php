<?php
$name = $_POST['name'];
$to = 'gdthornber@gmail.com';
$from = 'thornberrypie@gmail.com';
$contents = $_POST['contents'];
$subject = 'Place-Trace comment';
//$cleanFrom = mysql_real_escape_string($from);
//$cleanContents = mysql_real_escape_string($contents);

$fromHeader = 'From: '.$from;
if($contents != ''){
  $contents = "From:\r\n".$name."\r\n\r\n\r\nComment:\r\n".$_POST['contents'];
  //send mail - $subject & $contents come from surfer input
   mail($to, $subject, $contents, $fromHeader);
  // redirect back to url visitor came from
  $_SESSION['comment'] = 'sent';
  $redirect = $ptPath;
  if($_SERVER['HTTP_REFERER'] != ''){
  	$redirect = $_SERVER['HTTP_REFERER'];
  }
 
}else{
  $_SESSION['comment'] = 'noContents';
} 
 //Send user back to where they came from
$location = header('Location: '.$ptPath.'?area=play&page=newGame');

die();
 ?>
