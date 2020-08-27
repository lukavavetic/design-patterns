<?php

namespace Src\Creational\AbstractFactory\Example3;

abstract class AbstractFactory
{
    public static function getFactory(string $shape) : AbstractFactory
    {
        switch ($shape) {
            case ShapeEnum::SIMPLE:
                return new SimpleShapeFactory();
                break;
            case ShapeEnum::ROBUST:
                return new RobustShapeFactory();
                break;
        }
    }

    public abstract function createCurvedInstance() : AbstractCurvedShape;
    public abstract function createStraightInstance() : AbstractStraightShape;
}