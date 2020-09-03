<?php

namespace Src\Creational\FactoryMethod\Example3;

class Client
{
    public function run()
    {
        $factory = new ShapeFactory();

        $circle = $factory->getShape("CIRCLE");

        print($circle->draw());
    }
}