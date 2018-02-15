<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.02.2018
 * Time: 21:45
 */

//echo '<pre>';
//echo $_POST['name'];

//print_r($_SERVER);
//print_r($_POST);

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
	<title>index.php</title>
</head>
<body>
	<h1>index.php</h1>
	<a href="page.php">page.php</a>
	<br><br>
	<p>Hello, <?php echo $name; ?></p>

	<form method="post">
		<input type="text" name="name">
		<input type="submit">
	</form>

</body>
</html>

<?php
