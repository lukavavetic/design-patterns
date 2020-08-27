<?php

namespace Src\Creational\AbstractFactory\Example3;

class SimpleShapeFactory extends AbstractFactory
{
    public function createCurvedInstance(): AbstractCurvedShape
    {
        return new Circle();
    }

    public function createStraightInstance(): AbstractStraightShape
    {
        return new Square();
    }
}