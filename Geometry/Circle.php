<?php

namespace My\Concrete;

include_once 'Figure.php';

use My\Abstract\Figure;


class Circle extends Figure
{
    public array $arr;
    public int $r;
    public int $area;
    public int $perimeter;
    public function __construct($arr)
    {
        $this->arr = $arr;
        $this->r = $this->arr['CircleData']['r'];
    }
    public function calculateArea() : void
    {
        $this->area = M_PI * pow($this->r, 2);
    }

    public function calculatePerimeter() : void
    {
        $this->perimeter = 2 * M_PI * $this->r;
    }

    public function getFigureInfo() : void
    {
        echo "Площадь круга с радиусом $this->r равна: " . $this->area . '<br>';
        echo "Периметр круга с радиусом $this->r равна: " . $this->perimeter . '<br><br><br>';
    }
}