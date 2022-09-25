<?php

// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень
class Main{
    private $num = 3;
    private $num1 = 5;

    public function getNum() :int
    {
        return $this->num;

    }
    public function setNum($value) {

        $this->num = $value;
    }

    public function getNum1() :int
    {
        return $this->num1;

    }
    public function setNum1($value) {

        $this->num1 = $value;
    }

    public function exponentiation() {
        return pow($this->num, $this->num1);
    }
}

$obj = new Main();
var_dump($obj->exponentiation());
echo '<br />';


// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым


class A extends Main {
    private $num2 = 19;

    public function getNum2() :int
    {
        return $this->num2;
    }
    public function setNum2($value)
    {
        $this->num2 = $value;
    }

    public function sum() :int {
        $num = $this->getNum();
        $num1 = $this->getNum1();

        return $this->num2 + $num + $num1;
    }
}

$a = new A;
var_dump($a->sum());
echo '<br />';

class B extends Main {
    private $num3 = 231;

    public function getNum3() : int {
        return $this->num3;
    }
    public function setNum3($value) {
        $this->num3 = $value;
    }

    public function subtraction() :int {
        $num = $this->getNum();
        $num1 = $this->getNum1();

        return $this->num3 - $num - $num1;
    }
}

$b = new B;
var_dump($b->subtraction());
echo '<br />';

class C extends B {
    private $num4 = 3;

    public function getNum4() : int
    {
        return $this->num4;
    }
    public  function setNum4($value)
    {
        $this->num4 = $value;
    }

    public function multiplications() :int {
        $num = $this->getNum();
        $num1 = $this->getNum1();
        $num3 = $this->getNum3();

        return $this->num4 * $num * $num1 * $num3;
    }
}

$c = new C;
var_dump($c->multiplications());
echo '<br />';


// 3) Создать по 2 наследника от наследников первого уровня
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством



class D extends A {
    private $num5 = 49;

    public function getNum5() :int
    {
        return $this->num5;
    }
    public function setNum5($value)
    {
        $this->num5 = $value;
    }

    public function sum() :int {
       $num2 = $this->getNum2();

        return $num2 * $this->num5;
    }

    public function sum2() :int {
        $num = $this->getNum();

        return $num * $this->num5;
    }
}

$d = new D;
var_dump($d->sum());
var_dump($d->sum2());
echo '<br />';


class E extends A {
    private $num6 = 14;

    public function getNum6() :int
    {
        return $this->num6;
    }
    public function setNum6($value)
    {
        $this->num6 = $value;
    }

    public function sum() :int {
        $num2 = $this->getNum2();

        return $num2 * $this->num6;
    }

    public function sum2() :int {
        $num = $this->getNum();

        return $num * $this->num6;
    }
}

$e = new E;
var_dump($e->sum());
var_dump($e->sum2());
echo '<br />';

class F extends B {
    private $num7 = 9;

    public function getNum7() :int
    {
        return $this->num7;
    }
    public function setNum7($value)
    {
        $this->num7 = $value;
    }

    public function sum() :int {
        $num3 = $this->getNum3();

        return $num3 * $this->num7;
    }

    public function sum2() :int {
        $num = $this->getNum();

        return $num * $this->num7;
    }
}

$f = new F;
var_dump($f->sum());
var_dump($f->sum2());
echo '<br />';

class G extends B {
    private $num8 = 192;

    public function getNum8() :int
    {
        return $this->num8;
    }
    public function setNum8($value)
    {
        $this->num8 = $value;
    }

    public function sum() :int {
        $num3 = $this->getNum3();

        return $num3 * $this->num8;
    }

    public function sum2() :int {
        $num = $this->getNum();

        return $num * $this->num8;
    }
}

$g = new G;
var_dump($g->sum());
var_dump($g->sum2());
echo '<br />';



