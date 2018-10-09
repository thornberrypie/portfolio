<?php
include('scripts/playScript.php');
$theCountry = $_SESSION['country_array']['country']; ?>
<div id="playArea">
	<div id="playMenu">
		<h1>&lt;&nbsp;Which Country?</h1>
		<select id="countryMenu" size="13" onChange="country_choice=this.value;sendRequest(country_choice);"><?php echo'
			<option value="'.$all_countries['country'].'">'.$all_countries['country'].'</option>';
/*WHEN A PLAYER CLICKS ON A COUNTRY IN THE SELECT MENU THE COUNTRY NAME IS STORED IN
		$country_choice AND PASSED TO THE AJAX FUNCTION sendRequest IN JSfunctions.js
		THEN PICKED UP IN rpc.php TO BE DEALT WITH*/
			while($all_countries = mysqli_fetch_array($result)){
				echo'<option value="'.$all_countries['country'].'">
				'.$all_countries['country'].'</option>';
			} ?>
		</select>
	</div>
	<div id="playMap">
		<img src="mapOutlines/<?php echo $random_country['image'] ?>.gif" alt="Guess which country this is" />
		<sup>*Dot indicates capital city</sup>
	</div>
	<div id="playScore">
		<div id="scoreTable">
			<div class="row">
				<span class="label"><b>OVERALL SCORE:</b></span>
				<span class="value"><?php echo intval($_SESSION['total_score']) ?>%</span>
			</div>
			<div class="row">
				<span class="label"><b>ROUNDS PLAYED:</b></span>
				<span class="value"><?php echo $_SESSION['num_rounds'] ?></span>
			</div>
		</div>
	</div>
	<div id="endRound">
		<div id="guessRight">Correct!</div>
		<div id="guessWrong">It's <a href="javascript:popImage('http://en.wikipedia.org/wiki/<?php echo $theCountry ?>')">
			<?php echo $theCountry ?>!</a></div><br /><br />
		<a href="index.php?area=play&page=newGame&round=next"><span class="link">Next Round</span></a><br />
	</div>

</div>
<div id="gameFrame">
	<a href="index.php"><span class="button">Reset&nbsp;Game</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="index.php?page=info"><span class="button">How&nbsp;To&nbsp;Play</span></a>
</div>
<div id="infoArea">
	<div id="countryName"><h3>???????</h3></div>
	<h4>OFFICIAL LANGUAGE</h4><div id="language"><h5>???????</h5></div>
	<h4>CAPITAL</h4><div id="capital"><h5>???????</h5></div>
	<h4>CURRENCY</h4><div id="currency"><h5>???????</h5></div>
	<h4>AREA (in sq ml)</h4><div id="area"><h5>???????</h5></div>
	<h4>POPULATION</h4><div id="population"><h5>???????</h5></div>
</div>
<div id="playHeader">
	<a href="/"><img src="images/ptHeader.gif" alt="Place-Trace" /></a>
</div>
<div id="footer">
	<span>Created in 2006 by Graeme Thornber &copy;<?php echo date('Y') ?><br /><a href="http://www.graemethornber.com">www.graemethornber.com</a>
	<?php
	if(isset($_SESSION['comment'])){
		if($_SESSION['comment'] == 'sent'){ echo'
			<span>Your comment has been sent. Thanks!</span>';
		}else{ echo'
			<span>Please enter a comment.</span>';
		}
		unset($_SESSION['comment']);
	}else{
		//echo' | <a href="javascript:sendComment()">Send&nbsp;a&nbsp;comment&nbsp;about&nbsp;this&nbsp;site</a></span>';
	} ?>
</div>
