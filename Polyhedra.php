<?php

include_once "./Polygon.php";
include_once "./IO.php";
include_once "./Computation3D.php";

abstract class Polyhedra implements IO, Computation3D
{
    protected Polygon $base;

    // public function getBase(): Polygon {
    //     return $this->base;
    // }

    // public function setBase(): Polygon
    // {
    //     return $this->base;
    // }
}
