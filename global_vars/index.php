<?php

echo '<pre>';

//echo 'Hello';



//print_r($_SERVER);

print_r($_SERVER['HTTP_USER_AGENT']);


print_r($_GET);

$a = $_GET['a'];


if (isset($_GET['submit'])) {
	// форма отправлена
}
