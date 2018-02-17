<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.02.2018
 * Time: 17:07
 */

require_once 'data.php';

foreach ($publications as $publication) {
//    echo '<br>В переменной $publication находится объект класса '.get_class($publication);
    $publication->printItem();
}

