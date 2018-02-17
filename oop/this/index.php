<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 20:34
 */

class Car {
    public $brand;
    public $speed;
    public $fuel;
    public $color = 'White';

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

echo '<pre>';

$car1 = new Car();
$car1->brand = 'Honda';
$car1->speed = 110;
$car1->fuel = 12;
echo '<BR> car1 time: '.$car1->tripTime(1000);
echo '<br>';
print_r($car1);


$car2 = new Car();
$car2->brand = 'Ford';
$car2->speed = 130;
$car2->fuel = 14;
$car2->color='Black';
echo '<BR> car2 time: '.$car2->tripTime(1000);
echo '<br>';
print_r($car2);



