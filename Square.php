<?php

include_once "./Polygon.php";

class Square extends Rectangle
{
    public function __construct(float $length)
    {
        if ($this->check($length, $length)) {
            $this->length = $length;
            $this->width = $length;
        }
    }

    public function in(): void
    {
        echo "Nhap do dai canh hinh vuong: " . PHP_EOL;
        $length_input = (float)readline("Do dai canh: ");

        if (($length_input <= 0) ||
            (gettype($length_input) != "double")
        ) {
            echo "Vui long nhap du lieu hop le!";
            return;
        }

        $this->length = $length_input;
        $this->width = $length_input;
    }

    public function out(): void
    {
        echo "Hinh vuong co do dai canh la $this->length";
    }
}
