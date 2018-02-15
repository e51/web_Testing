<?php

ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
session_start();

//$answer1 = $_POST['answer1'];
$answer1 = $_GET['answer1'];

$_SESSION['answer1'] = $answer1;

//print_r($_SESSION);

echo session_id();

?>

<p>Вопрос 2:</p>
<p>3 + 3 = ?</p>

<form action="task3.php" method="get">
    <input type="text" name="answer2">
    <input type="submit">
</form>
