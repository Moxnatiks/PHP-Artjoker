<?php

/*
Инкапсуляция
Агрегация, композиция


*/

abstract class Shape{
    abstract public function square();
    abstract public function perimetr();
}

class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function square(){
        return $this->width * $this->height;
    }

    public function perimetr(){
        return ($this->width + $this->height) * 2;
    }
}

class Circle extends Shape{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function square(){
        return M_PI * $this->radius * $this->radius;
    }

    public function perimetr(){
        return 2 * M_PI * $this->radius;
    }
}

function maxSquare(Shape $shape1, Shape $shape2): Shape {
    if($shape1->square() > $shape2->square()){
        return $shape1;
    }

    return $shape2;
}

$rectangle = new Rectangle(10, 4);
$circle = new Circle(100);

//var_dump(maxSquare($rectangle, $circle));

class A {
    public static $a;
    public static function f () {
        echo 999;
    }

    public function __destruct () {
        echo "D";
    }
}
A::$a = 4;
echo (A::$a);
A::f();