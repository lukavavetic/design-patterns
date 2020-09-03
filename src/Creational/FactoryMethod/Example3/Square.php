<?php

namespace Src\Creational\FactoryMethod\Example3;

class Square implements ShapeInterface
{
    public function draw(): string
    {
        return "Inside Square::draw() method.";
    }
}