<?php

include_once "./Polyhedra.php";

class Prism extends Polyhedra
{
    private float $height;

    public function __construct(Polygon $p, $height)
    {
        $this->base = $p;
        $this->height = $height;
    }

    public function in(): void
    {
        echo "Nhap thong tin hinh tru: " . PHP_EOL;
        echo "Nhap thong tin day:" . PHP_EOL;
        $this->base->in();

        $height_input = (float)readline("Nhap chieu cao: ");

        if (($height_input <= 0) ||
            (gettype($height_input) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return;
        }

        $this->height = $height_input;
    }

    public function out(): void
    {
        if ($this->base instanceof Circle) {
            echo "Hinh tru: ";
        } else {
            echo "Hinh lang tru: ";
        }
        echo "Thong tin day: ";
        $this->base->out();
        echo " | ";
        echo "Chieu cao: $this->height";
    }

    public function findArea(): float
    {
        $perimeter2Bases = 2 * $this->base->findArea();
        return $perimeter2Bases + 2 * $this->base->findPerimeter() * $this->height;
    }

    public function findVolume()
    {
        return $this->base->findArea() * $this->height;
    }
}
