<?php

namespace Src\Creational\FactoryMethod\Example3;

class ShapeFactory
{
    public function getShape(string $shapeType) : ShapeInterface
    {
        switch($shapeType) {
            case "CIRCLE":
                return new Circle();
                break;
            case "RECTANGLE":
                return new Rectangle();
                break;
            case "SQUARE":
                return new Square();
                break;
        }
    }
}