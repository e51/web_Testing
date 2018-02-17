<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 19:07
 */

require_once '../singleton/DBConnection.php';

echo '<pre>';

$db = DBConnection::getInstance();

$result = $db->query('SELECT * FROM user');

echo 'affected rows:'.$db->affected_rows.'<BR>';
echo 'num rows: '.mysqli_num_rows($result).'<BR>';


//for ($i = 0; $i < mysqli_num_rows($result); $i++) {
//    print_r(mysqli_fetch_array($result));
//}


//while (($row = mysqli_fetch_array($result)) != false) {
//    print_r($row);
//}


if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row['name'].'<BR>';
    }
}

echo '<HR>';

//foreach ($row as $row) {
//    print_r($row);
//}


//mysqli_fetch_array