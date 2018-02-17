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

    public function __construct($brand = 'Noname', $speed = 100, $fuel = 10, $color = 'White') {
        echo '<br>New object of class '.__CLASS__.' created';
        echo '<br>Method '.__METHOD__.' called';

        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
    }

    function __destruct() {
        echo '<br>Method '.__METHOD__.' called';
        echo '<br>object deleted';
    }

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

echo '<pre>';

$car1 = new Car('Honda', 110, 12, 'White');
print_r($car1);

unset($car1);
//$car1 = null;

$car2 = new Car('Ford', 130, 14, 'Black');
print_r($car2);

$car3 = new Car();
print_r($car3);


