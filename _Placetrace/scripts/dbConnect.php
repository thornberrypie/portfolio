<?php

$con = mysqli_connect($dbHost,$dbUser,$dbPass);
	if($con){
		mysqli_select_db($con, $dbName);
	}else{
		echo "ERROR : Unable to connect to database";
		exit;
	}
?>
