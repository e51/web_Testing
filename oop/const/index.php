<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 21:11
 */

class Car {
    /*private*/ const WHEELS = 4;

    public function test() {
        echo Car::WHEELS;
        echo '<br>';
        echo self::WHEELS;
        self::staticTest();
    }

    public static function staticTest() {
        echo '<br>static method: '.__METHOD__.'';
        echo '<br>function: '.__FUNCTION__.'';
    }
}

class Bike {
    const WHEELS = 2;

    public function test() {
        echo Car::WHEELS;
        echo '<br>';
        echo self::WHEELS;
    }

}

//echo Car::WHEELS.'<br>';

//$car1 = new Car();
//$car1->test();

$bike1 = new Bike();
$bike1->test();

Car::staticTest();

