<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.02.2018
 * Time: 18:15
 */


if (!true) {
    $a = 5;
}

echo $a;






exit();

$string = '/murino2017/e/verify/?api_url=https://api.vk.com/api.php&api_id=6119477&api_settings=1&viewer_id=6191031&viewer_type=4&sid=7f1974c328eaa8a67a6793c06ca5907e2bf7851eb090f1f5f77b8f67ddad2b766fab71657524d091f8020&secret=064ba62d04&access_token=e4e704a4fc13e41c288e626f3ee10103932382559718f7d0e9fd1676e4790e5a28bb9b9420b2997956b13&user_id=0&group_id=149737048&is_app_user=1&auth_key=75ef88cd86db340c0c7518b997779a18&language=0&parent_language=0&is_secure=1&ads_app_id=6119477_8b0fb0ef162064ce84&referrer=group&lc_name=289a860e&sign=ace77d79015a65087e50f2a0a17d31af5b028c92825ef498a3dfbea52d038c1a&hash="';
//$string = '/murino2017/e/verify/?api_url=https://api.vk.c';
$needle = '?';

$pos = strpos($string, $needle) + 1;

print_r($pos);

$string2 = substr($string, $pos);

echo '<pre>';
echo '<br>';
echo $string2;

print_r(parse_url($string));


foreach (explode('&', $string2) as $param) {

    $arr = explode('=', $param);

    echo '<br>'.$arr[0].' = '.$arr[1];



//    foreach ( as $value) {
////        echo '<br>' . $k . ' - ' . $v;
//        echo '<br>' . $value;
//        echo '<br>'.
//    }
}


echo '<br>---------<br>';



echo '<br>'.parse_url($string)['query'];

parse_str(parse_url($string)['query'], $arr);

$result = '';
foreach ($arr as $k => $v) {
    if ($k != 'sign' && $k != 'hash' && $k != 'api_result') {
        echo '<br>'.$k.' => '.$v;
        $result = $result.$v;
    } else {
        echo '<br>'.$k.' skipped';
    }
}

echo '<br>'.$result;


echo '<br>---------<br>';


$sign = '';

//foreach ($request->getParams() as $key => $param) {
foreach ($arr as $key => $param) {

    if ($key == 'hash' || $key == 'sign' || $key == 'api_result') continue;

    $sign .=$param;

}

echo '<br>'.$sign;

$secret = 'OZRYgijUdDkxlcv9Y1Ib';

$sig = $secret ? hash_hmac('sha256', $sign, $secret) : '';

echo '<br>'.$sig;
echo '<br>'.$arr['sign'];


