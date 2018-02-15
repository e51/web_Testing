<?php

// при отключенных куках (?):
//ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");

session_start();

echo session_id();
echo session_name();

?>

<p>Вопрос 1:</p>
<p>2 + 2 = ?</p>

<form action="task2.php" method="get">
    <input type="text" name="answer1">
    <input type="submit">
</form>

<a href="task2.php">task2.php</a>

