<?php

$count = 0;
foreach ($_COOKIE as $cook) {
	$count = $count + 1;
}

if ($count >= 100) {
	echo "Я наелся! и довольный! Вот твой флаг: " . "gctf_pretty_saturated";
} 

else if ($count == 0) {
	echo "Я хочу кушать!!! Накорми меня!";
}	

else {
	echo "Очень хорошо! Но Я еще голоден! Хочу еще " . 100 - $count . " печенек.";
}
?>
