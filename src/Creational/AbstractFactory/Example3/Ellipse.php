<?php

namespace Src\Creational\AbstractFactory\Example3;

class Ellipse extends AbstractCurvedShape
{
    public function draw() : string
    {
        return "Ellipse ".$this->id." draw!";
    }
}