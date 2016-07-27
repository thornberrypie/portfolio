<?php
//CONTAINS TABLES USED IN admin.php FOR EDITING DB CONTENT 
function showTable(){
	$country=$_POST['country']; $language=$_POST['language'];
	$capital=$_POST['capital']; $currency=$_POST['currency'];
	$area=$_POST['area']; $population=$_POST['population'];
	$image=$_POST['image'];echo'<tr>
	<td><em>Country:</em></td><td>'.$country.'</td></tr>
	<tr><td><em>Language:</em></td><td>'.$language.'</td></tr>
	<tr><td><em>Capital:</em></td><td>'.$capital.'</td></tr>
	<tr><td><em>Currency:</em></td><td>'.$currency.'</td></tr>
	<tr><td><em>Area:</em></td><td>'.$area.'</td></tr>
	<tr><td><em>Population:</em></td><td>'.$population.'</td></tr>
	<tr><td><em>Image:</em></td><td>'.$image.'</td></tr>';
}
function editTable($country,$language,$capital,$currency,$area,$population,$image){
	echo'
	<tr><td><em>Country:</em></td><td>
	<input name="country" type="text" value="'.$country.'" />
	</td></tr><tr><td><em>Language:</em></td><td>
	<input name="language" type="text" value="'.$language.'" />
	</td></tr><tr><td><em>Capital:</em></td><td>
	<input name="capital" type="text" value="'.$capital.'" />
	</td></tr><tr><td><em>Currency:</em></td><td>
	<input name="currency" type="text" value="'.$currency.'" />
	</td></tr><tr><td><em>Area:</em></td><td>
	<input name="area" type="text" value="'.$area.'" />
	</td></tr><tr><td><em>Population:</em></td><td>
	<input name="population" type="text" value="'.$population.'" />
	</td></tr><tr><td><em>Image:</em></td><td>
	<input name="image" type="text" value="'.$image.'" />
	</td></tr>';
}
function addTable(){echo'
	<tr><td><em>Country:</em></td><td>
	<input name="country" type="text" />
	</td></tr><tr><td><em>Language:</em></td><td>
	<input name="language" type="text" />
	</td></tr><tr><td><em>Capital:</em></td><td>
	<input name="capital" type="text" />
	</td></tr><tr><td><em>Currency:</em></td><td>
	<input name="currency" type="text" />
	</td></tr><tr><td><em>Area:</em></td><td>
	<input name="area" type="text" />
	</td></tr><tr><td><em>Population:</em></td><td>
	<input name="population" type="text" />
	</td></tr><tr><td><em>Image:</em></td><td>
	<input name="image" type="text" />
	</td></tr>';
}
?>
