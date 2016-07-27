<?php session_start();
include('scripts/globals.php');
if(isset($_GET['comment']) && $_GET['comment'] == 'sent'){
	include('scripts/comment.php');
}
include('scripts/dbConnect.php');
include('scripts/header.php');echo'	
<body>';
if($_GET['area'] == 'play'){
	include('play.php');
}else if($_GET['area'] == 'admin'){
	include('admin.php');
}else{ ?>
	
	<div id="homeHeader">
			<img src="images/ptHeader.gif" alt="Place-Trace Geo Quiz" />
		</div>
	<div id="homeFrame">
	<div id="homeButtonRight">
		<a class="button" href="index.php?area=play&page=newGame">Play</a>
	</div><?php
	if($_GET['page'] == 'showLogin'){ ?>
		<div id="loginForm">
			<form method="post" name="loginForm" action="index.php?area=admin&page=adminHome">
				<span class="button">Login</span>
				<input type="password" name="password" />
				<input type="submit" name="submitLoginForm" value="Enter" />
			</form><br /><br />
			
		</div><?php
	}
	if($_GET['page']=='info'){?>
		<div id="homeButtonLeft"><span class="button"><a href="index.php">Home</a></span></div>
		<div id="homeImage">
			<h2>How To Play Place-Trace</h2>
			<ul id="gamePlayList"><li>
				Match the map outline with a country from the select menu.</li><li>
				Incorrect answers will give you clues which appear on the right.</li><li>
				The capital city appears as a dot on the map outline.</li><li>
				Images are not relative to actual size</li><li>
				At the end of each round, you can click on the country name for more info</li>
			</ul>
		</div>
	<?php }else{ ?>
		<div id="footer">
			<h1>Test your Geography knowledge and learn about your world</h1>
		</div>
		<div id="homeButtonLeft">
			<span class="button"><a href="index.php?page=info">How<br />To<br />Play</a></span><br /><br />
		</div>
		
		<div id="homeImage">
			<a href="index.php?area=play&page=newGame">
				<img src="images/world.jpg" alt="Place-Trace World Maps" />
			</a>
			<div id="loginLink">
				<a href="index.php?page=showLogin">.</a>
			</div>
		</div><?php
	}echo'
	</div>';
} /*
<div id="back2port"><a href="../index.php"><img src="../images/portfolioSS.jpg" alt="Back To Portfolio" /></a></div>*/
?>
</body></html>
