<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.03.2018
 * Time: 14:01
 */

echo '<pre>';

date_default_timezone_set('Europe/Moscow');

$str1 = '2018-03-25 13:49:51';
$str2 = '2018-03-20 16:49:51';

$date1 = new DateTime($str1);
$date2 = new DateTime($str2);
$date3 = new DateTime();

$interval = $date1->diff($date3);

print_r($interval);

echo 'Days: '.$interval->days;

print_r($date3);

echo '<br>';

echo $date3->format('Y-m-d H:i:s');

//print_r($date);

