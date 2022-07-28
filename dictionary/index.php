<html>
<form method="GET">
	<input name="name" placeholder="Name"/>
	<button type="submit"> Submit </button>
</form>

<span> Get animals sounds for free! (Sorry, I had to put them in a txt file so just add a .txt extension to the form field...) 
<br>
Available animals: cat, dog, frog, bee
<br>
</span>
<?php

if ($_GET["name"]) {
	$s = $_GET["name"];
	if (strpos($s, './') !== false) {
		echo "Don't mess with the system! You're not allowed to view any secret files !!! >:(";
	} else {
		echo file_get_contents("./content/" . $s);
	}
}

?>

</html>
