<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 16:38
 */

require_once 'DBConnection.php';

echo '<pre>';

$db = DBConnection::getInstance();

$result = $db->query('SELECT * FROM user')->fetch_all();

var_dump($result);

foreach ($result as $row) {
    foreach ($row as $item) {
        echo $item.' / ';
    }
    echo '<BR>';
}

echo '<HR>';

$result2 = $db->query('SELECT * FROM user');
$data = mysqli_fetch_all($result2, MYSQLI_ASSOC);

var_dump($data);

foreach ($data as $item) {
    echo $item['id'].' / '.$item['name'].' / '.$item['sex'].' / '.$item['age'].' / ';
    echo '<BR>';
}

