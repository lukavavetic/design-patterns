<?php

namespace Src\Creational\AbstractFactory\Example3;

class Circle extends AbstractCurvedShape
{
    public function draw() : string
    {
       return "Circle ".$this->id." draw!";
    }
}