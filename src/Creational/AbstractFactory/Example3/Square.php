<?php

namespace Src\Creational\AbstractFactory\Example3;

class Square extends AbstractStraightShape
{
    public function draw() : string
    {
        return "Square ".$this->id." draw!";
    }
}