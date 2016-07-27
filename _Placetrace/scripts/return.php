<?php
/*
THIS SCRIPT DETERMINES WHAT TO DO ONCE THE USER HAS SELECTED A COUNTRY DURING GAME PLAY
$country_choice IS THE COUNTRY THE USER HAS SELECTED
$country IS THE HIDDEN TARGET THE USER IS AIMING FOR
$count INITIALLY HAS A VALUE OF ONE AND INCREASES EVERY TIME THE USER GUESSES WRONG
*/
session_start();
$country_choice = $_GET['action'];
$country = $_SESSION['country_array'];
$count = $_SESSION['num_tries'];
/*--------------------------------------------
IF THE USER GUESSES CORRECTLY THEN DISPLAY COUNTRY INFO
----------------------------------------------*/
if($country['country'] == $country_choice){
	echo'infoArea|<a href="javascript:popImage(\'http://en.wikipedia.org/wiki/'.$country['country'].'\')">
	<h3>'.$country['country'].'</h3></a>
	<h4>OFFICIAL LANGUAGE</h4><b class="answer">'.$country['language'].'</b>
	<h4>CAPITAL</h4><b class="answer">'.$country['capital'].'</b>
	<h4>CURRENCY</h4><b class="answer">'.$country['currency'].'</b>
	<h4>AREA(in sq ml)</h4><b class="answer">'.$country['area'].'</b>
	<h4>POPULATION</h4><b class="answer">'.$country['population'].'</b>'; ?>
	<style type="text/css">
		#guessRight{display:block;}
		#playMenu{display:none;}
		#playArea h2{display:none;}
		#nextRound{display:block;}
		#endRound{display:block;}
	</style><?php
/*-------------------------------------------------
	IF THE USER GUESSES WRONG THEN GIVE THEM A CLUE AND 
	SORT OUT THE SCORE THAT IS GIVEN AT END OF ROUND
---------------------------------------------------*/
}else if($country['country'] != $country_choice){
	switch($count){
		case 1:echo'population|<b class="answer">'.$country['population'].'</b>';
			$_SESSION['round_score']-=10;
			break;
		case 2:echo'area|<b class="answer">'.$country['area'].'</b>';
			$_SESSION['round_score']-=10;
			break;
		case 3:echo'currency|<b class="answer">'.$country['currency'].'</b>';
			$_SESSION['round_score']-=30;
			break;
		case 4:echo'capital|<b class="answer">'.$country['capital'].'</b>';
			$_SESSION['round_score']-=20;
			break;
		case 5:echo'language|<b class="answer">'.$country['language'].'</b>';
			$_SESSION['round_score']-=20;
			break;
		case 6:echo'countryName|<a href="javascript:popImage(\'http://en.wikipedia.org/wiki/'.$country['country'].'\')">
		<h3>'.$country['country'].'</h3></a>'; ?>
		<style type="text/css">
		#guessWrong{display:block;}
		#playMenu{display:none;}
		#playArea h2{display:none;}
		#nextRound{display:block;}
		#endRound{display:block;}
		</style><?php
		$_SESSION['round_score']=0;break;
	}
	$_SESSION['num_tries']++;
}
?>
