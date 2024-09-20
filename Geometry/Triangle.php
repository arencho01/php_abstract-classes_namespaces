<?php

namespace My\Concrete;

include_once 'Figure.php';

use My\Abstract\Figure;

class Triangle extends Figure
{
    public array $arr;
    public int $a;
    public int $b;
    public int $c;
    public int $h;
    public int $area;
    public int $perimeter;
    public function __construct($arr)
    {
        $this->arr = $arr;
        $this->a = $this->arr['TriangleData']['a'];
        $this->b = $this->arr['TriangleData']['b'];
        $this->c = $this->arr['TriangleData']['c'];
        $this->h = $this->arr['TriangleData']['h'];
    }

    public function calculateArea() : void
    {

        $this->area = $this->a * $this->h / 2;
    }

    public function calculatePerimeter() : void
    {
        $this->perimeter = $this->a + $this->b + $this->c;
    }

    public function getFigureInfo() : void
    {
        echo "Площадь треугольника со стороной $this->a и высотой $this->h равна: " .  $this->area . '<br>';
        echo "Периметр треугольника со сторонами a = $this->a, b = $this->b, c = $this->c равна: " . $this->perimeter . '<br><br><br>';
    }
}