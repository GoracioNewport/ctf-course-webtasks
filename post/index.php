<?php
echo "Welcome to the flag extractor 3000! ";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
	echo "I need a POST request!";
} else if ($_POST["admin"] != "true") {
	echo "'admin' parameter must be set to 'true'!";
} else if ($_SERVER["HTTP_REFERER"] != "http://google.com") {
	echo "You must refer to our site from http://google.com";
} else if ($_SERVER["HTTP_USER_AGENT"] != "LolKekBrowser") {
	echo "We only accept requests from LolKekBrowser"; 
} else if ($_COOKIE["session_id"] != "127") {
	echo "session_id cookie must be set to 127!";
} else {
	echo "You have done well. Here's your flag: gctf_that_was_annoying";
}


?>
