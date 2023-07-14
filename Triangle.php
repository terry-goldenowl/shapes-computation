<?php

include_once "./Polygon.php";

class Triangle extends Polygon
{
    private float $a;
    private float $b;
    private float $c;

    private function check(float $a, float $b, float $c): bool
    {
        if (($a <= 0 || $b <= 0 || $c <= 0) ||
            (gettype($a) != "double" || gettype($b) != "double" || gettype($c) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return 0;
        } else return 1;
    }

    public function __construct(float $a, float $b, float $c)
    {
        if ($this->check($a, $b, $c)) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        } else {
            return;
        }
    }

    public function in(): void
    {
        echo "Nhap do dai 3 canh tam giac: " . PHP_EOL;
        $a_input = (float)readline("Canh a: ");
        $b_input = (float)readline("Canh b: ");
        $c_input = (float)readline("Canh c: ");


        if ($this->check($a_input, $b_input, $c_input)) {
            $this->a = $a_input;
            $this->b = $b_input;
            $this->c = $c_input;
        }
    }

    public function out(): void
    {
        echo "Tam giac co do dai 3 canh la $this->a, $this->b, $this->c";
    }

    public function findPerimeter(): float
    {
        return $this->a + $this->b + $this->c;
    }

    public function findArea(): float
    {
        $semiPerimeter = $this->findPerimeter() / 2;

        return sqrt($semiPerimeter * ($semiPerimeter - $this->a) * ($semiPerimeter - $this->b) * ($semiPerimeter - $this->c));
    }
}
