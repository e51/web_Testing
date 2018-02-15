<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.2018
 * Time: 1:09
 */

if (isset($_COOKIE['arr'])) {
    $str = $_COOKIE['arr'];


//    print_r($str);

    // переводим строку из куки в массив
//    $arr = unserialize($str);
    $arr = unserialize(base64_decode($str));

    print_r($arr);


}


