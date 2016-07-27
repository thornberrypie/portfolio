<?php
/*QUERIES FOR ALL PAGES*/
//include('../db_connect/collaborart.php');
switch($_GET['page']){
//GET ALL COUNTRIES TO DISPLAY SELECT MENU
	case 'newGame':	
		$query = "SELECT country FROM tbl_countries ORDER BY country";
		$result = mysqli_query($con, $query);
		if(!$result){
			echo "error executing query ".mysqli_error($con);
		}else{
			$all_countries = mysqli_fetch_array($result);
		}
//SELECT A RANDOM COUNTRY FOR CURRENT ROUND
		$que = "SELECT * FROM tbl_countries WHERE c_id = ".$random_number.";";
		$res = mysqli_query($con, $que);
		if(!$res){
			echo "error executing query ".mysqli_error($con);
		}else{
			$random_country = mysqli_fetch_assoc($res);
		}
	break;
//WHEN ADMIN CLICKS EDIT OR DELETE GET LIST OF COUNTRIES TO DISPLAY
	case 'edit':	
		$query = "SELECT country FROM tbl_countries ORDER BY country";
		$result = mysqli_query($con, $query);
		if(!$result){
			echo "error executing query ".mysqli_error($con);
		}else{
			$all_countries = mysqli_fetch_array($result);
		}
	break;
//GET COUNTRY CHOSEN BY ADMIN AND PUT IT'S INFO INTO $c_array
	case 'editCountry':	
		$query="SELECT * FROM tbl_countries WHERE country = "."'".$_POST['adminSelect']."'".";";
		$result=mysqli_query($con, $query);
		if(!$result){
			echo "error executing query ".mysqli_error($con);
		}else{
			$c_array = mysqli_fetch_assoc($result);
		}
	break;
}
//CHANGE COUNTRY'S DETAILS WHEN ADMIN CLICKS Update AFTER ALTERING INFO 
if(isset($_POST['change'])){	
	$query="UPDATE tbl_countries SET country = '".$_POST['country']."',language = '".$_POST['language']."',
		capital = '".$_POST['capital']."',currency = '".$_POST['currency']."',area = '".$_POST['area']."',
		population = '".$_POST['population']."',image = '".$_POST['image']."'
		WHERE c_id = ".$_GET['id'].";";
	$result=mysqli_query($con, $query);
	if(!$result){
		echo'error executing query'.mysqli_error();
	}
}
//ADD NEW COUNTRY WHEN ADMIN CLICKS Add Country AFTER INSERTING NEW COUNTRY INFO
if(isset($_POST['add'])){
	$query="INSERT INTO tbl_countries 
	VALUES('','".$_POST['country']."','".$_POST['language']."','".$_POST['capital']."','".$_POST['currency']."','".$_POST['area']."','".$_POST['population']."','".$_POST['image']."');";
	$result=mysqli_query($con, $query);
	if(!$result){
		echo'error executing query'.mysqli_error();
	}
}
?>
