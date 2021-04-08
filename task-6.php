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

$a1 = new A(); // Ничего. нам просто возвращается обьект
echo gettype($a1) . PHP_EOL; // Тут это видно
$b1 = new B(); // Ничего. нам просто возвращается обьект
echo gettype($b1) . PHP_EOL; // Тут это видно
$a1->foo(); // 1, т.к. сначала выполняется инкремент
$b1->foo(); // 1, т.к. e B1 сразу есть отнаследованный метод foo(), но static уже относится к классу B1 и $x снова = 0
$a1->foo(); // 2, т.к. сначала выполняется инкремент, а static относится к классу A1
$b1->foo(); // 2, т.к. т.к. static уже относится к классу B1
