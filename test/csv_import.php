<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28.02.2018
 * Time: 11:16
 */

require_once '../databases/singleton/DBConnection.php';

$db = DBConnection::getInstance();
mysqli_set_charset($db, "utf8");


/*$data = file_get_contents('C:/dev/temp/sosed.csv');

echo '<pre>';
//echo $data;

$arr = explode('\r', $data);

print_r($arr);*/

echo '<pre>';

echo '<br>';
echo 5 % 10;

echo '<br>';
echo 3.4 % 10;

echo '<br>';
echo 34 % 10;

exit();



// Импорт данных в БД sosed.spb.ru из CSV-файла

$arr = array();

$handle = fopen('C:/dev/temp/sosed.csv', "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
//        echo 'Got line: '.$line;
        $arr[] = explode(';', $line);
    }

    fclose($handle);
} else {
    // error opening the file.
}

//print_r($arr);

foreach ($arr as $item) {
    $sql = sprintf("INSERT INTO user (userid, uservkid, userbuilding, usersection, userfloor, userflat, usertimestamp, userupdates, usercomplexid)
                            VALUES (%d, %d, %d, %d, %d, %d, '%s', %d, %d);", $item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7], 1);

//    echo $sql;

    $result = $db->query($sql);

    if (!$result) {
        echo '<br> Error insert data: '.$sql;
    }

}

exit();

