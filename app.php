<?php
spl_autoload_register(function ($class_name) {
    include_once $class_name . '.php';
});

// ĐA GIÁC
function pickPolygon(Polygon $p)
{
    $p->out();
    echo PHP_EOL;
    echo "Chu vi: " . $p->findPerimeter() . PHP_EOL;
    echo "Dien tich: " . $p->findArea() . PHP_EOL;
    echo PHP_EOL;
}


pickPolygon(new Triangle(3, 4, 5));
pickPolygon(new Rectangle(13, 4));
pickPolygon(new Circle(4.5));

// ----------------------------------------------------------------
// LĂNG TRỤ
function pickPolyhedra(Polyhedra $p)
{
    $p->out();
    echo PHP_EOL;
    echo "Dien tich xung quanh: " . $p->findArea() . PHP_EOL;
    echo "The tich: " . $p->findVolume() . PHP_EOL;
    echo PHP_EOL;
}

pickPolyhedra(new Pyramid(new Circle(5), 5));
pickPolyhedra(new Pyramid(new Square(5), 7));
pickPolyhedra(new Prism(new Triangle(5, 6, 8), 7));

// ----------------------------------------------------------------
// HÌNH CẦU
function pickSphere(Sphere $s) {
    $s->out();
    echo PHP_EOL;
    echo "Dien tich xung quanh: " . $s->findArea() . PHP_EOL;
    echo "The tich: " . $s->findVolume() . PHP_EOL;
    echo PHP_EOL;
}

pickSphere(new Sphere(4));