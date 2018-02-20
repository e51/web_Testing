<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.02.2018
 * Time: 11:15
 */

$string = 'Он закончил школу в 2000 году. Стал студентом в 2005.';
//$pattern = '/школу/';

//echo $result = preg_match('/школу/', $string);
//echo $result = preg_match('/200[5-9]/', $string);     // 2005 - 2009
//echo $result = preg_match('/200[0,3,9]/', $string);     // 2000, 2003, 2009

$string = 'Apples and oranges';

//echo $result = preg_match('/p{2}/', $string);     // pp - квантификаторы { }
//echo $result = preg_match('/p{3,5}/', $string);     // ppp, pppp, ppppp - {от 3х до 5ти}
echo $result = preg_match('/p{1,}/', $string);     // p, + - {от 1 и более}
echo $result = preg_match('/p+/', $string);     // p, + - {от 1 и более} - ТО ЖЕ, ЧТО И ВЫШЕ





