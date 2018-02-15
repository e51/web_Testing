<?php

ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
session_start();

//$answer2 = $_POST['answer2'];
$answer2 = $_GET['answer2'];

$_SESSION['answer2'] = $answer2;

print_r($_SESSION);

echo session_id();

?>

<p>Вопрос 3:</p>
<p>2 + 4 = ?</p>

<form action="result.php" method="get">
    <input type="text" name="answer3">
    <input type="submit">
</form>
