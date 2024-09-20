<?php

namespace My\Concrete;

use My\Abstract\Figure;

include_once 'Figure.php';

class Rectangle extends Figure
{
    public array $arr;
    public int $a;
    public int $b;
    public int $area;
    public int $perimeter;
    public function __construct($arr)
    {
        $this->arr = $arr;
        $this->a = $this->arr['RectangleData']['a'];
        $this->b = $this->arr['RectangleData']['b'];

    }
    public function calculateArea() : void
    {
        $this->area = $this->a * $this->b;
    }

    public function calculatePerimeter() : void
    {
        $this->perimeter = ($this->a + $this->b) * 2;
    }

    public function getFigureInfo() : void
    {
        echo "Площадь прямоугольника со сторонами a = $this->a, b = $this->b равна: " . $this->area . "<br>";
        echo "Периметр прямоугольника со сторонами a = $this->a, b = $this->b равна: " . $this->perimeter . "<br><br><br>";
    }
}