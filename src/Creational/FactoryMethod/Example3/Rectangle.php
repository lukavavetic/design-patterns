<?php

namespace Src\Creational\FactoryMethod\Example3;

class Rectangle implements ShapeInterface
{
    public function draw(): string
    {
        return "Inside Rectangle::draw() method.";
    }
}