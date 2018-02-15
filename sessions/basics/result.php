<?php

ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
session_start();

$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];

//print_r($_POST);

//$answer3 = $_POST['answer3'];
$answer3 = $_GET['answer3'];

//echo $answer3;

echo session_id();


if ($answer1 == 4 && $answer2 == 6 && $answer3 == 6) {
    echo '+';
} else {
    echo '-';
}



