<?php

include_once "./Polygon.php";

class Circle extends Polygon
{
    private float $r;

    protected function check(float $r): bool
    {
        if (($r <= 0) ||
            (gettype($r) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return 0;
        } else return 1;
    }

    public function __construct(float $r)
    {
        if ($this->check($r)) {
            $this->r = $r;
        } else return;
    }

    public function in(): void
    {
        echo "Nhap thong tin hinh tron: " . PHP_EOL;
        $r_input = (float)readline("Do dai ban kinh: ");

        if ($this->check($r_input)) {
            $this->r = $r_input;
        }
    }

    public function out(): void
    {
        echo "Hinh tron co do dai ban kinh la $this->r";
    }

    public function findPerimeter(): float
    {
        return 2 * M_PI * $this->r;
    }

    public function findArea(): float
    {
        return M_PI * pow($this->r, 2);
    }
}
