<?php

namespace Src\Creational\AbstractFactory\Example3;

class Client
{
    public function run() : string
    {
        $factory = AbstractFactory::getFactory(ShapeEnum::ROBUST);

        $curvedShape = $factory->createCurvedInstance();
        $straightShape = $factory->createStraightInstance();

        return $straightShape->draw();
    }
}