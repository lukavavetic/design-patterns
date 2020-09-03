<?php

namespace Src\Creational\FactoryMethod\Example3;

class Circle implements ShapeInterface
{
    public function draw(): string
    {
        return "Inside Circle::draw() method.";
    }
}