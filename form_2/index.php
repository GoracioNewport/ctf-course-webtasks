<html>
<form method="POST">
	<input name="password" placeholder="Admin password" />
	<button type="submit"> Submit </button>
</form>
<?php

if ($_POST["password"]) {
	if ($_POST["password"] == "1q2w3e") {
		echo "Welcome again. gctf_my_passwords_arent_so_original";
	} else {
		echo "Wrong password :)";
	}
} else {
	echo "Enter admin password to view the flag.";
}

?>
</html>
