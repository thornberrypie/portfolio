<?php
/*THIS PAGE HANDLES ALL THE ADMIN REQUESTS TO CHANGE DB INFO AND DISPLAYS THE APPROPRIATE
CONTENT USING queries.php.*/
//SET CONTENT FOR HEADER
if(isset($_POST['submitLoginForm'])){
	$pWord = $_POST['password'];
	if($pWord == 'ptLogin9'){
		$_SESSION['loggedIn'] = 'yes';
	}
}
if($_SESSION['loggedIn'] == 'yes'){
	//INCLUDE TABLE FUNCTIONS
	include('scripts/tables.php');
	echo'
	<div id="main">';
	//SHOW THE LINKS FOR ADMIN OPTIONS
	if($_GET['page']=='adminHome'){?>
		<div id="adminHeader"><h2>Place-Trace Admin Page</h2></div>
		<div id="adminButtons">
			<ul id="adminList">
				<li><span class="button"><a href="index.php?area=admin&page=edit">Edit Country</a></span></li>
				<li><span class="button"><a href="index.php?area=admin&page=add">Add Country</a></span></li>
				<li><span class="button"><a href="#" onclick="tempMesg()">Delete Country</a></span></li>
				<li><span class="button"><a href="index.php?admin=logout">Sign Out</a></span></li>
			</ul>
		</div><?php 
	//IF NOT ON THE ADMIN HOME PAGE THEN SHOW BACK BUTTON
	}else{echo'
		<div id=adminHomeButton>
			<span class="button"><a href="index.php?area=admin&page=adminHome">Back</a></span>
		</div>';
	//THE VARIABLES USED IN THIS PAGE ARE SET IN queries.php
		require('scripts/queries.php');
	}
	//SHOW THE LIST OF COUNTRIES FOR ADMIN TO EDIT OR DELETE
	if($_GET['page']=='edit'){?>
		<div id="adminHeader">
			<h2>Place-Trace Admin Page</h2>
		</div>
		<div id="adminOption">
			<h4>Choose a country to edit</h4>
			<form method="post" action="index.php?area=admin&page=editCountry">
				<select id="adminSelect" name="adminSelect" size=9>
					<?php /*GET RESULTS OF THE QUERY TO DISPLAY COUNTRIES*/echo'
					<option value="'.$all_countries['country'].'">
						'.$all_countries['country'].'
					</option>';
						while($all_countries = mysql_fetch_array($result)){echo'
					<option value="'.$all_countries['country'].'">
						'.$all_countries['country'].'
					</option>';}?> 
				</select>
				<input id="adminCountryButton" type="submit" name="submit" value="Edit Country" />
			</form>
		</div><?php
	}
	//SHOW EMPTY TABLE FOR ADMIN TO FILL IN NEW ENTRY
	if($_GET['page']=="add"){ ?>
		<div id="adminButtons">
			<p>Enter new country's information then click 'Add' to submit</p>
			<form method="post" action="index.php?area=admin&page=addCountry">
				<table id="addCountryTbl"><?php
					addTable(); ?>
					<td></td><td><input type="submit" name="add" value="Add Country" /></td>
				</table>
			</form>
		</div><?php
	}
	//SHOW THE NEWLY ADDED DB INFO
	if(isset($_POST['add'])){ ?>
		<div id="adminButtons">
			<h4>A new country has been added to the databese!</h4>
			<table id="adminTable"><?php
				showTable(); ?>
			</table>
		</div><?php
	}
	//SHOW COUNTRY DETAILS USING editTable() WHEN ADMIN HAS SELECTED A COUNTRY TO EDIT
	if($_GET['page']=="editCountry"){ ?>
		<div id="adminButtons">
			<p>Enter new information then click update to change</p>
			<form method="post" action="index.php?area=admin&<?php echo'id='.$c_array['c_id'].'">'; ?>
			<table><?php
				editTable($c_array['country'],$c_array['language'],$c_array['capital'],$c_array['currency'],$c_array['area'],$c_array['population'],$c_array['image']); ?>
				<tr><td><input type="submit" name="change" value="Update" /></td>
				</tr>
			</table>
			</form>
		</div><?php
	}
	//DISPLAY THE ALTERED INFO USING showTable() ONCE ADMIN HAS FINISHED EDITING
	if(isset($_POST['change'])){ ?>
		<div id="adminButtons">
			<h4>Your change has been successful!</h4>
			<table id="adminTable"><?php
				showTable(); ?>
			</table>
		</div><?php
	}?>
		<div id="header">
			<img src="images/header.gif" alt="Place-Trace" />
		</div>
		<div id="adminPic">
			<img src="images/mountR.jpg" alt="mt Ruapehu" />
		</div>
	</div><?php
}else{
	echo'Incorrect Password!';
} ?>
