<?php
//WHEN THE USER CLICKS 'Next Round' OR WHEN THE GAME IS STARTED
$random_number =  mt_rand(1,131);
//GENERATE A RANDOM NUMBER BETWEEN 1 AND NUMBER OF RECORDS IN DB
include('scripts/queries.php');
//IF IT'S A NEW ROUND
if($_GET['page']=='newGame'){	
	//SORT OUT THE SCORE FROM THE PREVIOUS ROUND TO DISPLAY IN THIS ROUND
	if($_GET['round']=='next'){
		$_SESSION['country_array'] = $random_country;
		$_SESSION['num_tries'] = 1;
		$_SESSION['num_rounds']++;
		$_SESSION['all_rounds_score'] += $_SESSION['round_score'];
		$_SESSION['total_score'] = $_SESSION['all_rounds_score'] / $_SESSION['num_rounds'];
		$_SESSION['round_score'] = 100;
	//IF IT'S A NEW GAME
	}else{
	//SET THE SCORE TO ZERO AND REMEMBER THE TARGET COUNTRY FOR THIS ROUND
		$_SESSION['country_array'] = $random_country;
		$_SESSION['num_tries'] = 1;
		$_SESSION['num_rounds'] = 0;
		$_SESSION['total_score'] = 0;
		$_SESSION['round_score'] = 100;
		$_SESSION['all_rounds_score'] = 0;
	}
}
?>
