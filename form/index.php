<html>
<form method="POST">
	<input name="password" placeholder="Admin password" />
	<button type="submit"> Submit </button>
</form>
<?php

if ($_POST["password"]) {
	if ($_POST["password"] == "bruh") {
		echo "Welcome, admin. gctf_fastest_hands_in_the_west";
	} else {
		echo "Wrong password :)";
	}
} else {
	echo "Enter admin password to view the flag.";
}

?>
</html>
