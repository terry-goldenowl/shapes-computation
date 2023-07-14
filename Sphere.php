<?php

include_once "./IO.php";
include_once "./Computation3D.php";

class Sphere implements IO, Computation3D
{
    private float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function in(): void
    {
        echo "Nhap thong tin hinh cau: " . PHP_EOL;
        $r_input = (float)readline("Do dai ban kinh: ");

        if (($r_input <= 0) ||
            (gettype($r_input) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return;
        }

        $this->r = $r_input;
    }

    public function out(): void
    {
        echo "Hinh cau: " . PHP_EOL;

        echo "Do dai ban kinh: " . $this->r;
    }

    public function findArea(): float
    {
        return 4 * M_PI * $this->r;
    }

    public function findVolume()
    {
        return 4 / 3 * M_PI * pow($this->r, 3);
    }
}
