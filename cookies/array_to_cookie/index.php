<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.2018
 * Time: 1:08
 */

echo '<pre>';

// исходный массив
$arr = ['name' => 'Семён', 'surname' => 'Петров', 'age' => 26];

// переводим в строку
//$str = serialize($arr);
$str2 = base64_encode(serialize($arr));

//print_r($str);
print_r($str2);

// устанавливаем строку в куку
setcookie('arr', $str2, time() + 3600);


