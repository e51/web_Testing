<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.2018
 * Time: 13:08
 */

// Format: dd-mm-yyyy
//$string = '21-11-2015';
//$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//$replacement = 'Month: $2, Day: $1, Year: $3';
//
//echo preg_replace($pattern, $replacement, $string);


//$string = 'murino2017/?PHPSESSID=4n6493ppjkrl3roo1ql09htpsd';
//$pattern = '~PHPSESSID=[a-zA-Z0-9]{1,}~';
//$replacement = '';
//
//echo $string;
//echo '<br>';
//
//echo preg_replace($pattern, $replacement, $string);


echo preg_replace('~\.\.~', '', '../../../file2');
//$string = '../../../file';
//$pattern = '/\.\./';
//$replacement = '';
//
//echo preg_replace($pattern, $replacement, $string);

exit();

$string = 'murino2017';
$pattern = '~([a-zA-Z0-9]+)~';
$path = 'web/index/$1';
$replacement = '';

echo $string;
echo '<br>';

//echo preg_replace($pattern, $path, $string);
$path = preg_replace($pattern, $path, $string);

echo '<br>';
echo $path;


$string = "'AND 1=1''' --";
echo $string;

echo addcslashes($string, "'");


