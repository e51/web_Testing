<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2018
 * Time: 21:42
 */

class BaseClass {
    function __construct() {
        print "Конструктор класса BaseClass\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass\n";
    }
}

// Если в дочернем классе не определен конструктор, то он может унаследован от родительского класса как обычный метод (если он не был определен как приватный).
class OtherSubClass extends BaseClass {
    // наследует конструктор BaseClass
}

// Конструкторы, определенные в классах-родителях не вызываются автоматически, если дочерний класс определяет собственный конструктор.
class OtherSubClass2 extends BaseClass {
    // НЕ наследует и не вызывает конструктор BaseClass
    public function __construct() {
        print "Конструктор класса OtherSubClass2\n";
    }
}


// Как и в случае с конструкторами, деструкторы, объявленные в родительском классе, не будут вызываться автоматически.
// Для вызова деструктора родительского класса, требуется вызвать parent::__destruct() в теле деструктора дочернего класса.
// Подобно конструкторам, дочерний класс может унаследовать деструктор из родительского класса, если он не определен в нем.



echo '<pre>';

// Конструктор класса BaseClass
echo "new BaseClass():\n";
$obj = new BaseClass();
echo '<hr>';

// Конструктор класса BaseClass
// Конструктор класса SubClass
echo "new SubClass():\n";
$obj = new SubClass();
echo '<hr>';

// Конструктор класса BaseClass
echo "new OtherSubClass():\n";
$obj = new OtherSubClass();
echo '<hr>';

// Не наследует конструктор родителя
echo "new OtherSubClass2():\n";
$obj = new OtherSubClass2();
echo '<hr>';


