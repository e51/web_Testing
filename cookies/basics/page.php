<?php

/*
if (isset($_COOKIE['name'])) {
//    setcookie('name', '');     // удалить куку
    setcookie('name', 'sdas', time() - 3600);     // удалить куку
}
*/

if (isset($_POST['name']) && !empty($_POST['name'])) {

    $name = $_POST['name'];
//    setcookie('name', $name);     // по умолчанию - до конца сеанса
    setcookie('name', $name, time() + 3600);   // текущий timestamp + 3600с
} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = 'Гость';
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>page.php</title>
</head>
<body>
	<h1>page.php</h1>
	<a href="index.php">index.php</a>
	<br><br>
    <!--p>Hello, кука удалена</p-->
    <p>Hello, <?php echo $name; ?></p>

</body>
</html>


<?php

