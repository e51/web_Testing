<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.2018
 * Time: 13:08
 */

// Format: dd-mm-yyyy
$string = '21-11-2015';
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'Month: $2, Day: $1, Year: $3';

echo preg_replace($pattern, $replacement, $string);

