<?php

namespace Src\Creational\AbstractFactory\Example3;

class Rectangle extends AbstractStraightShape
{
    public function draw() : string
    {
        return "Rectangle ".$this->id." draw!";
    }
}