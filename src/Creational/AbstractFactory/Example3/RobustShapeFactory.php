<?php

namespace Src\Creational\AbstractFactory\Example3;

class RobustShapeFactory extends AbstractFactory
{
    public function createCurvedInstance(): AbstractCurvedShape
    {
        return new Ellipse();
    }

    public function createStraightInstance(): AbstractStraightShape
    {
        return new Rectangle();
    }
}