<?php

//assert(true);
//assert(false);


//Создать абстрактный класс Figure в пространстве имен My\Abstract с методом вычисления площади
//и периметра, а также методом, выводящим информацию о фигуре на экран (Тип, площадь и периметр).
//Создать производные классы в пространстве имен My\Concerts\:Rectangle (прямоугольник), Circle (круг),
//Triangle (треугольник) со своими методами вычисления площади и периметра. Создать массив n фигур
//и вывести полную информацию о фигурах на экран.


namespace My;

include_once 'Geometry/Rectangle.php';
include_once 'Geometry/Circle.php';
include_once 'Geometry/Triangle.php';

use My\Concrete\Rectangle;
use My\Concrete\Circle;
use My\Concrete\Triangle;


$figuresArray =
    [
        'RectangleData' =>
            [
                'a' => 5,
                'b' => 10,
            ],
        'CircleData' =>
            [
                'r' => 15
            ],
        'TriangleData' =>
            [
                'a' => 5,
                'b' => 10,
                'c' => 15,
                'h' => 35
            ]
    ];

$someTriangle = new Triangle($figuresArray);
$someTriangle -> calculateArea();
$someTriangle -> calculatePerimeter();
$someTriangle -> getFigureInfo();


$someRectangle = new Rectangle($figuresArray);
$someRectangle -> calculateArea();
$someRectangle -> calculatePerimeter();
$someRectangle -> getFigureInfo();


$someCircle = new Circle($figuresArray);
$someCircle -> calculateArea();
$someCircle -> calculatePerimeter();
$someCircle -> getFigureInfo();