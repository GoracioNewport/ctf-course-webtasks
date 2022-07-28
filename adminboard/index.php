<html>

<form method="post">
	<input name="username" placeholder="username"/>
	<br>
	<input placeholder="password"/>
	<button type="submit"> Submit </button>
</form>

<?php

if ($_POST["username"]) {
	if ($_POST["username"] == "admin") echo "Wrong password! ";
	else {
		setcookie("auth", base64_encode($_POST["username"]));
		echo "Login succesful! ";
	}
}


if (base64_decode($_COOKIE["auth"]) == "admin") {
	echo "Nice to see you, admin! Here's your flag: gctf_you_shall_not_pass";
} else {
	echo "Hello. Only user 'admin' can access the flag!";
}



?>
</html>
