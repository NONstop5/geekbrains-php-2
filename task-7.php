<?php

class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A
{
}

$a1 = new A; // Это тоже самое, что new A()
$b1 = new B; // Это тоже самое, что new B()
// Поэтому тут отрабатывает все аналогично 6-му заданию
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
