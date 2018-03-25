<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.03.2018
 * Time: 18:33
 */

$solution = new Solution();

$solution->method1();
$solution->method1('text');


class Solution {

    public function method1() {
        echo '<br>'.__FUNCTION__;
    }

}



class A {


}