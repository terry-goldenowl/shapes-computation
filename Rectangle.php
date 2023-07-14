<?php

include_once "./Polygon.php";

class Rectangle extends Polygon
{
    protected float $length;
    protected float $width;

    protected function check(float $width, float $height): bool
    {
        if (($width <= 0 || $height <= 0) ||
            (gettype($width) != "double" || gettype($height) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return 0;
        } else return 1;
    }

    public function __construct(float $length,float $width)
    {
        if ($this->check($length, $width)) {
            $this->length = $length;
            $this->width = $width;
        }
    }

    public function in(): void
    {
        echo "Nhap do dai hinh chu nhat: " . PHP_EOL;
        $length_input = (float)readline("Chieu dai: ");
        $width_input = (float)readline("Chieu rong: ");

        if ($this->check($length_input, $width_input)) {
            $this->length = $length_input;
            $this->width = $width_input;
        }
    }

    public function out(): void
    {
        echo "Hinh chu nhat co chieu dai la $this->length, chieu rong la $this->width";
    }

    public function findPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    public function findArea(): float
    {
        return $this->length * $this->width;
    }
}
